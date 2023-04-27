<?php
declare(strict_types=1);

namespace Autoframe\Components\Arr\Sort;

interface AfrArrSortInterface
{
    /**
     * @param array $aArray
     * @param $mDirectionOrCallableFn ; SORT_ASC|SORT_DESC|callable
     * @param $mSortByKey
     * @param int $iFlags
     * @return bool
     */
    public function arrayXSort(
        array &$aArray,
        $mDirectionOrCallableFn = SORT_ASC,
        $mSortByKey = false,
        int $iFlags = SORT_NATURAL
    ): bool;

}