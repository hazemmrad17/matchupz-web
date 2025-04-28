<?php

namespace PhpOffice\PhpSpreadsheet\RichText;

<<<<<<< HEAD
=======
use PhpOffice\PhpSpreadsheet\Exception as SpreadsheetException;
>>>>>>> match
use PhpOffice\PhpSpreadsheet\Style\Font;

class Run extends TextElement implements ITextElement
{
    /**
     * Font.
<<<<<<< HEAD
     *
     * @var ?Font
     */
    private $font;
=======
     */
    private ?Font $font;
>>>>>>> match

    /**
     * Create a new Run instance.
     *
     * @param string $text Text
     */
<<<<<<< HEAD
    public function __construct($text = '')
=======
    public function __construct(string $text = '')
>>>>>>> match
    {
        parent::__construct($text);
        // Initialise variables
        $this->font = new Font();
    }

    /**
     * Get font.
<<<<<<< HEAD
     *
     * @return null|\PhpOffice\PhpSpreadsheet\Style\Font
     */
    public function getFont()
=======
     */
    public function getFont(): ?Font
>>>>>>> match
    {
        return $this->font;
    }

<<<<<<< HEAD
    /**
     * Set font.
     *
     * @param Font $font Font
     *
     * @return $this
     */
    public function setFont(?Font $font = null)
=======
    public function getFontOrThrow(): Font
    {
        if ($this->font === null) {
            throw new SpreadsheetException('unexpected null font');
        }

        return $this->font;
    }

    /**
     * Set font.
     *
     * @param ?Font $font Font
     *
     * @return $this
     */
    public function setFont(?Font $font = null): static
>>>>>>> match
    {
        $this->font = $font;

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
            $this->getText() .
            (($this->font === null) ? '' : $this->font->getHashCode()) .
            __CLASS__
=======
    public function getHashCode(): string
    {
        return md5(
            $this->getText()
            . (($this->font === null) ? '' : $this->font->getHashCode())
            . __CLASS__
>>>>>>> match
        );
    }
}
