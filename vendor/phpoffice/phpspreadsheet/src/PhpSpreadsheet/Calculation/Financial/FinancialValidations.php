<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\Financial;

use PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel;
use PhpOffice\PhpSpreadsheet\Calculation\Exception;
use PhpOffice\PhpSpreadsheet\Calculation\Financial\Constants as FinancialConstants;
use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;

class FinancialValidations
{
<<<<<<< HEAD
    /**
     * @param mixed $date
     */
    public static function validateDate($date): float
=======
    public static function validateDate(mixed $date): float
>>>>>>> match
    {
        return DateTimeExcel\Helpers::getDateValue($date);
    }

<<<<<<< HEAD
    /**
     * @param mixed $settlement
     */
    public static function validateSettlementDate($settlement): float
=======
    public static function validateSettlementDate(mixed $settlement): float
>>>>>>> match
    {
        return self::validateDate($settlement);
    }

<<<<<<< HEAD
    /**
     * @param mixed $maturity
     */
    public static function validateMaturityDate($maturity): float
=======
    public static function validateMaturityDate(mixed $maturity): float
>>>>>>> match
    {
        return self::validateDate($maturity);
    }

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
     * @param mixed $rate
     */
    public static function validateRate($rate): float
=======
    public static function validateRate(mixed $rate): float
>>>>>>> match
    {
        $rate = self::validateFloat($rate);
        if ($rate < 0.0) {
            throw new Exception(ExcelError::NAN());
        }

        return $rate;
    }

<<<<<<< HEAD
    /**
     * @param mixed $frequency
     */
    public static function validateFrequency($frequency): int
    {
        $frequency = self::validateInt($frequency);
        if (
            ($frequency !== FinancialConstants::FREQUENCY_ANNUAL) &&
            ($frequency !== FinancialConstants::FREQUENCY_SEMI_ANNUAL) &&
            ($frequency !== FinancialConstants::FREQUENCY_QUARTERLY)
=======
    public static function validateFrequency(mixed $frequency): int
    {
        $frequency = self::validateInt($frequency);
        if (
            ($frequency !== FinancialConstants::FREQUENCY_ANNUAL)
            && ($frequency !== FinancialConstants::FREQUENCY_SEMI_ANNUAL)
            && ($frequency !== FinancialConstants::FREQUENCY_QUARTERLY)
>>>>>>> match
        ) {
            throw new Exception(ExcelError::NAN());
        }

        return $frequency;
    }

<<<<<<< HEAD
    /**
     * @param mixed $basis
     */
    public static function validateBasis($basis): int
=======
    public static function validateBasis(mixed $basis): int
>>>>>>> match
    {
        if (!is_numeric($basis)) {
            throw new Exception(ExcelError::VALUE());
        }

        $basis = (int) $basis;
        if (($basis < 0) || ($basis > 4)) {
            throw new Exception(ExcelError::NAN());
        }

        return $basis;
    }

<<<<<<< HEAD
    /**
     * @param mixed $price
     */
    public static function validatePrice($price): float
=======
    public static function validatePrice(mixed $price): float
>>>>>>> match
    {
        $price = self::validateFloat($price);
        if ($price < 0.0) {
            throw new Exception(ExcelError::NAN());
        }

        return $price;
    }

<<<<<<< HEAD
    /**
     * @param mixed $parValue
     */
    public static function validateParValue($parValue): float
=======
    public static function validateParValue(mixed $parValue): float
>>>>>>> match
    {
        $parValue = self::validateFloat($parValue);
        if ($parValue < 0.0) {
            throw new Exception(ExcelError::NAN());
        }

        return $parValue;
    }

<<<<<<< HEAD
    /**
     * @param mixed $yield
     */
    public static function validateYield($yield): float
=======
    public static function validateYield(mixed $yield): float
>>>>>>> match
    {
        $yield = self::validateFloat($yield);
        if ($yield < 0.0) {
            throw new Exception(ExcelError::NAN());
        }

        return $yield;
    }

<<<<<<< HEAD
    /**
     * @param mixed $discount
     */
    public static function validateDiscount($discount): float
=======
    public static function validateDiscount(mixed $discount): float
>>>>>>> match
    {
        $discount = self::validateFloat($discount);
        if ($discount <= 0.0) {
            throw new Exception(ExcelError::NAN());
        }

        return $discount;
    }
}
