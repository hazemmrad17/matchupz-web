<?php

namespace PhpOffice\PhpSpreadsheet\Style;

<<<<<<< HEAD
=======
use PhpOffice\PhpSpreadsheet\RichText\RichText;

>>>>>>> match
class NumberFormat extends Supervisor
{
    // Pre-defined formats
    const FORMAT_GENERAL = 'General';

    const FORMAT_TEXT = '@';

    const FORMAT_NUMBER = '0';
    const FORMAT_NUMBER_0 = '0.0';
    const FORMAT_NUMBER_00 = '0.00';
    const FORMAT_NUMBER_COMMA_SEPARATED1 = '#,##0.00';
    const FORMAT_NUMBER_COMMA_SEPARATED2 = '#,##0.00_-';

    const FORMAT_PERCENTAGE = '0%';
    const FORMAT_PERCENTAGE_0 = '0.0%';
    const FORMAT_PERCENTAGE_00 = '0.00%';

<<<<<<< HEAD
    /** @deprecated 1.26 use FORMAT_DATE_YYYYMMDD instead */
    const FORMAT_DATE_YYYYMMDD2 = 'yyyy-mm-dd';
=======
>>>>>>> match
    const FORMAT_DATE_YYYYMMDD = 'yyyy-mm-dd';
    const FORMAT_DATE_DDMMYYYY = 'dd/mm/yyyy';
    const FORMAT_DATE_DMYSLASH = 'd/m/yy';
    const FORMAT_DATE_DMYMINUS = 'd-m-yy';
    const FORMAT_DATE_DMMINUS = 'd-m';
    const FORMAT_DATE_MYMINUS = 'm-yy';
    const FORMAT_DATE_XLSX14 = 'mm-dd-yy';
<<<<<<< HEAD
=======
    const FORMAT_DATE_XLSX14_ACTUAL = 'm/d/yyyy';
>>>>>>> match
    const FORMAT_DATE_XLSX15 = 'd-mmm-yy';
    const FORMAT_DATE_XLSX16 = 'd-mmm';
    const FORMAT_DATE_XLSX17 = 'mmm-yy';
    const FORMAT_DATE_XLSX22 = 'm/d/yy h:mm';
<<<<<<< HEAD
=======
    const FORMAT_DATE_XLSX22_ACTUAL = 'm/d/yyyy h:mm';
>>>>>>> match
    const FORMAT_DATE_DATETIME = 'd/m/yy h:mm';
    const FORMAT_DATE_TIME1 = 'h:mm AM/PM';
    const FORMAT_DATE_TIME2 = 'h:mm:ss AM/PM';
    const FORMAT_DATE_TIME3 = 'h:mm';
    const FORMAT_DATE_TIME4 = 'h:mm:ss';
    const FORMAT_DATE_TIME5 = 'mm:ss';
    const FORMAT_DATE_TIME6 = 'h:mm:ss';
    const FORMAT_DATE_TIME7 = 'i:s.S';
    const FORMAT_DATE_TIME8 = 'h:mm:ss;@';
    const FORMAT_DATE_YYYYMMDDSLASH = 'yyyy/mm/dd;@';
<<<<<<< HEAD
=======
    const FORMAT_DATE_LONG_DATE = 'dddd, mmmm d, yyyy';
>>>>>>> match

