<?php

namespace PhpOffice\PhpSpreadsheet\Cell;

class IgnoredErrors
{
<<<<<<< HEAD
    /** @var bool */
    private $numberStoredAsText = false;

    /** @var bool */
    private $formula = false;

    /** @var bool */
    private $twoDigitTextYear = false;

    /** @var bool */
    private $evalError = false;
=======
    private bool $numberStoredAsText = false;

    private bool $formula = false;

    private bool $formulaRange = false;

    private bool $twoDigitTextYear = false;

    private bool $evalError = false;
>>>>>>> match

    public function setNumberStoredAsText(bool $value): self
    {
        $this->numberStoredAsText = $value;

        return $this;
    }

    public function getNumberStoredAsText(): bool
    {
        return $this->numberStoredAsText;
    }

    public function setFormula(bool $value): self
    {
        $this->formula = $value;

        return $this;
    }

    public function getFormula(): bool
    {
        return $this->formula;
    }

<<<<<<< HEAD
=======
    public function setFormulaRange(bool $value): self
    {
        $this->formulaRange = $value;

        return $this;
    }

    public function getFormulaRange(): bool
    {
        return $this->formulaRange;
    }

>>>>>>> match
    public function setTwoDigitTextYear(bool $value): self
    {
        $this->twoDigitTextYear = $value;

        return $this;
    }

    public function getTwoDigitTextYear(): bool
    {
        return $this->twoDigitTextYear;
    }

    public function setEvalError(bool $value): self
    {
        $this->evalError = $value;

        return $this;
    }

    public function getEvalError(): bool
    {
        return $this->evalError;
    }
}
