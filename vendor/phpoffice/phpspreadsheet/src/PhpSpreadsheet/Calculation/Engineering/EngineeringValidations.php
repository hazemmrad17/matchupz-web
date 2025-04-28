<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\Engineering;

use PhpOffice\PhpSpreadsheet\Calculation\Exception;
use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;

class EngineeringValidations
{
<<<<<<< HEAD
    /**
     * @param mixed $value
     */
    public static function validateFloat($value): float
=======
    public static function validateFloat(mixed $value): float
>>>>>>> match
    {
        if (!is_numeric($value)) {
            throw new Exception(ExcelError::VALUE());
        }

        return (float) $value;
    }

<<<<<<< HEAD
    /**
     * @param mixed $value
     */
    public static function validateInt($value): int
=======
    public static function validateInt(mixed $value): int
>>>>>>> match
    {
        if (!is_numeric($value)) {
            throw new Exception(ExcelError::VALUE());
        }

        return (int) floor((float) $value);
    }
}
