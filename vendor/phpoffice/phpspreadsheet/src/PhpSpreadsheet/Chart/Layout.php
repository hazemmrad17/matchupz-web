<?php

namespace PhpOffice\PhpSpreadsheet\Chart;

use PhpOffice\PhpSpreadsheet\Style\Font;

class Layout
{
    /**
     * layoutTarget.
<<<<<<< HEAD
     *
     * @var ?string
     */
    private $layoutTarget;

    /**
     * X Mode.
     *
     * @var ?string
     */
    private $xMode;

    /**
     * Y Mode.
     *
     * @var ?string
     */
    private $yMode;

    /**
     * X-Position.
     *
     * @var ?float
     */
    private $xPos;

    /**
     * Y-Position.
     *
     * @var ?float
     */
    private $yPos;

    /**
     * width.
     *
     * @var ?float
     */
    private $width;

    /**
     * height.
     *
     * @var ?float
     */
    private $height;

    /**
     * Position - t=top.
     *
     * @var string
     */
    private $dLblPos = '';

    /** @var string */
    private $numFmtCode = '';

    /** @var bool */
    private $numFmtLinked = false;
=======
     */
    private ?string $layoutTarget = null;

    /**
     * X Mode.
     */
    private ?string $xMode = null;

    /**
     * Y Mode.
     */
    private ?string $yMode = null;

    /**
     * X-Position.
     */
    private ?float $xPos = null;

    /**
     * Y-Position.
     */
    private ?float $yPos = null;

    /**
     * width.
     */
    private ?float $width = null;

    /**
     * height.
     */
    private ?float $height = null;

    /**
     * Position - t=top.
     */
    private string $dLblPos = '';

    private string $numFmtCode = '';

    private bool $numFmtLinked = false;
>>>>>>> match

    /**
     * show legend key
     * Specifies that legend keys should be shown in data labels.
<<<<<<< HEAD
     *
     * @var ?bool
     */
    private $showLegendKey;
=======
     */
    private ?bool $showLegendKey = null;
>>>>>>> match

    /**
     * show value
     * Specifies that the value should be shown in a data label.
<<<<<<< HEAD
     *
     * @var ?bool
     */
    private $showVal;
=======
     */
    private ?bool $showVal = null;
>>>>>>> match

    /**
     * show category name
     * Specifies that the category name should be shown in the data label.
<<<<<<< HEAD
     *
     * @var ?bool
     */
    private $showCatName;
=======
     */
    private ?bool $showCatName = null;
>>>>>>> match

    /**
     * show data series name
     * Specifies that the series name should be shown in the data label.
<<<<<<< HEAD
     *
     * @var ?bool
     */
    private $showSerName;
=======
     */
    private ?bool $showSerName = null;
>>>>>>> match

    /**
     * show percentage
     * Specifies that the percentage should be shown in the data label.
<<<<<<< HEAD
     *
     * @var ?bool
     */
    private $showPercent;

    /**
     * show bubble size.
     *
     * @var ?bool
     */
    private $showBubbleSize;
=======
     */
    private ?bool $showPercent = null;

    /**
     * show bubble size.
     */
    private ?bool $showBubbleSize = null;
>>>>>>> match

    /**
     * show leader lines
     * Specifies that leader lines should be shown for the data label.
<<<<<<< HEAD
     *
     * @var ?bool
     */
    private $showLeaderLines;

    /** @var ?ChartColor */
    private $labelFillColor;

    /** @var ?ChartColor */
    private $labelBorderColor;

    /** @var ?Font */
    private $labelFont;

    /** @var Properties */
    private $labelEffects;
=======
     */
    private ?bool $showLeaderLines = null;

    private ?ChartColor $labelFillColor = null;

    private ?ChartColor $labelBorderColor = null;

    private ?Font $labelFont = null;

    private ?Properties $labelEffects = null;
>>>>>>> match

    /**
     * Create a new Layout.
     */
    public function __construct(array $layout = [])
    {
        if (isset($layout['layoutTarget'])) {
            $this->layoutTarget = $layout['layoutTarget'];
        }
        if (isset($layout['xMode'])) {
            $this->xMode = $layout['xMode'];
        }
        if (isset($layout['yMode'])) {
            $this->yMode = $layout['yMode'];
        }
        if (isset($layout['x'])) {
            $this->xPos = (float) $layout['x'];
        }
        if (isset($layout['y'])) {
            $this->yPos = (float) $layout['y'];
        }
        if (isset($layout['w'])) {
            $this->width = (float) $layout['w'];
        }
        if (isset($layout['h'])) {
            $this->height = (float) $layout['h'];
        }
        if (isset($layout['dLblPos'])) {
            $this->dLblPos = (string) $layout['dLblPos'];
        }
        if (isset($layout['numFmtCode'])) {
            $this->numFmtCode = (string) $layout['numFmtCode'];
        }
        $this->initBoolean($layout, 'showLegendKey');
        $this->initBoolean($layout, 'showVal');
        $this->initBoolean($layout, 'showCatName');
        $this->initBoolean($layout, 'showSerName');
        $this->initBoolean($layout, 'showPercent');
        $this->initBoolean($layout, 'showBubbleSize');
        $this->initBoolean($layout, 'showLeaderLines');
        $this->initBoolean($layout, 'numFmtLinked');
        $this->initColor($layout, 'labelFillColor');
        $this->initColor($layout, 'labelBorderColor');
        $labelFont = $layout['labelFont'] ?? null;
        if ($labelFont instanceof Font) {
            $this->labelFont = $labelFont;
        }
        $labelFontColor = $layout['labelFontColor'] ?? null;
        if ($labelFontColor instanceof ChartColor) {
            $this->setLabelFontColor($labelFontColor);
        }
        $labelEffects = $layout['labelEffects'] ?? null;
        if ($labelEffects instanceof Properties) {
            $this->labelEffects = $labelEffects;
        }
    }

