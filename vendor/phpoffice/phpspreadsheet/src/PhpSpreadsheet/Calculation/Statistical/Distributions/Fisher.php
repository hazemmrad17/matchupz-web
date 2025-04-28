<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\Statistical\Distributions;

use PhpOffice\PhpSpreadsheet\Calculation\ArrayEnabled;
use PhpOffice\PhpSpreadsheet\Calculation\Exception;
use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;

class Fisher
{
    use ArrayEnabled;

    /**
     * FISHER.
     *
     * Returns the Fisher transformation at x. This transformation produces a function that
     *        is normally distributed rather than skewed. Use this function to perform hypothesis
     *        testing on the correlation coefficient.
     *
     * @param mixed $value Float value for which we want the probability
     *                      Or can be an array of values
     *
<<<<<<< HEAD
     * @return array|float|string
     *         If an array of numbers is passed as an argument, then the returned result will also be an array
     *            with the same dimensions
     */
    public static function distribution($value)
=======
     * @return array|float|string If an array of numbers is passed as an argument, then the returned result will also be an array
     *            with the same dimensions
     */
    public static function distribution(mixed $value): array|string|float
>>>>>>> match
    {
        if (is_array($value)) {
            return self::evaluateSingleArgumentArray([self::class, __FUNCTION__], $value);
        }

        try {
<<<<<<< HEAD
            DistributionValidations::validateFloat($value);
=======
            $value = DistributionValidations::validateFloat($value);
>>>>>>> match
        } catch (Exception $e) {
            return $e->getMessage();
        }

        if (($value <= -1) || ($value >= 1)) {
            return ExcelError::NAN();
        }

        return 0.5 * log((1 + $value) / (1 - $value));
    }

    /**
     * FISHERINV.
     *
     * Returns the inverse of the Fisher transformation. Use this transformation when
     *        analyzing correlations between ranges or arrays of data. If y = FISHER(x), then
     *        FISHERINV(y) = x.
     *
     * @param mixed $probability Float probability at which you want to evaluate the distribution
     *                      Or can be an array of values
     *
<<<<<<< HEAD
     * @return array|float|string
     *         If an array of numbers is passed as an argument, then the returned result will also be an array
     *            with the same dimensions
     */
    public static function inverse($probability)
=======
     * @return array|float|string If an array of numbers is passed as an argument, then the returned result will also be an array
     *            with the same dimensions
     */
    public static function inverse(mixed $probability): array|string|float
>>>>>>> match
    {
        if (is_array($probability)) {
            return self::evaluateSingleArgumentArray([self::class, __FUNCTION__], $probability);
        }

        try {
<<<<<<< HEAD
            DistributionValidations::validateFloat($probability);
=======
            $probability = DistributionValidations::validateFloat($probability);
>>>>>>> match
        } catch (Exception $e) {
            return $e->getMessage();
        }

        return (exp(2 * $probability) - 1) / (exp(2 * $probability) + 1);
    }
}
