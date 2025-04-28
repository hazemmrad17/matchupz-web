<?php

namespace PhpOffice\PhpSpreadsheet\RichText;

<<<<<<< HEAD
=======
use PhpOffice\PhpSpreadsheet\Style\Font;

>>>>>>> match
interface ITextElement
{
    /**
     * Get text.
<<<<<<< HEAD
     *
     * @return string Text
     */
    public function getText();
=======
     */
    public function getText(): string;
>>>>>>> match

    /**
     * Set text.
     *
     * @param string $text Text
     *
<<<<<<< HEAD
     * @return ITextElement
     */
    public function setText($text);

    /**
     * Get font.
     *
     * @return null|\PhpOffice\PhpSpreadsheet\Style\Font
     */
    public function getFont();
=======
     * @return $this
     */
    public function setText(string $text): self;

    /**
     * Get font.
     */
    public function getFont(): ?Font;
>>>>>>> match

    /**
     * Get hash code.
     *
     * @return string Hash code
     */
<<<<<<< HEAD
    public function getHashCode();
=======
    public function getHashCode(): string;
>>>>>>> match
}
