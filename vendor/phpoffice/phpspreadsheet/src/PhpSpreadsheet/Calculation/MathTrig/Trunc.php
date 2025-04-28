<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\MathTrig;

use PhpOffice\PhpSpreadsheet\Calculation\ArrayEnabled;
<<<<<<< HEAD
use PhpOffice\PhpSpreadsheet\Calculation\Exception;
=======
>>>>>>> match

class Trunc
{
    use ArrayEnabled;

    /**
     * TRUNC.
     *
     * Truncates value to the number of fractional digits by number_digits.
<<<<<<< HEAD
     *
     * @param array|float $value
     *                      Or can be an array of values
     * @param array|int $digits
     *                      Or can be an array of values
=======
     * This will probably not be the precise result in the unlikely
     * event that the number of digits to the left of the decimal
     * plus the number of digits to the right exceeds PHP_FLOAT_DIG
     * (or possibly that value minus 1).
     * Excel is unlikely to do any better.
     *
     * @param null|array|float|string $value Or can be an array of values
     * @param array|float|int|string $digits Or can be an array of values
>>>>>>> match
     *
     * @return array|float|string Truncated value, or a string containing an error
     *         If an array of numbers is passed as an argument, then the returned result will also be an array
     *            with the same dimensions
     */
<<<<<<< HEAD
    public static function evaluate($value = 0, $digits = 0)
=======
    public static function evaluate(array|float|string|null $value = 0, array|float|int|string $digits = 0): array|float|string
>>>>>>> match
    {
        if (is_array($value) || is_array($digits)) {
            return self::evaluateArrayArguments([self::class, __FUNCTION__], $value, $digits);
        }

<<<<<<< HEAD
        try {
            $value = Helpers::validateNumericNullBool($value);
            $digits = Helpers::validateNumericNullSubstitution($digits, null);
        } catch (Exception $e) {
            return $e->getMessage();
        }

        $digits = floor($digits);

        // Truncate
        $adjust = 10 ** $digits;

        if (($digits > 0) && (rtrim((string) (int) ((abs($value) - abs((int) $value)) * $adjust), '0') < $adjust / 10)) {
            return $value;
        }

        return ((int) ($value * $adjust)) / $adjust;
=======
        return Round::down($value, $digits);
>>>>>>> match
    }
}