    const DATE_TIME_OR_DATETIME_ARRAY = [
        self::FORMAT_DATE_YYYYMMDD,
        self::FORMAT_DATE_DDMMYYYY,
        self::FORMAT_DATE_DMYSLASH,
        self::FORMAT_DATE_DMYMINUS,
        self::FORMAT_DATE_DMMINUS,
        self::FORMAT_DATE_MYMINUS,
        self::FORMAT_DATE_XLSX14,
<<<<<<< HEAD
=======
        self::FORMAT_DATE_XLSX14_ACTUAL,
>>>>>>> match
        self::FORMAT_DATE_XLSX15,
        self::FORMAT_DATE_XLSX16,
        self::FORMAT_DATE_XLSX17,
        self::FORMAT_DATE_XLSX22,
<<<<<<< HEAD
=======
        self::FORMAT_DATE_XLSX22_ACTUAL,
>>>>>>> match
        self::FORMAT_DATE_DATETIME,
        self::FORMAT_DATE_TIME1,
        self::FORMAT_DATE_TIME2,
        self::FORMAT_DATE_TIME3,
        self::FORMAT_DATE_TIME4,
        self::FORMAT_DATE_TIME5,
        self::FORMAT_DATE_TIME6,
        self::FORMAT_DATE_TIME7,
        self::FORMAT_DATE_TIME8,
        self::FORMAT_DATE_YYYYMMDDSLASH,
<<<<<<< HEAD
=======
        self::FORMAT_DATE_LONG_DATE,
>>>>>>> match
    ];
    const TIME_OR_DATETIME_ARRAY = [
        self::FORMAT_DATE_XLSX22,
        self::FORMAT_DATE_DATETIME,
        self::FORMAT_DATE_TIME1,
        self::FORMAT_DATE_TIME2,
        self::FORMAT_DATE_TIME3,
        self::FORMAT_DATE_TIME4,
        self::FORMAT_DATE_TIME5,
        self::FORMAT_DATE_TIME6,
        self::FORMAT_DATE_TIME7,
        self::FORMAT_DATE_TIME8,
    ];

<<<<<<< HEAD
    /** @deprecated 1.28 use FORMAT_CURRENCY_USD_INTEGER instead */
    const FORMAT_CURRENCY_USD_SIMPLE = '"$"#,##0_-';
    const FORMAT_CURRENCY_USD_INTEGER = '$#,##0_-';
    const FORMAT_CURRENCY_USD = '$#,##0.00_-';
    /** @deprecated 1.28 use FORMAT_CURRENCY_EUR_INTEGER instead */
    const FORMAT_CURRENCY_EUR_SIMPLE = '#,##0_-"€"';
=======
    const FORMAT_CURRENCY_USD_INTEGER = '$#,##0_-';
    const FORMAT_CURRENCY_USD = '$#,##0.00_-';
>>>>>>> match
    const FORMAT_CURRENCY_EUR_INTEGER = '#,##0_-[$€]';
    const FORMAT_CURRENCY_EUR = '#,##0.00_-[$€]';
    const FORMAT_ACCOUNTING_USD = '_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)';
    const FORMAT_ACCOUNTING_EUR = '_("€"* #,##0.00_);_("€"* \(#,##0.00\);_("€"* "-"??_);_(@_)';

<<<<<<< HEAD
    /**
     * Excel built-in number formats.
     *
     * @var array
     */
    protected static $builtInFormats;

    /**
     * Excel built-in number formats (flipped, for faster lookups).
     *
     * @var array
     */
    protected static $flippedBuiltInFormats;

    /**
     * Format Code.
     *
     * @var null|string
     */
    protected $formatCode = self::FORMAT_GENERAL;
=======
    const SHORT_DATE_INDEX = 14;
    const DATE_TIME_INDEX = 22;
    const FORMAT_SYSDATE_X = '[$-x-sysdate]';
    const FORMAT_SYSDATE_F800 = '[$-F800]';
    const FORMAT_SYSTIME_X = '[$-x-systime]';
    const FORMAT_SYSTIME_F400 = '[$-F400]';

    protected static string $shortDateFormat = self::FORMAT_DATE_XLSX14_ACTUAL;

    protected static string $longDateFormat = self::FORMAT_DATE_LONG_DATE;

    protected static string $dateTimeFormat = self::FORMAT_DATE_XLSX22_ACTUAL;

    protected static string $timeFormat = self::FORMAT_DATE_TIME2;

    /**
     * Excel built-in number formats.
     */
    protected static array $builtInFormats;

    /**
     * Excel built-in number formats (flipped, for faster lookups).
     */
    protected static array $flippedBuiltInFormats;

    /**
     * Format Code.
     */
    protected ?string $formatCode = self::FORMAT_GENERAL;
>>>>>>> match

    /**
     * Built-in format Code.
     *
     * @var false|int
     */
    protected $builtInFormatCode = 0;

