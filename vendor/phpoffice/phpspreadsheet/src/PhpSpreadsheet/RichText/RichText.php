<?php

namespace PhpOffice\PhpSpreadsheet\RichText;

use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\IComparable;
<<<<<<< HEAD

class RichText implements IComparable
=======
use Stringable;

class RichText implements IComparable, Stringable
>>>>>>> match
{
    /**
     * Rich text elements.
     *
     * @var ITextElement[]
     */
<<<<<<< HEAD
    private $richTextElements;
=======
    private array $richTextElements;
>>>>>>> match

    /**
     * Create a new RichText instance.
     */
    public function __construct(?Cell $cell = null)
    {
        // Initialise variables
        $this->richTextElements = [];

        // Rich-Text string attached to cell?
        if ($cell !== null) {
            // Add cell text and style
<<<<<<< HEAD
            if ($cell->getValue() != '') {
                $objRun = new Run($cell->getValue());
=======
            if ($cell->getValueString() !== '') {
                $objRun = new Run($cell->getValueString());
>>>>>>> match
                $objRun->setFont(clone $cell->getWorksheet()->getStyle($cell->getCoordinate())->getFont());
                $this->addText($objRun);
            }

            // Set parent value
            $cell->setValueExplicit($this, DataType::TYPE_STRING);
        }
    }

    /**
     * Add text.
     *
     * @param ITextElement $text Rich text element
     *
     * @return $this
     */
<<<<<<< HEAD
    public function addText(ITextElement $text)
=======
    public function addText(ITextElement $text): static
>>>>>>> match
    {
        $this->richTextElements[] = $text;

        return $this;
    }

    /**
     * Create text.
     *
     * @param string $text Text
<<<<<<< HEAD
     *
     * @return TextElement
     */
    public function createText($text)
=======
     */
    public function createText(string $text): TextElement
>>>>>>> match
    {
        $objText = new TextElement($text);
        $this->addText($objText);

        return $objText;
    }

    /**
     * Create text run.
     *
     * @param string $text Text
<<<<<<< HEAD
     *
     * @return Run
     */
    public function createTextRun($text)
=======
     */
    public function createTextRun(string $text): Run
>>>>>>> match
    {
        $objText = new Run($text);
        $this->addText($objText);

        return $objText;
    }

    /**
     * Get plain text.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getPlainText()
=======
     */
    public function getPlainText(): string
>>>>>>> match
    {
        // Return value
        $returnValue = '';

        // Loop through all ITextElements
        foreach ($this->richTextElements as $text) {
            $returnValue .= $text->getText();
        }

        return $returnValue;
    }

    /**
     * Convert to string.
<<<<<<< HEAD
     *
     * @return string
     */
    public function __toString()
=======
     */
    public function __toString(): string
>>>>>>> match
    {
        return $this->getPlainText();
    }

    /**
     * Get Rich Text elements.
     *
     * @return ITextElement[]
     */
<<<<<<< HEAD
    public function getRichTextElements()
=======
    public function getRichTextElements(): array
>>>>>>> match
    {
        return $this->richTextElements;
    }

    /**
     * Set Rich Text elements.
     *
     * @param ITextElement[] $textElements Array of elements
     *
     * @return $this
     */
<<<<<<< HEAD
    public function setRichTextElements(array $textElements)
=======
    public function setRichTextElements(array $textElements): static
>>>>>>> match
    {
        $this->richTextElements = $textElements;

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
        $hashElements = '';
        foreach ($this->richTextElements as $element) {
            $hashElements .= $element->getHashCode();
        }

        return md5(
<<<<<<< HEAD
            $hashElements .
            __CLASS__
=======
            $hashElements
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
            $newValue = is_object($value) ? (clone $value) : $value;
            if (is_array($value)) {
                $newValue = [];
                foreach ($value as $key2 => $value2) {
                    $newValue[$key2] = is_object($value2) ? (clone $value2) : $value2;
                }
            }
            $this->$key = $newValue;
        }
    }
}
