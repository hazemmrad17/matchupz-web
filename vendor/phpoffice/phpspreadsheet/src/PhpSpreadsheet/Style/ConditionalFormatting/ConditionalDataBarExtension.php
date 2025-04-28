<?php

namespace PhpOffice\PhpSpreadsheet\Style\ConditionalFormatting;

class ConditionalDataBarExtension
{
    /** <dataBar> attributes */
<<<<<<< HEAD

    /** @var int */
    private $minLength;

    /** @var int */
    private $maxLength;

    /** @var null|bool */
    private $border;

    /** @var null|bool */
    private $gradient;

    /** @var string */
    private $direction;

    /** @var null|bool */
    private $negativeBarBorderColorSameAsPositive;

    /** @var string */
    private $axisPosition;

    // <dataBar> children

    /** @var ConditionalFormatValueObject */
    private $maximumConditionalFormatValueObject;

    /** @var ConditionalFormatValueObject */
    private $minimumConditionalFormatValueObject;

    /** @var string */
    private $borderColor;

    /** @var string */
    private $negativeFillColor;

    /** @var string */
    private $negativeBorderColor;

    /** @var array */
    private $axisColor = [
=======
    private int $minLength;

    private int $maxLength;

    private ?bool $border = null;

    private ?bool $gradient = null;

    private ?string $direction = null;

    private ?bool $negativeBarBorderColorSameAsPositive = null;

    private ?string $axisPosition = null;

    // <dataBar> children

    private ConditionalFormatValueObject $maximumConditionalFormatValueObject;

    private ConditionalFormatValueObject $minimumConditionalFormatValueObject;

    private ?string $borderColor = null;

    private ?string $negativeFillColor = null;

    private ?string $negativeBorderColor = null;

    private array $axisColor = [
>>>>>>> match
        'rgb' => null,
        'theme' => null,
        'tint' => null,
    ];

    public function getXmlAttributes(): array
    {
        $ret = [];
        foreach (['minLength', 'maxLength', 'direction', 'axisPosition'] as $attrKey) {
            if (null !== $this->{$attrKey}) {
                $ret[$attrKey] = $this->{$attrKey};
            }
        }
        foreach (['border', 'gradient', 'negativeBarBorderColorSameAsPositive'] as $attrKey) {
            if (null !== $this->{$attrKey}) {
                $ret[$attrKey] = $this->{$attrKey} ? '1' : '0';
            }
        }

        return $ret;
    }

    public function getXmlElements(): array
    {
        $ret = [];
        $elms = ['borderColor', 'negativeFillColor', 'negativeBorderColor'];
        foreach ($elms as $elmKey) {
            if (null !== $this->{$elmKey}) {
                $ret[$elmKey] = ['rgb' => $this->{$elmKey}];
            }
        }
        foreach (array_filter($this->axisColor) as $attrKey => $axisColorAttr) {
            if (!isset($ret['axisColor'])) {
                $ret['axisColor'] = [];
            }
            $ret['axisColor'][$attrKey] = $axisColorAttr;
        }

        return $ret;
    }

<<<<<<< HEAD
    /**
     * @return int
     */
    public function getMinLength()
=======
    public function getMinLength(): int
>>>>>>> match
    {
        return $this->minLength;
    }

    public function setMinLength(int $minLength): self
    {
        $this->minLength = $minLength;

        return $this;
    }

<<<<<<< HEAD
    /**
     * @return int
     */
    public function getMaxLength()
=======
    public function getMaxLength(): int
>>>>>>> match
    {
        return $this->maxLength;
    }

    public function setMaxLength(int $maxLength): self
    {
        $this->maxLength = $maxLength;

        return $this;
    }

<<<<<<< HEAD
    /**
     * @return null|bool
     */
    public function getBorder()
=======
    public function getBorder(): ?bool
>>>>>>> match
    {
        return $this->border;
    }

    public function setBorder(bool $border): self
    {
        $this->border = $border;

        return $this;
    }

<<<<<<< HEAD
    /**
     * @return null|bool
     */
    public function getGradient()
=======
    public function getGradient(): ?bool
>>>>>>> match
    {
        return $this->gradient;
    }

    public function setGradient(bool $gradient): self
    {
        $this->gradient = $gradient;

        return $this;
    }

<<<<<<< HEAD
    /**
     * @return string
     */
    public function getDirection()
=======
    public function getDirection(): ?string
>>>>>>> match
    {
        return $this->direction;
    }

    public function setDirection(string $direction): self
    {
        $this->direction = $direction;

        return $this;
    }

<<<<<<< HEAD
    /**
     * @return null|bool
     */
    public function getNegativeBarBorderColorSameAsPositive()
=======
    public function getNegativeBarBorderColorSameAsPositive(): ?bool
>>>>>>> match
    {
        return $this->negativeBarBorderColorSameAsPositive;
    }

    public function setNegativeBarBorderColorSameAsPositive(bool $negativeBarBorderColorSameAsPositive): self
    {
        $this->negativeBarBorderColorSameAsPositive = $negativeBarBorderColorSameAsPositive;

        return $this;
    }

<<<<<<< HEAD
    /**
     * @return string
     */
    public function getAxisPosition()
=======
    public function getAxisPosition(): ?string
>>>>>>> match
    {
        return $this->axisPosition;
    }

    public function setAxisPosition(string $axisPosition): self
    {
        $this->axisPosition = $axisPosition;

        return $this;
    }

<<<<<<< HEAD
    /**
     * @return ConditionalFormatValueObject
     */
    public function getMaximumConditionalFormatValueObject()
=======
    public function getMaximumConditionalFormatValueObject(): ConditionalFormatValueObject
>>>>>>> match
    {
        return $this->maximumConditionalFormatValueObject;
    }

    public function setMaximumConditionalFormatValueObject(ConditionalFormatValueObject $maximumConditionalFormatValueObject): self
    {
        $this->maximumConditionalFormatValueObject = $maximumConditionalFormatValueObject;

        return $this;
    }

<<<<<<< HEAD
    /**
     * @return ConditionalFormatValueObject
     */
    public function getMinimumConditionalFormatValueObject()
=======
    public function getMinimumConditionalFormatValueObject(): ConditionalFormatValueObject
>>>>>>> match
    {
        return $this->minimumConditionalFormatValueObject;
    }

    public function setMinimumConditionalFormatValueObject(ConditionalFormatValueObject $minimumConditionalFormatValueObject): self
    {
        $this->minimumConditionalFormatValueObject = $minimumConditionalFormatValueObject;

        return $this;
    }

<<<<<<< HEAD
    /**
     * @return string
     */
    public function getBorderColor()
=======
    public function getBorderColor(): ?string
>>>>>>> match
    {
        return $this->borderColor;
    }

    public function setBorderColor(string $borderColor): self
    {
        $this->borderColor = $borderColor;

        return $this;
    }

<<<<<<< HEAD
    /**
     * @return string
     */
    public function getNegativeFillColor()
=======
    public function getNegativeFillColor(): ?string
>>>>>>> match
    {
        return $this->negativeFillColor;
    }

    public function setNegativeFillColor(string $negativeFillColor): self
    {
        $this->negativeFillColor = $negativeFillColor;

        return $this;
    }

<<<<<<< HEAD
    /**
     * @return string
     */
    public function getNegativeBorderColor()
=======
    public function getNegativeBorderColor(): ?string
>>>>>>> match
    {
        return $this->negativeBorderColor;
    }

    public function setNegativeBorderColor(string $negativeBorderColor): self
    {
        $this->negativeBorderColor = $negativeBorderColor;

        return $this;
    }

    public function getAxisColor(): array
    {
        return $this->axisColor;
    }

<<<<<<< HEAD
    /**
     * @param mixed $rgb
     * @param null|mixed $theme
     * @param null|mixed $tint
     */
    public function setAxisColor($rgb, $theme = null, $tint = null): self
=======
    public function setAxisColor(mixed $rgb, mixed $theme = null, mixed $tint = null): self
>>>>>>> match
    {
        $this->axisColor = [
            'rgb' => $rgb,
            'theme' => $theme,
            'tint' => $tint,
        ];

        return $this;
    }
}
