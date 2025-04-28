<?php

namespace PhpOffice\PhpSpreadsheet\Shared;

class Escher
{
    /**
     * Drawing Group Container.
<<<<<<< HEAD
     *
     * @var ?Escher\DggContainer
     */
    private $dggContainer;

    /**
     * Drawing Container.
     *
     * @var ?Escher\DgContainer
     */
    private $dgContainer;

    /**
     * Get Drawing Group Container.
     *
     * @return ?Escher\DggContainer
     */
    public function getDggContainer()
=======
     */
    private ?Escher\DggContainer $dggContainer = null;

    /**
     * Drawing Container.
     */
    private ?Escher\DgContainer $dgContainer = null;

    /**
     * Get Drawing Group Container.
     */
    public function getDggContainer(): ?Escher\DggContainer
>>>>>>> match
    {
        return $this->dggContainer;
    }

    /**
     * Set Drawing Group Container.
<<<<<<< HEAD
     *
     * @param Escher\DggContainer $dggContainer
     *
     * @return Escher\DggContainer
     */
    public function setDggContainer($dggContainer)
=======
     */
    public function setDggContainer(Escher\DggContainer $dggContainer): Escher\DggContainer
>>>>>>> match
    {
        return $this->dggContainer = $dggContainer;
    }

    /**
     * Get Drawing Container.
<<<<<<< HEAD
     *
     * @return ?Escher\DgContainer
     */
    public function getDgContainer()
=======
     */
    public function getDgContainer(): ?Escher\DgContainer
>>>>>>> match
    {
        return $this->dgContainer;
    }

    /**
     * Set Drawing Container.
<<<<<<< HEAD
     *
     * @param Escher\DgContainer $dgContainer
     *
     * @return Escher\DgContainer
     */
    public function setDgContainer($dgContainer)
=======
     */
    public function setDgContainer(Escher\DgContainer $dgContainer): Escher\DgContainer
>>>>>>> match
    {
        return $this->dgContainer = $dgContainer;
    }
}
