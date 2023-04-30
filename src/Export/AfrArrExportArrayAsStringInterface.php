<?php
declare(strict_types=1);

namespace Autoframe\Components\Arr\Export;

interface AfrArrExportArrayAsStringInterface
{
    /**
     * @param array $aData
     * @param string $sQuot
     * @param string $sEndOfLine
     * @param string $sPointComa
     * @param string $sVarName
     * @return string
     */
    public function exportPhpArrayAsString(array $aData, string $sQuot = "'", string $sEndOfLine = '', string $sPointComa = ';', string $sVarName = '$aData'): string;
}