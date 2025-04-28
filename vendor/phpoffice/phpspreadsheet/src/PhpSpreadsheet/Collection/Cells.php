<?php

namespace PhpOffice\PhpSpreadsheet\Collection;

<<<<<<< HEAD
use Generator;
=======
>>>>>>> match
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Exception as PhpSpreadsheetException;
use PhpOffice\PhpSpreadsheet\Settings;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Psr\SimpleCache\CacheInterface;

class Cells
{
    protected const MAX_COLUMN_ID = 16384;

<<<<<<< HEAD
    /**
     * @var CacheInterface
     */
    private $cache;

    /**
     * Parent worksheet.
     *
     * @var null|Worksheet
     */
    private $parent;

    /**
     * The currently active Cell.
     *
     * @var null|Cell
     */
    private $currentCell;

    /**
     * Coordinate of the currently active Cell.
     *
     * @var null|string
     */
    private $currentCoordinate;

    /**
     * Flag indicating whether the currently active Cell requires saving.
     *
     * @var bool
     */
    private $currentCellIsDirty = false;
=======
    private CacheInterface $cache;

    /**
     * Parent worksheet.
     */
    private ?Worksheet $parent;

    /**
     * The currently active Cell.
     */
    private ?Cell $currentCell = null;

    /**
     * Coordinate of the currently active Cell.
     */
    private ?string $currentCoordinate = null;

    /**
     * Flag indicating whether the currently active Cell requires saving.
     */
    private bool $currentCellIsDirty = false;
>>>>>>> match

    /**
     * An index of existing cells. int pointer to the coordinate (0-base-indexed row * 16,384 + 1-base indexed column)
     *    indexed by their coordinate.
     *
     * @var int[]
     */
<<<<<<< HEAD
    private $index = [];

    /**
     * Prefix used to uniquely identify cache data for this worksheet.
     *
     * @var string
     */
    private $cachePrefix;
=======
    private array $index = [];

    /**
     * Prefix used to uniquely identify cache data for this worksheet.
     */
    private string $cachePrefix;
>>>>>>> match

    /**
     * Initialise this new cell collection.
     *
     * @param Worksheet $parent The worksheet for this cell collection
     */
    public function __construct(Worksheet $parent, CacheInterface $cache)
    {
        // Set our parent worksheet.
        // This is maintained here to facilitate re-attaching it to Cell objects when
        // they are woken from a serialized state
        $this->parent = $parent;
        $this->cache = $cache;
        $this->cachePrefix = $this->getUniqueID();
    }

    /**
     * Return the parent worksheet for this cell collection.
<<<<<<< HEAD
     *
     * @return null|Worksheet
     */
    public function getParent()
=======
     */
    public function getParent(): ?Worksheet
>>>>>>> match
    {
        return $this->parent;
    }

    /**
     * Whether the collection holds a cell for the given coordinate.
     *
     * @param string $cellCoordinate Coordinate of the cell to check
     */
<<<<<<< HEAD
    public function has($cellCoordinate): bool
=======
    public function has(string $cellCoordinate): bool
>>>>>>> match
    {
        return ($cellCoordinate === $this->currentCoordinate) || isset($this->index[$cellCoordinate]);
    }

<<<<<<< HEAD
=======
    public function has2(string $cellCoordinate): bool
    {
        return isset($this->index[$cellCoordinate]);
    }

>>>>>>> match
    /**
     * Add or update a cell in the collection.
     *
     * @param Cell $cell Cell to update
     */
    public function update(Cell $cell): Cell
    {
        return $this->add($cell->getCoordinate(), $cell);
    }

    /**
     * Delete a cell in cache identified by coordinate.
     *
     * @param string $cellCoordinate Coordinate of the cell to delete
     */
<<<<<<< HEAD
    public function delete($cellCoordinate): void
=======
    public function delete(string $cellCoordinate): void
>>>>>>> match
    {
        if ($cellCoordinate === $this->currentCoordinate && $this->currentCell !== null) {
            $this->currentCell->detach();
            $this->currentCoordinate = null;
            $this->currentCell = null;
            $this->currentCellIsDirty = false;
        }

        unset($this->index[$cellCoordinate]);

        // Delete the entry from cache
        $this->cache->delete($this->cachePrefix . $cellCoordinate);
    }

