<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Escher\DggContainer;

class BstoreContainer
{
    /**
     * BLIP Store Entries. Each of them holds one BLIP (Big Large Image or Picture).
     *
     * @var BstoreContainer\BSE[]
     */
<<<<<<< HEAD
    private $BSECollection = [];
=======
    private array $BSECollection = [];
>>>>>>> match

    /**
     * Add a BLIP Store Entry.
     */
    public function addBSE(BstoreContainer\BSE $BSE): void
    {
        $this->BSECollection[] = $BSE;
        $BSE->setParent($this);
    }

    /**
     * Get the collection of BLIP Store Entries.
     *
     * @return BstoreContainer\BSE[]
     */
<<<<<<< HEAD
    public function getBSECollection()
=======
    public function getBSECollection(): array
>>>>>>> match
    {
        return $this->BSECollection;
    }
}
