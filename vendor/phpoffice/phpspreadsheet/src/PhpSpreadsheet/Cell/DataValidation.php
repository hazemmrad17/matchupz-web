<?php

namespace PhpOffice\PhpSpreadsheet\Cell;

class DataValidation
{
    // Data validation types
    const TYPE_NONE = 'none';
    const TYPE_CUSTOM = 'custom';
    const TYPE_DATE = 'date';
    const TYPE_DECIMAL = 'decimal';
    const TYPE_LIST = 'list';
    const TYPE_TEXTLENGTH = 'textLength';
    const TYPE_TIME = 'time';
    const TYPE_WHOLE = 'whole';

    // Data validation error styles
    const STYLE_STOP = 'stop';
    const STYLE_WARNING = 'warning';
    const STYLE_INFORMATION = 'information';

    // Data validation operators
    const OPERATOR_BETWEEN = 'between';
    const OPERATOR_EQUAL = 'equal';
    const OPERATOR_GREATERTHAN = 'greaterThan';
    const OPERATOR_GREATERTHANOREQUAL = 'greaterThanOrEqual';
    const OPERATOR_LESSTHAN = 'lessThan';
    const OPERATOR_LESSTHANOREQUAL = 'lessThanOrEqual';
    const OPERATOR_NOTBETWEEN = 'notBetween';
    const OPERATOR_NOTEQUAL = 'notEqual';
<<<<<<< HEAD

    /**
     * Formula 1.
     *
     * @var string
     */
    private $formula1 = '';

    /**
     * Formula 2.
     *
     * @var string
     */
    private $formula2 = '';

    /**
     * Type.
     *
     * @var string
     */
    private $type = self::TYPE_NONE;

    /**
     * Error style.
     *
     * @var string
     */
    private $errorStyle = self::STYLE_STOP;

    /**
     * Operator.
     *
     * @var string
     */
    private $operator = self::OPERATOR_BETWEEN;

    /**
     * Allow Blank.
     *
     * @var bool
     */
    private $allowBlank = false;

    /**
     * Show DropDown.
     *
     * @var bool
     */
    private $showDropDown = false;

    /**
     * Show InputMessage.
     *
     * @var bool
     */
    private $showInputMessage = false;

    /**
     * Show ErrorMessage.
     *
     * @var bool
     */
    private $showErrorMessage = false;

    /**
     * Error title.
     *
     * @var string
     */
    private $errorTitle = '';

    /**
     * Error.
     *
     * @var string
     */
    private $error = '';

    /**
     * Prompt title.
     *
     * @var string
     */
    private $promptTitle = '';

    /**
     * Prompt.
     *
     * @var string
     */
    private $prompt = '';

    /**
     * Create a new DataValidation.
     */
    public function __construct()
    {
    }

    /**
     * Get Formula 1.
     *
     * @return string
     */
    public function getFormula1()
=======
    private const DEFAULT_OPERATOR = self::OPERATOR_BETWEEN;

    /**
     * Formula 1.
     */
    private string $formula1 = '';

    /**
     * Formula 2.
     */
    private string $formula2 = '';

    /**
     * Type.
     */
    private string $type = self::TYPE_NONE;

    /**
     * Error style.
     */
    private string $errorStyle = self::STYLE_STOP;

    /**
     * Operator.
     */
    private string $operator = self::DEFAULT_OPERATOR;

    /**
     * Allow Blank.
     */
    private bool $allowBlank = false;

    /**
     * Show DropDown.
     */
    private bool $showDropDown = false;

    /**
     * Show InputMessage.
     */
    private bool $showInputMessage = false;

    /**
     * Show ErrorMessage.
     */
    private bool $showErrorMessage = false;

    /**
     * Error title.
     */
    private string $errorTitle = '';

    /**
     * Error.
     */
    private string $error = '';

    /**
     * Prompt title.
     */
    private string $promptTitle = '';

    /**
     * Prompt.
     */
    private string $prompt = '';

    /**
     * Get Formula 1.
     */
    public function getFormula1(): string
>>>>>>> match
    {
        return $this->formula1;
    }

