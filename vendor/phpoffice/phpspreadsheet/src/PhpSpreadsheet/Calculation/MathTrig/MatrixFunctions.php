<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\MathTrig;

use Matrix\Builder;
use Matrix\Div0Exception as MatrixDiv0Exception;
use Matrix\Exception as MatrixException;
use Matrix\Matrix;
use PhpOffice\PhpSpreadsheet\Calculation\Exception;
use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;

class MatrixFunctions
{
    /**
     * Convert parameter to Matrix.
     *
     * @param mixed $matrixValues A matrix of values
     */
<<<<<<< HEAD
    private static function getMatrix($matrixValues): Matrix
=======
    private static function getMatrix(mixed $matrixValues): Matrix
>>>>>>> match
    {
        $matrixData = [];
        if (!is_array($matrixValues)) {
            $matrixValues = [[$matrixValues]];
        }

        $row = 0;
        foreach ($matrixValues as $matrixRow) {
            if (!is_array($matrixRow)) {
                $matrixRow = [$matrixRow];
            }
            $column = 0;
            foreach ($matrixRow as $matrixCell) {
                if ((is_string($matrixCell)) || ($matrixCell === null)) {
                    throw new Exception(ExcelError::VALUE());
                }
                $matrixData[$row][$column] = $matrixCell;
                ++$column;
            }
            ++$row;
        }

        return new Matrix($matrixData);
    }

    /**
     * SEQUENCE.
     *
     * Generates a list of sequential numbers in an array.
     *
     * Excel Function:
     *      SEQUENCE(rows,[columns],[start],[step])
     *
     * @param mixed $rows the number of rows to return, defaults to 1
     * @param mixed $columns the number of columns to return, defaults to 1
     * @param mixed $start the first number in the sequence, defaults to 1
     * @param mixed $step the amount to increment each subsequent value in the array, defaults to 1
     *
     * @return array|string The resulting array, or a string containing an error
     */
<<<<<<< HEAD
    public static function sequence($rows = 1, $columns = 1, $start = 1, $step = 1)
=======
    public static function sequence(mixed $rows = 1, mixed $columns = 1, mixed $start = 1, mixed $step = 1): string|array
>>>>>>> match
    {
        try {
            $rows = (int) Helpers::validateNumericNullSubstitution($rows, 1);
            Helpers::validatePositive($rows);
            $columns = (int) Helpers::validateNumericNullSubstitution($columns, 1);
            Helpers::validatePositive($columns);
            $start = Helpers::validateNumericNullSubstitution($start, 1);
            $step = Helpers::validateNumericNullSubstitution($step, 1);
        } catch (Exception $e) {
            return $e->getMessage();
        }

        if ($step === 0) {
            return array_chunk(
                array_fill(0, $rows * $columns, $start),
                max($columns, 1)
            );
        }

        return array_chunk(
            range($start, $start + (($rows * $columns - 1) * $step), $step),
            max($columns, 1)
        );
    }

    /**
     * MDETERM.
     *
     * Returns the matrix determinant of an array.
     *
     * Excel Function:
     *        MDETERM(array)
     *
     * @param mixed $matrixValues A matrix of values
     *
     * @return float|string The result, or a string containing an error
     */
<<<<<<< HEAD
    public static function determinant($matrixValues)
=======
    public static function determinant(mixed $matrixValues)
>>>>>>> match
    {
        try {
            $matrix = self::getMatrix($matrixValues);

            return $matrix->determinant();
<<<<<<< HEAD
        } catch (MatrixException $ex) {
=======
        } catch (MatrixException) {
>>>>>>> match
            return ExcelError::VALUE();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * MINVERSE.
     *
     * Returns the inverse matrix for the matrix stored in an array.
     *
     * Excel Function:
     *        MINVERSE(array)
     *
     * @param mixed $matrixValues A matrix of values
     *
     * @return array|string The result, or a string containing an error
     */
<<<<<<< HEAD
    public static function inverse($matrixValues)
=======
    public static function inverse(mixed $matrixValues): array|string
>>>>>>> match
    {
        try {
            $matrix = self::getMatrix($matrixValues);

            return $matrix->inverse()->toArray();
<<<<<<< HEAD
        } catch (MatrixDiv0Exception $e) {
            return ExcelError::NAN();
        } catch (MatrixException $e) {
=======
        } catch (MatrixDiv0Exception) {
            return ExcelError::NAN();
        } catch (MatrixException) {
>>>>>>> match
            return ExcelError::VALUE();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * MMULT.
     *
     * @param mixed $matrixData1 A matrix of values
     * @param mixed $matrixData2 A matrix of values
     *
     * @return array|string The result, or a string containing an error
     */
<<<<<<< HEAD
    public static function multiply($matrixData1, $matrixData2)
=======
    public static function multiply(mixed $matrixData1, mixed $matrixData2): array|string
>>>>>>> match
    {
        try {
            $matrixA = self::getMatrix($matrixData1);
            $matrixB = self::getMatrix($matrixData2);

            return $matrixA->multiply($matrixB)->toArray();
<<<<<<< HEAD
        } catch (MatrixException $ex) {
=======
        } catch (MatrixException) {
>>>>>>> match
            return ExcelError::VALUE();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * MUnit.
     *
     * @param mixed $dimension Number of rows and columns
     *
     * @return array|string The result, or a string containing an error
     */
<<<<<<< HEAD
    public static function identity($dimension)
=======
    public static function identity(mixed $dimension)
>>>>>>> match
    {
        try {
            $dimension = (int) Helpers::validateNumericNullBool($dimension);
            Helpers::validatePositive($dimension, ExcelError::VALUE());
            $matrix = Builder::createIdentityMatrix($dimension, 0)->toArray();

            return $matrix;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
