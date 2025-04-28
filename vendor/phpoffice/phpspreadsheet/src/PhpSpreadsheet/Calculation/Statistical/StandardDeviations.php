<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\Statistical;

class StandardDeviations
{
    /**
     * STDEV.
     *
     * Estimates standard deviation based on a sample. The standard deviation is a measure of how
     *        widely values are dispersed from the average value (the mean).
     *
     * Excel Function:
     *        STDEV(value1[,value2[, ...]])
     *
     * @param mixed ...$args Data values
     *
     * @return float|string The result, or a string containing an error
     */
<<<<<<< HEAD
    public static function STDEV(...$args)
=======
    public static function STDEV(mixed ...$args)
>>>>>>> match
    {
        $result = Variances::VAR(...$args);
        if (!is_numeric($result)) {
            return $result;
        }

        return sqrt((float) $result);
    }

    /**
     * STDEVA.
     *
     * Estimates standard deviation based on a sample, including numbers, text, and logical values
     *
     * Excel Function:
     *        STDEVA(value1[,value2[, ...]])
     *
     * @param mixed ...$args Data values
<<<<<<< HEAD
     *
     * @return float|string
     */
    public static function STDEVA(...$args)
=======
     */
    public static function STDEVA(mixed ...$args): float|string
>>>>>>> match
    {
        $result = Variances::VARA(...$args);
        if (!is_numeric($result)) {
            return $result;
        }

        return sqrt((float) $result);
    }

    /**
     * STDEVP.
     *
     * Calculates standard deviation based on the entire population
     *
     * Excel Function:
     *        STDEVP(value1[,value2[, ...]])
     *
     * @param mixed ...$args Data values
<<<<<<< HEAD
     *
     * @return float|string
     */
    public static function STDEVP(...$args)
=======
     */
    public static function STDEVP(mixed ...$args): float|string
>>>>>>> match
    {
        $result = Variances::VARP(...$args);
        if (!is_numeric($result)) {
            return $result;
        }

        return sqrt((float) $result);
    }

    /**
     * STDEVPA.
     *
     * Calculates standard deviation based on the entire population, including numbers, text, and logical values
     *
     * Excel Function:
     *        STDEVPA(value1[,value2[, ...]])
     *
     * @param mixed ...$args Data values
<<<<<<< HEAD
     *
     * @return float|string
     */
    public static function STDEVPA(...$args)
=======
     */
    public static function STDEVPA(mixed ...$args): float|string
>>>>>>> match
    {
        $result = Variances::VARPA(...$args);
        if (!is_numeric($result)) {
            return $result;
        }

        return sqrt((float) $result);
    }
}
