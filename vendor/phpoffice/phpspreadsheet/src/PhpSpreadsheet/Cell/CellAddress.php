<?php

namespace PhpOffice\PhpSpreadsheet\Cell;

use PhpOffice\PhpSpreadsheet\Exception;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
<<<<<<< HEAD

class CellAddress
{
    /**
     * @var ?Worksheet
     */
    protected $worksheet;

    /**
     * @var string
     */
    protected $cellAddress;

    /**
     * @var string
     */
    protected $columnName;

    /**
     * @var int
     */
    protected $columnId;

    /**
     * @var int
     */
    protected $rowId;
=======
use Stringable;

class CellAddress implements Stringable
{
    protected ?Worksheet $worksheet;

    protected string $cellAddress;

    protected string $columnName = '';

    protected int $columnId;

    protected int $rowId;
>>>>>>> match

    public function __construct(string $cellAddress, ?Worksheet $worksheet = null)
    {
        $this->cellAddress = str_replace('$', '', $cellAddress);
        [$this->columnId, $this->rowId, $this->columnName] = Coordinate::indexesFromString($this->cellAddress);
        $this->worksheet = $worksheet;
    }

<<<<<<< HEAD
    /**
     * @param mixed $columnId
     * @param mixed $rowId
     */
    private static function validateColumnAndRow($columnId, $rowId): void
=======
    public function __destruct()
    {
        unset($this->worksheet);
    }

    /**
     * @phpstan-assert int|numeric-string $columnId
     * @phpstan-assert int|numeric-string $rowId
     */
    private static function validateColumnAndRow(int|string $columnId, int|string $rowId): void
>>>>>>> match
    {
        if (!is_numeric($columnId) || $columnId <= 0 || !is_numeric($rowId) || $rowId <= 0) {
            throw new Exception('Row and Column Ids must be positive integer values');
        }
    }

<<<<<<< HEAD
    /**
     * @param mixed $columnId
     * @param mixed $rowId
     */
    public static function fromColumnAndRow($columnId, $rowId, ?Worksheet $worksheet = null): self
    {
        self::validateColumnAndRow($columnId, $rowId);

        /** @phpstan-ignore-next-line */
        return new static(Coordinate::stringFromColumnIndex($columnId) . ((string) $rowId), $worksheet);
=======
    public static function fromColumnAndRow(int|string $columnId, int|string $rowId, ?Worksheet $worksheet = null): self
    {
        self::validateColumnAndRow($columnId, $rowId);

        return new self(Coordinate::stringFromColumnIndex($columnId) . $rowId, $worksheet);
>>>>>>> match
    }

    public static function fromColumnRowArray(array $array, ?Worksheet $worksheet = null): self
    {
        [$columnId, $rowId] = $array;

<<<<<<< HEAD
        return static::fromColumnAndRow($columnId, $rowId, $worksheet);
    }

    /**
     * @param mixed $cellAddress
     */
    public static function fromCellAddress($cellAddress, ?Worksheet $worksheet = null): self
    {
        /** @phpstan-ignore-next-line */
        return new static($cellAddress, $worksheet);
=======
        return self::fromColumnAndRow($columnId, $rowId, $worksheet);
    }

    public static function fromCellAddress(string $cellAddress, ?Worksheet $worksheet = null): self
    {
        return new self($cellAddress, $worksheet);
>>>>>>> match
    }

    /**
     * The returned address string will contain the worksheet name as well, if available,
     *     (ie. if a Worksheet was provided to the constructor).
     *     e.g. "'Mark''s Worksheet'!C5".
     */
    public function fullCellAddress(): string
    {
        if ($this->worksheet !== null) {
            $title = str_replace("'", "''", $this->worksheet->getTitle());

            return "'{$title}'!{$this->cellAddress}";
        }

        return $this->cellAddress;
    }

    public function worksheet(): ?Worksheet
    {
        return $this->worksheet;
    }

    /**
     * The returned address string will contain just the column/row address,
     *     (even if a Worksheet was provided to the constructor).
     *     e.g. "C5".
     */
    public function cellAddress(): string
    {
        return $this->cellAddress;
    }

    public function rowId(): int
    {
        return $this->rowId;
    }

    public function columnId(): int
    {
        return $this->columnId;
    }

    public function columnName(): string
    {
        return $this->columnName;
    }

    public function nextRow(int $offset = 1): self
    {
        $newRowId = $this->rowId + $offset;
        if ($newRowId < 1) {
            $newRowId = 1;
        }

<<<<<<< HEAD
        return static::fromColumnAndRow($this->columnId, $newRowId);
=======
        return self::fromColumnAndRow($this->columnId, $newRowId);
>>>>>>> match
    }

    public function previousRow(int $offset = 1): self
    {
        return $this->nextRow(0 - $offset);
    }

    public function nextColumn(int $offset = 1): self
    {
        $newColumnId = $this->columnId + $offset;
        if ($newColumnId < 1) {
            $newColumnId = 1;
        }

<<<<<<< HEAD
        return static::fromColumnAndRow($newColumnId, $this->rowId);
=======
        return self::fromColumnAndRow($newColumnId, $this->rowId);
>>>>>>> match
    }

    public function previousColumn(int $offset = 1): self
    {
        return $this->nextColumn(0 - $offset);
    }

    /**
     * The returned address string will contain the worksheet name as well, if available,
     *     (ie. if a Worksheet was provided to the constructor).
     *     e.g. "'Mark''s Worksheet'!C5".
     */
<<<<<<< HEAD
    public function __toString()
=======
    public function __toString(): string
>>>>>>> match
    {
        return $this->fullCellAddress();
    }
}
