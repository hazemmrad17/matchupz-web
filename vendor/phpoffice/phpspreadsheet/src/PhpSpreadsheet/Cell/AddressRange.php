<?php

namespace PhpOffice\PhpSpreadsheet\Cell;

<<<<<<< HEAD
=======
/**
 * @template T
 */
>>>>>>> match
interface AddressRange
{
    public const MAX_ROW = 1048576;

    public const MAX_COLUMN = 'XFD';

    public const MAX_COLUMN_INT = 16384;

    /**
<<<<<<< HEAD
     * @return mixed
     */
    public function from();

    /**
     * @return mixed
     */
    public function to();
=======
     * @return T
     */
    public function from(): mixed;

    /**
     * @return T
     */
    public function to(): mixed;
>>>>>>> match

    public function __toString(): string;
}
