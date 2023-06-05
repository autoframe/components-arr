<?php
declare(strict_types=1);

namespace Autoframe\Components\Arr\Merge;

use Autoframe\DesignPatterns\Singleton\AfrSingletonAbstractClass;

/**
 * Recursive array merging for config profiles
 * $aMergedProfile = $this->arrayMergeProfile(array $aOriginal, array $aNew);
 */
class AfrArrMergeProfileClass extends AfrSingletonAbstractClass implements AfrArrMergeProfileInterface
{
    use AfrArrMergeProfileTrait;
}