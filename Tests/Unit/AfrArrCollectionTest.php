<?php
declare(strict_types=1);

namespace Unit;

use Autoframe\Components\Arr\AfrArrCollectionClass;
use Autoframe\Components\Arr\AfrArrCollectionInterface;
use PHPUnit\Framework\TestCase;

class AfrArrCollectionTest extends TestCase
{
    /**
     * @test
     */
    public function initTest(): void
    {
        $oCollection = AfrArrCollectionClass::getInstance();
        $this->assertSame(true, $oCollection instanceof AfrArrCollectionInterface);
    }


}