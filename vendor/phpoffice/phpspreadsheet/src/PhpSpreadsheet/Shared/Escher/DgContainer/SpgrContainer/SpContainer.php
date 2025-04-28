<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Escher\DgContainer\SpgrContainer;

use PhpOffice\PhpSpreadsheet\Shared\Escher\DgContainer\SpgrContainer;

class SpContainer
{
    /**
     * Parent Shape Group Container.
<<<<<<< HEAD
     *
     * @var SpgrContainer
     */
    private $parent;

    /**
     * Is this a group shape?
     *
     * @var bool
     */
    private $spgr = false;

    /**
     * Shape type.
     *
     * @var int
     */
    private $spType;

    /**
     * Shape flag.
     *
     * @var int
     */
    private $spFlag;

    /**
     * Shape index (usually group shape has index 0, and the rest: 1,2,3...).
     *
     * @var int
     */
    private $spId;

    /**
     * Array of options.
     *
     * @var array
     */
    private $OPT;

    /**
     * Cell coordinates of upper-left corner of shape, e.g. 'A1'.
     *
     * @var string
     */
    private $startCoordinates;

    /**
     * Horizontal offset of upper-left corner of shape measured in 1/1024 of column width.
     *
     * @var int
     */
    private $startOffsetX;

    /**
     * Vertical offset of upper-left corner of shape measured in 1/256 of row height.
     *
     * @var int
     */
    private $startOffsetY;

    /**
     * Cell coordinates of bottom-right corner of shape, e.g. 'B2'.
     *
     * @var string
     */
    private $endCoordinates;

    /**
     * Horizontal offset of bottom-right corner of shape measured in 1/1024 of column width.
     *
     * @var int
     */
    private $endOffsetX;

    /**
     * Vertical offset of bottom-right corner of shape measured in 1/256 of row height.
     *
     * @var int
     */
    private $endOffsetY;

    /**
     * Set parent Shape Group Container.
     *
     * @param SpgrContainer $parent
     */
    public function setParent($parent): void
=======
     */
    private SpgrContainer $parent;

    /**
     * Is this a group shape?
     */
    private bool $spgr = false;

    /**
     * Shape type.
     */
    private int $spType;

    /**
     * Shape flag.
     */
    private int $spFlag;

    /**
     * Shape index (usually group shape has index 0, and the rest: 1,2,3...).
     */
    private int $spId;

    /**
     * Array of options.
     */
    private array $OPT = [];

    /**
     * Cell coordinates of upper-left corner of shape, e.g. 'A1'.
     */
    private string $startCoordinates = '';

    /**
     * Horizontal offset of upper-left corner of shape measured in 1/1024 of column width.
     */
    private int|float $startOffsetX;

    /**
     * Vertical offset of upper-left corner of shape measured in 1/256 of row height.
     */
    private int|float $startOffsetY;

    /**
     * Cell coordinates of bottom-right corner of shape, e.g. 'B2'.
     */
    private string $endCoordinates;

    /**
     * Horizontal offset of bottom-right corner of shape measured in 1/1024 of column width.
     */
    private int|float $endOffsetX;

    /**
     * Vertical offset of bottom-right corner of shape measured in 1/256 of row height.
     */
    private int|float $endOffsetY;

    /**
     * Set parent Shape Group Container.
     */
    public function setParent(SpgrContainer $parent): void
>>>>>>> match
    {
        $this->parent = $parent;
    }

    /**
     * Get the parent Shape Group Container.
<<<<<<< HEAD
     *
     * @return SpgrContainer
     */
    public function getParent()
=======
     */
    public function getParent(): SpgrContainer
>>>>>>> match
    {
        return $this->parent;
    }

    /**
     * Set whether this is a group shape.
<<<<<<< HEAD
     *
     * @param bool $value
     */
    public function setSpgr($value): void
=======
     */
    public function setSpgr(bool $value): void
>>>>>>> match
    {
        $this->spgr = $value;
    }

    /**
     * Get whether this is a group shape.
<<<<<<< HEAD
     *
     * @return bool
     */
    public function getSpgr()
=======
     */
    public function getSpgr(): bool
>>>>>>> match
    {
        return $this->spgr;
    }

    /**
     * Set the shape type.
<<<<<<< HEAD
     *
     * @param int $value
     */
    public function setSpType($value): void
=======
     */
    public function setSpType(int $value): void
>>>>>>> match
    {
        $this->spType = $value;
    }

    /**
     * Get the shape type.
<<<<<<< HEAD
     *
     * @return int
     */
    public function getSpType()
=======
     */
    public function getSpType(): int
>>>>>>> match
    {
        return $this->spType;
    }

    /**
     * Set the shape flag.
<<<<<<< HEAD
     *
     * @param int $value
     */
    public function setSpFlag($value): void
=======
     */
    public function setSpFlag(int $value): void
>>>>>>> match
    {
        $this->spFlag = $value;
    }

    /**
     * Get the shape flag.
<<<<<<< HEAD
     *
     * @return int
     */
    public function getSpFlag()
=======
     */
    public function getSpFlag(): int
>>>>>>> match
    {
        return $this->spFlag;
    }

    /**
     * Set the shape index.
<<<<<<< HEAD
     *
     * @param int $value
     */
    public function setSpId($value): void
=======
     */
    public function setSpId(int $value): void
>>>>>>> match
    {
        $this->spId = $value;
    }

    /**
     * Get the shape index.
<<<<<<< HEAD
     *
     * @return int
     */
    public function getSpId()
=======
     */
    public function getSpId(): int
>>>>>>> match
    {
        return $this->spId;
    }

