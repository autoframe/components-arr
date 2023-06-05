<?php
declare(strict_types=1);

namespace Autoframe\Components\Arr\Export;

use Autoframe\DesignPatterns\Singleton\AfrSingletonAbstractClass;

class AfrArrExportArrayAsStringClass extends AfrSingletonAbstractClass implements AfrArrExportArrayAsStringInterface
{
    use AfrArrExportArrayAsStringTrait;
}