    /**
     * Get a list of all cell coordinates currently held in the collection.
     *
     * @return string[]
     */
<<<<<<< HEAD
    public function getCoordinates()
=======
    public function getCoordinates(): array
>>>>>>> match
    {
        return array_keys($this->index);
    }

    /**
     * Get a sorted list of all cell coordinates currently held in the collection by row and column.
     *
     * @return string[]
     */
<<<<<<< HEAD
    public function getSortedCoordinates()
=======
    public function getSortedCoordinates(): array
>>>>>>> match
    {
        asort($this->index);

        return array_keys($this->index);
    }

    /**
<<<<<<< HEAD
     * Return the cell coordinate of the currently active cell object.
     *
     * @return null|string
     */
    public function getCurrentCoordinate()
=======
     * Get a sorted list of all cell coordinates currently held in the collection by index (16384*row+column).
     *
     * @return int[]
     */
    public function getSortedCoordinatesInt(): array
    {
        asort($this->index);

        return array_values($this->index);
    }

    /**
     * Return the cell coordinate of the currently active cell object.
     */
    public function getCurrentCoordinate(): ?string
>>>>>>> match
    {
        return $this->currentCoordinate;
    }

    /**
     * Return the column coordinate of the currently active cell object.
     */
    public function getCurrentColumn(): string
    {
        $column = 0;
        $row = '';
        sscanf($this->currentCoordinate ?? '', '%[A-Z]%d', $column, $row);

        return (string) $column;
    }

    /**
     * Return the row coordinate of the currently active cell object.
     */
    public function getCurrentRow(): int
    {
        $column = 0;
        $row = '';
        sscanf($this->currentCoordinate ?? '', '%[A-Z]%d', $column, $row);

        return (int) $row;
    }

    /**
     * Get highest worksheet column and highest row that have cell records.
     *
     * @return array Highest column name and highest row number
     */
<<<<<<< HEAD
    public function getHighestRowAndColumn()
=======
    public function getHighestRowAndColumn(): array
>>>>>>> match
    {
        // Lookup highest column and highest row
        $maxRow = $maxColumn = 1;
        foreach ($this->index as $coordinate) {
<<<<<<< HEAD
            $row = (int) floor($coordinate / self::MAX_COLUMN_ID) + 1;
            $maxRow = ($maxRow > $row) ? $maxRow : $row;
            $column = $coordinate % self::MAX_COLUMN_ID;
=======
            $row = (int) floor(($coordinate - 1) / self::MAX_COLUMN_ID) + 1;
            $maxRow = ($maxRow > $row) ? $maxRow : $row;
            $column = ($coordinate % self::MAX_COLUMN_ID) ?: self::MAX_COLUMN_ID;
>>>>>>> match
            $maxColumn = ($maxColumn > $column) ? $maxColumn : $column;
        }

        return [
            'row' => $maxRow,
            'column' => Coordinate::stringFromColumnIndex($maxColumn),
        ];
    }

    /**
     * Get highest worksheet column.
     *
     * @param null|int|string $row Return the highest column for the specified row,
     *                    or the highest column of any row if no row number is passed
     *
     * @return string Highest column name
     */
<<<<<<< HEAD
    public function getHighestColumn($row = null)
=======
    public function getHighestColumn($row = null): string
>>>>>>> match
    {
        if ($row === null) {
            return $this->getHighestRowAndColumn()['column'];
        }

        $row = (int) $row;
        if ($row <= 0) {
            throw new PhpSpreadsheetException('Row number must be a positive integer');
        }

        $maxColumn = 1;
        $toRow = $row * self::MAX_COLUMN_ID;
        $fromRow = --$row * self::MAX_COLUMN_ID;
        foreach ($this->index as $coordinate) {
            if ($coordinate < $fromRow || $coordinate >= $toRow) {
                continue;
            }
<<<<<<< HEAD
            $column = $coordinate % self::MAX_COLUMN_ID;
=======
            $column = ($coordinate % self::MAX_COLUMN_ID) ?: self::MAX_COLUMN_ID;
>>>>>>> match
            $maxColumn = $maxColumn > $column ? $maxColumn : $column;
        }

        return Coordinate::stringFromColumnIndex($maxColumn);
    }

