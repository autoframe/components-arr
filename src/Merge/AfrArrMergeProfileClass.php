<?php
declare(strict_types=1);

namespace Autoframe\Components\Arr\Merge;

/**
 * Recursive array merging for config profiles
 * $aMergedProfile = $this->arrayMergeProfile(array $aOriginal, array $aNew);
 */
class AfrArrMergeProfileClass implements AfrArrMergeProfileInterface
{
    use AfrArrMergeProfileTrait;
}