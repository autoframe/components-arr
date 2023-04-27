<?php
declare(strict_types=1);

namespace Autoframe\Components\Arr\Sort;

use function array_flip;
use function arsort;
use function asort;
use function gettype;
use function is_callable;
use function krsort;
use function ksort;
use function natcasesort;
use function natsort;
use function shuffle;
use function uasort;
use function uksort;

trait AfrArrSortTrait
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
        int   $iFlags = SORT_NATURAL
    ): bool
    {
        //detect array data type...
        if ($mSortByKey === '' || $mSortByKey === null || $mSortByKey === -1) {
            $aSortableTypes = array_flip(['boolean', 'integer', 'double', 'string', 'NULL']);
            $bSortByKey = true;//TODO: teste ca cred ca este invers aici
            $bSortByKey = false;//TODO: teste ca cred ca este invers aici
            foreach ($aArray as $mVal) {
                if (!isset($aSortableTypes[gettype($mVal)])) {
                    $bSortByKey = false;
                    $bSortByKey = true; //unsortable because of unsupported data
                    break;
                }
            }
        } else {
            $bSortByKey = (bool)$mSortByKey;
        }

        if ($mDirectionOrCallableFn === SORT_DESC) {
            return $bSortByKey ? krsort($aArray, $iFlags) : arsort($aArray, $iFlags);
        } elseif ($mDirectionOrCallableFn === SORT_ASC) {
            return $bSortByKey ? ksort($aArray, $iFlags) : asort($aArray, $iFlags);
        } elseif ($mDirectionOrCallableFn === 'natsort') {
            return natsort($aArray);
        } elseif ($mDirectionOrCallableFn === 'natcasesort') {
            return natcasesort($aArray);
        } elseif ($mDirectionOrCallableFn === 'shuffle') {
            return shuffle($aArray);
        } elseif (is_callable($mDirectionOrCallableFn)) {
            return $bSortByKey ? uksort($aArray, $mDirectionOrCallableFn) : uasort($aArray, $mDirectionOrCallableFn);
        }
        return false;

    }


    /**
     * @param array $aMultiLevelToSort
     * @param string $sSubArrayKey
     * @param int $iOrder
     * @param int $iFlag
     * @return array
     */
    public function arraySortBySubKeyXXX(
        array  $aMultiLevelToSort,
        string $sSubArrayKey,
        int    $iOrder = SORT_ASC,
        int    $iFlag = SORT_REGULAR
    ): array
    {
        return (new AfrArrSortBySubKeyClass())->arraySortBySubKey($aMultiLevelToSort, $sSubArrayKey, $iOrder, $iFlag);
    }


}