    /**
     * Set Formula 1.
     *
<<<<<<< HEAD
     * @param string $formula
     *
     * @return $this
     */
    public function setFormula1($formula)
=======
     * @return $this
     */
    public function setFormula1(string $formula): static
>>>>>>> match
    {
        $this->formula1 = $formula;

        return $this;
    }

    /**
     * Get Formula 2.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getFormula2()
=======
     */
    public function getFormula2(): string
>>>>>>> match
    {
        return $this->formula2;
    }

    /**
     * Set Formula 2.
     *
<<<<<<< HEAD
     * @param string $formula
     *
     * @return $this
     */
    public function setFormula2($formula)
=======
     * @return $this
     */
    public function setFormula2(string $formula): static
>>>>>>> match
    {
        $this->formula2 = $formula;

        return $this;
    }

    /**
     * Get Type.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getType()
=======
     */
    public function getType(): string
>>>>>>> match
    {
        return $this->type;
    }

    /**
     * Set Type.
     *
<<<<<<< HEAD
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
=======
     * @return $this
     */
    public function setType(string $type): static
>>>>>>> match
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get Error style.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getErrorStyle()
=======
     */
    public function getErrorStyle(): string
>>>>>>> match
    {
        return $this->errorStyle;
    }

    /**
     * Set Error style.
     *
     * @param string $errorStyle see self::STYLE_*
     *
     * @return $this
     */
<<<<<<< HEAD
    public function setErrorStyle($errorStyle)
=======
    public function setErrorStyle(string $errorStyle): static
>>>>>>> match
    {
        $this->errorStyle = $errorStyle;

        return $this;
    }

    /**
     * Get Operator.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getOperator()
=======
     */
    public function getOperator(): string
>>>>>>> match
    {
        return $this->operator;
    }

    /**
     * Set Operator.
     *
<<<<<<< HEAD
     * @param string $operator
     *
     * @return $this
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
=======
     * @return $this
     */
    public function setOperator(string $operator): static
    {
        $this->operator = ($operator === '') ? self::DEFAULT_OPERATOR : $operator;
>>>>>>> match

        return $this;
    }

    /**
     * Get Allow Blank.
<<<<<<< HEAD
     *
     * @return bool
     */
    public function getAllowBlank()
=======
     */
    public function getAllowBlank(): bool
>>>>>>> match
    {
        return $this->allowBlank;
    }

    /**
     * Set Allow Blank.
     *
<<<<<<< HEAD
     * @param bool $allowBlank
     *
     * @return $this
     */
    public function setAllowBlank($allowBlank)
=======
     * @return $this
     */
    public function setAllowBlank(bool $allowBlank): static
>>>>>>> match
    {
        $this->allowBlank = $allowBlank;

        return $this;
    }

    /**
     * Get Show DropDown.
<<<<<<< HEAD
     *
     * @return bool
     */
    public function getShowDropDown()
=======
     */
    public function getShowDropDown(): bool
>>>>>>> match
    {
        return $this->showDropDown;
    }

    /**
     * Set Show DropDown.
     *
<<<<<<< HEAD
     * @param bool $showDropDown
     *
     * @return $this
     */
    public function setShowDropDown($showDropDown)
=======
     * @return $this
     */
    public function setShowDropDown(bool $showDropDown): static
>>>>>>> match
    {
        $this->showDropDown = $showDropDown;

        return $this;
    }

    /**
     * Get Show InputMessage.
<<<<<<< HEAD
     *
     * @return bool
     */
    public function getShowInputMessage()
=======
     */
    public function getShowInputMessage(): bool
>>>>>>> match
    {
        return $this->showInputMessage;
    }

    /**
     * Set Show InputMessage.
     *
<<<<<<< HEAD
     * @param bool $showInputMessage
     *
     * @return $this
     */
    public function setShowInputMessage($showInputMessage)
=======
     * @return $this
     */
    public function setShowInputMessage(bool $showInputMessage): static
>>>>>>> match
    {
        $this->showInputMessage = $showInputMessage;

        return $this;
    }

    /**
     * Get Show ErrorMessage.
<<<<<<< HEAD
     *
     * @return bool
     */
    public function getShowErrorMessage()
=======
     */
    public function getShowErrorMessage(): bool
>>>>>>> match
    {
        return $this->showErrorMessage;
    }