    /**
     * Get highest worksheet row.
     *
     * @param null|string $column Return the highest row for the specified column,
     *                       or the highest row of any column if no column letter is passed
     *
     * @return int Highest row number
     */
<<<<<<< HEAD
    public function getHighestRow($column = null)
=======
    public function getHighestRow(?string $column = null): int
>>>>>>> match
    {
        if ($column === null) {
            return $this->getHighestRowAndColumn()['row'];
        }

        $maxRow = 1;
        $columnIndex = Coordinate::columnIndexFromString($column);
        foreach ($this->index as $coordinate) {
            if ($coordinate % self::MAX_COLUMN_ID !== $columnIndex) {
                continue;
            }
            $row = (int) floor($coordinate / self::MAX_COLUMN_ID) + 1;
            $maxRow = ($maxRow > $row) ? $maxRow : $row;
        }

        return $maxRow;
    }

    /**
     * Generate a unique ID for cache referencing.
     *
     * @return string Unique Reference
     */
<<<<<<< HEAD
    private function getUniqueID()
=======
    private function getUniqueID(): string
>>>>>>> match
    {
        $cacheType = Settings::getCache();

        return ($cacheType instanceof Memory\SimpleCache1 || $cacheType instanceof Memory\SimpleCache3)
            ? random_bytes(7) . ':'
            : uniqid('phpspreadsheet.', true) . '.';
    }

    /**
     * Clone the cell collection.
<<<<<<< HEAD
     *
     * @return self
     */
    public function cloneCellCollection(Worksheet $worksheet)
=======
     */
    public function cloneCellCollection(Worksheet $worksheet): static
>>>>>>> match
    {
        $this->storeCurrentCell();
        $newCollection = clone $this;

        $newCollection->parent = $worksheet;
        $newCollection->cachePrefix = $newCollection->getUniqueID();

        foreach ($this->index as $key => $value) {
            $newCollection->index[$key] = $value;
            $stored = $newCollection->cache->set(
                $newCollection->cachePrefix . $key,
<<<<<<< HEAD
                clone $this->cache->get($this->cachePrefix . $key)
=======
                clone $this->getCache($key)
>>>>>>> match
            );
            if ($stored === false) {
                $this->destructIfNeeded($newCollection, 'Failed to copy cells in cache');
            }
        }

        return $newCollection;
    }

    /**
     * Remove a row, deleting all cells in that row.
     *
     * @param int|string $row Row number to remove
     */
    public function removeRow($row): void
    {
        $this->storeCurrentCell();
        $row = (int) $row;
        if ($row <= 0) {
            throw new PhpSpreadsheetException('Row number must be a positive integer');
        }

        $toRow = $row * self::MAX_COLUMN_ID;
        $fromRow = --$row * self::MAX_COLUMN_ID;
        foreach ($this->index as $coordinate) {
            if ($coordinate >= $fromRow && $coordinate < $toRow) {
                $row = (int) floor($coordinate / self::MAX_COLUMN_ID) + 1;
                $column = Coordinate::stringFromColumnIndex($coordinate % self::MAX_COLUMN_ID);
                $this->delete("{$column}{$row}");
            }
        }
    }

    /**
     * Remove a column, deleting all cells in that column.
     *
     * @param string $column Column ID to remove
     */
<<<<<<< HEAD
    public function removeColumn($column): void
=======
    public function removeColumn(string $column): void
>>>>>>> match
    {
        $this->storeCurrentCell();

        $columnIndex = Coordinate::columnIndexFromString($column);
        foreach ($this->index as $coordinate) {
            if ($coordinate % self::MAX_COLUMN_ID === $columnIndex) {
                $row = (int) floor($coordinate / self::MAX_COLUMN_ID) + 1;
                $column = Coordinate::stringFromColumnIndex($coordinate % self::MAX_COLUMN_ID);
                $this->delete("{$column}{$row}");
            }
        }
    }

    /**
     * Store cell data in cache for the current cell object if it's "dirty",
     * and the 'nullify' the current cell object.
     */
    private function storeCurrentCell(): void
    {
        if ($this->currentCellIsDirty && isset($this->currentCoordinate, $this->currentCell)) {
<<<<<<< HEAD
            $this->currentCell->/** @scrutinizer ignore-call */ detach();
=======
            $this->currentCell->detach();
>>>>>>> match

            $stored = $this->cache->set($this->cachePrefix . $this->currentCoordinate, $this->currentCell);
            if ($stored === false) {
                $this->destructIfNeeded($this, "Failed to store cell {$this->currentCoordinate} in cache");
            }
            $this->currentCellIsDirty = false;
        }

        $this->currentCoordinate = null;
        $this->currentCell = null;
    }

