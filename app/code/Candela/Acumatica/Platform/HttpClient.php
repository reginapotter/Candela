<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Platform;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\MessageFormatter;
use Monolog\Logger;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Formatter\LineFormatter;
use Psr\Log\LogLevel;
use Psr\Http\Message\ResponseInterface;
use Magento\Framework\App\Filesystem\DirectoryList;

class HttpClient
{
    const DEFAULT_LOG_FILE_NAME = 'log/acumatica.log';
    const DEFAULT_LOG_LINE_FORMAT = "[%datetime%] %channel%.%level_name%: %message%\n";
    const DEFAULT_LOG_MESSAGE_FORMAT = "{method} - {uri}\nRequest body: {req_body}\nResponse: {code} {phrase}\nResponse body: {res_body}\n{error}\n";

    /**
     * @var \GuzzleHttp\Client
     */
    private $client;

    /**
     * @var \GuzzleHttp\HandlerStack
     */
    private $handlerStack;

    /**
     * @var \Magento\Framework\Serialize\Serializer\Json
     */
    private $serializeJson;

    /**
     * @var \Magento\Framework\App\Filesystem\DirectoryList
     */
    private $directoryList;

    /**
     * @param \Magento\Framework\Serialize\Serializer\Json $serializeJson
     * @param \Magento\Framework\App\Filesystem\DirectoryList $directoryList
     */
    public function __construct(
        \Magento\Framework\Serialize\Serializer\Json $serializeJson,
        \Magento\Framework\App\Filesystem\DirectoryList $directoryList
    ) {
        $this->serializeJson = $serializeJson;
        $this->directoryList = $directoryList;
        $this->handlerStack = $this->createHandlerStack();
        $this->client = new Client(
            [
                'handler'  => $this->handlerStack,
                RequestOptions::HTTP_ERRORS => false,
                'cookies' => true
            ]
        );
    }

    /**
     * @return \GuzzleHttp\HandlerStack
     */
    private function createHandlerStack(): \GuzzleHttp\HandlerStack
    {
        return HandlerStack::create();
    }

    /**
     * @param string|null $lineFormat
     * @param string|null $messageFormat
     * @return void
     */
    public function addDefaultLogger($lineFormat = null, $messageFormat = null): void
    {
        $fileName = $this->getLogFilename();
        $lineFormat = $lineFormat ?: static::DEFAULT_LOG_LINE_FORMAT;
        $messageFormat = $messageFormat ?: static::DEFAULT_LOG_MESSAGE_FORMAT;
        $logHandler = new RotatingFileHandler($fileName);
        $logHandler->setFormatter(new LineFormatter($lineFormat, null, true));
        $this->addLogger(new Logger('Logger', [$logHandler]), new MessageFormatter($messageFormat));
    }

    /**
     * @return string
     */
    private function getLogFilename(): string
    {
        $varDir = $this->directoryList->getPath(DirectoryList::VAR_DIR);
        return $varDir . DIRECTORY_SEPARATOR . ltrim(static::DEFAULT_LOG_FILE_NAME, DIRECTORY_SEPARATOR);
    }

    /**
     * @param \Psr\Log\LoggerInterface $logger
     * @param \GuzzleHttp\MessageFormatter $messageFormatter
     * @return $this
     */
    public function addLogger(\Psr\Log\LoggerInterface $logger, \GuzzleHttp\MessageFormatter $messageFormatter): \Candela\Acumatica\Platform\HttpClient
    {
        $this->handlerStack->push(
            $this->createMiddlewareLogCallback($logger, $messageFormatter),
            'logger'
        );
        return $this;
    }

    /**
     * @param \Psr\Log\LoggerInterface $logger
     * @param \GuzzleHttp\MessageFormatter $messageFormatter
     * @return callable
     */
    private function createMiddlewareLogCallback(\Psr\Log\LoggerInterface $logger, MessageFormatter $messageFormatter)
    {
        return Middleware::log($logger, $messageFormatter, LogLevel::DEBUG);
    }

    /**
     * @param string $uri
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function get(string $uri): ResponseInterface
    {
        return $this->client->get($uri);
    }

    /**
     * @param string $uri
     * @param array|null $postData
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function put(string $uri, array $postData = null): ResponseInterface
    {
        return $this->client->put($uri, $this->buildRequestOptions($postData));
    }

    /**
     * @param string $uri
     * @param array|null $postData
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function post(string $uri, array $postData = null): ResponseInterface
    {
        return $this->client->post($uri, $this->buildRequestOptions($postData));
    }

    /**
     * @param \Candela\Acumatica\Platform\string $uri
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function delete(string $uri): ResponseInterface
    {
        return $this->client->delete($uri);
    }

    /**
     * @param array|null $postData
     * @return array
     */
    private function buildRequestOptions(array $postData = null): array
    {
        $options = [];
        if (!empty($postData)) {
            $options[RequestOptions::JSON] = $postData;
        }
        return $options;
    }

    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     * @return array|null
     * @throws \Exception
     */
    public function readResponse(ResponseInterface $response): ?array
    {
        if ($response->getStatusCode() >= 300) {
            throw new \Exception($response->getReasonPhrase() . ': ' . $response->getStatusCode() . '. ' . (string)$response->getBody());
        }
        $body = (string)$response->getBody();
        return !empty($body) ? $this->serializeJson->unserialize($body) : null;
    }
}
