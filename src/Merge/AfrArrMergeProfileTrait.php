<?php
declare(strict_types=1);

namespace Autoframe\Components\Arr\Merge;

use function is_array;

/**
 * Recursive array merging for config profiles
 * $aMergedProfile = $this->arrayMergeProfile(array $aOriginal, array $aNew);
 */
trait AfrArrMergeProfileTrait
{
    /**
     * Recursive array merging for config profiles
     * @param array $aOriginal
     * @param array $aNew
     * @return array
     */
    public function arrayMergeProfile(array $aOriginal, array $aNew): array
    {
        foreach ($aNew as $sNewKey => $mNewProfile) {
            if (!isset($aOriginal[$sNewKey])) {
                $aOriginal[$sNewKey] = $mNewProfile;
            } elseif (is_array($aOriginal[$sNewKey]) && is_array($mNewProfile)) {
                $aOriginal[$sNewKey] = $this->arrayMergeProfile($aOriginal[$sNewKey], $mNewProfile);
            } else {
                $aOriginal[$sNewKey] = $mNewProfile;
            }
        }
        return $aOriginal;
    }
}