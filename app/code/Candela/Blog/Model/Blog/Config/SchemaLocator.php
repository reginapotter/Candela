<?php


namespace Candela\Blog\Model\Blog\Config;

use Magento\Framework\Config\Dom\UrnResolver;
use Magento\Framework\Config\SchemaLocatorInterface;

/**
 * Class
 */
class SchemaLocator implements SchemaLocatorInterface
{
    /** @var UrnResolver */
    private $urnResolver;

    public function __construct(UrnResolver $urnResolver)
    {
        $this->urnResolver = $urnResolver;
    }

    /**
     * @return string|null
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function getSchema()
    {
        return $this->urnResolver->getRealPath('urn:candela:module:Candela_Blog:etc/blog.xsd');
    }

    /**
     * Get path to pre file validation schema
     *
     * @return null
     */
    public function getPerFileSchema()
    {
        return null;
    }
}
