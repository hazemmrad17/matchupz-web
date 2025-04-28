<?php

namespace PhpOffice\PhpSpreadsheet\Cell;

use PhpOffice\PhpSpreadsheet\Calculation\Calculation;
<<<<<<< HEAD
use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;
use PhpOffice\PhpSpreadsheet\Exception;
=======
use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheet\Exception;
use PhpOffice\PhpSpreadsheet\Shared\StringHelper;
>>>>>>> match

/**
 * Validate a cell value according to its validation rules.
 */
class DataValidator
{
    /**
     * Does this cell contain valid value?
     *
     * @param Cell $cell Cell to check the value
<<<<<<< HEAD
     *
     * @return bool
     */
    public function isValid(Cell $cell)
=======
     */
    public function isValid(Cell $cell): bool
>>>>>>> match
    {
        if (!$cell->hasDataValidation() || $cell->getDataValidation()->getType() === DataValidation::TYPE_NONE) {
            return true;
        }

        $cellValue = $cell->getValue();
        $dataValidation = $cell->getDataValidation();

        if (!$dataValidation->getAllowBlank() && ($cellValue === null || $cellValue === '')) {
            return false;
        }

        $returnValue = false;
        $type = $dataValidation->getType();
        if ($type === DataValidation::TYPE_LIST) {
            $returnValue = $this->isValueInList($cell);
        } elseif ($type === DataValidation::TYPE_WHOLE) {
            if (!is_numeric($cellValue) || fmod((float) $cellValue, 1) != 0) {
                $returnValue = false;
            } else {
<<<<<<< HEAD
                $returnValue = $this->numericOperator($dataValidation, (int) $cellValue);
=======
                $returnValue = $this->numericOperator($dataValidation, (int) $cellValue, $cell);
>>>>>>> match
            }
        } elseif ($type === DataValidation::TYPE_DECIMAL || $type === DataValidation::TYPE_DATE || $type === DataValidation::TYPE_TIME) {
            if (!is_numeric($cellValue)) {
                $returnValue = false;
            } else {
<<<<<<< HEAD
                $returnValue = $this->numericOperator($dataValidation, (float) $cellValue);
            }
        } elseif ($type === DataValidation::TYPE_TEXTLENGTH) {
            $returnValue = $this->numericOperator($dataValidation, mb_strlen((string) $cellValue));
=======
                $returnValue = $this->numericOperator($dataValidation, (float) $cellValue, $cell);
            }
        } elseif ($type === DataValidation::TYPE_TEXTLENGTH) {
            $returnValue = $this->numericOperator($dataValidation, mb_strlen($cell->getValueString()), $cell);
>>>>>>> match
        }

        return $returnValue;
    }

