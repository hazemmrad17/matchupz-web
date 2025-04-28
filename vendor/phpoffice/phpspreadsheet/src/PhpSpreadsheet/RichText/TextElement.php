<?php

namespace PhpOffice\PhpSpreadsheet\RichText;

<<<<<<< HEAD
=======
use PhpOffice\PhpSpreadsheet\Style\Font;

>>>>>>> match
class TextElement implements ITextElement
{
    /**
     * Text.
<<<<<<< HEAD
     *
     * @var string
     */
    private $text;
=======
     */
    private string $text;
>>>>>>> match

    /**
     * Create a new TextElement instance.
     *
     * @param string $text Text
     */
<<<<<<< HEAD
    public function __construct($text = '')
=======
    public function __construct(string $text = '')
>>>>>>> match
    {
        // Initialise variables
        $this->text = $text;
    }

    /**
     * Get text.
     *
     * @return string Text
     */
<<<<<<< HEAD
    public function getText()
=======
    public function getText(): string
>>>>>>> match
    {
        return $this->text;
    }

    /**
     * Set text.
     *
     * @param string $text Text
     *
     * @return $this
     */
<<<<<<< HEAD
    public function setText($text)
=======
    public function setText(string $text): self
>>>>>>> match
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get font. For this class, the return value is always null.
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
        return null;
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
            $this->text .
            __CLASS__
=======
    public function getHashCode(): string
    {
        return md5(
            $this->text
            . __CLASS__
>>>>>>> match
        );
    }
}
