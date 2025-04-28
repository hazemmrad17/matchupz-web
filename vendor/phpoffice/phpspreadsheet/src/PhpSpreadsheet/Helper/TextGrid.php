<?php

namespace PhpOffice\PhpSpreadsheet\Helper;

<<<<<<< HEAD
class TextGrid
{
    /**
     * @var bool
     */
    private $isCli = true;

    /**
     * @var array
     */
    protected $matrix;

    /**
     * @var array
     */
    protected $rows;

    /**
     * @var array
     */
    protected $columns;

    /**
     * @var string
     */
    private $gridDisplay;

    public function __construct(array $matrix, bool $isCli = true)
=======
use PhpOffice\PhpSpreadsheet\Shared\StringHelper;

class TextGrid
{
    private bool $isCli;

    protected array $matrix;

    protected array $rows;

    protected array $columns;

    private string $gridDisplay;

    private bool $rowDividers = false;

    private bool $rowHeaders = true;

    private bool $columnHeaders = true;

    public function __construct(array $matrix, bool $isCli = true, bool $rowDividers = false, bool $rowHeaders = true, bool $columnHeaders = true)
>>>>>>> match
    {
        $this->rows = array_keys($matrix);
        $this->columns = array_keys($matrix[$this->rows[0]]);

        $matrix = array_values($matrix);
        array_walk(
            $matrix,
            function (&$row): void {
                $row = array_values($row);
            }
        );

        $this->matrix = $matrix;
        $this->isCli = $isCli;
<<<<<<< HEAD
=======
        $this->rowDividers = $rowDividers;
        $this->rowHeaders = $rowHeaders;
        $this->columnHeaders = $columnHeaders;
>>>>>>> match
    }

    public function render(): string
    {
<<<<<<< HEAD
        $this->gridDisplay = $this->isCli ? '' : '<pre>';

        $maxRow = max($this->rows);
        $maxRowLength = mb_strlen((string) $maxRow) + 1;
        $columnWidths = $this->getColumnWidths();

        $this->renderColumnHeader($maxRowLength, $columnWidths);
        $this->renderRows($maxRowLength, $columnWidths);
        $this->renderFooter($maxRowLength, $columnWidths);
=======
        $this->gridDisplay = $this->isCli ? '' : ('<pre>' . PHP_EOL);

        if (!empty($this->rows)) {
            $maxRow = max($this->rows);
            $maxRowLength = strlen((string) $maxRow) + 1;
            $columnWidths = $this->getColumnWidths();

            $this->renderColumnHeader($maxRowLength, $columnWidths);
            $this->renderRows($maxRowLength, $columnWidths);
            if (!$this->rowDividers) {
                $this->renderFooter($maxRowLength, $columnWidths);
            }
        }
>>>>>>> match

        $this->gridDisplay .= $this->isCli ? '' : '</pre>';

        return $this->gridDisplay;
    }

    private function renderRows(int $maxRowLength, array $columnWidths): void
    {
        foreach ($this->matrix as $row => $rowData) {
<<<<<<< HEAD
            $this->gridDisplay .= '|' . str_pad((string) $this->rows[$row], $maxRowLength, ' ', STR_PAD_LEFT) . ' ';
            $this->renderCells($rowData, $columnWidths);
            $this->gridDisplay .= '|' . PHP_EOL;
=======
            if ($this->rowHeaders) {
                $this->gridDisplay .= '|' . str_pad((string) $this->rows[$row], $maxRowLength, ' ', STR_PAD_LEFT) . ' ';
            }
            $this->renderCells($rowData, $columnWidths);
            $this->gridDisplay .= '|' . PHP_EOL;
            if ($this->rowDividers) {
                $this->renderFooter($maxRowLength, $columnWidths);
            }
>>>>>>> match
        }
    }

    private function renderCells(array $rowData, array $columnWidths): void
    {
        foreach ($rowData as $column => $cell) {
<<<<<<< HEAD
            $displayCell = ($this->isCli) ? (string) $cell : htmlentities((string) $cell);
            $this->gridDisplay .= '| ';
            $this->gridDisplay .= $displayCell . str_repeat(' ', $columnWidths[$column] - mb_strlen($cell ?? '') + 1);
        }
    }

