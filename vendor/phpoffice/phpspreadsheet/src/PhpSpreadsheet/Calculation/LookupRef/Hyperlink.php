<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\LookupRef;

use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
<<<<<<< HEAD
=======
use PhpOffice\PhpSpreadsheet\Shared\StringHelper;
>>>>>>> match

class Hyperlink
{
    /**
     * HYPERLINK.
     *
     * Excel Function:
     *        =HYPERLINK(linkURL, [displayName])
     *
     * @param mixed $linkURL Expect string. Value to check, is also the value returned when no error
     * @param mixed $displayName Expect string. Value to return when testValue is an error condition
<<<<<<< HEAD
     * @param Cell $cell The cell to set the hyperlink in
     *
     * @return mixed The value of $displayName (or $linkURL if $displayName was blank)
     */
    public static function set($linkURL = '', $displayName = null, ?Cell $cell = null)
    {
        $linkURL = ($linkURL === null) ? '' : Functions::flattenSingleValue($linkURL);
=======
     * @param ?Cell $cell The cell to set the hyperlink in
     *
     * @return string The value of $displayName (or $linkURL if $displayName was blank)
     */
    public static function set(mixed $linkURL = '', mixed $displayName = null, ?Cell $cell = null): string
    {
        $linkURL = ($linkURL === null) ? '' : StringHelper::convertToString(Functions::flattenSingleValue($linkURL));
>>>>>>> match
        $displayName = ($displayName === null) ? '' : Functions::flattenSingleValue($displayName);

        if ((!is_object($cell)) || (trim($linkURL) == '')) {
            return ExcelError::REF();
        }

<<<<<<< HEAD
        if ((is_object($displayName)) || trim($displayName) == '') {
            $displayName = $linkURL;
        }

        $cell->getHyperlink()->setUrl($linkURL);
=======
        if (is_object($displayName)) {
            $displayName = $linkURL;
        }
        $displayName = StringHelper::convertToString($displayName);
        if (trim($displayName) === '') {
            $displayName = $linkURL;
        }

        $cell->getHyperlink()
            ->setUrl($linkURL);
>>>>>>> match
        $cell->getHyperlink()->setTooltip($displayName);

        return $displayName;
    }
}
