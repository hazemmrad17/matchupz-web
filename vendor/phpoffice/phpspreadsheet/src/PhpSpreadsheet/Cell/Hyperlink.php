<?php

namespace PhpOffice\PhpSpreadsheet\Cell;

class Hyperlink
{
    /**
     * URL to link the cell to.
<<<<<<< HEAD
     *
     * @var string
     */
    private $url;

    /**
     * Tooltip to display on the hyperlink.
     *
     * @var string
     */
    private $tooltip;
=======
     */
    private string $url;

    /**
     * Tooltip to display on the hyperlink.
     */
    private string $tooltip;
>>>>>>> match

    /**
     * Create a new Hyperlink.
     *
     * @param string $url Url to link the cell to
     * @param string $tooltip Tooltip to display on the hyperlink
     */
<<<<<<< HEAD
    public function __construct($url = '', $tooltip = '')
=======
    public function __construct(string $url = '', string $tooltip = '')
>>>>>>> match
    {
        // Initialise member variables
        $this->url = $url;
        $this->tooltip = $tooltip;
    }

    /**
     * Get URL.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getUrl()
=======
     */
    public function getUrl(): string
>>>>>>> match
    {
        return $this->url;
    }

    /**
     * Set URL.
     *
<<<<<<< HEAD
     * @param string $url
     *
     * @return $this
     */
    public function setUrl($url)
=======
     * @return $this
     */
    public function setUrl(string $url): static
>>>>>>> match
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get tooltip.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getTooltip()
=======
     */
    public function getTooltip(): string
>>>>>>> match
    {
        return $this->tooltip;
    }

    /**
     * Set tooltip.
     *
<<<<<<< HEAD
     * @param string $tooltip
     *
     * @return $this
     */
    public function setTooltip($tooltip)
=======
     * @return $this
     */
    public function setTooltip(string $tooltip): static
>>>>>>> match
    {
        $this->tooltip = $tooltip;

        return $this;
    }

    /**
     * Is this hyperlink internal? (to another worksheet).
<<<<<<< HEAD
     *
     * @return bool
     */
    public function isInternal()
    {
        return strpos($this->url, 'sheet://') !== false;
    }

    /**
     * @return string
     */
    public function getTypeHyperlink()
=======
     */
    public function isInternal(): bool
    {
        return str_contains($this->url, 'sheet://');
    }

    public function getTypeHyperlink(): string
>>>>>>> match
    {
        return $this->isInternal() ? '' : 'External';
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
            $this->url .
            $this->tooltip .
            __CLASS__
=======
    public function getHashCode(): string
    {
        return md5(
            $this->url
            . $this->tooltip
            . __CLASS__
>>>>>>> match
        );
    }
}
