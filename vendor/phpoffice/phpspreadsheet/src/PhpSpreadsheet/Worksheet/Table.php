<?php

namespace PhpOffice\PhpSpreadsheet\Worksheet;

use PhpOffice\PhpSpreadsheet\Cell\AddressRange;
<<<<<<< HEAD
=======
use PhpOffice\PhpSpreadsheet\Cell\CellAddress;
>>>>>>> match
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Exception as PhpSpreadsheetException;
use PhpOffice\PhpSpreadsheet\Shared\StringHelper;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Table\TableStyle;
<<<<<<< HEAD

class Table
{
    /**
     * Table Name.
     *
     * @var string
     */
    private $name;

    /**
     * Show Header Row.
     *
     * @var bool
     */
    private $showHeaderRow = true;

    /**
     * Show Totals Row.
     *
     * @var bool
     */
    private $showTotalsRow = false;

    /**
     * Table Range.
     *
     * @var string
     */
    private $range = '';

    /**
     * Table Worksheet.
     *
     * @var null|Worksheet
     */
    private $workSheet;

    /**
     * Table allow filter.
     *
     * @var bool
     */
    private $allowFilter = true;
=======
use Stringable;

class Table implements Stringable
{
    /**
     * Table Name.
     */
    private string $name;

    /**
     * Show Header Row.
     */
    private bool $showHeaderRow = true;

    /**
     * Show Totals Row.
     */
    private bool $showTotalsRow = false;

    /**
     * Table Range.
     */
    private string $range = '';

    /**
     * Table Worksheet.
     */
    private ?Worksheet $workSheet = null;

    /**
     * Table allow filter.
     */
    private bool $allowFilter = true;
>>>>>>> match

    /**
     * Table Column.
     *
     * @var Table\Column[]
     */
<<<<<<< HEAD
    private $columns = [];

    /**
     * Table Style.
     *
     * @var TableStyle
     */
    private $style;

    /**
     * Table AutoFilter.
     *
     * @var AutoFilter
     */
    private $autoFilter;
=======
    private array $columns = [];

    /**
     * Table Style.
     */
    private TableStyle $style;

    /**
     * Table AutoFilter.
     */
    private AutoFilter $autoFilter;
>>>>>>> match

    /**
     * Create a new Table.
     *
<<<<<<< HEAD
     * @param AddressRange|array<int>|string $range
=======
     * @param AddressRange<CellAddress>|AddressRange<int>|AddressRange<string>|array{0: int, 1: int, 2: int, 3: int}|array{0: int, 1: int}|string $range
>>>>>>> match
     *            A simple string containing a Cell range like 'A1:E10' is permitted
     *              or passing in an array of [$fromColumnIndex, $fromRow, $toColumnIndex, $toRow] (e.g. [3, 5, 6, 8]),
     *              or an AddressRange object.
     * @param string $name (e.g. Table1)
     */
<<<<<<< HEAD
    public function __construct($range = '', string $name = '')
=======
    public function __construct(AddressRange|string|array $range = '', string $name = '')
>>>>>>> match
    {
        $this->style = new TableStyle();
        $this->autoFilter = new AutoFilter($range);
        $this->setRange($range);
        $this->setName($name);
    }

    /**
<<<<<<< HEAD
=======
     * Code to execute when this table is unset().
     */
    public function __destruct()
    {
        $this->workSheet = null;
    }

