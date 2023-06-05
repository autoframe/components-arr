<?php
declare(strict_types=1);

namespace Autoframe\Components\Arr\Sort;

use Autoframe\DesignPatterns\Singleton\AfrSingletonAbstractClass;

class AfrArrXSortClass extends AfrSingletonAbstractClass implements AfrArrXSortInterface
{
    use AfrArrXSortTrait;
}