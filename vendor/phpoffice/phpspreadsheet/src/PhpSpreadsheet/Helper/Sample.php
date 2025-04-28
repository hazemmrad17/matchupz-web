<?php

namespace PhpOffice\PhpSpreadsheet\Helper;

use PhpOffice\PhpSpreadsheet\Chart\Chart;
<<<<<<< HEAD
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Settings;
=======
use PhpOffice\PhpSpreadsheet\Chart\Renderer\MtJpGraphRenderer;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Settings;
use PhpOffice\PhpSpreadsheet\Shared\StringHelper;
>>>>>>> match
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Writer\IWriter;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RecursiveRegexIterator;
use ReflectionClass;
use RegexIterator;
use RuntimeException;
use Throwable;

/**
 * Helper class to be used in sample code.
 */
class Sample
{
    /**
     * Returns whether we run on CLI or browser.
<<<<<<< HEAD
     *
     * @return bool
     */
    public function isCli()
=======
     */
    public function isCli(): bool
>>>>>>> match
    {
        return PHP_SAPI === 'cli';
    }

    /**
     * Return the filename currently being executed.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getScriptFilename()
    {
        return basename($_SERVER['SCRIPT_FILENAME'], '.php');
=======
     */
    public function getScriptFilename(): string
    {
        return basename(StringHelper::convertToString($_SERVER['SCRIPT_FILENAME']), '.php');
>>>>>>> match
    }

    /**
     * Whether we are executing the index page.
<<<<<<< HEAD
     *
     * @return bool
     */
    public function isIndex()
=======
     */
    public function isIndex(): bool
>>>>>>> match
    {
        return $this->getScriptFilename() === 'index';
    }

    /**
     * Return the page title.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getPageTitle()
=======
     */
    public function getPageTitle(): string
>>>>>>> match
    {
        return $this->isIndex() ? 'PHPSpreadsheet' : $this->getScriptFilename();
    }

    /**
     * Return the page heading.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getPageHeading()
=======
     */
    public function getPageHeading(): string
>>>>>>> match
    {
        return $this->isIndex() ? '' : '<h1>' . str_replace('_', ' ', $this->getScriptFilename()) . '</h1>';
    }

