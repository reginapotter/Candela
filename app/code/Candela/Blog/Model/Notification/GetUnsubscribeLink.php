<?php

declare(strict_types=1);



namespace Candela\Blog\Model\Notification;

use Magento\Framework\Event\ManagerInterface as EventManager;
use Magento\Framework\DataObject;

class GetUnsubscribeLink
{
    /**
     * @var EventManager
     */
    private $eventManager;

    public function __construct(
        EventManager $eventManager
    ) {
        $this->eventManager = $eventManager;
    }

    public function execute(string $email): string
    {
        $transportObject = new DataObject(
            [
                'type' => Notification::NOTIFICATION_TYPE,
                'email' => $email
            ]
        );
        $this->eventManager->dispatch(
            'candela_get_unsubscribe_link',
            [
                'transport_object' => $transportObject
            ]
        );

        return $transportObject->getData('link') ?: '';
    }
}
