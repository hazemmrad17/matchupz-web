<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\LookupRef;

use PhpOffice\PhpSpreadsheet\Calculation\Exception;
use PhpOffice\PhpSpreadsheet\Calculation\Information\ErrorValue;
use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;

class LookupRefValidations
{
<<<<<<< HEAD
    /**
     * @param mixed $value
     */
    public static function validateInt($value): int
    {
        if (!is_numeric($value)) {
            if (ErrorValue::isError($value)) {
=======
    public static function validateInt(mixed $value): int
    {
        if (!is_numeric($value)) {
            if (is_string($value) && ErrorValue::isError($value)) {
>>>>>>> match
                throw new Exception($value);
            }

            throw new Exception(ExcelError::VALUE());
        }

        return (int) floor((float) $value);
    }

<<<<<<< HEAD
    /**
     * @param mixed $value
     */
    public static function validatePositiveInt($value, bool $allowZero = true): int
=======
    public static function validatePositiveInt(mixed $value, bool $allowZero = true): int
>>>>>>> match
    {
        $value = self::validateInt($value);

        if (($allowZero === false && $value <= 0) || $value < 0) {
            throw new Exception(ExcelError::VALUE());
        }

        return $value;
    }
}