    /**
     * Returns an array of all known samples.
     *
     * @return string[][] [$name => $path]
     */
<<<<<<< HEAD
    public function getSamples()
=======
    public function getSamples(): array
>>>>>>> match
    {
        // Populate samples
        $baseDir = realpath(__DIR__ . '/../../../samples');
        if ($baseDir === false) {
            // @codeCoverageIgnoreStart
            throw new RuntimeException('realpath returned false');
            // @codeCoverageIgnoreEnd
        }
        $directory = new RecursiveDirectoryIterator($baseDir);
        $iterator = new RecursiveIteratorIterator($directory);
        $regex = new RegexIterator($iterator, '/^.+\.php$/', RecursiveRegexIterator::GET_MATCH);

        $files = [];
<<<<<<< HEAD
        foreach ($regex as $file) {
            $file = str_replace(str_replace('\\', '/', $baseDir) . '/', '', str_replace('\\', '/', $file[0]));
            if (is_array($file)) {
                // @codeCoverageIgnoreStart
                throw new RuntimeException('str_replace returned array');
                // @codeCoverageIgnoreEnd
            }
            $info = pathinfo($file);
            $category = str_replace('_', ' ', $info['dirname'] ?? '');
            $name = str_replace('_', ' ', (string) preg_replace('/(|\.php)/', '', $info['filename']));
            if (!in_array($category, ['.', 'boostrap', 'templates'])) {
=======
        /** @var string[] $file */
        foreach ($regex as $file) {
            $file = str_replace(str_replace('\\', '/', $baseDir) . '/', '', str_replace('\\', '/', $file[0]));
            $info = pathinfo($file);
            $category = str_replace('_', ' ', $info['dirname'] ?? '');
            $name = str_replace('_', ' ', (string) preg_replace('/(|\.php)/', '', $info['filename']));
            if (!in_array($category, ['.', 'bootstrap', 'templates']) && $name !== 'Header') {
>>>>>>> match
                if (!isset($files[$category])) {
                    $files[$category] = [];
                }
                $files[$category][$name] = $file;
            }
        }

        // Sort everything
        ksort($files);
        foreach ($files as &$f) {
            asort($f);
        }

        return $files;
    }

    /**
     * Write documents.
     *
<<<<<<< HEAD
     * @param string $filename
     * @param string[] $writers
     */
    public function write(Spreadsheet $spreadsheet, $filename, array $writers = ['Xlsx', 'Xls'], bool $withCharts = false, ?callable $writerCallback = null): void
    {
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $spreadsheet->setActiveSheetIndex(0);
=======
     * @param string[] $writers
     */
    public function write(Spreadsheet $spreadsheet, string $filename, array $writers = ['Xlsx', 'Xls'], bool $withCharts = false, ?callable $writerCallback = null, bool $resetActiveSheet = true): void
    {
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        if ($resetActiveSheet) {
            $spreadsheet->setActiveSheetIndex(0);
        }
>>>>>>> match

        // Write documents
        foreach ($writers as $writerType) {
            $path = $this->getFilename($filename, mb_strtolower($writerType));
<<<<<<< HEAD
=======
            if (preg_match('/(mpdf|tcpdf)$/', $path)) {
                $path .= '.pdf';
            }
>>>>>>> match
            $writer = IOFactory::createWriter($spreadsheet, $writerType);
            $writer->setIncludeCharts($withCharts);
            if ($writerCallback !== null) {
                $writerCallback($writer);
            }
            $callStartTime = microtime(true);
            $writer->save($path);
<<<<<<< HEAD
            $this->logWrite($writer, $path, /** @scrutinizer ignore-type */ $callStartTime);
            if ($this->isCli() === false) {
                echo '<a href="/download.php?type=' . pathinfo($path, PATHINFO_EXTENSION) . '&name=' . basename($path) . '">Download ' . basename($path) . '</a><br />';
=======
            $this->logWrite($writer, $path, $callStartTime);
            if ($this->isCli() === false) {
                // @codeCoverageIgnoreStart
                echo '<a href="/download.php?type=' . pathinfo($path, PATHINFO_EXTENSION) . '&name=' . basename($path) . '">Download ' . basename($path) . '</a><br />';
                // @codeCoverageIgnoreEnd
>>>>>>> match
            }
        }

        $this->logEndingNotes();
    }

    protected function isDirOrMkdir(string $folder): bool
    {
        return \is_dir($folder) || \mkdir($folder);
    }

    /**
     * Returns the temporary directory and make sure it exists.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getTemporaryFolder()
=======
     */
    public function getTemporaryFolder(): string
>>>>>>> match
    {
        $tempFolder = sys_get_temp_dir() . '/phpspreadsheet';
        if (!$this->isDirOrMkdir($tempFolder)) {
            throw new RuntimeException(sprintf('Directory "%s" was not created', $tempFolder));
        }

        return $tempFolder;
    }

    /**
     * Returns the filename that should be used for sample output.
<<<<<<< HEAD
     *
     * @param string $filename
     * @param string $extension
     */
    public function getFilename($filename, $extension = 'xlsx'): string
    {
        $originalExtension = pathinfo($filename, PATHINFO_EXTENSION);

        return $this->getTemporaryFolder() . '/' . str_replace('.' . /** @scrutinizer ignore-type */ $originalExtension, '.' . $extension, basename($filename));
=======
     */
    public function getFilename(string $filename, string $extension = 'xlsx'): string
    {
        $originalExtension = pathinfo($filename, PATHINFO_EXTENSION);

        return $this->getTemporaryFolder() . '/' . str_replace('.' . $originalExtension, '.' . $extension, basename($filename));
>>>>>>> match
    }

    /**
     * Return a random temporary file name.
<<<<<<< HEAD
     *
     * @param string $extension
     *
     * @return string
     */
    public function getTemporaryFilename($extension = 'xlsx')
=======
     */
    public function getTemporaryFilename(string $extension = 'xlsx'): string
>>>>>>> match
    {
        $temporaryFilename = tempnam($this->getTemporaryFolder(), 'phpspreadsheet-');
        if ($temporaryFilename === false) {
            // @codeCoverageIgnoreStart
            throw new RuntimeException('tempnam returned false');
            // @codeCoverageIgnoreEnd
        }
        unlink($temporaryFilename);

        return $temporaryFilename . '.' . $extension;
    }

<<<<<<< HEAD
    public function log(string $message): void
    {
        $eol = $this->isCli() ? PHP_EOL : '<br />';
        echo($this->isCli() ? date('H:i:s ') : '') . $message . $eol;
    }

    public function renderChart(Chart $chart, string $fileName): void
=======
    public function log(mixed $message): void
    {
        $eol = $this->isCli() ? PHP_EOL : '<br />';
        echo ($this->isCli() ? date('H:i:s ') : '') . StringHelper::convertToString($message) . $eol;
    }

    /**
     * Render chart as part of running chart samples in browser.
     * Charts are not rendered in unit tests, which are command line.
     *
     * @codeCoverageIgnore
     */
    public function renderChart(Chart $chart, string $fileName, ?Spreadsheet $spreadsheet = null): void
>>>>>>> match
    {
        if ($this->isCli() === true) {
            return;
        }
<<<<<<< HEAD

        Settings::setChartRenderer(\PhpOffice\PhpSpreadsheet\Chart\Renderer\MtJpGraphRenderer::class);

        $fileName = $this->getFilename($fileName, 'png');
=======
        Settings::setChartRenderer(MtJpGraphRenderer::class);

        $fileName = $this->getFilename($fileName, 'png');
        $title = $chart->getTitle();
        $caption = null;
        if ($title !== null) {
            $calculatedTitle = $title->getCalculatedTitle($spreadsheet);
            if ($calculatedTitle !== null) {
                $caption = $title->getCaption();
                $title->setCaption($calculatedTitle);
            }
        }
>>>>>>> match

        try {
            $chart->render($fileName);
            $this->log('Rendered image: ' . $fileName);
<<<<<<< HEAD
            $imageData = file_get_contents($fileName);
            if ($imageData !== false) {
                echo '<div><img src="data:image/gif;base64,' . base64_encode($imageData) . '" /></div>';
=======
            $imageData = @file_get_contents($fileName);
            if ($imageData !== false) {
                echo '<div><img src="data:image/gif;base64,' . base64_encode($imageData) . '" /></div>';
            } else {
                $this->log('Unable to open chart' . PHP_EOL);
>>>>>>> match
            }
        } catch (Throwable $e) {
            $this->log('Error rendering chart: ' . $e->getMessage() . PHP_EOL);
        }
<<<<<<< HEAD
=======
        if (isset($title, $caption)) {
            $title->setCaption($caption);
        }
        Settings::unsetChartRenderer();
>>>>>>> match
    }

    public function titles(string $category, string $functionName, ?string $description = null): void
    {
        $this->log(sprintf('%s Functions:', $category));
        $description === null
            ? $this->log(sprintf('Function: %s()', rtrim($functionName, '()')))
            : $this->log(sprintf('Function: %s() - %s.', rtrim($functionName, '()'), rtrim($description, '.')));
    }

    public function displayGrid(array $matrix): void
    {
        $renderer = new TextGrid($matrix, $this->isCli());
        echo $renderer->render();
    }

    public function logCalculationResult(
        Worksheet $worksheet,
        string $functionName,
        string $formulaCell,
        ?string $descriptionCell = null
    ): void {
        if ($descriptionCell !== null) {
<<<<<<< HEAD
            $this->log($worksheet->getCell($descriptionCell)->getValue());
        }
        $this->log($worksheet->getCell($formulaCell)->getValue());
        $this->log(sprintf('%s() Result is ', $functionName) . $worksheet->getCell($formulaCell)->getCalculatedValue());
=======
            $this->log($worksheet->getCell($descriptionCell)->getValueString());
        }
        $this->log($worksheet->getCell($formulaCell)->getValueString());
        $this->log(sprintf('%s() Result is ', $functionName) . $worksheet->getCell($formulaCell)->getCalculatedValueString());
>>>>>>> match
    }

    /**
     * Log ending notes.
     */
    public function logEndingNotes(): void
    {
        // Do not show execution time for index
        $this->log('Peak memory usage: ' . (memory_get_peak_usage(true) / 1024 / 1024) . 'MB');
    }

    /**
     * Log a line about the write operation.
<<<<<<< HEAD
     *
     * @param string $path
     * @param float $callStartTime
     */
    public function logWrite(IWriter $writer, $path, $callStartTime): void
=======
     */
    public function logWrite(IWriter $writer, string $path, float $callStartTime): void
>>>>>>> match
    {
        $callEndTime = microtime(true);
        $callTime = $callEndTime - $callStartTime;
        $reflection = new ReflectionClass($writer);
        $format = $reflection->getShortName();

<<<<<<< HEAD
        $message = ($this->isCli() === true)
            ? "Write {$format} format to {$path}  in " . sprintf('%.4f', $callTime) . ' seconds'
            : "Write {$format} format to <code>{$path}</code>  in " . sprintf('%.4f', $callTime) . ' seconds';
=======
        $codePath = $this->isCli() ? $path : "<code>$path</code>";
        $message = "Write {$format} format to {$codePath}  in " . sprintf('%.4f', $callTime) . ' seconds';
>>>>>>> match

        $this->log($message);
    }

    /**
     * Log a line about the read operation.
<<<<<<< HEAD
     *
     * @param string $format
     * @param string $path
     * @param float $callStartTime
     */
    public function logRead($format, $path, $callStartTime): void
=======
     */
    public function logRead(string $format, string $path, float $callStartTime): void
>>>>>>> match
    {
        $callEndTime = microtime(true);
        $callTime = $callEndTime - $callStartTime;
        $message = "Read {$format} format from <code>{$path}</code>  in " . sprintf('%.4f', $callTime) . ' seconds';

        $this->log($message);
    }
}
