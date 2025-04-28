<?php

namespace PhpOffice\PhpSpreadsheet\Worksheet;

use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Helper\Dimension as CssDimension;

class ColumnDimension extends Dimension
{
    /**
     * Column index.
<<<<<<< HEAD
     *
     * @var ?string
     */
    private $columnIndex;
=======
     */
    private ?string $columnIndex;
>>>>>>> match

    /**
     * Column width.
     *
     * When this is set to a negative value, the column width should be ignored by IWriter
<<<<<<< HEAD
     *
     * @var float
     */
    private $width = -1;

    /**
     * Auto size?
     *
     * @var bool
     */
    private $autoSize = false;
=======
     */
    private float $width = -1;

    /**
     * Auto size?
     */
    private bool $autoSize = false;
>>>>>>> match

    /**
     * Create a new ColumnDimension.
     *
     * @param ?string $index Character column index
     */
<<<<<<< HEAD
    public function __construct($index = 'A')
=======
    public function __construct(?string $index = 'A')
>>>>>>> match
    {
        // Initialise values
        $this->columnIndex = $index;

        // set dimension as unformatted by default
        parent::__construct(0);
    }

    /**
     * Get column index as string eg: 'A'.
     */
    public function getColumnIndex(): ?string
    {
        return $this->columnIndex;
    }

    /**
     * Set column index as string eg: 'A'.
     */
    public function setColumnIndex(string $index): self
    {
        $this->columnIndex = $index;

        return $this;
    }

    /**
     * Get column index as numeric.
     */
    public function getColumnNumeric(): int
    {
        return Coordinate::columnIndexFromString($this->columnIndex ?? '');
    }

    /**
     * Set column index as numeric.
     */
    public function setColumnNumeric(int $index): self
    {
        $this->columnIndex = Coordinate::stringFromColumnIndex($index);

        return $this;
    }

    /**
     * Get Width.
     *
     * Each unit of column width is equal to the width of one character in the default font size. A value of -1
     *      tells Excel to display this column in its default width.
     * By default, this will be the return value; but this method also accepts an optional unit of measure argument
     *    and will convert the returned value to the specified UoM..
     */
    public function getWidth(?string $unitOfMeasure = null): float
    {
        return ($unitOfMeasure === null || $this->width < 0)
            ? $this->width
            : (new CssDimension((string) $this->width))->toUnit($unitOfMeasure);
    }

    /**
     * Set Width.
     *
     * Each unit of column width is equal to the width of one character in the default font size. A value of -1
     *      tells Excel to display this column in its default width.
     * By default, this will be the unit of measure for the passed value; but this method also accepts an
     *    optional unit of measure argument, and will convert the value from the specified UoM using an
     *    approximation method.
     *
     * @return $this
     */
<<<<<<< HEAD
    public function setWidth(float $width, ?string $unitOfMeasure = null)
=======
    public function setWidth(float $width, ?string $unitOfMeasure = null): static
>>>>>>> match
    {
        $this->width = ($unitOfMeasure === null || $width < 0)
            ? $width
            : (new CssDimension("{$width}{$unitOfMeasure}"))->width();

        return $this;
    }

    /**
     * Get Auto Size.
     */
    public function getAutoSize(): bool
    {
        return $this->autoSize;
    }

    /**
     * Set Auto Size.
     *
     * @return $this
     */
<<<<<<< HEAD
    public function setAutoSize(bool $autosizeEnabled)
=======
    public function setAutoSize(bool $autosizeEnabled): static
>>>>>>> match
    {
        $this->autoSize = $autosizeEnabled;

        return $this;
    }
}
