<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\Statistical;

use PhpOffice\PhpSpreadsheet\Calculation\Exception;
use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;

class StatisticalValidations
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

<<<<<<< HEAD
    /**
     * @param mixed $value
     */
    public static function validateBool($value): bool
=======
    public static function validateBool(mixed $value): bool
>>>>>>> match
    {
        if (!is_bool($value) && !is_numeric($value)) {
            throw new Exception(ExcelError::VALUE());
        }

        return (bool) $value;
    }
}
