<?php
declare(strict_types=1);

namespace Autoframe\Components\Arr;

interface AfrArrCollectionInterface extends
    Merge\AfrArrMergeProfileInterface,
    Sort\AfrArrXSortInterface,
    Sort\AfrArrSortBySubKeyInterface
{

}