<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\Financial\Securities;

use PhpOffice\PhpSpreadsheet\Calculation\Exception;
use PhpOffice\PhpSpreadsheet\Calculation\Financial\FinancialValidations;
use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;

class SecurityValidations extends FinancialValidations
{
<<<<<<< HEAD
    /**
     * @param mixed $issue
     */
    public static function validateIssueDate($issue): float
=======
    public static function validateIssueDate(mixed $issue): float
>>>>>>> match
    {
        return self::validateDate($issue);
    }

<<<<<<< HEAD
    /**
     * @param mixed $settlement
     * @param mixed $maturity
     */
    public static function validateSecurityPeriod($settlement, $maturity): void
=======
    public static function validateSecurityPeriod(mixed $settlement, mixed $maturity): void
>>>>>>> match
    {
        if ($settlement >= $maturity) {
            throw new Exception(ExcelError::NAN());
        }
    }

<<<<<<< HEAD
    /**
     * @param mixed $redemption
     */
    public static function validateRedemption($redemption): float
=======
    public static function validateRedemption(mixed $redemption): float
>>>>>>> match
    {
        $redemption = self::validateFloat($redemption);
        if ($redemption <= 0.0) {
            throw new Exception(ExcelError::NAN());
        }

        return $redemption;
    }
}
