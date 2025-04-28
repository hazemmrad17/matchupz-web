<?php

namespace PhpOffice\PhpSpreadsheet\Style\NumberFormat\Wizard;

<<<<<<< HEAD
abstract class DateTimeWizard implements Wizard
=======
use Stringable;

abstract class DateTimeWizard implements Stringable, Wizard
>>>>>>> match
{
    protected const NO_ESCAPING_NEEDED = "$+-/():!^&'~{}<>= ";

    protected function padSeparatorArray(array $separators, int $count): array
    {
        $lastSeparator = array_pop($separators);

        return $separators + array_fill(0, $count, $lastSeparator);
    }

    protected function escapeSingleCharacter(string $value): string
    {
<<<<<<< HEAD
        if (strpos(self::NO_ESCAPING_NEEDED, $value) !== false) {
=======
        if (str_contains(self::NO_ESCAPING_NEEDED, $value)) {
>>>>>>> match
            return $value;
        }

        return "\\{$value}";
    }

    protected function wrapLiteral(string $value): string
    {
        if (mb_strlen($value, 'UTF-8') === 1) {
            return $this->escapeSingleCharacter($value);
        }

        // Wrap any other string literals in quotes, so that they're clearly defined as string literals
        return '"' . str_replace('"', '""', $value) . '"';
    }

    protected function intersperse(string $formatBlock, ?string $separator): string
    {
        return "{$formatBlock}{$separator}";
    }

    public function __toString(): string
    {
        return $this->format();
    }
}
