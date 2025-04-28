<?php

namespace PhpOffice\PhpSpreadsheet\Worksheet;

class PageMargins
{
    /**
     * Left.
<<<<<<< HEAD
     *
     * @var float
     */
    private $left = 0.7;

    /**
     * Right.
     *
     * @var float
     */
    private $right = 0.7;

    /**
     * Top.
     *
     * @var float
     */
    private $top = 0.75;

    /**
     * Bottom.
     *
     * @var float
     */
    private $bottom = 0.75;

    /**
     * Header.
     *
     * @var float
     */
    private $header = 0.3;

    /**
     * Footer.
     *
     * @var float
     */
    private $footer = 0.3;
=======
     */
    private float $left = 0.7;

    /**
     * Right.
     */
    private float $right = 0.7;

    /**
     * Top.
     */
    private float $top = 0.75;

    /**
     * Bottom.
     */
    private float $bottom = 0.75;

    /**
     * Header.
     */
    private float $header = 0.3;

    /**
     * Footer.
     */
    private float $footer = 0.3;
>>>>>>> match

    /**
     * Create a new PageMargins.
     */
    public function __construct()
    {
    }

    /**
     * Get Left.
<<<<<<< HEAD
     *
     * @return float
     */
    public function getLeft()
=======
     */
    public function getLeft(): float
>>>>>>> match
    {
        return $this->left;
    }

    /**
     * Set Left.
     *
<<<<<<< HEAD
     * @param float $left
     *
     * @return $this
     */
    public function setLeft($left)
=======
     * @return $this
     */
    public function setLeft(float $left): static
>>>>>>> match
    {
        $this->left = $left;

        return $this;
    }

    /**
     * Get Right.
<<<<<<< HEAD
     *
     * @return float
     */
    public function getRight()
=======
     */
    public function getRight(): float
>>>>>>> match
    {
        return $this->right;
    }

    /**
     * Set Right.
     *
<<<<<<< HEAD
     * @param float $right
     *
     * @return $this
     */
    public function setRight($right)
=======
     * @return $this
     */
    public function setRight(float $right): static
>>>>>>> match
    {
        $this->right = $right;

        return $this;
    }

    /**
     * Get Top.
<<<<<<< HEAD
     *
     * @return float
     */
    public function getTop()
=======
     */
    public function getTop(): float
>>>>>>> match
    {
        return $this->top;
    }

    /**
     * Set Top.
     *
<<<<<<< HEAD
     * @param float $top
     *
     * @return $this
     */
    public function setTop($top)
=======
     * @return $this
     */
    public function setTop(float $top): static
>>>>>>> match
    {
        $this->top = $top;

        return $this;
    }

    /**
     * Get Bottom.
<<<<<<< HEAD
     *
     * @return float
     */
    public function getBottom()
=======
     */
    public function getBottom(): float
>>>>>>> match
    {
        return $this->bottom;
    }

    /**
     * Set Bottom.
     *
<<<<<<< HEAD
     * @param float $bottom
     *
     * @return $this
     */
    public function setBottom($bottom)
=======
     * @return $this
     */
    public function setBottom(float $bottom): static
>>>>>>> match
    {
        $this->bottom = $bottom;

        return $this;
    }

    /**
     * Get Header.
<<<<<<< HEAD
     *
     * @return float
     */
    public function getHeader()
=======
     */
    public function getHeader(): float
>>>>>>> match
    {
        return $this->header;
    }

    /**
     * Set Header.
     *
<<<<<<< HEAD
     * @param float $header
     *
     * @return $this
     */
    public function setHeader($header)
=======
     * @return $this
     */
    public function setHeader(float $header): static
>>>>>>> match
    {
        $this->header = $header;

        return $this;
    }

    /**
     * Get Footer.
<<<<<<< HEAD
     *
     * @return float
     */
    public function getFooter()
=======
     */
    public function getFooter(): float
>>>>>>> match
    {
        return $this->footer;
    }

    /**
     * Set Footer.
     *
<<<<<<< HEAD
     * @param float $footer
     *
     * @return $this
     */
    public function setFooter($footer)
=======
     * @return $this
     */
    public function setFooter(float $footer): static
>>>>>>> match
    {
        $this->footer = $footer;

        return $this;
    }

    public static function fromCentimeters(float $value): float
    {
        return $value / 2.54;
    }

    public static function toCentimeters(float $value): float
    {
        return $value * 2.54;
    }

    public static function fromMillimeters(float $value): float
    {
        return $value / 25.4;
    }

    public static function toMillimeters(float $value): float
    {
        return $value * 25.4;
    }

    public static function fromPoints(float $value): float
    {
        return $value / 72;
    }

    public static function toPoints(float $value): float
    {
        return $value * 72;
    }
}
