<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\Financial\CashFlow;

use PhpOffice\PhpSpreadsheet\Calculation\Exception;
use PhpOffice\PhpSpreadsheet\Calculation\Financial\Constants as FinancialConstants;
use PhpOffice\PhpSpreadsheet\Calculation\Financial\FinancialValidations;
use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;

class CashFlowValidations extends FinancialValidations
{
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

        return $rate;
    }

<<<<<<< HEAD
    /**
     * @param mixed $type
     */
    public static function validatePeriodType($type): int
    {
        $rate = self::validateInt($type);
        if (
            $type !== FinancialConstants::PAYMENT_END_OF_PERIOD &&
            $type !== FinancialConstants::PAYMENT_BEGINNING_OF_PERIOD
=======
    public static function validatePeriodType(mixed $type): int
    {
        $rate = self::validateInt($type);
        if (
            $type !== FinancialConstants::PAYMENT_END_OF_PERIOD
            && $type !== FinancialConstants::PAYMENT_BEGINNING_OF_PERIOD
>>>>>>> match
        ) {
            throw new Exception(ExcelError::NAN());
        }

        return $rate;
    }

<<<<<<< HEAD
    /**
     * @param mixed $presentValue
     */
    public static function validatePresentValue($presentValue): float
=======
    public static function validatePresentValue(mixed $presentValue): float
>>>>>>> match
    {
        return self::validateFloat($presentValue);
    }

<<<<<<< HEAD
    /**
     * @param mixed $futureValue
     */
    public static function validateFutureValue($futureValue): float
=======
    public static function validateFutureValue(mixed $futureValue): float
>>>>>>> match
    {
        return self::validateFloat($futureValue);
    }
}