    /**
     * Set Show ErrorMessage.
     *
<<<<<<< HEAD
     * @param bool $showErrorMessage
     *
     * @return $this
     */
    public function setShowErrorMessage($showErrorMessage)
=======
     * @return $this
     */
    public function setShowErrorMessage(bool $showErrorMessage): static
>>>>>>> match
    {
        $this->showErrorMessage = $showErrorMessage;

        return $this;
    }

    /**
     * Get Error title.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getErrorTitle()
=======
     */
    public function getErrorTitle(): string
>>>>>>> match
    {
        return $this->errorTitle;
    }

    /**
     * Set Error title.
     *
<<<<<<< HEAD
     * @param string $errorTitle
     *
     * @return $this
     */
    public function setErrorTitle($errorTitle)
=======
     * @return $this
     */
    public function setErrorTitle(string $errorTitle): static
>>>>>>> match
    {
        $this->errorTitle = $errorTitle;

        return $this;
    }

    /**
     * Get Error.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getError()
=======
     */
    public function getError(): string
>>>>>>> match
    {
        return $this->error;
    }

    /**
     * Set Error.
     *
<<<<<<< HEAD
     * @param string $error
     *
     * @return $this
     */
    public function setError($error)
=======
     * @return $this
     */
    public function setError(string $error): static
>>>>>>> match
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Get Prompt title.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getPromptTitle()
=======
     */
    public function getPromptTitle(): string
>>>>>>> match
    {
        return $this->promptTitle;
    }

    /**
     * Set Prompt title.
     *
<<<<<<< HEAD
     * @param string $promptTitle
     *
     * @return $this
     */
    public function setPromptTitle($promptTitle)
=======
     * @return $this
     */
    public function setPromptTitle(string $promptTitle): static
>>>>>>> match
    {
        $this->promptTitle = $promptTitle;

        return $this;
    }

    /**
     * Get Prompt.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getPrompt()
=======
     */
    public function getPrompt(): string
>>>>>>> match
    {
        return $this->prompt;
    }

    /**
     * Set Prompt.
     *
<<<<<<< HEAD
     * @param string $prompt
     *
     * @return $this
     */
    public function setPrompt($prompt)
=======
     * @return $this
     */
    public function setPrompt(string $prompt): static
>>>>>>> match
    {
        $this->prompt = $prompt;

        return $this;
    }

    /**
     * Get hash code.
     *
     * @return string Hash code
     */
<<<<<<< HEAD
    public function getHashCode()
    {
        return md5(
            $this->formula1 .
            $this->formula2 .
            $this->type .
            $this->errorStyle .
            $this->operator .
            ($this->allowBlank ? 't' : 'f') .
            ($this->showDropDown ? 't' : 'f') .
            ($this->showInputMessage ? 't' : 'f') .
            ($this->showErrorMessage ? 't' : 'f') .
            $this->errorTitle .
            $this->error .
            $this->promptTitle .
            $this->prompt .
            $this->sqref .
            __CLASS__
        );
    }

    /**
     * Implement PHP __clone to create a deep clone, not just a shallow copy.
     */
    public function __clone()
    {
        $vars = get_object_vars($this);
        foreach ($vars as $key => $value) {
            if (is_object($value)) {
                $this->$key = clone $value;
            } else {
                $this->$key = $value;
            }
        }
    }

    /** @var ?string */
    private $sqref;
=======
    public function getHashCode(): string
    {
        return md5(
            $this->formula1
            . $this->formula2
            . $this->type
            . $this->errorStyle
            . $this->operator
            . ($this->allowBlank ? 't' : 'f')
            . ($this->showDropDown ? 't' : 'f')
            . ($this->showInputMessage ? 't' : 'f')
            . ($this->showErrorMessage ? 't' : 'f')
            . $this->errorTitle
            . $this->error
            . $this->promptTitle
            . $this->prompt
            . $this->sqref
            . __CLASS__
        );
    }

    private ?string $sqref = null;
>>>>>>> match

    public function getSqref(): ?string
    {
        return $this->sqref;
    }

    public function setSqref(?string $str): self
    {
        $this->sqref = $str;

        return $this;
    }
}
