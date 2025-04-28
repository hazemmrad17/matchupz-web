<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\LookupRef;

use PhpOffice\PhpSpreadsheet\Calculation\Calculation;
use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
<<<<<<< HEAD
=======
use PhpOffice\PhpSpreadsheet\Shared\StringHelper;
>>>>>>> match

class Formula
{
    /**
     * FORMULATEXT.
     *
     * @param mixed $cellReference The cell to check
<<<<<<< HEAD
     * @param Cell $cell The current cell (containing this formula)
     *
     * @return string
     */
    public static function text($cellReference = '', ?Cell $cell = null)
=======
     * @param ?Cell $cell The current cell (containing this formula)
     */
    public static function text(mixed $cellReference = '', ?Cell $cell = null): string
>>>>>>> match
    {
        if ($cell === null) {
            return ExcelError::REF();
        }

<<<<<<< HEAD
        preg_match('/^' . Calculation::CALCULATION_REGEXP_CELLREF . '$/i', $cellReference, $matches);

        $cellReference = $matches[6] . $matches[7];
        $worksheetName = trim($matches[3], "'");
        $worksheet = (!empty($worksheetName))
            ? $cell->getWorksheet()->getParentOrThrow()->getSheetByName($worksheetName)
            : $cell->getWorksheet();

        if (
            $worksheet === null ||
            !$worksheet->cellExists($cellReference) ||
            !$worksheet->getCell($cellReference)->isFormula()
=======
        $worksheet = null;
        $cellReference = StringHelper::convertToString($cellReference);
        if (1 === preg_match('/^' . Calculation::CALCULATION_REGEXP_CELLREF . '$/i', $cellReference, $matches)) {
            $cellReference = $matches[6] . $matches[7];
            $worksheetName = trim($matches[3], "'");
            $worksheet = (!empty($worksheetName))
                ? $cell->getWorksheet()->getParentOrThrow()->getSheetByName($worksheetName)
                : $cell->getWorksheet();
        }

        if (
            $worksheet === null
            || !$worksheet->cellExists($cellReference)
            || !$worksheet->getCell($cellReference)->isFormula()
>>>>>>> match
        ) {
            return ExcelError::NA();
        }

<<<<<<< HEAD
        return $worksheet->getCell($cellReference)->getValue();
=======
        return $worksheet->getCell($cellReference)->getValueString();
>>>>>>> match
    }
}
