<?php

namespace PhpOffice\PhpSpreadsheet\Calculation;

use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Shared\Date;
<<<<<<< HEAD
=======
use PhpOffice\PhpSpreadsheet\Shared\StringHelper;
>>>>>>> match

class Functions
{
    const PRECISION = 8.88E-016;

    /**
     * 2 / PI.
     */
    const M_2DIVPI = 0.63661977236758134307553505349006;

    const COMPATIBILITY_EXCEL = 'Excel';
    const COMPATIBILITY_GNUMERIC = 'Gnumeric';
    const COMPATIBILITY_OPENOFFICE = 'OpenOfficeCalc';

    /** Use of RETURNDATE_PHP_NUMERIC is discouraged - not 32-bit Y2038-safe, no timezone. */
    const RETURNDATE_PHP_NUMERIC = 'P';
    /** Use of RETURNDATE_UNIX_TIMESTAMP is discouraged - not 32-bit Y2038-safe, no timezone. */
    const RETURNDATE_UNIX_TIMESTAMP = 'P';
    const RETURNDATE_PHP_OBJECT = 'O';
    const RETURNDATE_PHP_DATETIME_OBJECT = 'O';
    const RETURNDATE_EXCEL = 'E';

<<<<<<< HEAD
    /**
     * Compatibility mode to use for error checking and responses.
     *
     * @var string
     */
    protected static $compatibilityMode = self::COMPATIBILITY_EXCEL;

    /**
     * Data Type to use when returning date values.
     *
     * @var string
     */
    protected static $returnDateType = self::RETURNDATE_EXCEL;
=======
    public const NOT_YET_IMPLEMENTED = '#Not Yet Implemented';

    /**
     * Compatibility mode to use for error checking and responses.
     */
    protected static string $compatibilityMode = self::COMPATIBILITY_EXCEL;

    /**
     * Data Type to use when returning date values.
     */
    protected static string $returnDateType = self::RETURNDATE_EXCEL;
>>>>>>> match

