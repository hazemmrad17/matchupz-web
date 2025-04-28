<?php

namespace PhpOffice\PhpSpreadsheet\Style;

class Fill extends Supervisor
{
    // Fill types
    const FILL_NONE = 'none';
    const FILL_SOLID = 'solid';
    const FILL_GRADIENT_LINEAR = 'linear';
    const FILL_GRADIENT_PATH = 'path';
    const FILL_PATTERN_DARKDOWN = 'darkDown';
    const FILL_PATTERN_DARKGRAY = 'darkGray';
    const FILL_PATTERN_DARKGRID = 'darkGrid';
    const FILL_PATTERN_DARKHORIZONTAL = 'darkHorizontal';
    const FILL_PATTERN_DARKTRELLIS = 'darkTrellis';
    const FILL_PATTERN_DARKUP = 'darkUp';
    const FILL_PATTERN_DARKVERTICAL = 'darkVertical';
    const FILL_PATTERN_GRAY0625 = 'gray0625';
    const FILL_PATTERN_GRAY125 = 'gray125';
    const FILL_PATTERN_LIGHTDOWN = 'lightDown';
    const FILL_PATTERN_LIGHTGRAY = 'lightGray';
    const FILL_PATTERN_LIGHTGRID = 'lightGrid';
    const FILL_PATTERN_LIGHTHORIZONTAL = 'lightHorizontal';
    const FILL_PATTERN_LIGHTTRELLIS = 'lightTrellis';
    const FILL_PATTERN_LIGHTUP = 'lightUp';
    const FILL_PATTERN_LIGHTVERTICAL = 'lightVertical';
    const FILL_PATTERN_MEDIUMGRAY = 'mediumGray';

<<<<<<< HEAD
    /**
     * @var null|int
     */
    public $startcolorIndex;

    /**
     * @var null|int
     */
    public $endcolorIndex;

    /**
     * Fill type.
     *
     * @var null|string
     */
    protected $fillType = self::FILL_NONE;

    /**
     * Rotation.
     *
     * @var float
     */
    protected $rotation = 0.0;

    /**
     * Start color.
     *
     * @var Color
     */
    protected $startColor;

    /**
     * End color.
     *
     * @var Color
     */
    protected $endColor;

    /** @var bool */
    private $colorChanged = false;
=======
    public ?int $startcolorIndex = null;

    public ?int $endcolorIndex = null;

    /**
     * Fill type.
     */
    protected ?string $fillType = self::FILL_NONE;

    /**
     * Rotation.
     */
    protected float $rotation = 0.0;

    /**
     * Start color.
     */
    protected Color $startColor;

    /**
     * End color.
     */
    protected Color $endColor;

    private bool $colorChanged = false;
>>>>>>> match

    /**
     * Create a new Fill.
     *
     * @param bool $isSupervisor Flag indicating if this is a supervisor or not
     *                                    Leave this value at default unless you understand exactly what
     *                                        its ramifications are
     * @param bool $isConditional Flag indicating if this is a conditional style or not
     *                                    Leave this value at default unless you understand exactly what
     *                                        its ramifications are
     */
<<<<<<< HEAD
    public function __construct($isSupervisor = false, $isConditional = false)
=======
    public function __construct(bool $isSupervisor = false, bool $isConditional = false)
>>>>>>> match
    {
        // Supervisor?
        parent::__construct($isSupervisor);

        // Initialise values
        if ($isConditional) {
            $this->fillType = null;
        }
        $this->startColor = new Color(Color::COLOR_WHITE, $isSupervisor, $isConditional);
        $this->endColor = new Color(Color::COLOR_BLACK, $isSupervisor, $isConditional);

        // bind parent if we are a supervisor
        if ($isSupervisor) {
            $this->startColor->bindParent($this, 'startColor');
            $this->endColor->bindParent($this, 'endColor');
        }
    }

    /**
     * Get the shared style component for the currently active cell in currently active sheet.
     * Only used for style supervisor.
<<<<<<< HEAD
     *
     * @return Fill
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

        return $parent->getSharedComponent()->getFill();
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
=======
     */
    public function getStyleArray(array $array): array
>>>>>>> match
    {
        return ['fill' => $array];
    }

    /**
     * Apply styles from array.
     *
     * <code>
     * $spreadsheet->getActiveSheet()->getStyle('B2')->getFill()->applyFromArray(
     *     [
     *         'fillType' => Fill::FILL_GRADIENT_LINEAR,
     *         'rotation' => 0.0,
     *         'startColor' => [
     *             'rgb' => '000000'
     *         ],
     *         'endColor' => [
     *             'argb' => 'FFFFFFFF'
     *         ]
     *     ]
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
            if (isset($styleArray['fillType'])) {
                $this->setFillType($styleArray['fillType']);
            }
            if (isset($styleArray['rotation'])) {
                $this->setRotation($styleArray['rotation']);
            }
            if (isset($styleArray['startColor'])) {
                $this->getStartColor()->applyFromArray($styleArray['startColor']);
            }
            if (isset($styleArray['endColor'])) {
                $this->getEndColor()->applyFromArray($styleArray['endColor']);
            }
            if (isset($styleArray['color'])) {
                $this->getStartColor()->applyFromArray($styleArray['color']);
                $this->getEndColor()->applyFromArray($styleArray['color']);
            }
        }

        return $this;
    }

    /**
     * Get Fill Type.
<<<<<<< HEAD
     *
     * @return null|string
     */
    public function getFillType()
=======
     */
    public function getFillType(): ?string
>>>>>>> match
    {
        if ($this->isSupervisor) {
            return $this->getSharedComponent()->getFillType();
        }

        return $this->fillType;
    }

