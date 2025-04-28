<?php

namespace PhpOffice\PhpSpreadsheet\Style\NumberFormat;

use PhpOffice\PhpSpreadsheet\Calculation\MathTrig;

class FractionFormatter extends BaseFormatter
{
<<<<<<< HEAD
    /**
     * @param mixed $value
     */
    public static function format($value, string $format): string
=======
    /** @param null|bool|float|int|string $value  value to be formatted */
    public static function format(mixed $value, string $format): string
>>>>>>> match
    {
        $format = self::stripQuotes($format);
        $value = (float) $value;
        $absValue = abs($value);

        $sign = ($value < 0.0) ? '-' : '';

        $integerPart = floor($absValue);

        $decimalPart = self::getDecimal((string) $absValue);
        if ($decimalPart === '0') {
            return "{$sign}{$integerPart}";
        }
        $decimalLength = strlen($decimalPart);
        $decimalDivisor = 10 ** $decimalLength;

        preg_match('/(#?.*\?)\/(\?+|\d+)/', $format, $matches);
<<<<<<< HEAD
        $formatIntegerPart = $matches[1];

        if (is_numeric($matches[2])) {
            $fractionDivisor = 100 / (int) $matches[2];
        } else {
            /** @var float */
=======
        $formatIntegerPart = $matches[1] ?? '0';

        if (isset($matches[2]) && is_numeric($matches[2])) {
            $fractionDivisor = 100 / (int) $matches[2];
        } else {
            /** @var float $fractionDivisor */
>>>>>>> match
            $fractionDivisor = MathTrig\Gcd::evaluate((int) $decimalPart, $decimalDivisor);
        }

        $adjustedDecimalPart = (int) round((int) $decimalPart / $fractionDivisor, 0);
        $adjustedDecimalDivisor = $decimalDivisor / $fractionDivisor;

<<<<<<< HEAD
        if ((strpos($formatIntegerPart, '0') !== false)) {
            return "{$sign}{$integerPart} {$adjustedDecimalPart}/{$adjustedDecimalDivisor}";
        } elseif ((strpos($formatIntegerPart, '#') !== false)) {
=======
        if ((str_contains($formatIntegerPart, '0'))) {
            return "{$sign}{$integerPart} {$adjustedDecimalPart}/{$adjustedDecimalDivisor}";
        } elseif ((str_contains($formatIntegerPart, '#'))) {
>>>>>>> match
            if ($integerPart == 0) {
                return "{$sign}{$adjustedDecimalPart}/{$adjustedDecimalDivisor}";
            }

            return "{$sign}{$integerPart} {$adjustedDecimalPart}/{$adjustedDecimalDivisor}";
<<<<<<< HEAD
        } elseif ((substr($formatIntegerPart, 0, 3) == '? ?')) {
=======
        } elseif ((str_starts_with($formatIntegerPart, '? ?'))) {
>>>>>>> match
            if ($integerPart == 0) {
                $integerPart = '';
            }

            return "{$sign}{$integerPart} {$adjustedDecimalPart}/{$adjustedDecimalDivisor}";
        }

        $adjustedDecimalPart += $integerPart * $adjustedDecimalDivisor;

        return "{$sign}{$adjustedDecimalPart}/{$adjustedDecimalDivisor}";
    }

    private static function getDecimal(string $value): string
    {
        $decimalPart = '0';
<<<<<<< HEAD
        if (preg_match('/^\\d*[.](\\d*[1-9])0*$/', $value, $matches) === 1) {
=======
        if (preg_match('/^\d*[.](\d*[1-9])0*$/', $value, $matches) === 1) {
>>>>>>> match
            $decimalPart = $matches[1];
        }

        return $decimalPart;
    }
}