    private function renderColumnHeader(int $maxRowLength, array $columnWidths): void
    {
        $this->gridDisplay .= str_repeat(' ', $maxRowLength + 2);
=======
            $valueForLength = $this->getString($cell);
            $displayCell = $this->isCli ? $valueForLength : htmlentities($valueForLength);
            $this->gridDisplay .= '| ';
            $this->gridDisplay .= $displayCell . str_repeat(' ', $columnWidths[$column] - $this->strlen($valueForLength) + 1);
        }
    }

    private function renderColumnHeader(int $maxRowLength, array &$columnWidths): void
    {
        if (!$this->columnHeaders) {
            $this->renderFooter($maxRowLength, $columnWidths);

            return;
        }
        foreach ($this->columns as $column => $reference) {
            $columnWidths[$column] = max($columnWidths[$column], $this->strlen($reference));
        }
        if ($this->rowHeaders) {
            $this->gridDisplay .= str_repeat(' ', $maxRowLength + 2);
        }
>>>>>>> match
        foreach ($this->columns as $column => $reference) {
            $this->gridDisplay .= '+-' . str_repeat('-', $columnWidths[$column] + 1);
        }
        $this->gridDisplay .= '+' . PHP_EOL;

<<<<<<< HEAD
        $this->gridDisplay .= str_repeat(' ', $maxRowLength + 2);
=======
        if ($this->rowHeaders) {
            $this->gridDisplay .= str_repeat(' ', $maxRowLength + 2);
        }
>>>>>>> match
        foreach ($this->columns as $column => $reference) {
            $this->gridDisplay .= '| ' . str_pad((string) $reference, $columnWidths[$column] + 1, ' ');
        }
        $this->gridDisplay .= '|' . PHP_EOL;

        $this->renderFooter($maxRowLength, $columnWidths);
    }

    private function renderFooter(int $maxRowLength, array $columnWidths): void
    {
<<<<<<< HEAD
        $this->gridDisplay .= '+' . str_repeat('-', $maxRowLength + 1);
=======
        if ($this->rowHeaders) {
            $this->gridDisplay .= '+' . str_repeat('-', $maxRowLength + 1);
        }
>>>>>>> match
        foreach ($this->columns as $column => $reference) {
            $this->gridDisplay .= '+-';
            $this->gridDisplay .= str_pad((string) '', $columnWidths[$column] + 1, '-');
        }
        $this->gridDisplay .= '+' . PHP_EOL;
    }

    private function getColumnWidths(): array
    {
        $columnCount = count($this->matrix, COUNT_RECURSIVE) / count($this->matrix);
        $columnWidths = [];
        for ($column = 0; $column < $columnCount; ++$column) {
            $columnWidths[] = $this->getColumnWidth(array_column($this->matrix, $column));
        }

        return $columnWidths;
    }

    private function getColumnWidth(array $columnData): int
    {
        $columnWidth = 0;
        $columnData = array_values($columnData);

        foreach ($columnData as $columnValue) {
<<<<<<< HEAD
            if (is_string($columnValue)) {
                $columnWidth = max($columnWidth, mb_strlen($columnValue));
            } elseif (is_bool($columnValue)) {
                $columnWidth = max($columnWidth, mb_strlen($columnValue ? 'TRUE' : 'FALSE'));
            }

            $columnWidth = max($columnWidth, mb_strlen((string) $columnWidth));
=======
            $columnWidth = max($columnWidth, $this->strlen($this->getString($columnValue)));
>>>>>>> match
        }

        return $columnWidth;
    }
<<<<<<< HEAD
=======

    protected function getString(mixed $value): string
    {
        return StringHelper::convertToString($value, convertBool: true);
    }

    protected function strlen(string $value): int
    {
        return mb_strlen($value);
    }
>>>>>>> match
}
