<?php

namespace PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class Theme
{
    /**
     * Theme Name.
<<<<<<< HEAD
     *
     * @var string
     */
    private $themeName;

    /**
     * Colour Scheme Name.
     *
     * @var string
     */
    private $colourSchemeName;
=======
     */
    private string $themeName;

    /**
     * Colour Scheme Name.
     */
    private string $colourSchemeName;
>>>>>>> match

    /**
     * Colour Map.
     *
     * @var string[]
     */
<<<<<<< HEAD
    private $colourMap;
=======
    private array $colourMap;
>>>>>>> match

    /**
     * Create a new Theme.
     *
<<<<<<< HEAD
     * @param string $themeName
     * @param string $colourSchemeName
     * @param string[] $colourMap
     */
    public function __construct($themeName, $colourSchemeName, $colourMap)
=======
     * @param string[] $colourMap
     */
    public function __construct(string $themeName, string $colourSchemeName, array $colourMap)
>>>>>>> match
    {
        // Initialise values
        $this->themeName = $themeName;
        $this->colourSchemeName = $colourSchemeName;
        $this->colourMap = $colourMap;
    }

    /**
     * Not called by Reader, never accessible any other time.
     *
<<<<<<< HEAD
     * @return string
     *
     * @codeCoverageIgnore
     */
    public function getThemeName()
=======
     * @codeCoverageIgnore
     */
    public function getThemeName(): string
>>>>>>> match
    {
        return $this->themeName;
    }

    /**
     * Not called by Reader, never accessible any other time.
     *
<<<<<<< HEAD
     * @return string
     *
     * @codeCoverageIgnore
     */
    public function getColourSchemeName()
=======
     * @codeCoverageIgnore
     */
    public function getColourSchemeName(): string
>>>>>>> match
    {
        return $this->colourSchemeName;
    }

    /**
     * Get colour Map Value by Position.
<<<<<<< HEAD
     *
     * @param int $index
     *
     * @return null|string
     */
    public function getColourByIndex($index)
=======
     */
    public function getColourByIndex(int $index): ?string
>>>>>>> match
    {
        return $this->colourMap[$index] ?? null;
    }
}