    /**
     * Set the Compatibility Mode.
     *
     * @param string $compatibilityMode Compatibility Mode
     *                                  Permitted values are:
     *                                      Functions::COMPATIBILITY_EXCEL        'Excel'
     *                                      Functions::COMPATIBILITY_GNUMERIC     'Gnumeric'
     *                                      Functions::COMPATIBILITY_OPENOFFICE   'OpenOfficeCalc'
     *
     * @return bool (Success or Failure)
     */
<<<<<<< HEAD
    public static function setCompatibilityMode($compatibilityMode)
    {
        if (
            ($compatibilityMode == self::COMPATIBILITY_EXCEL) ||
            ($compatibilityMode == self::COMPATIBILITY_GNUMERIC) ||
            ($compatibilityMode == self::COMPATIBILITY_OPENOFFICE)
=======
    public static function setCompatibilityMode(string $compatibilityMode): bool
    {
        if (
            ($compatibilityMode == self::COMPATIBILITY_EXCEL)
            || ($compatibilityMode == self::COMPATIBILITY_GNUMERIC)
            || ($compatibilityMode == self::COMPATIBILITY_OPENOFFICE)
>>>>>>> match
        ) {
            self::$compatibilityMode = $compatibilityMode;

            return true;
        }

        return false;
    }

    /**
     * Return the current Compatibility Mode.
     *
     * @return string Compatibility Mode
     *                Possible Return values are:
     *                    Functions::COMPATIBILITY_EXCEL        'Excel'
     *                    Functions::COMPATIBILITY_GNUMERIC     'Gnumeric'
     *                    Functions::COMPATIBILITY_OPENOFFICE   'OpenOfficeCalc'
     */
<<<<<<< HEAD
    public static function getCompatibilityMode()
=======
    public static function getCompatibilityMode(): string
>>>>>>> match
    {
        return self::$compatibilityMode;
    }

    /**
     * Set the Return Date Format used by functions that return a date/time (Excel, PHP Serialized Numeric or PHP DateTime Object).
     *
     * @param string $returnDateType Return Date Format
     *                               Permitted values are:
     *                                   Functions::RETURNDATE_UNIX_TIMESTAMP       'P'
     *                                   Functions::RETURNDATE_PHP_DATETIME_OBJECT  'O'
     *                                   Functions::RETURNDATE_EXCEL                'E'
     *
     * @return bool Success or failure
     */
<<<<<<< HEAD
    public static function setReturnDateType($returnDateType)
    {
        if (
            ($returnDateType == self::RETURNDATE_UNIX_TIMESTAMP) ||
            ($returnDateType == self::RETURNDATE_PHP_DATETIME_OBJECT) ||
            ($returnDateType == self::RETURNDATE_EXCEL)
=======
    public static function setReturnDateType(string $returnDateType): bool
    {
        if (
            ($returnDateType == self::RETURNDATE_UNIX_TIMESTAMP)
            || ($returnDateType == self::RETURNDATE_PHP_DATETIME_OBJECT)
            || ($returnDateType == self::RETURNDATE_EXCEL)
>>>>>>> match
        ) {
            self::$returnDateType = $returnDateType;

            return true;
        }

        return false;
    }

    /**
     * Return the current Return Date Format for functions that return a date/time (Excel, PHP Serialized Numeric or PHP Object).
     *
     * @return string Return Date Format
     *                Possible Return values are:
     *                    Functions::RETURNDATE_UNIX_TIMESTAMP         'P'
     *                    Functions::RETURNDATE_PHP_DATETIME_OBJECT    'O'
     *                    Functions::RETURNDATE_EXCEL            '     'E'
     */
<<<<<<< HEAD
    public static function getReturnDateType()
=======
    public static function getReturnDateType(): string
>>>>>>> match
    {
        return self::$returnDateType;
    }

    /**
     * DUMMY.
     *
     * @return string #Not Yet Implemented
     */
<<<<<<< HEAD
    public static function DUMMY()
    {
        return '#Not Yet Implemented';
    }

    /** @param mixed $idx */
    public static function isMatrixValue($idx): bool
    {
        return (substr_count($idx, '.') <= 1) || (preg_match('/\.[A-Z]/', $idx) > 0);
    }

    /** @param mixed $idx */
    public static function isValue($idx): bool
    {
        return substr_count($idx, '.') === 0;
    }

    /** @param mixed $idx */
    public static function isCellValue($idx): bool
    {
        return substr_count($idx, '.') > 1;
    }

    /** @param mixed $condition */
    public static function ifCondition($condition): string
    {
        $condition = self::flattenSingleValue($condition);

        if ($condition === '') {
=======
    public static function DUMMY(): string
    {
        return self::NOT_YET_IMPLEMENTED;
    }

    public static function isMatrixValue(mixed $idx): bool
    {
        $idx = StringHelper::convertToString($idx);

        return (substr_count($idx, '.') <= 1) || (preg_match('/\.[A-Z]/', $idx) > 0);
    }

    public static function isValue(mixed $idx): bool
    {
        $idx = StringHelper::convertToString($idx);

        return substr_count($idx, '.') === 0;
    }

    public static function isCellValue(mixed $idx): bool
    {
        $idx = StringHelper::convertToString($idx);

        return substr_count($idx, '.') > 1;
    }

    public static function ifCondition(mixed $condition): string
    {
        $condition = self::flattenSingleValue($condition);

        if ($condition === '' || $condition === null) {
>>>>>>> match
            return '=""';
        }
        if (!is_string($condition) || !in_array($condition[0], ['>', '<', '='], true)) {
            $condition = self::operandSpecialHandling($condition);
            if (is_bool($condition)) {
                return '=' . ($condition ? 'TRUE' : 'FALSE');
<<<<<<< HEAD
            } elseif (!is_numeric($condition)) {
=======
            }
            if (!is_numeric($condition)) {
>>>>>>> match
                if ($condition !== '""') { // Not an empty string
                    // Escape any quotes in the string value
                    $condition = (string) preg_replace('/"/ui', '""', $condition);
                }
                $condition = Calculation::wrapResult(strtoupper($condition));
            }

<<<<<<< HEAD
            return str_replace('""""', '""', '=' . $condition);
        }
        preg_match('/(=|<[>=]?|>=?)(.*)/', $condition, $matches);
        [, $operator, $operand] = $matches;

        $operand = self::operandSpecialHandling($operand);
=======
            return str_replace('""""', '""', '=' . StringHelper::convertToString($condition));
        }
        $operator = $operand = '';
        if (1 === preg_match('/(=|<[>=]?|>=?)(.*)/', $condition, $matches)) {
            [, $operator, $operand] = $matches;
        }

        $operand = (string) self::operandSpecialHandling($operand);
>>>>>>> match
        if (is_numeric(trim($operand, '"'))) {
            $operand = trim($operand, '"');
        } elseif (!is_numeric($operand) && $operand !== 'FALSE' && $operand !== 'TRUE') {
            $operand = str_replace('"', '""', $operand);
            $operand = Calculation::wrapResult(strtoupper($operand));
<<<<<<< HEAD
=======
            $operand = StringHelper::convertToString($operand);
>>>>>>> match
        }

        return str_replace('""""', '""', $operator . $operand);
    }

<<<<<<< HEAD
    /**
     * @param mixed $operand
     *
     * @return mixed
     */
    private static function operandSpecialHandling($operand)
    {
        if (is_numeric($operand) || is_bool($operand)) {
            return $operand;
        } elseif (strtoupper($operand) === Calculation::getTRUE() || strtoupper($operand) === Calculation::getFALSE()) {
=======
    private static function operandSpecialHandling(mixed $operand): bool|float|int|string
    {
        if (is_numeric($operand) || is_bool($operand)) {
            return $operand;
        }
        $operand = StringHelper::convertToString($operand);
        if (strtoupper($operand) === Calculation::getTRUE() || strtoupper($operand) === Calculation::getFALSE()) {
>>>>>>> match
            return strtoupper($operand);
        }

        // Check for percentage
        if (preg_match('/^\-?\d*\.?\d*\s?\%$/', $operand)) {
            return ((float) rtrim($operand, '%')) / 100;
        }

        // Check for dates
        if (($dateValueOperand = Date::stringToExcel($operand)) !== false) {
            return $dateValueOperand;
        }

        return $operand;
    }

    /**
<<<<<<< HEAD
     * NULL.
     *
     * Returns the error value #NULL!
     *
     * @deprecated 1.23.0 Use the null() method in the Information\ExcelError class instead
     * @see Information\ExcelError::null()
     *
     * @return string #NULL!
     */
    public static function null()
    {
        return Information\ExcelError::null();
    }

    /**
     * NaN.
     *
     * Returns the error value #NUM!
     *
     * @deprecated 1.23.0 Use the NAN() method in the Information\Error class instead
     * @see Information\ExcelError::NAN()
     *
     * @return string #NUM!
     */
    public static function NAN()
    {
        return Information\ExcelError::NAN();
    }

    /**
     * REF.
     *
     * Returns the error value #REF!
     *
     * @deprecated 1.23.0 Use the REF() method in the Information\ExcelError class instead
     * @see Information\ExcelError::REF()
     *
     * @return string #REF!
     */
    public static function REF()
    {
        return Information\ExcelError::REF();
    }

    /**
     * NA.
     *
     * Excel Function:
     *        =NA()
     *
     * Returns the error value #N/A
     *        #N/A is the error value that means "no value is available."
     *
     * @deprecated 1.23.0 Use the NA() method in the Information\ExcelError class instead
     * @see Information\ExcelError::NA()
     *
     * @return string #N/A!
     */
    public static function NA()
    {
        return Information\ExcelError::NA();
    }

    /**
     * VALUE.
     *
     * Returns the error value #VALUE!
     *
     * @deprecated 1.23.0 Use the VALUE() method in the Information\ExcelError class instead
     * @see Information\ExcelError::VALUE()
     *
     * @return string #VALUE!
     */
    public static function VALUE()
    {
        return Information\ExcelError::VALUE();
    }

    /**
     * NAME.
     *
     * Returns the error value #NAME?
     *
     * @deprecated 1.23.0 Use the NAME() method in the Information\ExcelError class instead
     * @see Information\ExcelError::NAME()
     *
     * @return string #NAME?
     */
    public static function NAME()
    {
        return Information\ExcelError::NAME();
    }

    /**
     * DIV0.
     *
     * @deprecated 1.23.0 Use the DIV0() method in the Information\ExcelError class instead
     * @see Information\ExcelError::DIV0()
     *
     * @return string #Not Yet Implemented
     */
    public static function DIV0()
    {
        return Information\ExcelError::DIV0();
    }

    /**
     * ERROR_TYPE.
     *
     * @param mixed $value Value to check
     *
     * @deprecated 1.23.0 Use the type() method in the Information\ExcelError class instead
     * @see Information\ExcelError::type()
     *
     * @return array|int|string
     */
    public static function errorType($value = '')
    {
        return Information\ExcelError::type($value);
    }

    /**
     * IS_BLANK.
     *
     * @param mixed $value Value to check
     *
     * @deprecated 1.23.0 Use the isBlank() method in the Information\Value class instead
     * @see Information\Value::isBlank()
     *
     * @return array|bool
     */
    public static function isBlank($value = null)
    {
        return Information\Value::isBlank($value);
    }

    /**
     * IS_ERR.
     *
     * @param mixed $value Value to check
     *
     * @deprecated 1.23.0 Use the isErr() method in the Information\ErrorValue class instead
     * @see Information\ErrorValue::isErr()
     *
     * @return array|bool
     */
    public static function isErr($value = '')
    {
        return Information\ErrorValue::isErr($value);
    }

    /**
     * IS_ERROR.
     *
     * @param mixed $value Value to check
     *
     * @deprecated 1.23.0 Use the isError() method in the Information\ErrorValue class instead
     * @see Information\ErrorValue::isError()
     *
     * @return array|bool
     */
    public static function isError($value = '')
    {
        return Information\ErrorValue::isError($value);
    }

    /**
     * IS_NA.
     *
     * @param mixed $value Value to check
     *
     * @deprecated 1.23.0 Use the isNa() method in the Information\ErrorValue class instead
     * @see Information\ErrorValue::isNa()
     *
     * @return array|bool
     */
    public static function isNa($value = '')
    {
        return Information\ErrorValue::isNa($value);
    }

    /**
     * IS_EVEN.
     *
     * @param mixed $value Value to check
     *
     * @deprecated 1.23.0 Use the isEven() method in the Information\Value class instead
     * @see Information\Value::isEven()
     *
     * @return array|bool|string
     */
    public static function isEven($value = null)
    {
        return Information\Value::isEven($value);
    }

    /**
     * IS_ODD.
     *
     * @param mixed $value Value to check
     *
     * @deprecated 1.23.0 Use the isOdd() method in the Information\Value class instead
     * @see Information\Value::isOdd()
     *
     * @return array|bool|string
     */
    public static function isOdd($value = null)
    {
        return Information\Value::isOdd($value);
    }

    /**
     * IS_NUMBER.
     *
     * @param mixed $value Value to check
     *
     * @deprecated 1.23.0 Use the isNumber() method in the Information\Value class instead
     * @see Information\Value::isNumber()
     *
     * @return array|bool
     */
    public static function isNumber($value = null)
    {
        return Information\Value::isNumber($value);
    }

    /**
     * IS_LOGICAL.
     *
     * @param mixed $value Value to check
     *
     * @deprecated 1.23.0 Use the isLogical() method in the Information\Value class instead
     * @see Information\Value::isLogical()
     *
     * @return array|bool
     */
    public static function isLogical($value = null)
    {
        return Information\Value::isLogical($value);
    }

    /**
     * IS_TEXT.
     *
     * @param mixed $value Value to check
     *
     * @deprecated 1.23.0 Use the isText() method in the Information\Value class instead
     * @see Information\Value::isText()
     *
     * @return array|bool
     */
    public static function isText($value = null)
    {
        return Information\Value::isText($value);
    }

    /**
     * IS_NONTEXT.
     *
     * @param mixed $value Value to check
     *
     * @deprecated 1.23.0 Use the isNonText() method in the Information\Value class instead
     * @see Information\Value::isNonText()
     *
     * @return array|bool
     */
    public static function isNonText($value = null)
    {
        return Information\Value::isNonText($value);
    }

    /**
     * N.
     *
     * Returns a value converted to a number
     *
     * @deprecated 1.23.0 Use the asNumber() method in the Information\Value class instead
     * @see Information\Value::asNumber()
     *
     * @param null|mixed $value The value you want converted
     *
     * @return number|string N converts values listed in the following table
     *        If value is or refers to N returns
     *        A number            That number
     *        A date                The serial number of that date
     *        TRUE                1
     *        FALSE                0
     *        An error value        The error value
     *        Anything else        0
     */
    public static function n($value = null)
    {
        return Information\Value::asNumber($value);
    }

    /**
     * TYPE.
     *
     * Returns a number that identifies the type of a value
     *
     * @deprecated 1.23.0 Use the type() method in the Information\Value class instead
     * @see Information\Value::type()
     *
     * @param null|mixed $value The value you want tested
     *
     * @return number N converts values listed in the following table
     *        If value is or refers to N returns
     *        A number            1
     *        Text                2
     *        Logical Value        4
     *        An error value        16
     *        Array or Matrix        64
     */
    public static function TYPE($value = null)
    {
        return Information\Value::type($value);
    }

    /**
     * Convert a multi-dimensional array to a simple 1-dimensional array.
     *
     * @param array|mixed $array Array to be flattened
     *
     * @return array Flattened array
     */
    public static function flattenArray($array)
=======
     * Convert a multi-dimensional array to a simple 1-dimensional array.
     *
     * @param mixed $array Array to be flattened
     *
     * @return array Flattened array
     */
    public static function flattenArray(mixed $array): array
>>>>>>> match
    {
        if (!is_array($array)) {
            return (array) $array;
        }

        $flattened = [];
        $stack = array_values($array);

        while (!empty($stack)) {
            $value = array_shift($stack);

            if (is_array($value)) {
                array_unshift($stack, ...array_values($value));
            } else {
                $flattened[] = $value;
            }
        }

        return $flattened;
    }

    /**
<<<<<<< HEAD
     * @param mixed $value
     *
     * @return null|mixed
     */
    public static function scalar($value)
=======
     * Convert a multi-dimensional array to a simple 1-dimensional array.
     * Same as above but argument is specified in ... format.
     *
     * @param mixed $array Array to be flattened
     *
     * @return array Flattened array
     */
    public static function flattenArray2(mixed ...$array): array
    {
        $flattened = [];
        $stack = array_values($array);

        while (!empty($stack)) {
            $value = array_shift($stack);

            if (is_array($value)) {
                array_unshift($stack, ...array_values($value));
            } else {
                $flattened[] = $value;
            }
        }

        return $flattened;
    }

    public static function scalar(mixed $value): mixed
>>>>>>> match
    {
        if (!is_array($value)) {
            return $value;
        }

        do {
            $value = array_pop($value);
        } while (is_array($value));

        return $value;
    }

    /**
     * Convert a multi-dimensional array to a simple 1-dimensional array, but retain an element of indexing.
     *
     * @param array|mixed $array Array to be flattened
     *
     * @return array Flattened array
     */
<<<<<<< HEAD
    public static function flattenArrayIndexed($array)
=======
    public static function flattenArrayIndexed($array): array
>>>>>>> match
    {
        if (!is_array($array)) {
            return (array) $array;
        }

        $arrayValues = [];
        foreach ($array as $k1 => $value) {
            if (is_array($value)) {
                foreach ($value as $k2 => $val) {
                    if (is_array($val)) {
                        foreach ($val as $k3 => $v) {
                            $arrayValues[$k1 . '.' . $k2 . '.' . $k3] = $v;
                        }
                    } else {
                        $arrayValues[$k1 . '.' . $k2] = $val;
                    }
                }
            } else {
                $arrayValues[$k1] = $value;
            }
        }

        return $arrayValues;
    }

    /**
     * Convert an array to a single scalar value by extracting the first element.
     *
     * @param mixed $value Array or scalar value
<<<<<<< HEAD
     *
     * @return mixed
     */
    public static function flattenSingleValue($value = '')
=======
     */
    public static function flattenSingleValue(mixed $value): mixed
>>>>>>> match
    {
        while (is_array($value)) {
            $value = array_shift($value);
        }

        return $value;
    }

<<<<<<< HEAD
    /**
     * ISFORMULA.
     *
     * @deprecated 1.23.0 Use the isFormula() method in the Information\Value class instead
     * @see Information\Value::isFormula()
     *
     * @param mixed $cellReference The cell to check
     * @param ?Cell $cell The current cell (containing this formula)
     *
     * @return array|bool|string
     */
    public static function isFormula($cellReference = '', ?Cell $cell = null)
    {
        return Information\Value::isFormula($cellReference, $cell);
    }

=======
>>>>>>> match
    public static function expandDefinedName(string $coordinate, Cell $cell): string
    {
        $worksheet = $cell->getWorksheet();
        $spreadsheet = $worksheet->getParentOrThrow();
        // Uppercase coordinate
        $pCoordinatex = strtoupper($coordinate);
        // Eliminate leading equal sign
        $pCoordinatex = (string) preg_replace('/^=/', '', $pCoordinatex);
        $defined = $spreadsheet->getDefinedName($pCoordinatex, $worksheet);
        if ($defined !== null) {
            $worksheet2 = $defined->getWorkSheet();
            if (!$defined->isFormula() && $worksheet2 !== null) {
<<<<<<< HEAD
                $coordinate = "'" . $worksheet2->getTitle() . "'!" .
                    (string) preg_replace('/^=/', '', str_replace('$', '', $defined->getValue()));
=======
                $coordinate = "'" . $worksheet2->getTitle() . "'!"
                    . (string) preg_replace('/^=/', '', str_replace('$', '', $defined->getValue()));
>>>>>>> match
            }
        }

        return $coordinate;
    }

    public static function trimTrailingRange(string $coordinate): string
    {
<<<<<<< HEAD
        return (string) preg_replace('/:[\\w\$]+$/', '', $coordinate);
=======
        return (string) preg_replace('/:[\w\$]+$/', '', $coordinate);
>>>>>>> match
    }

    public static function trimSheetFromCellReference(string $coordinate): string
    {
<<<<<<< HEAD
        if (strpos($coordinate, '!') !== false) {
=======
        if (str_contains($coordinate, '!')) {
>>>>>>> match
            $coordinate = substr($coordinate, strrpos($coordinate, '!') + 1);
        }

        return $coordinate;
    }
}
