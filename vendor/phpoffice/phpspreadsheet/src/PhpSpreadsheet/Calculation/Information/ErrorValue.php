<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\Information;

use PhpOffice\PhpSpreadsheet\Calculation\ArrayEnabled;
<<<<<<< HEAD
=======
use PhpOffice\PhpSpreadsheet\Calculation\Functions;
>>>>>>> match

class ErrorValue
{
    use ArrayEnabled;

    /**
     * IS_ERR.
     *
     * @param mixed $value Value to check
     *                      Or can be an array of values
     *
<<<<<<< HEAD
     * @return array|bool
     *         If an array of numbers is passed as an argument, then the returned result will also be an array
     *            with the same dimensions
     */
    public static function isErr($value = '')
=======
     * @return array|bool If an array of numbers is passed as an argument, then the returned result will also be an array
     *            with the same dimensions
     */
    public static function isErr(mixed $value = ''): array|bool
>>>>>>> match
    {
        if (is_array($value)) {
            return self::evaluateSingleArgumentArray([self::class, __FUNCTION__], $value);
        }

        return self::isError($value) && (!self::isNa(($value)));
    }

    /**
     * IS_ERROR.
     *
     * @param mixed $value Value to check
     *                      Or can be an array of values
     *
<<<<<<< HEAD
     * @return array|bool
     *         If an array of numbers is passed as an argument, then the returned result will also be an array
     *            with the same dimensions
     */
    public static function isError($value = '')
=======
     * @return array|bool If an array of numbers is passed as an argument, then the returned result will also be an array
     *            with the same dimensions
     */
    public static function isError(mixed $value = '', bool $tryNotImplemented = false): array|bool
>>>>>>> match
    {
        if (is_array($value)) {
            return self::evaluateSingleArgumentArray([self::class, __FUNCTION__], $value);
        }

        if (!is_string($value)) {
            return false;
        }
<<<<<<< HEAD
=======
        if ($tryNotImplemented && $value === Functions::NOT_YET_IMPLEMENTED) {
            return true;
        }
>>>>>>> match

        return in_array($value, ExcelError::ERROR_CODES, true);
    }

    /**
     * IS_NA.
     *
     * @param mixed $value Value to check
     *                      Or can be an array of values
     *
<<<<<<< HEAD
     * @return array|bool
     *         If an array of numbers is passed as an argument, then the returned result will also be an array
     *            with the same dimensions
     */
    public static function isNa($value = '')
=======
     * @return array|bool If an array of numbers is passed as an argument, then the returned result will also be an array
     *            with the same dimensions
     */
    public static function isNa(mixed $value = ''): array|bool
>>>>>>> match
    {
        if (is_array($value)) {
            return self::evaluateSingleArgumentArray([self::class, __FUNCTION__], $value);
        }

        return $value === ExcelError::NA();
    }
}
