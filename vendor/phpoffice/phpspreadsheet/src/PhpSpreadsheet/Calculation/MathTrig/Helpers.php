<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\MathTrig;

use PhpOffice\PhpSpreadsheet\Calculation\Exception;
use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;

class Helpers
{
    /**
     * Many functions accept null/false/true argument treated as 0/0/1.
     *
     * @return float|string quotient or DIV0 if denominator is too small
     */
<<<<<<< HEAD
    public static function verySmallDenominator(float $numerator, float $denominator)
=======
    public static function verySmallDenominator(float $numerator, float $denominator): string|float
>>>>>>> match
    {
        return (abs($denominator) < 1.0E-12) ? ExcelError::DIV0() : ($numerator / $denominator);
    }

    /**
     * Many functions accept null/false/true argument treated as 0/0/1.
<<<<<<< HEAD
     *
     * @param mixed $number
     *
     * @return float|int
     */
    public static function validateNumericNullBool($number)
=======
     */
    public static function validateNumericNullBool(mixed $number): int|float
>>>>>>> match
    {
        $number = Functions::flattenSingleValue($number);
        if ($number === null) {
            return 0;
        }
        if (is_bool($number)) {
            return (int) $number;
        }
        if (is_numeric($number)) {
            return 0 + $number;
        }

        throw new Exception(ExcelError::throwError($number));
    }

    /**
     * Validate numeric, but allow substitute for null.
<<<<<<< HEAD
     *
     * @param mixed $number
     * @param null|float|int $substitute
     *
     * @return float|int
     */
    public static function validateNumericNullSubstitution($number, $substitute)
=======
     */
    public static function validateNumericNullSubstitution(mixed $number, null|float|int $substitute): float|int
>>>>>>> match
    {
        $number = Functions::flattenSingleValue($number);
        if ($number === null && $substitute !== null) {
            return $substitute;
        }
        if (is_numeric($number)) {
            return 0 + $number;
        }

        throw new Exception(ExcelError::throwError($number));
    }

    /**
     * Confirm number >= 0.
<<<<<<< HEAD
     *
     * @param float|int $number
     */
    public static function validateNotNegative($number, ?string $except = null): void
=======
     */
    public static function validateNotNegative(float|int $number, ?string $except = null): void
>>>>>>> match
    {
        if ($number >= 0) {
            return;
        }

        throw new Exception($except ?? ExcelError::NAN());
    }

    /**
     * Confirm number > 0.
<<<<<<< HEAD
     *
     * @param float|int $number
     */
    public static function validatePositive($number, ?string $except = null): void
=======
     */
    public static function validatePositive(float|int $number, ?string $except = null): void
>>>>>>> match
    {
        if ($number > 0) {
            return;
        }

        throw new Exception($except ?? ExcelError::NAN());
    }

    /**
     * Confirm number != 0.
<<<<<<< HEAD
     *
     * @param float|int $number
     */
    public static function validateNotZero($number): void
=======
     */
    public static function validateNotZero(float|int $number): void
>>>>>>> match
    {
        if ($number) {
            return;
        }

        throw new Exception(ExcelError::DIV0());
    }

    public static function returnSign(float $number): int
    {
        return $number ? (($number > 0) ? 1 : -1) : 0;
    }

    public static function getEven(float $number): float
    {
        $significance = 2 * self::returnSign($number);

        return $significance ? (ceil($number / $significance) * $significance) : 0;
    }

    /**
     * Return NAN or value depending on argument.
<<<<<<< HEAD
     *
     * @param float $result Number
     *
     * @return float|string
     */
    public static function numberOrNan($result)
=======
     */
    public static function numberOrNan(float $result): float|string
>>>>>>> match
    {
        return is_nan($result) ? ExcelError::NAN() : $result;
    }
}
