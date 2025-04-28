<?php

namespace PhpOffice\PhpSpreadsheet\Style;

use PhpOffice\PhpSpreadsheet\Exception as PhpSpreadsheetException;

class Border extends Supervisor
{
    // Border style
    const BORDER_NONE = 'none';
    const BORDER_DASHDOT = 'dashDot';
    const BORDER_DASHDOTDOT = 'dashDotDot';
    const BORDER_DASHED = 'dashed';
    const BORDER_DOTTED = 'dotted';
    const BORDER_DOUBLE = 'double';
    const BORDER_HAIR = 'hair';
    const BORDER_MEDIUM = 'medium';
    const BORDER_MEDIUMDASHDOT = 'mediumDashDot';
    const BORDER_MEDIUMDASHDOTDOT = 'mediumDashDotDot';
    const BORDER_MEDIUMDASHED = 'mediumDashed';
    const BORDER_SLANTDASHDOT = 'slantDashDot';
    const BORDER_THICK = 'thick';
    const BORDER_THIN = 'thin';
    const BORDER_OMIT = 'omit'; // should be used only for Conditional

    /**
     * Border style.
<<<<<<< HEAD
     *
     * @var string
     */
    protected $borderStyle = self::BORDER_NONE;

    /**
     * Border color.
     *
     * @var Color
     */
    protected $color;

    /**
     * @var null|int
     */
    public $colorIndex;
=======
     */
    protected string $borderStyle = self::BORDER_NONE;

    /**
     * Border color.
     */
    protected Color $color;

    public ?int $colorIndex = null;
>>>>>>> match

    /**
     * Create a new Border.
     *
     * @param bool $isSupervisor Flag indicating if this is a supervisor or not
     *                                    Leave this value at default unless you understand exactly what
     *                                        its ramifications are
     */
<<<<<<< HEAD
    public function __construct($isSupervisor = false, bool $isConditional = false)
=======
    public function __construct(bool $isSupervisor = false, bool $isConditional = false)
>>>>>>> match
    {
        // Supervisor?
        parent::__construct($isSupervisor);

        // Initialise values
        $this->color = new Color(Color::COLOR_BLACK, $isSupervisor);

        // bind parent if we are a supervisor
        if ($isSupervisor) {
            $this->color->bindParent($this, 'color');
        }
        if ($isConditional) {
            $this->borderStyle = self::BORDER_OMIT;
        }
    }