<<<<<<< HEAD
    /** @param float|int $cellValue */
    private function numericOperator(DataValidation $dataValidation, $cellValue): bool
    {
        $operator = $dataValidation->getOperator();
        $formula1 = $dataValidation->getFormula1();
        $formula2 = $dataValidation->getFormula2();
        $returnValue = false;
        if ($operator === DataValidation::OPERATOR_BETWEEN) {
            $returnValue = $cellValue >= $formula1 && $cellValue <= $formula2;
        } elseif ($operator === DataValidation::OPERATOR_NOTBETWEEN) {
            $returnValue = $cellValue < $formula1 || $cellValue > $formula2;
        } elseif ($operator === DataValidation::OPERATOR_EQUAL) {
            $returnValue = $cellValue == $formula1;
        } elseif ($operator === DataValidation::OPERATOR_NOTEQUAL) {
            $returnValue = $cellValue != $formula1;
        } elseif ($operator === DataValidation::OPERATOR_LESSTHAN) {
            $returnValue = $cellValue < $formula1;
        } elseif ($operator === DataValidation::OPERATOR_LESSTHANOREQUAL) {
            $returnValue = $cellValue <= $formula1;
        } elseif ($operator === DataValidation::OPERATOR_GREATERTHAN) {
            $returnValue = $cellValue > $formula1;
        } elseif ($operator === DataValidation::OPERATOR_GREATERTHANOREQUAL) {
            $returnValue = $cellValue >= $formula1;
        }

        return $returnValue;
=======
    private const TWO_FORMULAS = [DataValidation::OPERATOR_BETWEEN, DataValidation::OPERATOR_NOTBETWEEN];

    private static function evaluateNumericFormula(mixed $formula, Cell $cell): mixed
    {
        if (!is_numeric($formula)) {
            $calculation = Calculation::getInstance($cell->getWorksheet()->getParent());

            try {
                $formula2 = StringHelper::convertToString($formula);
                $result = $calculation
                    ->calculateFormula("=$formula2", $cell->getCoordinate(), $cell);
                while (is_array($result)) {
                    $result = array_pop($result);
                }
                $formula = $result;
            } catch (Exception) {
                // do nothing
            }
        }

        return $formula;
    }

    private function numericOperator(DataValidation $dataValidation, int|float $cellValue, Cell $cell): bool
    {
        $operator = $dataValidation->getOperator();
        $formula1 = self::evaluateNumericFormula(
            $dataValidation->getFormula1(),
            $cell
        );

        $formula2 = 0;
        if (in_array($operator, self::TWO_FORMULAS, true)) {
            $formula2 = self::evaluateNumericFormula(
                $dataValidation->getFormula2(),
                $cell
            );
        }

        return match ($operator) {
            DataValidation::OPERATOR_BETWEEN => $cellValue >= $formula1 && $cellValue <= $formula2,
            DataValidation::OPERATOR_NOTBETWEEN => $cellValue < $formula1 || $cellValue > $formula2,
            DataValidation::OPERATOR_EQUAL => $cellValue == $formula1,
            DataValidation::OPERATOR_NOTEQUAL => $cellValue != $formula1,
            DataValidation::OPERATOR_LESSTHAN => $cellValue < $formula1,
            DataValidation::OPERATOR_LESSTHANOREQUAL => $cellValue <= $formula1,
            DataValidation::OPERATOR_GREATERTHAN => $cellValue > $formula1,
            DataValidation::OPERATOR_GREATERTHANOREQUAL => $cellValue >= $formula1,
            default => false,
        };
>>>>>>> match
    }

    /**
     * Does this cell contain valid value, based on list?
     *
     * @param Cell $cell Cell to check the value
<<<<<<< HEAD
     *
     * @return bool
     */
    private function isValueInList(Cell $cell)
    {
        $cellValue = $cell->getValue();
=======
     */
    private function isValueInList(Cell $cell): bool
    {
        $cellValueString = $cell->getValueString();
>>>>>>> match
        $dataValidation = $cell->getDataValidation();

        $formula1 = $dataValidation->getFormula1();
        if (!empty($formula1)) {
            // inline values list
            if ($formula1[0] === '"') {
<<<<<<< HEAD
                return in_array(strtolower($cellValue), explode(',', strtolower(trim($formula1, '"'))), true);
            } elseif (strpos($formula1, ':') > 0) {
                // values list cells
                $matchFormula = '=MATCH(' . $cell->getCoordinate() . ', ' . $formula1 . ', 0)';
                $calculation = Calculation::getInstance($cell->getWorksheet()->getParent());

                try {
                    $result = $calculation->calculateFormula($matchFormula, $cell->getCoordinate(), $cell);
                    while (is_array($result)) {
                        $result = array_pop($result);
                    }

                    return $result !== ExcelError::NA();
                } catch (Exception $ex) {
                    return false;
                }
            }
=======
                return in_array(strtolower($cellValueString), explode(',', strtolower(trim($formula1, '"'))), true);
            }
            $calculation = Calculation::getInstance($cell->getWorksheet()->getParent());

            try {
                $result = $calculation->calculateFormula("=$formula1", $cell->getCoordinate(), $cell);
                $result = is_array($result) ? Functions::flattenArray($result) : [$result];
                foreach ($result as $oneResult) {
                    if (is_scalar($oneResult) && strcasecmp((string) $oneResult, $cellValueString) === 0) {
                        return true;
                    }
                }
            } catch (Exception) {
                // do nothing
            }

            return false;
>>>>>>> match
        }

        return true;
    }
}
