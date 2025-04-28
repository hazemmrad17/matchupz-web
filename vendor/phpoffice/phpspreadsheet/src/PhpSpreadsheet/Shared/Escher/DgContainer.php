<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Escher;

use PhpOffice\PhpSpreadsheet\Exception as SpreadsheetException;
<<<<<<< HEAD
=======
use PhpOffice\PhpSpreadsheet\Shared\Escher\DgContainer\SpgrContainer;
>>>>>>> match

class DgContainer
{
    /**
     * Drawing index, 1-based.
<<<<<<< HEAD
     *
     * @var ?int
     */
    private $dgId;

    /**
     * Last shape index in this drawing.
     *
     * @var ?int
     */
    private $lastSpId;

    /** @var ?DgContainer\SpgrContainer */
    private $spgrContainer;
=======
     */
    private ?int $dgId = null;

    /**
     * Last shape index in this drawing.
     */
    private ?int $lastSpId = null;

    private ?SpgrContainer $spgrContainer = null;
>>>>>>> match

    public function getDgId(): ?int
    {
        return $this->dgId;
    }

    public function setDgId(int $value): void
    {
        $this->dgId = $value;
    }

    public function getLastSpId(): ?int
    {
        return $this->lastSpId;
    }

    public function setLastSpId(int $value): void
    {
        $this->lastSpId = $value;
    }

<<<<<<< HEAD
    public function getSpgrContainer(): ?DgContainer\SpgrContainer
=======
    public function getSpgrContainer(): ?SpgrContainer
>>>>>>> match
    {
        return $this->spgrContainer;
    }

<<<<<<< HEAD
    public function getSpgrContainerOrThrow(): DgContainer\SpgrContainer
=======
    public function getSpgrContainerOrThrow(): SpgrContainer
>>>>>>> match
    {
        if ($this->spgrContainer !== null) {
            return $this->spgrContainer;
        }

        throw new SpreadsheetException('spgrContainer is unexpectedly null');
    }

<<<<<<< HEAD
    /** @param DgContainer\SpgrContainer $spgrContainer */
    public function setSpgrContainer($spgrContainer): DgContainer\SpgrContainer
=======
    public function setSpgrContainer(SpgrContainer $spgrContainer): SpgrContainer
>>>>>>> match
    {
        return $this->spgrContainer = $spgrContainer;
    }
}
