<?php

namespace PhpOffice\PhpSpreadsheet\Calculation;

use PhpOffice\PhpSpreadsheet\Shared\StringHelper;

class BinaryComparison
{
    /**
     * Epsilon Precision used for comparisons in calculations.
     */
    private const DELTA = 0.1e-12;

    /**
     * Compare two strings in the same way as strcmp() except that lowercase come before uppercase letters.
     *
<<<<<<< HEAD
     * @param null|string $str1 First string value for the comparison
     * @param null|string $str2 Second string value for the comparison
     */
    private static function strcmpLowercaseFirst($str1, $str2): int
    {
        $inversedStr1 = StringHelper::strCaseReverse($str1 ?? '');
        $inversedStr2 = StringHelper::strCaseReverse($str2 ?? '');
=======
     * @param mixed $str1 First string value for the comparison, expect ?string
     * @param mixed $str2 Second string value for the comparison, expect ?string
     */
    private static function strcmpLowercaseFirst(mixed $str1, mixed $str2): int
    {
        $str1 = StringHelper::convertToString($str1);
        $str2 = StringHelper::convertToString($str2);
        $inversedStr1 = StringHelper::strCaseReverse($str1);
        $inversedStr2 = StringHelper::strCaseReverse($str2);
>>>>>>> match

        return strcmp($inversedStr1, $inversedStr2);
    }

    /**
     * PHP8.1 deprecates passing null to strcmp.
     *
<<<<<<< HEAD
     * @param null|string $str1 First string value for the comparison
     * @param null|string $str2 Second string value for the comparison
     */
    private static function strcmpAllowNull($str1, $str2): int
    {
        return strcmp($str1 ?? '', $str2 ?? '');
    }

    /**
     * @param mixed $operand1
     * @param mixed $operand2
     */
    public static function compare($operand1, $operand2, string $operator): bool
=======
     * @param mixed $str1 First string value for the comparison, expect ?string
     * @param mixed $str2 Second string value for the comparison, expect ?string
     */
    private static function strcmpAllowNull(mixed $str1, mixed $str2): int
    {
        $str1 = StringHelper::convertToString($str1);
        $str2 = StringHelper::convertToString($str2);

        return strcmp($str1, $str2);
    }

    public static function compare(mixed $operand1, mixed $operand2, string $operator): bool
>>>>>>> match
    {
        //    Simple validate the two operands if they are string values
        if (is_string($operand1) && $operand1 > '' && $operand1[0] == Calculation::FORMULA_STRING_QUOTE) {
            $operand1 = Calculation::unwrapResult($operand1);
        }
        if (is_string($operand2) && $operand2 > '' && $operand2[0] == Calculation::FORMULA_STRING_QUOTE) {
            $operand2 = Calculation::unwrapResult($operand2);
        }

        // Use case insensitive comparaison if not OpenOffice mode
        if (Functions::getCompatibilityMode() != Functions::COMPATIBILITY_OPENOFFICE) {
            if (is_string($operand1)) {
                $operand1 = StringHelper::strToUpper($operand1);
            }
            if (is_string($operand2)) {
                $operand2 = StringHelper::strToUpper($operand2);
            }
        }

<<<<<<< HEAD
        $useLowercaseFirstComparison = is_string($operand1) &&
            is_string($operand2) &&
            Functions::getCompatibilityMode() === Functions::COMPATIBILITY_OPENOFFICE;
=======
        $useLowercaseFirstComparison = is_string($operand1)
            && is_string($operand2)
            && Functions::getCompatibilityMode() === Functions::COMPATIBILITY_OPENOFFICE;
>>>>>>> match

        return self::evaluateComparison($operand1, $operand2, $operator, $useLowercaseFirstComparison);
    }

<<<<<<< HEAD
    /**
     * @param mixed $operand1
     * @param mixed $operand2
     */
    private static function evaluateComparison($operand1, $operand2, string $operator, bool $useLowercaseFirstComparison): bool
    {
        switch ($operator) {
            //    Equality
            case '=':
                return self::equal($operand1, $operand2);
            //    Greater than
            case '>':
                return self::greaterThan($operand1, $operand2, $useLowercaseFirstComparison);
            //    Less than
            case '<':
                return self::lessThan($operand1, $operand2, $useLowercaseFirstComparison);
            //    Greater than or equal
            case '>=':
                return self::greaterThanOrEqual($operand1, $operand2, $useLowercaseFirstComparison);
            //    Less than or equal
            case '<=':
                return self::lessThanOrEqual($operand1, $operand2, $useLowercaseFirstComparison);
            //    Inequality
            case '<>':
                return self::notEqual($operand1, $operand2);
            default:
                throw new Exception('Unsupported binary comparison operator');
        }
    }

    /**
     * @param mixed $operand1
     * @param mixed $operand2
     */
    private static function equal($operand1, $operand2): bool
=======
    private static function evaluateComparison(mixed $operand1, mixed $operand2, string $operator, bool $useLowercaseFirstComparison): bool
    {
        return match ($operator) {
            '=' => self::equal($operand1, $operand2),
            '>' => self::greaterThan($operand1, $operand2, $useLowercaseFirstComparison),
            '<' => self::lessThan($operand1, $operand2, $useLowercaseFirstComparison),
            '>=' => self::greaterThanOrEqual($operand1, $operand2, $useLowercaseFirstComparison),
            '<=' => self::lessThanOrEqual($operand1, $operand2, $useLowercaseFirstComparison),
            '<>' => self::notEqual($operand1, $operand2),
            default => throw new Exception('Unsupported binary comparison operator'),
        };
    }

    private static function equal(mixed $operand1, mixed $operand2): bool
>>>>>>> match
    {
        if (is_numeric($operand1) && is_numeric($operand2)) {
            $result = (abs($operand1 - $operand2) < self::DELTA);
        } elseif (($operand1 === null && is_numeric($operand2)) || ($operand2 === null && is_numeric($operand1))) {
            $result = $operand1 == $operand2;
        } else {
            $result = self::strcmpAllowNull($operand1, $operand2) == 0;
        }

        return $result;
    }

<<<<<<< HEAD
    /**
     * @param mixed $operand1
     * @param mixed $operand2
     */
    private static function greaterThanOrEqual($operand1, $operand2, bool $useLowercaseFirstComparison): bool
=======
    private static function greaterThanOrEqual(mixed $operand1, mixed $operand2, bool $useLowercaseFirstComparison): bool
>>>>>>> match
    {
        if (is_numeric($operand1) && is_numeric($operand2)) {
            $result = ((abs($operand1 - $operand2) < self::DELTA) || ($operand1 > $operand2));
        } elseif (($operand1 === null && is_numeric($operand2)) || ($operand2 === null && is_numeric($operand1))) {
            $result = $operand1 >= $operand2;
        } elseif ($useLowercaseFirstComparison) {
            $result = self::strcmpLowercaseFirst($operand1, $operand2) >= 0;
        } else {
            $result = self::strcmpAllowNull($operand1, $operand2) >= 0;
        }

        return $result;
    }

<<<<<<< HEAD
    /**
     * @param mixed $operand1
     * @param mixed $operand2
     */
    private static function lessThanOrEqual($operand1, $operand2, bool $useLowercaseFirstComparison): bool
=======
    private static function lessThanOrEqual(mixed $operand1, mixed $operand2, bool $useLowercaseFirstComparison): bool
>>>>>>> match
    {
        if (is_numeric($operand1) && is_numeric($operand2)) {
            $result = ((abs($operand1 - $operand2) < self::DELTA) || ($operand1 < $operand2));
        } elseif (($operand1 === null && is_numeric($operand2)) || ($operand2 === null && is_numeric($operand1))) {
            $result = $operand1 <= $operand2;
        } elseif ($useLowercaseFirstComparison) {
            $result = self::strcmpLowercaseFirst($operand1, $operand2) <= 0;
        } else {
            $result = self::strcmpAllowNull($operand1, $operand2) <= 0;
        }

        return $result;
    }

<<<<<<< HEAD
    /**
     * @param mixed $operand1
     * @param mixed $operand2
     */
    private static function greaterThan($operand1, $operand2, bool $useLowercaseFirstComparison): bool
=======
    private static function greaterThan(mixed $operand1, mixed $operand2, bool $useLowercaseFirstComparison): bool
>>>>>>> match
    {
        return self::lessThanOrEqual($operand1, $operand2, $useLowercaseFirstComparison) !== true;
    }

<<<<<<< HEAD
    /**
     * @param mixed $operand1
     * @param mixed $operand2
     */
    private static function lessThan($operand1, $operand2, bool $useLowercaseFirstComparison): bool
=======
    private static function lessThan(mixed $operand1, mixed $operand2, bool $useLowercaseFirstComparison): bool
>>>>>>> match
    {
        return self::greaterThanOrEqual($operand1, $operand2, $useLowercaseFirstComparison) !== true;
    }

<<<<<<< HEAD
    /**
     * @param mixed $operand1
     * @param mixed $operand2
     */
    private static function notEqual($operand1, $operand2): bool
=======
    private static function notEqual(mixed $operand1, mixed $operand2): bool
>>>>>>> match
    {
        return self::equal($operand1, $operand2) !== true;
    }
}
