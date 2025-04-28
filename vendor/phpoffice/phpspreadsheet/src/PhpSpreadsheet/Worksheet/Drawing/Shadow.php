<?php

namespace PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

use PhpOffice\PhpSpreadsheet\IComparable;
use PhpOffice\PhpSpreadsheet\Style\Color;

class Shadow implements IComparable
{
    // Shadow alignment
    const SHADOW_BOTTOM = 'b';
    const SHADOW_BOTTOM_LEFT = 'bl';
    const SHADOW_BOTTOM_RIGHT = 'br';
    const SHADOW_CENTER = 'ctr';
    const SHADOW_LEFT = 'l';
    const SHADOW_TOP = 't';
    const SHADOW_TOP_LEFT = 'tl';
    const SHADOW_TOP_RIGHT = 'tr';

    /**
     * Visible.
<<<<<<< HEAD
     *
     * @var bool
     */
    private $visible;
=======
     */
    private bool $visible;
>>>>>>> match

    /**
     * Blur radius.
     *
     * Defaults to 6
<<<<<<< HEAD
     *
     * @var int
     */
    private $blurRadius;
=======
     */
    private int $blurRadius;
>>>>>>> match

    /**
     * Shadow distance.
     *
     * Defaults to 2
<<<<<<< HEAD
     *
     * @var int
     */
    private $distance;

    /**
     * Shadow direction (in degrees).
     *
     * @var int
     */
    private $direction;

    /**
     * Shadow alignment.
     *
     * @var string
     */
    private $alignment;

    /**
     * Color.
     *
     * @var Color
     */
    private $color;

    /**
     * Alpha.
     *
     * @var int
     */
    private $alpha;
=======
     */
    private int $distance;

    /**
     * Shadow direction (in degrees).
     */
    private int $direction;

    /**
     * Shadow alignment.
     */
    private string $alignment;

    /**
     * Color.
     */
    private Color $color;

    /**
     * Alpha.
     */
    private int $alpha;
>>>>>>> match

    /**
     * Create a new Shadow.
     */
    public function __construct()
    {
        // Initialise values
        $this->visible = false;
        $this->blurRadius = 6;
        $this->distance = 2;
        $this->direction = 0;
        $this->alignment = self::SHADOW_BOTTOM_RIGHT;
        $this->color = new Color(Color::COLOR_BLACK);
        $this->alpha = 50;
    }

    /**
     * Get Visible.
<<<<<<< HEAD
     *
     * @return bool
     */
    public function getVisible()
=======
     */
    public function getVisible(): bool
>>>>>>> match
    {
        return $this->visible;
    }

    /**
     * Set Visible.
     *
<<<<<<< HEAD
     * @param bool $visible
     *
     * @return $this
     */
    public function setVisible($visible)
=======
     * @return $this
     */
    public function setVisible(bool $visible): static
>>>>>>> match
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get Blur radius.
<<<<<<< HEAD
     *
     * @return int
     */
    public function getBlurRadius()
=======
     */
    public function getBlurRadius(): int
>>>>>>> match
    {
        return $this->blurRadius;
    }

    /**
     * Set Blur radius.
     *
<<<<<<< HEAD
     * @param int $blurRadius
     *
     * @return $this
     */
    public function setBlurRadius($blurRadius)
=======
     * @return $this
     */
    public function setBlurRadius(int $blurRadius): static
>>>>>>> match
    {
        $this->blurRadius = $blurRadius;

        return $this;
    }

    /**
     * Get Shadow distance.
<<<<<<< HEAD
     *
     * @return int
     */
    public function getDistance()
=======
     */
    public function getDistance(): int
>>>>>>> match
    {
        return $this->distance;
    }

    /**
     * Set Shadow distance.
     *
<<<<<<< HEAD
     * @param int $distance
     *
     * @return $this
     */
    public function setDistance($distance)
=======
     * @return $this
     */
    public function setDistance(int $distance): static
>>>>>>> match
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Get Shadow direction (in degrees).
<<<<<<< HEAD
     *
     * @return int
     */
    public function getDirection()
=======
     */
    public function getDirection(): int
>>>>>>> match
    {
        return $this->direction;
    }

    /**
     * Set Shadow direction (in degrees).
     *
<<<<<<< HEAD
     * @param int $direction
     *
     * @return $this
     */
    public function setDirection($direction)
=======
     * @return $this
     */
    public function setDirection(int $direction): static
>>>>>>> match
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * Get Shadow alignment.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getAlignment()
=======
     */
    public function getAlignment(): string
>>>>>>> match
    {
        return $this->alignment;
    }

    /**
     * Set Shadow alignment.
     *
<<<<<<< HEAD
     * @param string $alignment
     *
     * @return $this
     */
    public function setAlignment($alignment)
=======
     * @return $this
     */
    public function setAlignment(string $alignment): static
>>>>>>> match
    {
        $this->alignment = $alignment;

        return $this;
    }

    /**
     * Get Color.
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
     * Set Color.
     *
     * @return $this
     */
<<<<<<< HEAD
    public function setColor(Color $color)
=======
    public function setColor(Color $color): static
>>>>>>> match
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get Alpha.
<<<<<<< HEAD
     *
     * @return int
     */
    public function getAlpha()
=======
     */
    public function getAlpha(): int
>>>>>>> match
    {
        return $this->alpha;
    }

    /**
     * Set Alpha.
     *
<<<<<<< HEAD
     * @param int $alpha
     *
     * @return $this
     */
    public function setAlpha($alpha)
=======
     * @return $this
     */
    public function setAlpha(int $alpha): static
>>>>>>> match
    {
        $this->alpha = $alpha;

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
            ($this->visible ? 't' : 'f') .
            $this->blurRadius .
            $this->distance .
            $this->direction .
            $this->alignment .
            $this->color->getHashCode() .
            $this->alpha .
            __CLASS__
=======
    public function getHashCode(): string
    {
        return md5(
            ($this->visible ? 't' : 'f')
            . $this->blurRadius
            . $this->distance
            . $this->direction
            . $this->alignment
            . $this->color->getHashCode()
            . $this->alpha
            . __CLASS__
>>>>>>> match
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
}