    /**
     * Create a new NumberFormat.
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

        if ($isConditional) {
            $this->formatCode = null;
            $this->builtInFormatCode = false;
        }
    }

    /**
     * Get the shared style component for the currently active cell in currently active sheet.
     * Only used for style supervisor.
<<<<<<< HEAD
     *
     * @return NumberFormat
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

        return $parent->getSharedComponent()->getNumberFormat();
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
        return ['numberFormat' => $array];
    }

    /**
     * Apply styles from array.
     *
     * <code>
     * $spreadsheet->getActiveSheet()->getStyle('B2')->getNumberFormat()->applyFromArray(
     *     [
     *         'formatCode' => NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE
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
            if (isset($styleArray['formatCode'])) {
                $this->setFormatCode($styleArray['formatCode']);
            }
        }

        return $this;
    }

    /**
     * Get Format Code.
<<<<<<< HEAD
     *
     * @return null|string
     */
    public function getFormatCode()
    {
        if ($this->isSupervisor) {
            return $this->getSharedComponent()->getFormatCode();
        }
        if (is_int($this->builtInFormatCode)) {
            return self::builtInFormatCode($this->builtInFormatCode);
        }

        return $this->formatCode;
=======
     */
    public function getFormatCode(bool $extended = false): ?string
    {
        if ($this->isSupervisor) {
            return $this->getSharedComponent()->getFormatCode($extended);
        }
        $builtin = $this->getBuiltInFormatCode();
        if (is_int($builtin)) {
            if ($extended) {
                if ($builtin === self::SHORT_DATE_INDEX) {
                    return self::$shortDateFormat;
                }
                if ($builtin === self::DATE_TIME_INDEX) {
                    return self::$dateTimeFormat;
                }
            }

            return self::builtInFormatCode($builtin);
        }

        return $extended ? self::convertSystemFormats($this->formatCode) : $this->formatCode;
    }

    public static function convertSystemFormats(?string $formatCode): ?string
    {
        if (is_string($formatCode)) {
            if (stripos($formatCode, self::FORMAT_SYSDATE_F800) !== false || stripos($formatCode, self::FORMAT_SYSDATE_X) !== false) {
                return self::$longDateFormat;
            }
            if (stripos($formatCode, self::FORMAT_SYSTIME_F400) !== false || stripos($formatCode, self::FORMAT_SYSTIME_X) !== false) {
                return self::$timeFormat;
            }
        }

        return $formatCode;
>>>>>>> match
    }

    /**
     * Set Format Code.
     *
     * @param string $formatCode see self::FORMAT_*
     *
     * @return $this
     */
<<<<<<< HEAD
    public function setFormatCode(string $formatCode)
=======
    public function setFormatCode(string $formatCode): static
>>>>>>> match
    {
        if ($formatCode == '') {
            $formatCode = self::FORMAT_GENERAL;
        }
        if ($this->isSupervisor) {
            $styleArray = $this->getStyleArray(['formatCode' => $formatCode]);
            $this->getActiveSheet()->getStyle($this->getSelectedCells())->applyFromArray($styleArray);
        } else {
            $this->formatCode = $formatCode;
            $this->builtInFormatCode = self::builtInFormatCodeIndex($formatCode);
        }

        return $this;
    }

    /**
     * Get Built-In Format Code.
     *
     * @return false|int
     */
    public function getBuiltInFormatCode()
    {
        if ($this->isSupervisor) {
            return $this->getSharedComponent()->getBuiltInFormatCode();
        }

<<<<<<< HEAD
        // Scrutinizer says this could return true. It is wrong.
=======
>>>>>>> match
        return $this->builtInFormatCode;
    }

    /**
     * Set Built-In Format Code.
     *
     * @param int $formatCodeIndex Id of the built-in format code to use
     *
     * @return $this
     */
<<<<<<< HEAD
    public function setBuiltInFormatCode(int $formatCodeIndex)
=======
    public function setBuiltInFormatCode(int $formatCodeIndex): static
>>>>>>> match
    {
        if ($this->isSupervisor) {
            $styleArray = $this->getStyleArray(['formatCode' => self::builtInFormatCode($formatCodeIndex)]);
            $this->getActiveSheet()->getStyle($this->getSelectedCells())->applyFromArray($styleArray);
        } else {
            $this->builtInFormatCode = $formatCodeIndex;
            $this->formatCode = self::builtInFormatCode($formatCodeIndex);
        }

        return $this;
    }

    /**
     * Fill built-in format codes.
     */
    private static function fillBuiltInFormatCodes(): void
    {
        //  [MS-OI29500: Microsoft Office Implementation Information for ISO/IEC-29500 Standard Compliance]
        //  18.8.30. numFmt (Number Format)
        //
        //  The ECMA standard defines built-in format IDs
        //      14: "mm-dd-yy"
        //      22: "m/d/yy h:mm"
        //      37: "#,##0 ;(#,##0)"
        //      38: "#,##0 ;[Red](#,##0)"
        //      39: "#,##0.00;(#,##0.00)"
        //      40: "#,##0.00;[Red](#,##0.00)"
        //      47: "mmss.0"
        //      KOR fmt 55: "yyyy-mm-dd"
        //  Excel defines built-in format IDs
        //      14: "m/d/yyyy"
        //      22: "m/d/yyyy h:mm"
        //      37: "#,##0_);(#,##0)"
        //      38: "#,##0_);[Red](#,##0)"
        //      39: "#,##0.00_);(#,##0.00)"
        //      40: "#,##0.00_);[Red](#,##0.00)"
        //      47: "mm:ss.0"
        //      KOR fmt 55: "yyyy/mm/dd"

        // Built-in format codes
        if (empty(self::$builtInFormats)) {
            self::$builtInFormats = [];

            // General
            self::$builtInFormats[0] = self::FORMAT_GENERAL;
            self::$builtInFormats[1] = '0';
            self::$builtInFormats[2] = '0.00';
            self::$builtInFormats[3] = '#,##0';
            self::$builtInFormats[4] = '#,##0.00';

            self::$builtInFormats[9] = '0%';
            self::$builtInFormats[10] = '0.00%';
            self::$builtInFormats[11] = '0.00E+00';
            self::$builtInFormats[12] = '# ?/?';
            self::$builtInFormats[13] = '# ??/??';
<<<<<<< HEAD
            self::$builtInFormats[14] = 'm/d/yyyy'; // Despite ECMA 'mm-dd-yy';
            self::$builtInFormats[15] = 'd-mmm-yy';
=======
            self::$builtInFormats[14] = self::FORMAT_DATE_XLSX14_ACTUAL; // Despite ECMA 'mm-dd-yy';
            self::$builtInFormats[15] = self::FORMAT_DATE_XLSX15;
>>>>>>> match
            self::$builtInFormats[16] = 'd-mmm';
            self::$builtInFormats[17] = 'mmm-yy';
            self::$builtInFormats[18] = 'h:mm AM/PM';
            self::$builtInFormats[19] = 'h:mm:ss AM/PM';
            self::$builtInFormats[20] = 'h:mm';
            self::$builtInFormats[21] = 'h:mm:ss';
<<<<<<< HEAD
            self::$builtInFormats[22] = 'm/d/yyyy h:mm'; // Despite ECMA 'm/d/yy h:mm';
=======
            self::$builtInFormats[22] = self::FORMAT_DATE_XLSX22_ACTUAL; // Despite ECMA 'm/d/yy h:mm';
>>>>>>> match

            self::$builtInFormats[37] = '#,##0_);(#,##0)'; //  Despite ECMA '#,##0 ;(#,##0)';
            self::$builtInFormats[38] = '#,##0_);[Red](#,##0)'; //  Despite ECMA '#,##0 ;[Red](#,##0)';
            self::$builtInFormats[39] = '#,##0.00_);(#,##0.00)'; //  Despite ECMA '#,##0.00;(#,##0.00)';
            self::$builtInFormats[40] = '#,##0.00_);[Red](#,##0.00)'; //  Despite ECMA '#,##0.00;[Red](#,##0.00)';

            self::$builtInFormats[44] = '_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)';
            self::$builtInFormats[45] = 'mm:ss';
            self::$builtInFormats[46] = '[h]:mm:ss';
            self::$builtInFormats[47] = 'mm:ss.0'; //  Despite ECMA 'mmss.0';
            self::$builtInFormats[48] = '##0.0E+0';
            self::$builtInFormats[49] = '@';

            // CHT
            self::$builtInFormats[27] = '[$-404]e/m/d';
            self::$builtInFormats[30] = 'm/d/yy';
            self::$builtInFormats[36] = '[$-404]e/m/d';
            self::$builtInFormats[50] = '[$-404]e/m/d';
            self::$builtInFormats[57] = '[$-404]e/m/d';

            // THA
            self::$builtInFormats[59] = 't0';
            self::$builtInFormats[60] = 't0.00';
            self::$builtInFormats[61] = 't#,##0';
            self::$builtInFormats[62] = 't#,##0.00';
            self::$builtInFormats[67] = 't0%';
            self::$builtInFormats[68] = 't0.00%';
            self::$builtInFormats[69] = 't# ?/?';
            self::$builtInFormats[70] = 't# ??/??';

            // JPN
            self::$builtInFormats[28] = '[$-411]ggge"年"m"月"d"日"';
            self::$builtInFormats[29] = '[$-411]ggge"年"m"月"d"日"';
            self::$builtInFormats[31] = 'yyyy"年"m"月"d"日"';
            self::$builtInFormats[32] = 'h"時"mm"分"';
            self::$builtInFormats[33] = 'h"時"mm"分"ss"秒"';
            self::$builtInFormats[34] = 'yyyy"年"m"月"';
            self::$builtInFormats[35] = 'm"月"d"日"';
            self::$builtInFormats[51] = '[$-411]ggge"年"m"月"d"日"';
            self::$builtInFormats[52] = 'yyyy"年"m"月"';
            self::$builtInFormats[53] = 'm"月"d"日"';
            self::$builtInFormats[54] = '[$-411]ggge"年"m"月"d"日"';
            self::$builtInFormats[55] = 'yyyy"年"m"月"';
            self::$builtInFormats[56] = 'm"月"d"日"';
            self::$builtInFormats[58] = '[$-411]ggge"年"m"月"d"日"';

            // Flip array (for faster lookups)
            self::$flippedBuiltInFormats = array_flip(self::$builtInFormats);
        }
    }

    /**
     * Get built-in format code.
<<<<<<< HEAD
     *
     * @param int $index
     *
     * @return string
     */
    public static function builtInFormatCode($index)
=======
     */
    public static function builtInFormatCode(int $index): string
>>>>>>> match
    {
        // Clean parameter
        $index = (int) $index;

        // Ensure built-in format codes are available
        self::fillBuiltInFormatCodes();

        // Lookup format code
        if (isset(self::$builtInFormats[$index])) {
            return self::$builtInFormats[$index];
        }

        return '';
    }

    /**
     * Get built-in format code index.
     *
<<<<<<< HEAD
     * @param string $formatCodeIndex
     *
     * @return false|int
     */
    public static function builtInFormatCodeIndex($formatCodeIndex)
=======
     * @return false|int
     */
    public static function builtInFormatCodeIndex(string $formatCodeIndex)
>>>>>>> match
    {
        // Ensure built-in format codes are available
        self::fillBuiltInFormatCodes();

        // Lookup format code
        if (array_key_exists($formatCodeIndex, self::$flippedBuiltInFormats)) {
            return self::$flippedBuiltInFormats[$formatCodeIndex];
        }

        return false;
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
            $this->formatCode .
            $this->builtInFormatCode .
            __CLASS__
=======
            $this->formatCode
            . $this->builtInFormatCode
            . __CLASS__
>>>>>>> match
        );
    }