    private function initBoolean(array $layout, string $name): void
    {
        if (isset($layout[$name])) {
            $this->$name = (bool) $layout[$name];
        }
    }

    private function initColor(array $layout, string $name): void
    {
        if (isset($layout[$name]) && $layout[$name] instanceof ChartColor) {
            $this->$name = $layout[$name];
        }
    }

    /**
     * Get Layout Target.
<<<<<<< HEAD
     *
     * @return ?string
     */
    public function getLayoutTarget()
=======
     */
    public function getLayoutTarget(): ?string
>>>>>>> match
    {
        return $this->layoutTarget;
    }

    /**
     * Set Layout Target.
     *
<<<<<<< HEAD
     * @param ?string $target
     *
     * @return $this
     */
    public function setLayoutTarget($target)
=======
     * @return $this
     */
    public function setLayoutTarget(?string $target): static
>>>>>>> match
    {
        $this->layoutTarget = $target;

        return $this;
    }

    /**
     * Get X-Mode.
<<<<<<< HEAD
     *
     * @return ?string
     */
    public function getXMode()
=======
     */
    public function getXMode(): ?string
>>>>>>> match
    {
        return $this->xMode;
    }

    /**
     * Set X-Mode.
     *
<<<<<<< HEAD
     * @param ?string $mode
     *
     * @return $this
     */
    public function setXMode($mode)
=======
     * @return $this
     */
    public function setXMode(?string $mode): static
>>>>>>> match
    {
        $this->xMode = (string) $mode;

        return $this;
    }

    /**
     * Get Y-Mode.
<<<<<<< HEAD
     *
     * @return ?string
     */
    public function getYMode()
=======
     */
    public function getYMode(): ?string
>>>>>>> match
    {
        return $this->yMode;
    }

    /**
     * Set Y-Mode.
     *
<<<<<<< HEAD
     * @param ?string $mode
     *
     * @return $this
     */
    public function setYMode($mode)
=======
     * @return $this
     */
    public function setYMode(?string $mode): static
>>>>>>> match
    {
        $this->yMode = (string) $mode;

        return $this;
    }

    /**
     * Get X-Position.
<<<<<<< HEAD
     *
     * @return null|float|int
     */
    public function getXPosition()
=======
     */
    public function getXPosition(): null|float|int
>>>>>>> match
    {
        return $this->xPos;
    }