    /**
>>>>>>> match
     * Get Table name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Table name.
     *
     * @throws PhpSpreadsheetException
     */
    public function setName(string $name): self
    {
        $name = trim($name);

        if (!empty($name)) {
            if (strlen($name) === 1 && in_array($name, ['C', 'c', 'R', 'r'])) {
                throw new PhpSpreadsheetException('The table name is invalid');
            }
            if (StringHelper::countCharacters($name) > 255) {
                throw new PhpSpreadsheetException('The table name cannot be longer than 255 characters');
            }
            // Check for A1 or R1C1 cell reference notation
            if (
<<<<<<< HEAD
                preg_match(Coordinate::A1_COORDINATE_REGEX, $name) ||
                preg_match('/^R\[?\-?[0-9]*\]?C\[?\-?[0-9]*\]?$/i', $name)
            ) {
                throw new PhpSpreadsheetException('The table name can\'t be the same as a cell reference');
            }
            if (!preg_match('/^[\p{L}_\\\\]/iu', $name)) {
                throw new PhpSpreadsheetException('The table name must begin a name with a letter, an underscore character (_), or a backslash (\)');
            }
            if (!preg_match('/^[\p{L}_\\\\][\p{L}\p{M}0-9\._]+$/iu', $name)) {
=======
                preg_match(Coordinate::A1_COORDINATE_REGEX, $name)
                || preg_match('/^R\[?\-?[0-9]*\]?C\[?\-?[0-9]*\]?$/i', $name)
            ) {
                throw new PhpSpreadsheetException('The table name can\'t be the same as a cell reference');
            }
            if (!preg_match('/^[\p{L}_\\\]/iu', $name)) {
                throw new PhpSpreadsheetException('The table name must begin a name with a letter, an underscore character (_), or a backslash (\)');
            }
            if (!preg_match('/^[\p{L}_\\\][\p{L}\p{M}0-9\._]+$/iu', $name)) {
>>>>>>> match
                throw new PhpSpreadsheetException('The table name contains invalid characters');
            }

            $this->checkForDuplicateTableNames($name, $this->workSheet);
            $this->updateStructuredReferences($name);
        }

        $this->name = $name;

        return $this;
    }

    /**
     * @throws PhpSpreadsheetException
     */
    private function checkForDuplicateTableNames(string $name, ?Worksheet $worksheet): void
    {
        // Remember that table names are case-insensitive
        $tableName = StringHelper::strToLower($name);

        if ($worksheet !== null && StringHelper::strToLower($this->name) !== $name) {
            $spreadsheet = $worksheet->getParentOrThrow();

            foreach ($spreadsheet->getWorksheetIterator() as $sheet) {
                foreach ($sheet->getTableCollection() as $table) {
                    if (StringHelper::strToLower($table->getName()) === $tableName && $table != $this) {
                        throw new PhpSpreadsheetException("Spreadsheet already contains a table named '{$this->name}'");
                    }
                }
            }
        }
    }

