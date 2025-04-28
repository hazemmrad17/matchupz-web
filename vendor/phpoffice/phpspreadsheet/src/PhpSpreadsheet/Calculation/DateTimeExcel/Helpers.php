<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel;

use DateTime;
use PhpOffice\PhpSpreadsheet\Calculation\Exception;
use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;
use PhpOffice\PhpSpreadsheet\Shared\Date as SharedDateHelper;

class Helpers
{
    /**
     * Identify if a year is a leap year or not.
     *
     * @param int|string $year The year to test
     *
     * @return bool TRUE if the year is a leap year, otherwise FALSE
     */
<<<<<<< HEAD
    public static function isLeapYear($year): bool
    {
=======
    public static function isLeapYear(int|string $year): bool
    {
        $year = (int) $year;

>>>>>>> match
        return (($year % 4) === 0) && (($year % 100) !== 0) || (($year % 400) === 0);
    }

    /**
     * getDateValue.
     *
<<<<<<< HEAD
     * @param mixed $dateValue
     *
     * @return float Excel date/time serial value
     */
    public static function getDateValue($dateValue, bool $allowBool = true): float
=======
     * @return float Excel date/time serial value
     */
    public static function getDateValue(mixed $dateValue, bool $allowBool = true): float
>>>>>>> match
    {
        if (is_object($dateValue)) {
            $retval = SharedDateHelper::PHPToExcel($dateValue);
            if (is_bool($retval)) {
                throw new Exception(ExcelError::VALUE());
            }

            return $retval;
        }

        self::nullFalseTrueToNumber($dateValue, $allowBool);
        if (!is_numeric($dateValue)) {
            $saveReturnDateType = Functions::getReturnDateType();
            Functions::setReturnDateType(Functions::RETURNDATE_EXCEL);
<<<<<<< HEAD
            $dateValue = DateValue::fromString($dateValue);
=======
            if (is_string($dateValue)) {
                $dateValue = DateValue::fromString($dateValue);
            }
>>>>>>> match
            Functions::setReturnDateType($saveReturnDateType);
            if (!is_numeric($dateValue)) {
                throw new Exception(ExcelError::VALUE());
            }
        }
        if ($dateValue < 0 && Functions::getCompatibilityMode() !== Functions::COMPATIBILITY_OPENOFFICE) {
            throw new Exception(ExcelError::NAN());
        }

        return (float) $dateValue;
    }

    /**
     * getTimeValue.
     *
<<<<<<< HEAD
     * @param string $timeValue
     *
     * @return mixed Excel date/time serial value, or string if error
     */
    public static function getTimeValue($timeValue)
    {
        $saveReturnDateType = Functions::getReturnDateType();
        Functions::setReturnDateType(Functions::RETURNDATE_EXCEL);
=======
     * @return float|string Excel date/time serial value, or string if error
     */
    public static function getTimeValue(string $timeValue): string|float
    {
        $saveReturnDateType = Functions::getReturnDateType();
        Functions::setReturnDateType(Functions::RETURNDATE_EXCEL);
        /** @var float|string $timeValue */
>>>>>>> match
        $timeValue = TimeValue::fromString($timeValue);
        Functions::setReturnDateType($saveReturnDateType);

        return $timeValue;
    }

    /**
     * Adjust date by given months.
     *
<<<<<<< HEAD
     * @param mixed $dateValue
=======
     * @param float|int $dateValue date to be adjusted
>>>>>>> match
     */
    public static function adjustDateByMonths($dateValue = 0, float $adjustmentMonths = 0): DateTime
    {
        // Execute function
        $PHPDateObject = SharedDateHelper::excelToDateTimeObject($dateValue);
        $oMonth = (int) $PHPDateObject->format('m');
        $oYear = (int) $PHPDateObject->format('Y');

        $adjustmentMonthsString = (string) $adjustmentMonths;
        if ($adjustmentMonths > 0) {
            $adjustmentMonthsString = '+' . $adjustmentMonths;
        }
        if ($adjustmentMonths != 0) {
            $PHPDateObject->modify($adjustmentMonthsString . ' months');
        }
        $nMonth = (int) $PHPDateObject->format('m');
        $nYear = (int) $PHPDateObject->format('Y');

        $monthDiff = ($nMonth - $oMonth) + (($nYear - $oYear) * 12);
        if ($monthDiff != $adjustmentMonths) {
            $adjustDays = (int) $PHPDateObject->format('d');
            $adjustDaysString = '-' . $adjustDays . ' days';
            $PHPDateObject->modify($adjustDaysString);
        }

        return $PHPDateObject;
    }

    /**
     * Help reduce perceived complexity of some tests.
<<<<<<< HEAD
     *
     * @param mixed $value
     * @param mixed $altValue
     */
    public static function replaceIfEmpty(&$value, $altValue): void
=======
     */
    public static function replaceIfEmpty(mixed &$value, mixed $altValue): void
>>>>>>> match
    {
        $value = $value ?: $altValue;
    }

    /**
     * Adjust year in ambiguous situations.
     */
    public static function adjustYear(string $testVal1, string $testVal2, string &$testVal3): void
    {
        if (!is_numeric($testVal1) || $testVal1 < 31) {
            if (!is_numeric($testVal2) || $testVal2 < 12) {
                if (is_numeric($testVal3) && $testVal3 < 12) {
<<<<<<< HEAD
                    $testVal3 += 2000;
=======
                    $testVal3 = (string) ($testVal3 + 2000);
>>>>>>> match
                }
            }
        }
    }

    /**
     * Return result in one of three formats.
<<<<<<< HEAD
     *
     * @return mixed
     */
    public static function returnIn3FormatsArray(array $dateArray, bool $noFrac = false)
=======
     */
    public static function returnIn3FormatsArray(array $dateArray, bool $noFrac = false): DateTime|float|int
>>>>>>> match
    {
        $retType = Functions::getReturnDateType();
        if ($retType === Functions::RETURNDATE_PHP_DATETIME_OBJECT) {
            return new DateTime(
                $dateArray['year']
                . '-' . $dateArray['month']
                . '-' . $dateArray['day']
                . ' ' . $dateArray['hour']
                . ':' . $dateArray['minute']
                . ':' . $dateArray['second']
            );
        }
<<<<<<< HEAD
        $excelDateValue =
            SharedDateHelper::formattedPHPToExcel(
=======
        $excelDateValue
            = SharedDateHelper::formattedPHPToExcel(
>>>>>>> match
                $dateArray['year'],
                $dateArray['month'],
                $dateArray['day'],
                $dateArray['hour'],
                $dateArray['minute'],
                $dateArray['second']
            );
        if ($retType === Functions::RETURNDATE_EXCEL) {
<<<<<<< HEAD
            return $noFrac ? floor($excelDateValue) : (float) $excelDateValue;
        }
        // RETURNDATE_UNIX_TIMESTAMP)

        return (int) SharedDateHelper::excelToTimestamp($excelDateValue);
=======
            return $noFrac ? floor($excelDateValue) : $excelDateValue;
        }
        // RETURNDATE_UNIX_TIMESTAMP)

        return SharedDateHelper::excelToTimestamp($excelDateValue);
>>>>>>> match
    }

    /**
     * Return result in one of three formats.
<<<<<<< HEAD
     *
     * @return mixed
     */
    public static function returnIn3FormatsFloat(float $excelDateValue)
=======
     */
    public static function returnIn3FormatsFloat(float $excelDateValue): float|int|DateTime
>>>>>>> match
    {
        $retType = Functions::getReturnDateType();
        if ($retType === Functions::RETURNDATE_EXCEL) {
            return $excelDateValue;
        }
        if ($retType === Functions::RETURNDATE_UNIX_TIMESTAMP) {
<<<<<<< HEAD
            return (int) SharedDateHelper::excelToTimestamp($excelDateValue);
=======
            return SharedDateHelper::excelToTimestamp($excelDateValue);
>>>>>>> match
        }
        // RETURNDATE_PHP_DATETIME_OBJECT

        return SharedDateHelper::excelToDateTimeObject($excelDateValue);
    }

    /**
     * Return result in one of three formats.
<<<<<<< HEAD
     *
     * @return mixed
     */
    public static function returnIn3FormatsObject(DateTime $PHPDateObject)
=======
     */
    public static function returnIn3FormatsObject(DateTime $PHPDateObject): DateTime|float|int
>>>>>>> match
    {
        $retType = Functions::getReturnDateType();
        if ($retType === Functions::RETURNDATE_PHP_DATETIME_OBJECT) {
            return $PHPDateObject;
        }
        if ($retType === Functions::RETURNDATE_EXCEL) {
            return (float) SharedDateHelper::PHPToExcel($PHPDateObject);
        }
        // RETURNDATE_UNIX_TIMESTAMP
        $stamp = SharedDateHelper::PHPToExcel($PHPDateObject);
        $stamp = is_bool($stamp) ? ((int) $stamp) : $stamp;

<<<<<<< HEAD
        return (int) SharedDateHelper::excelToTimestamp($stamp);
=======
        return SharedDateHelper::excelToTimestamp($stamp);
>>>>>>> match
    }

    private static function baseDate(): int
    {
        if (Functions::getCompatibilityMode() === Functions::COMPATIBILITY_OPENOFFICE) {
            return 0;
        }
        if (SharedDateHelper::getExcelCalendar() === SharedDateHelper::CALENDAR_MAC_1904) {
            return 0;
        }

        return 1;
    }

    /**
     * Many functions accept null/false/true argument treated as 0/0/1.
<<<<<<< HEAD
     *
     * @param mixed $number
     */
    public static function nullFalseTrueToNumber(&$number, bool $allowBool = true): void
=======
     */
    public static function nullFalseTrueToNumber(mixed &$number, bool $allowBool = true): void
>>>>>>> match
    {
        $number = Functions::flattenSingleValue($number);
        $nullVal = self::baseDate();
        if ($number === null) {
            $number = $nullVal;
        } elseif ($allowBool && is_bool($number)) {
            $number = $nullVal + (int) $number;
        }
    }

    /**
     * Many functions accept null argument treated as 0.
<<<<<<< HEAD
     *
     * @param mixed $number
     *
     * @return float|int
     */
    public static function validateNumericNull($number)
=======
     */
    public static function validateNumericNull(mixed $number): int|float
>>>>>>> match
    {
        $number = Functions::flattenSingleValue($number);
        if ($number === null) {
            return 0;
        }
        if (is_int($number)) {
            return $number;
        }
        if (is_numeric($number)) {
            return (float) $number;
        }

        throw new Exception(ExcelError::VALUE());
    }

    /**
     * Many functions accept null/false/true argument treated as 0/0/1.
     *
<<<<<<< HEAD
     * @param mixed $number
     *
     * @return float
     */
    public static function validateNotNegative($number)
=======
     * @phpstan-assert float $number
     */
    public static function validateNotNegative(mixed $number): float
>>>>>>> match
    {
        if (!is_numeric($number)) {
            throw new Exception(ExcelError::VALUE());
        }
        if ($number >= 0) {
            return (float) $number;
        }

        throw new Exception(ExcelError::NAN());
    }

    public static function silly1900(DateTime $PHPDateObject, string $mod = '-1 day'): void
    {
        $isoDate = $PHPDateObject->format('c');
        if ($isoDate < '1900-03-01') {
            $PHPDateObject->modify($mod);
        }
    }

    public static function dateParse(string $string): array
    {
        return self::forceArray(date_parse($string));
    }

    public static function dateParseSucceeded(array $dateArray): bool
    {
        return $dateArray['error_count'] === 0;
    }

    /**
     * Despite documentation, date_parse probably never returns false.
     * Just in case, this routine helps guarantee it.
     *
     * @param array|false $dateArray
     */
<<<<<<< HEAD
    private static function forceArray($dateArray): array
    {
        return is_array($dateArray) ? $dateArray : ['error_count' => 1];
    }
=======
    private static function forceArray(array|bool $dateArray): array
    {
        return is_array($dateArray) ? $dateArray : ['error_count' => 1];
    }

    public static function floatOrInt(mixed $value): float|int
    {
        $result = Functions::scalar($value);

        return is_numeric($result) ? ($result + 0) : 0;
    }
>>>>>>> match
}
