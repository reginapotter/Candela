<?php

declare(strict_types=1);



namespace Candela\Blog\Model\ResourceModel\Posts\Save;

use Candela\Blog\Model\Posts;

interface SavePartInterface
{
    public function execute(Posts $model): void;
}