    private function updateStructuredReferences(string $name): void
    {
<<<<<<< HEAD
        if ($this->workSheet === null || $this->name === null || $this->name === '') {
=======
        if (!$this->workSheet || !$this->name) {
>>>>>>> match
            return;
        }

        // Remember that table names are case-insensitive
        if (StringHelper::strToLower($this->name) !== StringHelper::strToLower($name)) {
            // We need to check all formula cells that might contain fully-qualified Structured References
            //    that refer to this table, and update those formulae to reference the new table name
            $spreadsheet = $this->workSheet->getParentOrThrow();
            foreach ($spreadsheet->getWorksheetIterator() as $sheet) {
                $this->updateStructuredReferencesInCells($sheet, $name);
            }
            $this->updateStructuredReferencesInNamedFormulae($spreadsheet, $name);
        }
    }

    private function updateStructuredReferencesInCells(Worksheet $worksheet, string $newName): void
    {
        $pattern = '/' . preg_quote($this->name, '/') . '\[/mui';

        foreach ($worksheet->getCoordinates(false) as $coordinate) {
            $cell = $worksheet->getCell($coordinate);
            if ($cell->getDataType() === DataType::TYPE_FORMULA) {
<<<<<<< HEAD
                $formula = $cell->getValue();
=======
                $formula = $cell->getValueString();
>>>>>>> match
                if (preg_match($pattern, $formula) === 1) {
                    $formula = preg_replace($pattern, "{$newName}[", $formula);
                    $cell->setValueExplicit($formula, DataType::TYPE_FORMULA);
                }
            }
        }
    }

    private function updateStructuredReferencesInNamedFormulae(Spreadsheet $spreadsheet, string $newName): void
    {
        $pattern = '/' . preg_quote($this->name, '/') . '\[/mui';

        foreach ($spreadsheet->getNamedFormulae() as $namedFormula) {
            $formula = $namedFormula->getValue();
            if (preg_match($pattern, $formula) === 1) {
<<<<<<< HEAD
                $formula = preg_replace($pattern, "{$newName}[", $formula);
                $namedFormula->setValue($formula); // @phpstan-ignore-line
=======
                $formula = preg_replace($pattern, "{$newName}[", $formula) ?? '';
                $namedFormula->setValue($formula);
>>>>>>> match
            }
        }
    }

    /**
     * Get show Header Row.
     */
    public function getShowHeaderRow(): bool
    {
        return $this->showHeaderRow;
    }

    /**
     * Set show Header Row.
     */
    public function setShowHeaderRow(bool $showHeaderRow): self
    {
        $this->showHeaderRow = $showHeaderRow;

        return $this;
    }

    /**
     * Get show Totals Row.
     */
    public function getShowTotalsRow(): bool
    {
        return $this->showTotalsRow;
    }

    /**
     * Set show Totals Row.
     */
    public function setShowTotalsRow(bool $showTotalsRow): self
    {
        $this->showTotalsRow = $showTotalsRow;

        return $this;
    }

    /**
     * Get allow filter.
     * If false, autofiltering is disabled for the table, if true it is enabled.
     */
    public function getAllowFilter(): bool
    {
        return $this->allowFilter;
    }

    /**
     * Set show Autofiltering.
     * Disabling autofiltering has the same effect as hiding the filter button on all the columns in the table.
     */
    public function setAllowFilter(bool $allowFilter): self
    {
        $this->allowFilter = $allowFilter;

        return $this;
    }

    /**
     * Get Table Range.
     */
    public function getRange(): string
    {
        return $this->range;
    }

    /**
     * Set Table Cell Range.
     *
<<<<<<< HEAD
     * @param AddressRange|array<int>|string $range
=======
     * @param AddressRange<CellAddress>|AddressRange<int>|AddressRange<string>|array{0: int, 1: int, 2: int, 3: int}|array{0: int, 1: int}|string $range
>>>>>>> match
     *            A simple string containing a Cell range like 'A1:E10' is permitted
     *              or passing in an array of [$fromColumnIndex, $fromRow, $toColumnIndex, $toRow] (e.g. [3, 5, 6, 8]),
     *              or an AddressRange object.
     */
<<<<<<< HEAD
    public function setRange($range = ''): self
=======
    public function setRange(AddressRange|string|array $range = ''): self
>>>>>>> match
    {
        // extract coordinate
        if ($range !== '') {
            [, $range] = Worksheet::extractSheetTitle(Validations::validateCellRange($range), true);
        }
        if (empty($range)) {
            //    Discard all column rules
            $this->columns = [];
            $this->range = '';

            return $this;
        }

<<<<<<< HEAD
        if (strpos($range, ':') === false) {
=======
        if (!str_contains($range, ':')) {
>>>>>>> match
            throw new PhpSpreadsheetException('Table must be set on a range of cells.');
        }

        [$width, $height] = Coordinate::rangeDimension($range);
        if ($width < 1 || $height < 1) {
            throw new PhpSpreadsheetException('The table range must be at least 1 column and row');
        }

        $this->range = $range;
        $this->autoFilter->setRange($range);

        //    Discard any column rules that are no longer valid within this range
        [$rangeStart, $rangeEnd] = Coordinate::rangeBoundaries($this->range);
        foreach ($this->columns as $key => $value) {
            $colIndex = Coordinate::columnIndexFromString($key);
            if (($rangeStart[0] > $colIndex) || ($rangeEnd[0] < $colIndex)) {
                unset($this->columns[$key]);
            }
        }

        return $this;
    }

    /**
     * Set Table Cell Range to max row.
     */
    public function setRangeToMaxRow(): self
    {
        if ($this->workSheet !== null) {
            $thisrange = $this->range;
<<<<<<< HEAD
            $range = (string) preg_replace('/\\d+$/', (string) $this->workSheet->getHighestRow(), $thisrange);
=======
            $range = (string) preg_replace('/\d+$/', (string) $this->workSheet->getHighestRow(), $thisrange);
>>>>>>> match
            if ($range !== $thisrange) {
                $this->setRange($range);
            }
        }

        return $this;
    }

    /**
     * Get Table's Worksheet.
     */
    public function getWorksheet(): ?Worksheet
    {
        return $this->workSheet;
    }

    /**
     * Set Table's Worksheet.
     */
    public function setWorksheet(?Worksheet $worksheet = null): self
    {
        if ($this->name !== '' && $worksheet !== null) {
            $spreadsheet = $worksheet->getParentOrThrow();
            $tableName = StringHelper::strToUpper($this->name);

            foreach ($spreadsheet->getWorksheetIterator() as $sheet) {
                foreach ($sheet->getTableCollection() as $table) {
                    if (StringHelper::strToUpper($table->getName()) === $tableName) {
                        throw new PhpSpreadsheetException("Workbook already contains a table named '{$this->name}'");
                    }
                }
            }
        }

        $this->workSheet = $worksheet;
        $this->autoFilter->setParent($worksheet);

        return $this;
    }

    /**
     * Get all Table Columns.
     *
     * @return Table\Column[]
     */
    public function getColumns(): array
    {
        return $this->columns;
    }

    /**
     * Validate that the specified column is in the Table range.
     *
     * @param string $column Column name (e.g. A)
     *
     * @return int The column offset within the table range
     */
    public function isColumnInRange(string $column): int
    {
        if (empty($this->range)) {
            throw new PhpSpreadsheetException('No table range is defined.');
        }

        $columnIndex = Coordinate::columnIndexFromString($column);
        [$rangeStart, $rangeEnd] = Coordinate::rangeBoundaries($this->range);
        if (($rangeStart[0] > $columnIndex) || ($rangeEnd[0] < $columnIndex)) {
            throw new PhpSpreadsheetException('Column is outside of current table range.');
        }

        return $columnIndex - $rangeStart[0];
    }

    /**
     * Get a specified Table Column Offset within the defined Table range.
     *
     * @param string $column Column name (e.g. A)
     *
     * @return int The offset of the specified column within the table range
     */
<<<<<<< HEAD
    public function getColumnOffset($column): int
=======
    public function getColumnOffset(string $column): int
>>>>>>> match
    {
        return $this->isColumnInRange($column);
    }

    /**
     * Get a specified Table Column.
     *
     * @param string $column Column name (e.g. A)
     */
<<<<<<< HEAD
    public function getColumn($column): Table\Column
=======
    public function getColumn(string $column): Table\Column
>>>>>>> match
    {
        $this->isColumnInRange($column);

        if (!isset($this->columns[$column])) {
            $this->columns[$column] = new Table\Column($column, $this);
        }

        return $this->columns[$column];
    }

    /**
     * Get a specified Table Column by it's offset.
     *
     * @param int $columnOffset Column offset within range (starting from 0)
     */
<<<<<<< HEAD
    public function getColumnByOffset($columnOffset): Table\Column
=======
    public function getColumnByOffset(int $columnOffset): Table\Column
>>>>>>> match
    {
        [$rangeStart, $rangeEnd] = Coordinate::rangeBoundaries($this->range);
        $pColumn = Coordinate::stringFromColumnIndex($rangeStart[0] + $columnOffset);

        return $this->getColumn($pColumn);
    }

    /**
     * Set Table.
     *
     * @param string|Table\Column $columnObjectOrString
     *            A simple string containing a Column ID like 'A' is permitted
     */
<<<<<<< HEAD
    public function setColumn($columnObjectOrString): self
    {
        if ((is_string($columnObjectOrString)) && (!empty($columnObjectOrString))) {
            $column = $columnObjectOrString;
        } elseif (is_object($columnObjectOrString) && ($columnObjectOrString instanceof Table\Column)) {
=======
    public function setColumn(string|Table\Column $columnObjectOrString): self
    {
        if ((is_string($columnObjectOrString)) && (!empty($columnObjectOrString))) {
            $column = $columnObjectOrString;
        } elseif ($columnObjectOrString instanceof Table\Column) {
>>>>>>> match
            $column = $columnObjectOrString->getColumnIndex();
        } else {
            throw new PhpSpreadsheetException('Column is not within the table range.');
        }
        $this->isColumnInRange($column);

        if (is_string($columnObjectOrString)) {
            $this->columns[$columnObjectOrString] = new Table\Column($columnObjectOrString, $this);
        } else {
            $columnObjectOrString->setTable($this);
            $this->columns[$column] = $columnObjectOrString;
        }
        ksort($this->columns);

        return $this;
    }

    /**
     * Clear a specified Table Column.
     *
     * @param string $column Column name (e.g. A)
     */
<<<<<<< HEAD
    public function clearColumn($column): self
=======
    public function clearColumn(string $column): self
>>>>>>> match
    {
        $this->isColumnInRange($column);

        if (isset($this->columns[$column])) {
            unset($this->columns[$column]);
        }

        return $this;
    }

    /**
     * Shift an Table Column Rule to a different column.
     *
     * Note: This method bypasses validation of the destination column to ensure it is within this Table range.
     *        Nor does it verify whether any column rule already exists at $toColumn, but will simply override any existing value.
     *        Use with caution.
     *
     * @param string $fromColumn Column name (e.g. A)
     * @param string $toColumn Column name (e.g. B)
     */
<<<<<<< HEAD
    public function shiftColumn($fromColumn, $toColumn): self
=======
    public function shiftColumn(string $fromColumn, string $toColumn): self
>>>>>>> match
    {
        $fromColumn = strtoupper($fromColumn);
        $toColumn = strtoupper($toColumn);

<<<<<<< HEAD
        if (($fromColumn !== null) && (isset($this->columns[$fromColumn])) && ($toColumn !== null)) {
=======
        if (isset($this->columns[$fromColumn])) {
>>>>>>> match
            $this->columns[$fromColumn]->setTable();
            $this->columns[$fromColumn]->setColumnIndex($toColumn);
            $this->columns[$toColumn] = $this->columns[$fromColumn];
            $this->columns[$toColumn]->setTable($this);
            unset($this->columns[$fromColumn]);

            ksort($this->columns);
        }

        return $this;
    }

    /**
     * Get table Style.
     */
<<<<<<< HEAD
    public function getStyle(): Table\TableStyle
=======
    public function getStyle(): TableStyle
>>>>>>> match
    {
        return $this->style;
    }

    /**
     * Set table Style.
     */
    public function setStyle(TableStyle $style): self
    {
        $this->style = $style;

        return $this;
    }

    /**
     * Get AutoFilter.
     */
    public function getAutoFilter(): AutoFilter
    {
        return $this->autoFilter;
    }

    /**
     * Set AutoFilter.
     */
    public function setAutoFilter(AutoFilter $autoFilter): self
    {
        $this->autoFilter = $autoFilter;

        return $this;
    }

    /**
<<<<<<< HEAD
=======
     * Get the row number on this table for given coordinates.
     */
    public function getRowNumber(string $coordinate): int
    {
        $range = $this->getRange();
        $coords = Coordinate::splitRange($range);
        $firstCell = Coordinate::coordinateFromString($coords[0][0]);
        $thisCell = Coordinate::coordinateFromString($coordinate);

        return (int) $thisCell[1] - (int) $firstCell[1];
    }

    /**
>>>>>>> match
     * Implement PHP __clone to create a deep clone, not just a shallow copy.
     */
    public function __clone()
    {
        $vars = get_object_vars($this);
        foreach ($vars as $key => $value) {
            if (is_object($value)) {
                if ($key === 'workSheet') {
                    //    Detach from worksheet
                    $this->{$key} = null;
                } else {
                    $this->{$key} = clone $value;
                }
            } elseif ((is_array($value)) && ($key === 'columns')) {
                //    The columns array of \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet\Table objects
                $this->{$key} = [];
                foreach ($value as $k => $v) {
<<<<<<< HEAD
=======
                    /** @var Table\Column $v */
>>>>>>> match
                    $this->{$key}[$k] = clone $v;
                    // attach the new cloned Column to this new cloned Table object
                    $this->{$key}[$k]->setTable($this);
                }
            } else {
                $this->{$key} = $value;
            }
        }
    }

    /**
     * toString method replicates previous behavior by returning the range if object is
     * referenced as a property of its worksheet.
     */
<<<<<<< HEAD
    public function __toString()
=======
    public function __toString(): string
>>>>>>> match
    {
        return (string) $this->range;
    }
}
