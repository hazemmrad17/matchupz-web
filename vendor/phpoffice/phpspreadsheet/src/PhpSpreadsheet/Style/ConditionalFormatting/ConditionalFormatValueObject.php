<?php

namespace PhpOffice\PhpSpreadsheet\Style\ConditionalFormatting;

class ConditionalFormatValueObject
{
<<<<<<< HEAD
    /** @var mixed */
    private $type;

    /** @var mixed */
    private $value;

    /** @var mixed */
    private $cellFormula;

    /**
     * ConditionalFormatValueObject constructor.
     *
     * @param mixed $type
     * @param mixed $value
     * @param null|mixed $cellFormula
     */
    public function __construct($type, $value = null, $cellFormula = null)
=======
    private string $type;

    private null|float|int|string $value;

    private ?string $cellFormula;

    public function __construct(string $type, null|float|int|string $value = null, ?string $cellFormula = null)
>>>>>>> match
    {
        $this->type = $type;
        $this->value = $value;
        $this->cellFormula = $cellFormula;
    }

<<<<<<< HEAD
    /**
     * @return mixed
     */
    public function getType()
=======
    public function getType(): string
>>>>>>> match
    {
        return $this->type;
    }

<<<<<<< HEAD
    /**
     * @param mixed $type
     */
    public function setType($type): self
=======
    public function setType(string $type): self
>>>>>>> match
    {
        $this->type = $type;

        return $this;
    }

<<<<<<< HEAD
    /**
     * @return mixed
     */
    public function getValue()
=======
    public function getValue(): null|float|int|string
>>>>>>> match
    {
        return $this->value;
    }

<<<<<<< HEAD
    /**
     * @param mixed $value
     */
    public function setValue($value): self
=======
    public function setValue(null|float|int|string $value): self
>>>>>>> match
    {
        $this->value = $value;

        return $this;
    }

<<<<<<< HEAD
    /**
     * @return mixed
     */
    public function getCellFormula()
=======
    public function getCellFormula(): ?string
>>>>>>> match
    {
        return $this->cellFormula;
    }

<<<<<<< HEAD
    /**
     * @param mixed $cellFormula
     */
    public function setCellFormula($cellFormula): self
=======
    public function setCellFormula(?string $cellFormula): self
>>>>>>> match
    {
        $this->cellFormula = $cellFormula;

        return $this;
    }
}