    /**
     * Set an option for the Shape Group Container.
     *
     * @param int $property The number specifies the option
<<<<<<< HEAD
     * @param mixed $value
     */
    public function setOPT($property, $value): void
=======
     */
    public function setOPT(int $property, mixed $value): void
>>>>>>> match
    {
        $this->OPT[$property] = $value;
    }

    /**
     * Get an option for the Shape Group Container.
     *
     * @param int $property The number specifies the option
<<<<<<< HEAD
     *
     * @return mixed
     */
    public function getOPT($property)
=======
     */
    public function getOPT(int $property): mixed
>>>>>>> match
    {
        if (isset($this->OPT[$property])) {
            return $this->OPT[$property];
        }

        return null;
    }

    /**
     * Get the collection of options.
<<<<<<< HEAD
     *
     * @return array
     */
    public function getOPTCollection()
=======
     */
    public function getOPTCollection(): array
>>>>>>> match
    {
        return $this->OPT;
    }

    /**
     * Set cell coordinates of upper-left corner of shape.
     *
     * @param string $value eg: 'A1'
     */
<<<<<<< HEAD
    public function setStartCoordinates($value): void
=======
    public function setStartCoordinates(string $value): void
>>>>>>> match
    {
        $this->startCoordinates = $value;
    }

    /**
     * Get cell coordinates of upper-left corner of shape.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getStartCoordinates()
=======
     */
    public function getStartCoordinates(): string
>>>>>>> match
    {
        return $this->startCoordinates;
    }

    /**
     * Set offset in x-direction of upper-left corner of shape measured in 1/1024 of column width.
<<<<<<< HEAD
     *
     * @param int $startOffsetX
     */
    public function setStartOffsetX($startOffsetX): void
=======
     */
    public function setStartOffsetX(int|float $startOffsetX): void
>>>>>>> match
    {
        $this->startOffsetX = $startOffsetX;
    }

    /**
     * Get offset in x-direction of upper-left corner of shape measured in 1/1024 of column width.
<<<<<<< HEAD
     *
     * @return int
     */
    public function getStartOffsetX()
=======
     */
    public function getStartOffsetX(): int|float
>>>>>>> match
    {
        return $this->startOffsetX;
    }

    /**
     * Set offset in y-direction of upper-left corner of shape measured in 1/256 of row height.
<<<<<<< HEAD
     *
     * @param int $startOffsetY
     */
    public function setStartOffsetY($startOffsetY): void
=======
     */
    public function setStartOffsetY(int|float $startOffsetY): void
>>>>>>> match
    {
        $this->startOffsetY = $startOffsetY;
    }

    /**
     * Get offset in y-direction of upper-left corner of shape measured in 1/256 of row height.
<<<<<<< HEAD
     *
     * @return int
     */
    public function getStartOffsetY()
=======
     */
    public function getStartOffsetY(): int|float
>>>>>>> match
    {
        return $this->startOffsetY;
    }

    /**
     * Set cell coordinates of bottom-right corner of shape.
     *
     * @param string $value eg: 'A1'
     */
<<<<<<< HEAD
    public function setEndCoordinates($value): void
=======
    public function setEndCoordinates(string $value): void
>>>>>>> match
    {
        $this->endCoordinates = $value;
    }

    /**
     * Get cell coordinates of bottom-right corner of shape.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getEndCoordinates()
=======
     */
    public function getEndCoordinates(): string
>>>>>>> match
    {
        return $this->endCoordinates;
    }

    /**
     * Set offset in x-direction of bottom-right corner of shape measured in 1/1024 of column width.
<<<<<<< HEAD
     *
     * @param int $endOffsetX
     */
    public function setEndOffsetX($endOffsetX): void
=======
     */
    public function setEndOffsetX(int|float $endOffsetX): void
>>>>>>> match
    {
        $this->endOffsetX = $endOffsetX;
    }

    /**
     * Get offset in x-direction of bottom-right corner of shape measured in 1/1024 of column width.
<<<<<<< HEAD
     *
     * @return int
     */
    public function getEndOffsetX()
=======
     */
    public function getEndOffsetX(): int|float
>>>>>>> match
    {
        return $this->endOffsetX;
    }

    /**
     * Set offset in y-direction of bottom-right corner of shape measured in 1/256 of row height.
<<<<<<< HEAD
     *
     * @param int $endOffsetY
     */
    public function setEndOffsetY($endOffsetY): void
=======
     */
    public function setEndOffsetY(int|float $endOffsetY): void
>>>>>>> match
    {
        $this->endOffsetY = $endOffsetY;
    }

    /**
     * Get offset in y-direction of bottom-right corner of shape measured in 1/256 of row height.
<<<<<<< HEAD
     *
     * @return int
     */
    public function getEndOffsetY()
=======
     */
    public function getEndOffsetY(): int|float
>>>>>>> match
    {
        return $this->endOffsetY;
    }

    /**
     * Get the nesting level of this spContainer. This is the number of spgrContainers between this spContainer and
     * the dgContainer. A value of 1 = immediately within first spgrContainer
     * Higher nesting level occurs if and only if spContainer is part of a shape group.
     *
     * @return int Nesting level
     */
<<<<<<< HEAD
    public function getNestingLevel()
=======
    public function getNestingLevel(): int
>>>>>>> match
    {
        $nestingLevel = 0;

        $parent = $this->getParent();
        while ($parent instanceof SpgrContainer) {
            ++$nestingLevel;
            $parent = $parent->getParent();
        }

        return $nestingLevel;
    }
}
