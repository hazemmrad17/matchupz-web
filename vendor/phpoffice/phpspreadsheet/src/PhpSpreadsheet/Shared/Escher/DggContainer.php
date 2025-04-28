<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Escher;

class DggContainer
{
    /**
     * Maximum shape index of all shapes in all drawings increased by one.
<<<<<<< HEAD
     *
     * @var int
     */
    private $spIdMax;

    /**
     * Total number of drawings saved.
     *
     * @var int
     */
    private $cDgSaved;

    /**
     * Total number of shapes saved (including group shapes).
     *
     * @var int
     */
    private $cSpSaved;

    /**
     * BLIP Store Container.
     *
     * @var ?DggContainer\BstoreContainer
     */
    private $bstoreContainer;

    /**
     * Array of options for the drawing group.
     *
     * @var array
     */
    private $OPT = [];

    /**
     * Array of identifier clusters containg information about the maximum shape identifiers.
     *
     * @var array
     */
    private $IDCLs = [];

    /**
     * Get maximum shape index of all shapes in all drawings (plus one).
     *
     * @return int
     */
    public function getSpIdMax()
=======
     */
    private int $spIdMax;

    /**
     * Total number of drawings saved.
     */
    private int $cDgSaved;

    /**
     * Total number of shapes saved (including group shapes).
     */
    private int $cSpSaved;

    /**
     * BLIP Store Container.
     */
    private ?DggContainer\BstoreContainer $bstoreContainer = null;

    /**
     * Array of options for the drawing group.
     */
    private array $OPT = [];

    /**
     * Array of identifier clusters containg information about the maximum shape identifiers.
     */
    private array $IDCLs = [];

    /**
     * Get maximum shape index of all shapes in all drawings (plus one).
     */
    public function getSpIdMax(): int
>>>>>>> match
    {
        return $this->spIdMax;
    }

    /**
     * Set maximum shape index of all shapes in all drawings (plus one).
<<<<<<< HEAD
     *
     * @param int $value
     */
    public function setSpIdMax($value): void
=======
     */
    public function setSpIdMax(int $value): void
>>>>>>> match
    {
        $this->spIdMax = $value;
    }

    /**
     * Get total number of drawings saved.
<<<<<<< HEAD
     *
     * @return int
     */
    public function getCDgSaved()
=======
     */
    public function getCDgSaved(): int
>>>>>>> match
    {
        return $this->cDgSaved;
    }

    /**
     * Set total number of drawings saved.
<<<<<<< HEAD
     *
     * @param int $value
     */
    public function setCDgSaved($value): void
=======
     */
    public function setCDgSaved(int $value): void
>>>>>>> match
    {
        $this->cDgSaved = $value;
    }

    /**
     * Get total number of shapes saved (including group shapes).
<<<<<<< HEAD
     *
     * @return int
     */
    public function getCSpSaved()
=======
     */
    public function getCSpSaved(): int
>>>>>>> match
    {
        return $this->cSpSaved;
    }

    /**
     * Set total number of shapes saved (including group shapes).
<<<<<<< HEAD
     *
     * @param int $value
     */
    public function setCSpSaved($value): void
=======
     */
    public function setCSpSaved(int $value): void
>>>>>>> match
    {
        $this->cSpSaved = $value;
    }

    /**
     * Get BLIP Store Container.
<<<<<<< HEAD
     *
     * @return ?DggContainer\BstoreContainer
     */
    public function getBstoreContainer()
=======
     */
    public function getBstoreContainer(): ?DggContainer\BstoreContainer
>>>>>>> match
    {
        return $this->bstoreContainer;
    }

    /**
     * Set BLIP Store Container.
<<<<<<< HEAD
     *
     * @param DggContainer\BstoreContainer $bstoreContainer
     */
    public function setBstoreContainer($bstoreContainer): void
=======
     */
    public function setBstoreContainer(DggContainer\BstoreContainer $bstoreContainer): void
>>>>>>> match
    {
        $this->bstoreContainer = $bstoreContainer;
    }

    /**
     * Set an option for the drawing group.
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
     * Get an option for the drawing group.
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
     * Get identifier clusters.
<<<<<<< HEAD
     *
     * @return array
     */
    public function getIDCLs()
=======
     */
    public function getIDCLs(): array
>>>>>>> match
    {
        return $this->IDCLs;
    }

    /**
     * Set identifier clusters. [<drawingId> => <max shape id>, ...].
<<<<<<< HEAD
     *
     * @param array $IDCLs
     */
    public function setIDCLs($IDCLs): void
=======
     */
    public function setIDCLs(array $IDCLs): void
>>>>>>> match
    {
        $this->IDCLs = $IDCLs;
    }
}
