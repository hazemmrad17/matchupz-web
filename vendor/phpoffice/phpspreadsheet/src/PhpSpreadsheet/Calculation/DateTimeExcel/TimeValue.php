<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel;

<<<<<<< HEAD
=======
use Composer\Pcre\Preg;
>>>>>>> match
use Datetime;
use PhpOffice\PhpSpreadsheet\Calculation\ArrayEnabled;
use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;
use PhpOffice\PhpSpreadsheet\Shared\Date as SharedDateHelper;

class TimeValue
{
    use ArrayEnabled;

<<<<<<< HEAD
=======
    private const EXTRACT_TIME = '/\b'
        . '(\d+)' // match[1] - hour
        . '(:' // start of match[2] (rest of string) - colon
        . '(\d+' // start of match[3] - minute
        . '(:\d+' // start of match[4] - colon and seconds
        . '([.]\d+)?' // match[5] - optional decimal point followed by fractional seconds
        . ')?' // end of match[4], which is optional
        . ')' // end of match 3
        // Excel does not require 'm' to trail 'a' or 'p'; Php does
        . '(\s*(a|p))?' // match[6] optional whitespace followed by optional match[7] a or p
        . ')' // end of match[2]
        . '/i';

>>>>>>> match
    /**
     * TIMEVALUE.
     *
     * Returns a value that represents a particular time.
     * Use TIMEVALUE to convert a time represented by a text string to an Excel or PHP date/time stamp
     * value.
     *
     * NOTE: When used in a Cell Formula, MS Excel changes the cell format so that it matches the time
     * format of your regional settings. PhpSpreadsheet does not change cell formatting in this way.
     *
     * Excel Function:
     *        TIMEVALUE(timeValue)
     *
<<<<<<< HEAD
     * @param null|array|string $timeValue A text string that represents a time in any one of the Microsoft
=======
     * @param null|array|bool|float|int|string $timeValue A text string that represents a time in any one of the Microsoft
>>>>>>> match
     *                                    Excel time formats; for example, "6:45 PM" and "18:45" text strings
     *                                    within quotation marks that represent time.
     *                                    Date information in time_text is ignored.
     *                         Or can be an array of date/time values
     *
<<<<<<< HEAD
     * @return mixed Excel date/time serial value, PHP date/time serial value or PHP date/time object,
=======
     * @return array|Datetime|float|int|string Excel date/time serial value, PHP date/time serial value or PHP date/time object,
>>>>>>> match
     *                        depending on the value of the ReturnDateType flag
     *         If an array of numbers is passed as the argument, then the returned result will also be an array
     *            with the same dimensions
     */
<<<<<<< HEAD
    public static function fromString($timeValue)
=======
    public static function fromString(null|array|string|int|bool|float $timeValue): array|string|Datetime|int|float
>>>>>>> match
    {
        if (is_array($timeValue)) {
            return self::evaluateSingleArgumentArray([self::class, __FUNCTION__], $timeValue);
        }

        // try to parse as time iff there is at least one digit
<<<<<<< HEAD
        if (is_string($timeValue) && preg_match('/\\d/', $timeValue) !== 1) {
            return ExcelError::VALUE();
        }

        $timeValue = trim($timeValue ?? '', '"');
        $timeValue = str_replace(['/', '.'], '-', $timeValue);

        $arraySplit = preg_split('/[\/:\-\s]/', $timeValue) ?: [];
        if ((count($arraySplit) == 2 || count($arraySplit) == 3) && $arraySplit[0] > 24) {
            $arraySplit[0] = ($arraySplit[0] % 24);
            $timeValue = implode(':', $arraySplit);
=======
        if (is_string($timeValue) && !Preg::isMatch('/\d/', $timeValue)) {
            return ExcelError::VALUE();
        }

        $timeValue = trim((string) $timeValue, '"');
        if (Preg::isMatch(self::EXTRACT_TIME, $timeValue, $matches)) {
            if (empty($matches[6])) { // am/pm
                $hour = (int) $matches[0];
                $timeValue = ($hour % 24) . $matches[2];
            } elseif ($matches[6] === $matches[7]) { // Excel wants space before am/pm
                return ExcelError::VALUE();
            } else {
                $timeValue = $matches[0] . 'm';
            }
>>>>>>> match
        }

        $PHPDateArray = Helpers::dateParse($timeValue);
        $retValue = ExcelError::VALUE();
        if (Helpers::dateParseSucceeded($PHPDateArray)) {
<<<<<<< HEAD
            /** @var int */
            $hour = $PHPDateArray['hour'];
            /** @var int */
            $minute = $PHPDateArray['minute'];
            /** @var int */
=======
            $hour = $PHPDateArray['hour'];
            $minute = $PHPDateArray['minute'];
>>>>>>> match
            $second = $PHPDateArray['second'];
            // OpenOffice-specific code removed - it works just like Excel
            $excelDateValue = SharedDateHelper::formattedPHPToExcel(1900, 1, 1, $hour, $minute, $second) - 1;

            $retType = Functions::getReturnDateType();
            if ($retType === Functions::RETURNDATE_EXCEL) {
                $retValue = (float) $excelDateValue;
            } elseif ($retType === Functions::RETURNDATE_UNIX_TIMESTAMP) {
                $retValue = (int) SharedDateHelper::excelToTimestamp($excelDateValue + 25569) - 3600;
            } else {
<<<<<<< HEAD
                $retValue = new DateTime('1900-01-01 ' . $PHPDateArray['hour'] . ':' . $PHPDateArray['minute'] . ':' . $PHPDateArray['second']);
=======
                $retValue = new Datetime('1900-01-01 ' . $PHPDateArray['hour'] . ':' . $PHPDateArray['minute'] . ':' . $PHPDateArray['second']);
>>>>>>> match
            }
        }

        return $retValue;
    }
}