    private function destructIfNeeded(self $cells, string $message): void
    {
        $cells->__destruct();

        throw new PhpSpreadsheetException($message);
    }

    /**
     * Add or update a cell identified by its coordinate into the collection.
     *
     * @param string $cellCoordinate Coordinate of the cell to update
     * @param Cell $cell Cell to update
<<<<<<< HEAD
     *
     * @return Cell
     */
    public function add($cellCoordinate, Cell $cell)
=======
     */
    public function add(string $cellCoordinate, Cell $cell): Cell
>>>>>>> match
    {
        if ($cellCoordinate !== $this->currentCoordinate) {
            $this->storeCurrentCell();
        }
        $column = 0;
        $row = '';
        sscanf($cellCoordinate, '%[A-Z]%d', $column, $row);
        $this->index[$cellCoordinate] = (--$row * self::MAX_COLUMN_ID) + Coordinate::columnIndexFromString((string) $column);

        $this->currentCoordinate = $cellCoordinate;
        $this->currentCell = $cell;
        $this->currentCellIsDirty = true;

        return $cell;
    }

    /**
     * Get cell at a specific coordinate.
     *
     * @param string $cellCoordinate Coordinate of the cell
     *
     * @return null|Cell Cell that was found, or null if not found
     */
<<<<<<< HEAD
    public function get($cellCoordinate)
=======
    public function get(string $cellCoordinate): ?Cell
>>>>>>> match
    {
        if ($cellCoordinate === $this->currentCoordinate) {
            return $this->currentCell;
        }
        $this->storeCurrentCell();

        // Return null if requested entry doesn't exist in collection
        if ($this->has($cellCoordinate) === false) {
            return null;
        }

<<<<<<< HEAD
        // Check if the entry that has been requested actually exists in the cache
        $cell = $this->cache->get($this->cachePrefix . $cellCoordinate);
        if ($cell === null) {
            throw new PhpSpreadsheetException("Cell entry {$cellCoordinate} no longer exists in cache. This probably means that the cache was cleared by someone else.");
        }
=======
        $cell = $this->getcache($cellCoordinate);
>>>>>>> match

        // Set current entry to the requested entry
        $this->currentCoordinate = $cellCoordinate;
        $this->currentCell = $cell;
        // Re-attach this as the cell's parent
        $this->currentCell->attach($this);

        // Return requested entry
        return $this->currentCell;
    }

    /**
     * Clear the cell collection and disconnect from our parent.
     */
    public function unsetWorksheetCells(): void
    {
        if ($this->currentCell !== null) {
            $this->currentCell->detach();
            $this->currentCell = null;
            $this->currentCoordinate = null;
        }

        // Flush the cache
        $this->__destruct();

        $this->index = [];

        // detach ourself from the worksheet, so that it can then delete this object successfully
        $this->parent = null;
    }

    /**
     * Destroy this cell collection.
     */
    public function __destruct()
    {
        $this->cache->deleteMultiple($this->getAllCacheKeys());
<<<<<<< HEAD
=======
        $this->parent = null;
>>>>>>> match
    }

    /**
     * Returns all known cache keys.
     *
<<<<<<< HEAD
     * @return Generator|string[]
     */
    private function getAllCacheKeys()
=======
     * @return iterable<string>
     */
    private function getAllCacheKeys(): iterable
>>>>>>> match
    {
        foreach ($this->index as $coordinate => $value) {
            yield $this->cachePrefix . $coordinate;
        }
    }
<<<<<<< HEAD
=======

    private function getCache(string $cellCoordinate): Cell
    {
        $cell = $this->cache->get($this->cachePrefix . $cellCoordinate);
        if (!($cell instanceof Cell)) {
            throw new PhpSpreadsheetException("Cell entry {$cellCoordinate} no longer exists in cache. This probably means that the cache was cleared by someone else.");
        }

        return $cell;
    }
>>>>>>> match
}
