<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\LookupRef;

use PhpOffice\PhpSpreadsheet\Calculation\ArrayEnabled;
use PhpOffice\PhpSpreadsheet\Calculation\Exception;
use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;

class Matrix
{
    use ArrayEnabled;

    /**
     * Helper function; NOT an implementation of any Excel Function.
     */
    public static function isColumnVector(array $values): bool
    {
        return count($values, COUNT_RECURSIVE) === (count($values, COUNT_NORMAL) * 2);
    }

    /**
     * Helper function; NOT an implementation of any Excel Function.
     */
    public static function isRowVector(array $values): bool
    {
<<<<<<< HEAD
        return count($values, COUNT_RECURSIVE) > 1 &&
            (count($values, COUNT_NORMAL) === 1 || count($values, COUNT_RECURSIVE) === count($values, COUNT_NORMAL));
=======
        return count($values, COUNT_RECURSIVE) > 1
            && (count($values, COUNT_NORMAL) === 1 || count($values, COUNT_RECURSIVE) === count($values, COUNT_NORMAL));
>>>>>>> match
    }

    /**
     * TRANSPOSE.
     *
     * @param array|mixed $matrixData A matrix of values
<<<<<<< HEAD
     *
     * @return array
     */
    public static function transpose($matrixData)
=======
     */
    public static function transpose($matrixData): array
>>>>>>> match
    {
        $returnMatrix = [];
        if (!is_array($matrixData)) {
            $matrixData = [[$matrixData]];
        }

        $column = 0;
<<<<<<< HEAD
=======
        /** @var iterable $matrixData */
>>>>>>> match
        foreach ($matrixData as $matrixRow) {
            $row = 0;
            foreach ($matrixRow as $matrixCell) {
                $returnMatrix[$row][$column] = $matrixCell;
                ++$row;
            }
            ++$column;
        }

        return $returnMatrix;
    }

    /**
     * INDEX.
     *
     * Uses an index to choose a value from a reference or array
     *
     * Excel Function:
     *        =INDEX(range_array, row_num, [column_num], [area_num])
     *
     * @param mixed $matrix A range of cells or an array constant
     * @param mixed $rowNum The row in the array or range from which to return a value.
     *                          If row_num is omitted, column_num is required.
     *                      Or can be an array of values
     * @param mixed $columnNum The column in the array or range from which to return a value.
     *                          If column_num is omitted, row_num is required.
     *                      Or can be an array of values
     *
     * TODO Provide support for area_num, currently not supported
     *
     * @return mixed the value of a specified cell or array of cells
     *         If an array of values is passed as the $rowNum and/or $columnNum arguments, then the returned result
     *            will also be an array with the same dimensions
     */
<<<<<<< HEAD
    public static function index($matrix, $rowNum = 0, $columnNum = null)
=======
    public static function index(mixed $matrix, mixed $rowNum = 0, mixed $columnNum = null): mixed
>>>>>>> match
    {
        if (is_array($rowNum) || is_array($columnNum)) {
            return self::evaluateArrayArgumentsSubsetFrom([self::class, __FUNCTION__], 1, $matrix, $rowNum, $columnNum);
        }

        $rowNum = $rowNum ?? 0;
<<<<<<< HEAD
        $originalColumnNum = $columnNum;
        $columnNum = $columnNum ?? 0;
=======
        $columnNum = $columnNum ?? 0;
        if (is_scalar($matrix)) {
            if ($rowNum === 0 || $rowNum === 1) {
                if ($columnNum === 0 || $columnNum === 1) {
                    if ($columnNum === 1 || $rowNum === 1) {
                        return $matrix;
                    }
                }
            }
        }
>>>>>>> match

        try {
            $rowNum = LookupRefValidations::validatePositiveInt($rowNum);
            $columnNum = LookupRefValidations::validatePositiveInt($columnNum);
        } catch (Exception $e) {
            return $e->getMessage();
        }

<<<<<<< HEAD
=======
        if (is_array($matrix) && count($matrix) === 1 && $rowNum > 1) {
            $matrixKey = array_keys($matrix)[0];
            if (is_array($matrix[$matrixKey])) {
                $tempMatrix = [];
                foreach ($matrix[$matrixKey] as $key => $value) {
                    $tempMatrix[$key] = [$value];
                }
                $matrix = $tempMatrix;
            }
        }

>>>>>>> match
        if (!is_array($matrix) || ($rowNum > count($matrix))) {
            return ExcelError::REF();
        }

        $rowKeys = array_keys($matrix);
<<<<<<< HEAD
        $columnKeys = @array_keys($matrix[$rowKeys[0]]);
=======
        $columnKeys = @array_keys($matrix[$rowKeys[0]]); //* @phpstan-ignore-line
>>>>>>> match

        if ($columnNum > count($columnKeys)) {
            return ExcelError::REF();
        }
<<<<<<< HEAD
        if ($originalColumnNum === null && 1 < count($columnKeys)) {
            return ExcelError::REF();
        }
=======
>>>>>>> match

        if ($columnNum === 0) {
            return self::extractRowValue($matrix, $rowKeys, $rowNum);
        }

        $columnNum = $columnKeys[--$columnNum];
        if ($rowNum === 0) {
            return array_map(
<<<<<<< HEAD
                function ($value) {
                    return [$value];
                },
=======
                fn ($value): array => [$value],
>>>>>>> match
                array_column($matrix, $columnNum)
            );
        }
        $rowNum = $rowKeys[--$rowNum];
<<<<<<< HEAD
=======
        /** @var array[] $matrix */
>>>>>>> match

        return $matrix[$rowNum][$columnNum];
    }

<<<<<<< HEAD
    /** @return mixed */
    private static function extractRowValue(array $matrix, array $rowKeys, int $rowNum)
=======
    private static function extractRowValue(array $matrix, array $rowKeys, int $rowNum): mixed
>>>>>>> match
    {
        if ($rowNum === 0) {
            return $matrix;
        }

        $rowNum = $rowKeys[--$rowNum];
        $row = $matrix[$rowNum];
        if (is_array($row)) {
            return [$rowNum => $row];
        }

        return $row;
    }
}