    /**
     * Convert a value in a pre-defined format to a PHP string.
     *
<<<<<<< HEAD
     * @param mixed $value Value to format
     * @param string $format Format code: see = self::FORMAT_* for predefined values;
     *                          or can be any valid MS Excel custom format string
     * @param array $callBack Callback function for additional formatting of string
     *
     * @return string Formatted string
     */
    public static function toFormattedString($value, $format, $callBack = null)
=======
     * @param null|bool|float|int|RichText|string $value Value to format
     * @param string $format Format code: see = self::FORMAT_* for predefined values;
     *                          or can be any valid MS Excel custom format string
     * @param ?array $callBack Callback function for additional formatting of string
     *
     * @return string Formatted string
     */
    public static function toFormattedString(mixed $value, string $format, ?array $callBack = null): string
>>>>>>> match
    {
        return NumberFormat\Formatter::toFormattedString($value, $format, $callBack);
    }

    protected function exportArray1(): array
    {
        $exportedArray = [];
        $this->exportArray2($exportedArray, 'formatCode', $this->getFormatCode());

        return $exportedArray;
    }
<<<<<<< HEAD
=======

    public static function getShortDateFormat(): string
    {
        return self::$shortDateFormat;
    }

    public static function setShortDateFormat(string $shortDateFormat): void
    {
        self::$shortDateFormat = $shortDateFormat;
    }

    public static function getLongDateFormat(): string
    {
        return self::$longDateFormat;
    }

    public static function setLongDateFormat(string $longDateFormat): void
    {
        self::$longDateFormat = $longDateFormat;
    }

    public static function getDateTimeFormat(): string
    {
        return self::$dateTimeFormat;
    }

    public static function setDateTimeFormat(string $dateTimeFormat): void
    {
        self::$dateTimeFormat = $dateTimeFormat;
    }

    public static function getTimeFormat(): string
    {
        return self::$timeFormat;
    }

    public static function setTimeFormat(string $timeFormat): void
    {
        self::$timeFormat = $timeFormat;
    }
>>>>>>> match
}
