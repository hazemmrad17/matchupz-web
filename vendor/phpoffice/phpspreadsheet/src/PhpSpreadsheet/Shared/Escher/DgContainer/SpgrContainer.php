<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Escher\DgContainer;

class SpgrContainer
{
    /**
     * Parent Shape Group Container.
<<<<<<< HEAD
     *
     * @var null|SpgrContainer
     */
    private $parent;

    /**
     * Shape Container collection.
     *
     * @var array
     */
    private $children = [];
=======
     */
    private ?self $parent = null;

    /**
     * Shape Container collection.
     */
    private array $children = [];
>>>>>>> match

    /**
     * Set parent Shape Group Container.
     */
    public function setParent(?self $parent): void
    {
        $this->parent = $parent;
    }

    /**
     * Get the parent Shape Group Container if any.
     */
    public function getParent(): ?self
    {
        return $this->parent;
    }

    /**
     * Add a child. This will be either spgrContainer or spContainer.
     *
<<<<<<< HEAD
     * @param mixed $child
     */
    public function addChild($child): void
=======
     * @param SpgrContainer|SpgrContainer\SpContainer $child child to be added
     */
    public function addChild(mixed $child): void
>>>>>>> match
    {
        $this->children[] = $child;
        $child->setParent($this);
    }

    /**
     * Get collection of Shape Containers.
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    /**
     * Recursively get all spContainers within this spgrContainer.
     *
     * @return SpgrContainer\SpContainer[]
     */
<<<<<<< HEAD
    public function getAllSpContainers()
=======
    public function getAllSpContainers(): array
>>>>>>> match
    {
        $allSpContainers = [];

        foreach ($this->children as $child) {
            if ($child instanceof self) {
                $allSpContainers = array_merge($allSpContainers, $child->getAllSpContainers());
            } else {
                $allSpContainers[] = $child;
            }
        }

        return $allSpContainers;
    }
}