    /**
     * Set Fill Type.
     *
     * @param string $fillType Fill type, see self::FILL_*
     *
     * @return $this
     */
<<<<<<< HEAD
    public function setFillType($fillType)
=======
    public function setFillType(string $fillType): static
>>>>>>> match
    {
        if ($this->isSupervisor) {
            $styleArray = $this->getStyleArray(['fillType' => $fillType]);
            $this->getActiveSheet()->getStyle($this->getSelectedCells())->applyFromArray($styleArray);
        } else {
            $this->fillType = $fillType;
        }

        return $this;
    }

    /**
     * Get Rotation.
<<<<<<< HEAD
     *
     * @return float
     */
    public function getRotation()
=======
     */
    public function getRotation(): float
>>>>>>> match
    {
        if ($this->isSupervisor) {
            return $this->getSharedComponent()->getRotation();
        }

        return $this->rotation;
    }

    /**
     * Set Rotation.
     *
<<<<<<< HEAD
     * @param float $angleInDegrees
     *
     * @return $this
     */
    public function setRotation($angleInDegrees)
=======
     * @return $this
     */
    public function setRotation(float $angleInDegrees): static
>>>>>>> match
    {
        if ($this->isSupervisor) {
            $styleArray = $this->getStyleArray(['rotation' => $angleInDegrees]);
            $this->getActiveSheet()->getStyle($this->getSelectedCells())->applyFromArray($styleArray);
        } else {
            $this->rotation = $angleInDegrees;
        }

        return $this;
    }

    /**
     * Get Start Color.
<<<<<<< HEAD
     *
     * @return Color
     */
    public function getStartColor()
=======
     */
    public function getStartColor(): Color
>>>>>>> match
    {
        return $this->startColor;
    }

    /**
     * Set Start Color.
     *
     * @return $this
     */
<<<<<<< HEAD
    public function setStartColor(Color $color)
=======
    public function setStartColor(Color $color): static
>>>>>>> match
    {
        $this->colorChanged = true;
        // make sure parameter is a real color and not a supervisor
        $color = $color->getIsSupervisor() ? $color->getSharedComponent() : $color;

        if ($this->isSupervisor) {
            $styleArray = $this->getStartColor()->getStyleArray(['argb' => $color->getARGB()]);
            $this->getActiveSheet()->getStyle($this->getSelectedCells())->applyFromArray($styleArray);
        } else {
            $this->startColor = $color;
        }

        return $this;
    }

    /**
     * Get End Color.
<<<<<<< HEAD
     *
     * @return Color
     */
    public function getEndColor()
=======
     */
    public function getEndColor(): Color
>>>>>>> match
    {
        return $this->endColor;
    }

    /**
     * Set End Color.
     *
     * @return $this
     */
<<<<<<< HEAD
    public function setEndColor(Color $color)
=======
    public function setEndColor(Color $color): static
>>>>>>> match
    {
        $this->colorChanged = true;
        // make sure parameter is a real color and not a supervisor
        $color = $color->getIsSupervisor() ? $color->getSharedComponent() : $color;

        if ($this->isSupervisor) {
            $styleArray = $this->getEndColor()->getStyleArray(['argb' => $color->getARGB()]);
            $this->getActiveSheet()->getStyle($this->getSelectedCells())->applyFromArray($styleArray);
        } else {
            $this->endColor = $color;
        }

        return $this;
    }

    public function getColorsChanged(): bool
    {
        if ($this->isSupervisor) {
            $changed = $this->getSharedComponent()->colorChanged;
        } else {
            $changed = $this->colorChanged;
        }

        return $changed || $this->startColor->getHasChanged() || $this->endColor->getHasChanged();
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
<<<<<<< HEAD
        // Note that we don't care about colours for fill type NONE, but could have duplicate NONEs with
        //  different hashes if we don't explicitly prevent this
        return md5(
            $this->getFillType() .
            $this->getRotation() .
            ($this->getFillType() !== self::FILL_NONE ? $this->getStartColor()->getHashCode() : '') .
            ($this->getFillType() !== self::FILL_NONE ? $this->getEndColor()->getHashCode() : '') .
            ((string) $this->getColorsChanged()) .
            __CLASS__
=======

        // Note that we don't care about colours for fill type NONE, but could have duplicate NONEs with
        //  different hashes if we don't explicitly prevent this
        return md5(
            $this->getFillType()
            . $this->getRotation()
            . ($this->getFillType() !== self::FILL_NONE ? $this->getStartColor()->getHashCode() : '')
            . ($this->getFillType() !== self::FILL_NONE ? $this->getEndColor()->getHashCode() : '')
            . ((string) $this->getColorsChanged())
            . __CLASS__
>>>>>>> match
        );
    }

    protected function exportArray1(): array
    {
        $exportedArray = [];
        $this->exportArray2($exportedArray, 'fillType', $this->getFillType());
        $this->exportArray2($exportedArray, 'rotation', $this->getRotation());
        if ($this->getColorsChanged()) {
            $this->exportArray2($exportedArray, 'endColor', $this->getEndColor());
            $this->exportArray2($exportedArray, 'startColor', $this->getStartColor());
        }

        return $exportedArray;
    }
}
