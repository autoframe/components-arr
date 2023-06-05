<?php
declare(strict_types=1);

namespace Autoframe\Components\Arr;

use Autoframe\DesignPatterns\Singleton\AfrSingletonAbstractClass;

class AfrArrCollectionClass extends AfrSingletonAbstractClass implements AfrArrCollectionInterface
{
    use AfrArrCollectionTrait;
}