    /**
     * Get the shared style component for the currently active cell in currently active sheet.
     * Only used for style supervisor.
<<<<<<< HEAD
     *
     * @return Border
     */
    public function getSharedComponent()
    {
        /** @var Style */
=======
     */
    public function getSharedComponent(): self
    {
        /** @var Style $parent */
>>>>>>> match
        $parent = $this->parent;

        /** @var Borders $sharedComponent */
        $sharedComponent = $parent->getSharedComponent();
<<<<<<< HEAD
        switch ($this->parentPropertyName) {
            case 'bottom':
                return $sharedComponent->getBottom();
            case 'diagonal':
                return $sharedComponent->getDiagonal();
            case 'left':
                return $sharedComponent->getLeft();
            case 'right':
                return $sharedComponent->getRight();
            case 'top':
                return $sharedComponent->getTop();
        }

        throw new PhpSpreadsheetException('Cannot get shared component for a pseudo-border.');
=======

        return match ($this->parentPropertyName) {
            'bottom' => $sharedComponent->getBottom(),
            'diagonal' => $sharedComponent->getDiagonal(),
            'left' => $sharedComponent->getLeft(),
            'right' => $sharedComponent->getRight(),
            'top' => $sharedComponent->getTop(),
            default => throw new PhpSpreadsheetException('Cannot get shared component for a pseudo-border.'),
        };
>>>>>>> match
    }

    /**
     * Build style array from subcomponents.
<<<<<<< HEAD
     *
     * @param array $array
     *
     * @return array
     */
    public function getStyleArray($array)
    {
        /** @var Style */
        $parent = $this->parent;

        return $parent->/** @scrutinizer ignore-call */ getStyleArray([$this->parentPropertyName => $array]);
=======
     */
    public function getStyleArray(array $array): array
    {
        /** @var Style $parent */
        $parent = $this->parent;

        return $parent->getStyleArray([$this->parentPropertyName => $array]);
>>>>>>> match
    }

    /**
     * Apply styles from array.
     *
     * <code>
     * $spreadsheet->getActiveSheet()->getStyle('B2')->getBorders()->getTop()->applyFromArray(
     *        [
     *            'borderStyle' => Border::BORDER_DASHDOT,
     *            'color' => [
     *                'rgb' => '808080'
     *            ]
     *        ]
     * );
     * </code>
     *
     * @param array $styleArray Array containing style information
     *
     * @return $this
     */
<<<<<<< HEAD
    public function applyFromArray(array $styleArray)
=======
    public function applyFromArray(array $styleArray): static
>>>>>>> match
    {
        if ($this->isSupervisor) {
            $this->getActiveSheet()->getStyle($this->getSelectedCells())->applyFromArray($this->getStyleArray($styleArray));
        } else {
            if (isset($styleArray['borderStyle'])) {
                $this->setBorderStyle($styleArray['borderStyle']);
            }
            if (isset($styleArray['color'])) {
                $this->getColor()->applyFromArray($styleArray['color']);
            }
        }

        return $this;
    }

    /**
     * Get Border style.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getBorderStyle()
=======
     */
    public function getBorderStyle(): string
>>>>>>> match
    {
        if ($this->isSupervisor) {
            return $this->getSharedComponent()->getBorderStyle();
        }

        return $this->borderStyle;
    }

    /**
     * Set Border style.
     *
<<<<<<< HEAD
     * @param bool|string $style
     *                            When passing a boolean, FALSE equates Border::BORDER_NONE
=======
     * @param bool|string $style When passing a boolean, FALSE equates Border::BORDER_NONE
>>>>>>> match
     *                                and TRUE to Border::BORDER_MEDIUM
     *
     * @return $this
     */
<<<<<<< HEAD
    public function setBorderStyle($style)
=======
    public function setBorderStyle(bool|string $style): static
>>>>>>> match
    {
        if (empty($style)) {
            $style = self::BORDER_NONE;
        } elseif (is_bool($style)) {
            $style = self::BORDER_MEDIUM;
        }

        if ($this->isSupervisor) {
            $styleArray = $this->getStyleArray(['borderStyle' => $style]);
            $this->getActiveSheet()->getStyle($this->getSelectedCells())->applyFromArray($styleArray);
        } else {
            $this->borderStyle = $style;
        }

        return $this;
    }

    /**
     * Get Border Color.
<<<<<<< HEAD
     *
     * @return Color
     */
    public function getColor()
=======
     */
    public function getColor(): Color
>>>>>>> match
    {
        return $this->color;
    }

    /**
     * Set Border Color.
     *
     * @return $this
     */
<<<<<<< HEAD
    public function setColor(Color $color)
=======
    public function setColor(Color $color): static
>>>>>>> match
    {
        // make sure parameter is a real color and not a supervisor
        $color = $color->getIsSupervisor() ? $color->getSharedComponent() : $color;

        if ($this->isSupervisor) {
            $styleArray = $this->getColor()->getStyleArray(['argb' => $color->getARGB()]);
            $this->getActiveSheet()->getStyle($this->getSelectedCells())->applyFromArray($styleArray);
        } else {
            $this->color = $color;
        }

        return $this;
    }

    /**
     * Get hash code.
     *
     * @return string Hash code
     */
<<<<<<< HEAD
    public function getHashCode()
=======
    public function getHashCode(): string
>>>>>>> match
    {
        if ($this->isSupervisor) {
            return $this->getSharedComponent()->getHashCode();
        }

        return md5(
<<<<<<< HEAD
            $this->borderStyle .
            $this->color->getHashCode() .
            __CLASS__
=======
            $this->borderStyle
            . $this->color->getHashCode()
            . __CLASS__
>>>>>>> match
        );
    }

    protected function exportArray1(): array
    {
        $exportedArray = [];
        $this->exportArray2($exportedArray, 'borderStyle', $this->getBorderStyle());
        $this->exportArray2($exportedArray, 'color', $this->getColor());

        return $exportedArray;
    }
}