    /**
     * Set X-Position.
     *
<<<<<<< HEAD
     * @param ?float $position
     *
     * @return $this
     */
    public function setXPosition($position)
    {
        $this->xPos = (float) $position;
=======
     * @return $this
     */
    public function setXPosition(float $position): static
    {
        $this->xPos = $position;
>>>>>>> match

        return $this;
    }

    /**
     * Get Y-Position.
<<<<<<< HEAD
     *
     * @return null|float
     */
    public function getYPosition()
=======
     */
    public function getYPosition(): ?float
>>>>>>> match
    {
        return $this->yPos;
    }

    /**
     * Set Y-Position.
     *
<<<<<<< HEAD
     * @param ?float $position
     *
     * @return $this
     */
    public function setYPosition($position)
    {
        $this->yPos = (float) $position;
=======
     * @return $this
     */
    public function setYPosition(float $position): static
    {
        $this->yPos = $position;
>>>>>>> match

        return $this;
    }

    /**
     * Get Width.
<<<<<<< HEAD
     *
     * @return ?float
     */
    public function getWidth()
=======
     */
    public function getWidth(): ?float
>>>>>>> match
    {
        return $this->width;
    }

    /**
     * Set Width.
     *
<<<<<<< HEAD
     * @param ?float $width
     *
     * @return $this
     */
    public function setWidth($width)
=======
     * @return $this
     */
    public function setWidth(?float $width): static
>>>>>>> match
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get Height.
<<<<<<< HEAD
     *
     * @return null|float
     */
    public function getHeight()
=======
     */
    public function getHeight(): ?float
>>>>>>> match
    {
        return $this->height;
    }

    /**
     * Set Height.
     *
<<<<<<< HEAD
     * @param ?float $height
     *
     * @return $this
     */
    public function setHeight($height)
=======
     * @return $this
     */
    public function setHeight(?float $height): static
>>>>>>> match
    {
        $this->height = $height;

        return $this;
    }

    public function getShowLegendKey(): ?bool
    {
        return $this->showLegendKey;
    }

    /**
     * Set show legend key
     * Specifies that legend keys should be shown in data labels.
     */
    public function setShowLegendKey(?bool $showLegendKey): self
    {
        $this->showLegendKey = $showLegendKey;

        return $this;
    }

    public function getShowVal(): ?bool
    {
        return $this->showVal;
    }

    /**
     * Set show val
     * Specifies that the value should be shown in data labels.
     */
    public function setShowVal(?bool $showDataLabelValues): self
    {
        $this->showVal = $showDataLabelValues;

        return $this;
    }

    public function getShowCatName(): ?bool
    {
        return $this->showCatName;
    }

    /**
     * Set show cat name
     * Specifies that the category name should be shown in data labels.
     */
    public function setShowCatName(?bool $showCategoryName): self
    {
        $this->showCatName = $showCategoryName;

        return $this;
    }

    public function getShowSerName(): ?bool
    {
        return $this->showSerName;
    }

    /**
     * Set show data series name.
     * Specifies that the series name should be shown in data labels.
     */
    public function setShowSerName(?bool $showSeriesName): self
    {
        $this->showSerName = $showSeriesName;

        return $this;
    }

    public function getShowPercent(): ?bool
    {
        return $this->showPercent;
    }

    /**
     * Set show percentage.
     * Specifies that the percentage should be shown in data labels.
     */
    public function setShowPercent(?bool $showPercentage): self
    {
        $this->showPercent = $showPercentage;

        return $this;
    }

    public function getShowBubbleSize(): ?bool
    {
        return $this->showBubbleSize;
    }

    /**
     * Set show bubble size.
     * Specifies that the bubble size should be shown in data labels.
     */
    public function setShowBubbleSize(?bool $showBubbleSize): self
    {
        $this->showBubbleSize = $showBubbleSize;

        return $this;
    }

    public function getShowLeaderLines(): ?bool
    {
        return $this->showLeaderLines;
    }

    /**
     * Set show leader lines.
     * Specifies that leader lines should be shown in data labels.
     */
    public function setShowLeaderLines(?bool $showLeaderLines): self
    {
        $this->showLeaderLines = $showLeaderLines;

        return $this;
    }

    public function getLabelFillColor(): ?ChartColor
    {
        return $this->labelFillColor;
    }

    public function setLabelFillColor(?ChartColor $chartColor): self
    {
        $this->labelFillColor = $chartColor;

        return $this;
    }

    public function getLabelBorderColor(): ?ChartColor
    {
        return $this->labelBorderColor;
    }

    public function setLabelBorderColor(?ChartColor $chartColor): self
    {
        $this->labelBorderColor = $chartColor;

        return $this;
    }

    public function getLabelFont(): ?Font
    {
        return $this->labelFont;
    }

<<<<<<< HEAD
=======
    public function setLabelFont(?Font $labelFont): self
    {
        $this->labelFont = $labelFont;

        return $this;
    }

>>>>>>> match
    public function getLabelEffects(): ?Properties
    {
        return $this->labelEffects;
    }

    public function getLabelFontColor(): ?ChartColor
    {
        if ($this->labelFont === null) {
            return null;
        }

        return $this->labelFont->getChartColor();
    }

    public function setLabelFontColor(?ChartColor $chartColor): self
    {
        if ($this->labelFont === null) {
            $this->labelFont = new Font();
            $this->labelFont->setSize(null, true);
        }
        $this->labelFont->setChartColorFromObject($chartColor);

        return $this;
    }

    public function getDLblPos(): string
    {
        return $this->dLblPos;
    }

    public function setDLblPos(string $dLblPos): self
    {
        $this->dLblPos = $dLblPos;

        return $this;
    }

    public function getNumFmtCode(): string
    {
        return $this->numFmtCode;
    }

    public function setNumFmtCode(string $numFmtCode): self
    {
        $this->numFmtCode = $numFmtCode;

        return $this;
    }

    public function getNumFmtLinked(): bool
    {
        return $this->numFmtLinked;
    }

    public function setNumFmtLinked(bool $numFmtLinked): self
    {
        $this->numFmtLinked = $numFmtLinked;

        return $this;
    }
<<<<<<< HEAD
=======

    /**
     * Implement PHP __clone to create a deep clone, not just a shallow copy.
     */
    public function __clone()
    {
        $this->labelFillColor = ($this->labelFillColor === null) ? null : clone $this->labelFillColor;
        $this->labelBorderColor = ($this->labelBorderColor === null) ? null : clone $this->labelBorderColor;
        $this->labelFont = ($this->labelFont === null) ? null : clone $this->labelFont;
        $this->labelEffects = ($this->labelEffects === null) ? null : clone $this->labelEffects;
    }
>>>>>>> match
}
