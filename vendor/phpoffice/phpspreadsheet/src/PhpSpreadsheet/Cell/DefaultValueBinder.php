<?php

namespace PhpOffice\PhpSpreadsheet\Cell;

use DateTimeInterface;
<<<<<<< HEAD
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\Shared\StringHelper;
=======
use PhpOffice\PhpSpreadsheet\Calculation\Calculation;
use PhpOffice\PhpSpreadsheet\Calculation\Exception as CalculationException;
use PhpOffice\PhpSpreadsheet\Exception as SpreadsheetException;
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\Shared\StringHelper;
use Stringable;
>>>>>>> match

class DefaultValueBinder implements IValueBinder
{
    /**
     * Bind value to a cell.
     *
     * @param Cell $cell Cell to bind value to
     * @param mixed $value Value to bind in cell
<<<<<<< HEAD
     *
     * @return bool
     */
    public function bindValue(Cell $cell, $value)
=======
     */
    public function bindValue(Cell $cell, mixed $value): bool
>>>>>>> match
    {
        // sanitize UTF-8 strings
        if (is_string($value)) {
            $value = StringHelper::sanitizeUTF8($value);
<<<<<<< HEAD
        } elseif (is_object($value)) {
            // Handle any objects that might be injected
            if ($value instanceof DateTimeInterface) {
                $value = $value->format('Y-m-d H:i:s');
            } elseif (!($value instanceof RichText)) {
                // Attempt to cast any unexpected objects to string
                $value = (string) $value; // @phpstan-ignore-line
            }
=======
        } elseif ($value === null || is_scalar($value) || $value instanceof RichText) {
            // No need to do anything
        } elseif ($value instanceof DateTimeInterface) {
            $value = $value->format('Y-m-d H:i:s');
        } elseif ($value instanceof Stringable) {
            $value = (string) $value;
        } else {
            throw new SpreadsheetException('Unable to bind unstringable ' . gettype($value));
>>>>>>> match
        }

        // Set value explicit
        $cell->setValueExplicit($value, static::dataTypeForValue($value));

        // Done!
        return true;
    }

    /**
     * DataType for value.
<<<<<<< HEAD
     *
     * @param mixed $value
     *
     * @return string
     */
    public static function dataTypeForValue($value)
=======
     */
    public static function dataTypeForValue(mixed $value): string
>>>>>>> match
    {
        // Match the value against a few data types
        if ($value === null) {
            return DataType::TYPE_NULL;
<<<<<<< HEAD
        } elseif (is_float($value) || is_int($value)) {
            return DataType::TYPE_NUMERIC;
        } elseif (is_bool($value)) {
            return DataType::TYPE_BOOL;
        } elseif ($value === '') {
            return DataType::TYPE_STRING;
        } elseif ($value instanceof RichText) {
            return DataType::TYPE_INLINE;
        } elseif (is_string($value) && strlen($value) > 1 && $value[0] === '=') {
            return DataType::TYPE_FORMULA;
        } elseif (preg_match('/^[\+\-]?(\d+\\.?\d*|\d*\\.?\d+)([Ee][\-\+]?[0-2]?\d{1,3})?$/', $value)) {
            $tValue = ltrim($value, '+-');
            if (is_string($value) && strlen($tValue) > 1 && $tValue[0] === '0' && $tValue[1] !== '.') {
                return DataType::TYPE_STRING;
            } elseif ((strpos($value, '.') === false) && ($value > PHP_INT_MAX)) {
=======
        }
        if (is_float($value) || is_int($value)) {
            return DataType::TYPE_NUMERIC;
        }
        if (is_bool($value)) {
            return DataType::TYPE_BOOL;
        }
        if ($value === '') {
            return DataType::TYPE_STRING;
        }
        if ($value instanceof RichText) {
            return DataType::TYPE_INLINE;
        }
        if ($value instanceof Stringable) {
            $value = (string) $value;
        }
        if (!is_string($value)) {
            $gettype = is_object($value) ? get_class($value) : gettype($value);

            throw new SpreadsheetException("unusable type $gettype");
        }
        if (strlen($value) > 1 && $value[0] === '=') {
            $calculation = new Calculation();
            $calculation->disableBranchPruning();

            try {
                if (empty($calculation->parseFormula($value))) {
                    return DataType::TYPE_STRING;
                }
            } catch (CalculationException $e) {
                $message = $e->getMessage();
                if (
                    $message === 'Formula Error: An unexpected error occurred'
                    || str_contains($message, 'has no operands')
                ) {
                    return DataType::TYPE_STRING;
                }
            }

            return DataType::TYPE_FORMULA;
        }
        if (preg_match('/^[\+\-]?(\d+\.?\d*|\d*\.?\d+)([Ee][\-\+]?[0-2]?\d{1,3})?$/', $value)) {
            $tValue = ltrim($value, '+-');
            if (strlen($tValue) > 1 && $tValue[0] === '0' && $tValue[1] !== '.') {
                return DataType::TYPE_STRING;
            } elseif ((!str_contains($value, '.')) && ($value > PHP_INT_MAX)) {
>>>>>>> match
                return DataType::TYPE_STRING;
            } elseif (!is_numeric($value)) {
                return DataType::TYPE_STRING;
            }

            return DataType::TYPE_NUMERIC;
<<<<<<< HEAD
        } elseif (is_string($value)) {
            $errorCodes = DataType::getErrorCodes();
            if (isset($errorCodes[$value])) {
                return DataType::TYPE_ERROR;
            }
=======
        }
        $errorCodes = DataType::getErrorCodes();
        if (isset($errorCodes[$value])) {
            return DataType::TYPE_ERROR;
>>>>>>> match
        }

        return DataType::TYPE_STRING;
    }
}
