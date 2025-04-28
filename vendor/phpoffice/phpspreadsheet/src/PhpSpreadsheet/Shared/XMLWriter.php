<?php

namespace PhpOffice\PhpSpreadsheet\Shared;

use PhpOffice\PhpSpreadsheet\Exception as SpreadsheetException;

class XMLWriter extends \XMLWriter
{
<<<<<<< HEAD
    /** @var bool */
    public static $debugEnabled = false;
=======
    public static bool $debugEnabled = false;
>>>>>>> match

    /** Temporary storage method */
    const STORAGE_MEMORY = 1;
    const STORAGE_DISK = 2;

    /**
     * Temporary filename.
<<<<<<< HEAD
     *
     * @var string
     */
    private $tempFileName = '';
=======
     */
    private string $tempFileName = '';
>>>>>>> match

    /**
     * Create a new XMLWriter instance.
     *
     * @param int $temporaryStorage Temporary storage location
<<<<<<< HEAD
     * @param string $temporaryStorageFolder Temporary storage folder
     */
    public function __construct($temporaryStorage = self::STORAGE_MEMORY, $temporaryStorageFolder = null)
=======
     * @param ?string $temporaryStorageFolder Temporary storage folder
     */
    public function __construct(int $temporaryStorage = self::STORAGE_MEMORY, ?string $temporaryStorageFolder = null)
>>>>>>> match
    {
        // Open temporary storage
        if ($temporaryStorage == self::STORAGE_MEMORY) {
            $this->openMemory();
        } else {
            // Create temporary filename
            if ($temporaryStorageFolder === null) {
                $temporaryStorageFolder = File::sysGetTempDir();
            }
            $this->tempFileName = (string) @tempnam($temporaryStorageFolder, 'xml');

            // Open storage
            if (empty($this->tempFileName) || $this->openUri($this->tempFileName) === false) {
                // Fallback to memory...
                $this->openMemory();
            }
        }

        // Set default values
        if (self::$debugEnabled) {
            $this->setIndent(true);
        }
    }

    /**
     * Destructor.
     */
    public function __destruct()
    {
        // Unlink temporary files
        // There is nothing reasonable to do if unlink fails.
        if ($this->tempFileName != '') {
<<<<<<< HEAD
            /** @scrutinizer ignore-unhandled */
=======
>>>>>>> match
            @unlink($this->tempFileName);
        }
    }

    public function __wakeup(): void
    {
        $this->tempFileName = '';

        throw new SpreadsheetException('Unserialize not permitted');
    }

    /**
     * Get written data.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getData()
=======
     */
    public function getData(): string
>>>>>>> match
    {
        if ($this->tempFileName == '') {
            return $this->outputMemory(true);
        }
        $this->flush();

        return file_get_contents($this->tempFileName) ?: '';
    }

    /**
     * Wrapper method for writeRaw.
     *
     * @param null|string|string[] $rawTextData
<<<<<<< HEAD
     *
     * @return bool
     */
    public function writeRawData($rawTextData)
=======
     */
    public function writeRawData($rawTextData): bool
>>>>>>> match
    {
        if (is_array($rawTextData)) {
            $rawTextData = implode("\n", $rawTextData);
        }

        return $this->writeRaw(htmlspecialchars($rawTextData ?? ''));
    }
}
