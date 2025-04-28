<?php

namespace PhpOffice\PhpSpreadsheet\Worksheet;

class Row
{
<<<<<<< HEAD
    /**
     * \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet.
     *
     * @var Worksheet
     */
    private $worksheet;

    /**
     * Row index.
     *
     * @var int
     */
    private $rowIndex = 0;

    /**
     * Create a new row.
     *
     * @param int $rowIndex
     */
    public function __construct(Worksheet $worksheet, $rowIndex = 1)
=======
    private Worksheet $worksheet;

    /**
     * Row index.
     */
    private int $rowIndex;

    /**
     * Create a new row.
     */
    public function __construct(Worksheet $worksheet, int $rowIndex = 1)
>>>>>>> match
    {
        // Set parent and row index
        $this->worksheet = $worksheet;
        $this->rowIndex = $rowIndex;
    }

    /**
     * Destructor.
     */
    public function __destruct()
    {
<<<<<<< HEAD
        $this->worksheet = null; // @phpstan-ignore-line
=======
        unset($this->worksheet);
>>>>>>> match
    }

    /**
     * Get row index.
     */
    public function getRowIndex(): int
    {
        return $this->rowIndex;
    }

    /**
     * Get cell iterator.
     *
     * @param string $startColumn The column address at which to start iterating
<<<<<<< HEAD
     * @param string $endColumn Optionally, the column address at which to stop iterating
     */
    public function getCellIterator($startColumn = 'A', $endColumn = null): RowCellIterator
    {
        return new RowCellIterator($this->worksheet, $this->rowIndex, $startColumn, $endColumn);
=======
     * @param ?string $endColumn Optionally, the column address at which to stop iterating
     */
    public function getCellIterator(string $startColumn = 'A', ?string $endColumn = null, bool $iterateOnlyExistingCells = false): RowCellIterator
    {
        return new RowCellIterator($this->worksheet, $this->rowIndex, $startColumn, $endColumn, $iterateOnlyExistingCells);
>>>>>>> match
    }

    /**
     * Get column iterator. Synonym for getCellIterator().
     *
     * @param string $startColumn The column address at which to start iterating
<<<<<<< HEAD
     * @param string $endColumn Optionally, the column address at which to stop iterating
     */
    public function getColumnIterator($startColumn = 'A', $endColumn = null): RowCellIterator
    {
        return $this->getCellIterator($startColumn, $endColumn);
=======
     * @param ?string $endColumn Optionally, the column address at which to stop iterating
     */
    public function getColumnIterator(string $startColumn = 'A', ?string $endColumn = null, bool $iterateOnlyExistingCells = false): RowCellIterator
    {
        return $this->getCellIterator($startColumn, $endColumn, $iterateOnlyExistingCells);
>>>>>>> match
    }

    /**
     * Returns a boolean true if the row contains no cells. By default, this means that no cell records exist in the
     *         collection for this row. false will be returned otherwise.
     *     This rule can be modified by passing a $definitionOfEmptyFlags value:
     *          1 - CellIterator::TREAT_NULL_VALUE_AS_EMPTY_CELL If the only cells in the collection are null value
     *                  cells, then the row will be considered empty.
     *          2 - CellIterator::TREAT_EMPTY_STRING_AS_EMPTY_CELL If the only cells in the collection are empty
     *                  string value cells, then the row will be considered empty.
     *          3 - CellIterator::TREAT_NULL_VALUE_AS_EMPTY_CELL | CellIterator::TREAT_EMPTY_STRING_AS_EMPTY_CELL
     *                  If the only cells in the collection are null value or empty string value cells, then the row
     *                  will be considered empty.
     *
     * @param int $definitionOfEmptyFlags
     *              Possible Flag Values are:
     *                  CellIterator::TREAT_NULL_VALUE_AS_EMPTY_CELL
     *                  CellIterator::TREAT_EMPTY_STRING_AS_EMPTY_CELL
     * @param string $startColumn The column address at which to start checking if cells are empty
<<<<<<< HEAD
     * @param string $endColumn Optionally, the column address at which to stop checking if cells are empty
     */
    public function isEmpty(int $definitionOfEmptyFlags = 0, $startColumn = 'A', $endColumn = null): bool
=======
     * @param ?string $endColumn Optionally, the column address at which to stop checking if cells are empty
     */
    public function isEmpty(int $definitionOfEmptyFlags = 0, string $startColumn = 'A', ?string $endColumn = null): bool
>>>>>>> match
    {
        $nullValueCellIsEmpty = (bool) ($definitionOfEmptyFlags & CellIterator::TREAT_NULL_VALUE_AS_EMPTY_CELL);
        $emptyStringCellIsEmpty = (bool) ($definitionOfEmptyFlags & CellIterator::TREAT_EMPTY_STRING_AS_EMPTY_CELL);

        $cellIterator = $this->getCellIterator($startColumn, $endColumn);
        $cellIterator->setIterateOnlyExistingCells(true);
        foreach ($cellIterator as $cell) {
<<<<<<< HEAD
            /** @scrutinizer ignore-call */
=======
>>>>>>> match
            $value = $cell->getValue();
            if ($value === null && $nullValueCellIsEmpty === true) {
                continue;
            }
            if ($value === '' && $emptyStringCellIsEmpty === true) {
                continue;
            }

            return false;
        }

        return true;
    }

    /**
     * Returns bound worksheet.
     */
    public function getWorksheet(): Worksheet
    {
        return $this->worksheet;
    }
}
