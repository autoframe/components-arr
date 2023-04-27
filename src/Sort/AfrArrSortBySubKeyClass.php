<?php
declare(strict_types=1);

namespace Autoframe\Components\Arr\Sort;

/**
 * Sort by a key or property owned by a first level array element
 * AfrArrSortBySubKeyClass->arraySortBySubKey(array $aMultiLevelToSort, string $sSubArrayKey, int $iOrder = SORT_ASC, int $iFlag = SORT_REGULAR): array;
 */
class AfrArrSortBySubKeyClass implements AfrArrSortBySubKeyInterface
{
    use AfrArrSortBySubKeyTrait;
}