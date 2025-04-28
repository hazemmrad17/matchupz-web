<?php

namespace PhpOffice\PhpSpreadsheet\Writer;

use PhpOffice\PhpSpreadsheet\Calculation\Calculation;
use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheet\HashTable;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Borders;
use PhpOffice\PhpSpreadsheet\Style\Conditional;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Font;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\BaseDrawing;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing as WorksheetDrawing;
use PhpOffice\PhpSpreadsheet\Worksheet\MemoryDrawing;
use PhpOffice\PhpSpreadsheet\Writer\Exception as WriterException;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Chart;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Comments;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\ContentTypes;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\DocProps;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Drawing;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Rels;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\RelsRibbon;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\RelsVBA;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\StringTable;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Style;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Table;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Theme;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Workbook;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet;
use ZipArchive;
use ZipStream\Exception\OverflowException;
use ZipStream\ZipStream;

class Xlsx extends BaseWriter
{
    /**
     * Office2003 compatibility.
<<<<<<< HEAD
     *
     * @var bool
     */
    private $office2003compatibility = false;

    /**
     * Private Spreadsheet.
     *
     * @var Spreadsheet
     */
    private $spreadSheet;
=======
     */
    private bool $office2003compatibility = false;

    /**
     * Private Spreadsheet.
     */
    private Spreadsheet $spreadSheet;
>>>>>>> match

    /**
     * Private string table.
     *
     * @var string[]
     */
<<<<<<< HEAD
    private $stringTable = [];
=======
    private array $stringTable = [];
>>>>>>> match

    /**
     * Private unique Conditional HashTable.
     *
     * @var HashTable<Conditional>
     */
<<<<<<< HEAD
    private $stylesConditionalHashTable;
=======
    private HashTable $stylesConditionalHashTable;
>>>>>>> match

    /**
     * Private unique Style HashTable.
     *
     * @var HashTable<\PhpOffice\PhpSpreadsheet\Style\Style>
     */
<<<<<<< HEAD
    private $styleHashTable;
=======
    private HashTable $styleHashTable;
>>>>>>> match

    /**
     * Private unique Fill HashTable.
     *
     * @var HashTable<Fill>
     */
<<<<<<< HEAD
    private $fillHashTable;
=======
    private HashTable $fillHashTable;
>>>>>>> match

    /**
     * Private unique \PhpOffice\PhpSpreadsheet\Style\Font HashTable.
     *
     * @var HashTable<Font>
     */
<<<<<<< HEAD
    private $fontHashTable;
=======
    private HashTable $fontHashTable;
>>>>>>> match

    /**
     * Private unique Borders HashTable.
     *
     * @var HashTable<Borders>
     */
<<<<<<< HEAD
    private $bordersHashTable;
=======
    private HashTable $bordersHashTable;
>>>>>>> match

    /**
     * Private unique NumberFormat HashTable.
     *
     * @var HashTable<NumberFormat>
     */
<<<<<<< HEAD
    private $numFmtHashTable;
=======
    private HashTable $numFmtHashTable;
>>>>>>> match

    /**
     * Private unique \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet\BaseDrawing HashTable.
     *
     * @var HashTable<BaseDrawing>
     */
<<<<<<< HEAD
    private $drawingHashTable;

    /**
     * Private handle for zip stream.
     *
     * @var ZipStream
     */
    private $zip;

    /**
     * @var Chart
     */
    private $writerPartChart;

    /**
     * @var Comments
     */
    private $writerPartComments;

    /**
     * @var ContentTypes
     */
    private $writerPartContentTypes;

    /**
     * @var DocProps
     */
    private $writerPartDocProps;

    /**
     * @var Drawing
     */
    private $writerPartDrawing;

    /**
     * @var Rels
     */
    private $writerPartRels;

    /**
     * @var RelsRibbon
     */
    private $writerPartRelsRibbon;

    /**
     * @var RelsVBA
     */
    private $writerPartRelsVBA;

    /**
     * @var StringTable
     */
    private $writerPartStringTable;

    /**
     * @var Style
     */
    private $writerPartStyle;

    /**
     * @var Theme
     */
    private $writerPartTheme;

    /**
     * @var Table
     */
    private $writerPartTable;

    /**
     * @var Workbook
     */
    private $writerPartWorkbook;

    /**
     * @var Worksheet
     */
    private $writerPartWorksheet;
=======
    private HashTable $drawingHashTable;

    /**
     * Private handle for zip stream.
     */
    private ZipStream $zip;

    private Chart $writerPartChart;

    private Comments $writerPartComments;

    private ContentTypes $writerPartContentTypes;

    private DocProps $writerPartDocProps;

    private Drawing $writerPartDrawing;

    private Rels $writerPartRels;

    private RelsRibbon $writerPartRelsRibbon;

    private RelsVBA $writerPartRelsVBA;

    private StringTable $writerPartStringTable;

    private Style $writerPartStyle;

    private Theme $writerPartTheme;

    private Table $writerPartTable;

    private Workbook $writerPartWorkbook;

    private Worksheet $writerPartWorksheet;

    private bool $explicitStyle0 = false;

    private bool $useCSEArrays = false;

    private bool $useDynamicArray = false;

    public const DEFAULT_FORCE_FULL_CALC = false;

    // Default changed from null in PhpSpreadsheet 4.0.0.
    private ?bool $forceFullCalc = self::DEFAULT_FORCE_FULL_CALC;
>>>>>>> match

    /**
     * Create a new Xlsx Writer.
     */
    public function __construct(Spreadsheet $spreadsheet)
    {
        // Assign PhpSpreadsheet
        $this->setSpreadsheet($spreadsheet);

        $this->writerPartChart = new Chart($this);
        $this->writerPartComments = new Comments($this);
        $this->writerPartContentTypes = new ContentTypes($this);
        $this->writerPartDocProps = new DocProps($this);
        $this->writerPartDrawing = new Drawing($this);
        $this->writerPartRels = new Rels($this);
        $this->writerPartRelsRibbon = new RelsRibbon($this);
        $this->writerPartRelsVBA = new RelsVBA($this);
        $this->writerPartStringTable = new StringTable($this);
        $this->writerPartStyle = new Style($this);
        $this->writerPartTheme = new Theme($this);
        $this->writerPartTable = new Table($this);
        $this->writerPartWorkbook = new Workbook($this);
        $this->writerPartWorksheet = new Worksheet($this);

        // Set HashTable variables
<<<<<<< HEAD
        // @phpstan-ignore-next-line
        $this->bordersHashTable = new HashTable();
        // @phpstan-ignore-next-line
        $this->drawingHashTable = new HashTable();
        // @phpstan-ignore-next-line
        $this->fillHashTable = new HashTable();
        // @phpstan-ignore-next-line
        $this->fontHashTable = new HashTable();
        // @phpstan-ignore-next-line
        $this->numFmtHashTable = new HashTable();
        // @phpstan-ignore-next-line
        $this->styleHashTable = new HashTable();
        // @phpstan-ignore-next-line
        $this->stylesConditionalHashTable = new HashTable();
=======
        $this->bordersHashTable = new HashTable();
        $this->drawingHashTable = new HashTable();
        $this->fillHashTable = new HashTable();
        $this->fontHashTable = new HashTable();
        $this->numFmtHashTable = new HashTable();
        $this->styleHashTable = new HashTable();
        $this->stylesConditionalHashTable = new HashTable();
        $this->determineUseDynamicArrays();
>>>>>>> match
    }

    public function getWriterPartChart(): Chart
    {
        return $this->writerPartChart;
    }

    public function getWriterPartComments(): Comments
    {
        return $this->writerPartComments;
    }

    public function getWriterPartContentTypes(): ContentTypes
    {
        return $this->writerPartContentTypes;
    }

    public function getWriterPartDocProps(): DocProps
    {
        return $this->writerPartDocProps;
    }

    public function getWriterPartDrawing(): Drawing
    {
        return $this->writerPartDrawing;
    }

    public function getWriterPartRels(): Rels
    {
        return $this->writerPartRels;
    }

    public function getWriterPartRelsRibbon(): RelsRibbon
    {
        return $this->writerPartRelsRibbon;
    }

    public function getWriterPartRelsVBA(): RelsVBA
    {
        return $this->writerPartRelsVBA;
    }

    public function getWriterPartStringTable(): StringTable
    {
        return $this->writerPartStringTable;
    }

    public function getWriterPartStyle(): Style
    {
        return $this->writerPartStyle;
    }

    public function getWriterPartTheme(): Theme
    {
        return $this->writerPartTheme;
    }

    public function getWriterPartTable(): Table
    {
        return $this->writerPartTable;
    }

    public function getWriterPartWorkbook(): Workbook
    {
        return $this->writerPartWorkbook;
    }

    public function getWriterPartWorksheet(): Worksheet
    {
        return $this->writerPartWorksheet;
    }

    /**
     * Save PhpSpreadsheet to file.
     *
     * @param resource|string $filename
     */
    public function save($filename, int $flags = 0): void
    {
        $this->processFlags($flags);
<<<<<<< HEAD
=======
        $this->determineUseDynamicArrays();
>>>>>>> match

        // garbage collect
        $this->pathNames = [];
        $this->spreadSheet->garbageCollect();

        $saveDebugLog = Calculation::getInstance($this->spreadSheet)->getDebugLog()->getWriteDebugLog();
        Calculation::getInstance($this->spreadSheet)->getDebugLog()->setWriteDebugLog(false);
        $saveDateReturnType = Functions::getReturnDateType();
        Functions::setReturnDateType(Functions::RETURNDATE_EXCEL);

        // Create string lookup table
        $this->stringTable = [];
        for ($i = 0; $i < $this->spreadSheet->getSheetCount(); ++$i) {
            $this->stringTable = $this->getWriterPartStringTable()->createStringTable($this->spreadSheet->getSheet($i), $this->stringTable);
        }

        // Create styles dictionaries
        $this->styleHashTable->addFromSource($this->getWriterPartStyle()->allStyles($this->spreadSheet));
        $this->stylesConditionalHashTable->addFromSource($this->getWriterPartStyle()->allConditionalStyles($this->spreadSheet));
        $this->fillHashTable->addFromSource($this->getWriterPartStyle()->allFills($this->spreadSheet));
        $this->fontHashTable->addFromSource($this->getWriterPartStyle()->allFonts($this->spreadSheet));
        $this->bordersHashTable->addFromSource($this->getWriterPartStyle()->allBorders($this->spreadSheet));
        $this->numFmtHashTable->addFromSource($this->getWriterPartStyle()->allNumberFormats($this->spreadSheet));

        // Create drawing dictionary
        $this->drawingHashTable->addFromSource($this->getWriterPartDrawing()->allDrawings($this->spreadSheet));

        $zipContent = [];
        // Add [Content_Types].xml to ZIP file
        $zipContent['[Content_Types].xml'] = $this->getWriterPartContentTypes()->writeContentTypes($this->spreadSheet, $this->includeCharts);
<<<<<<< HEAD
=======
        $metadataData = (new Xlsx\Metadata($this))->writeMetadata();
        if ($metadataData !== '') {
            $zipContent['xl/metadata.xml'] = $metadataData;
        }
>>>>>>> match

        //if hasMacros, add the vbaProject.bin file, Certificate file(if exists)
        if ($this->spreadSheet->hasMacros()) {
            $macrosCode = $this->spreadSheet->getMacrosCode();
            if ($macrosCode !== null) {
                // we have the code ?
                $zipContent['xl/vbaProject.bin'] = $macrosCode; //allways in 'xl', allways named vbaProject.bin
                if ($this->spreadSheet->hasMacrosCertificate()) {
                    //signed macros ?
                    // Yes : add the certificate file and the related rels file
                    $zipContent['xl/vbaProjectSignature.bin'] = $this->spreadSheet->getMacrosCertificate();
                    $zipContent['xl/_rels/vbaProject.bin.rels'] = $this->getWriterPartRelsVBA()->writeVBARelationships();
                }
            }
        }
        //a custom UI in this workbook ? add it ("base" xml and additional objects (pictures) and rels)
        if ($this->spreadSheet->hasRibbon()) {
            $tmpRibbonTarget = $this->spreadSheet->getRibbonXMLData('target');
            $tmpRibbonTarget = is_string($tmpRibbonTarget) ? $tmpRibbonTarget : '';
            $zipContent[$tmpRibbonTarget] = $this->spreadSheet->getRibbonXMLData('data');
            if ($this->spreadSheet->hasRibbonBinObjects()) {
                $tmpRootPath = dirname($tmpRibbonTarget) . '/';
                $ribbonBinObjects = $this->spreadSheet->getRibbonBinObjects('data'); //the files to write
                if (is_array($ribbonBinObjects)) {
                    foreach ($ribbonBinObjects as $aPath => $aContent) {
                        $zipContent[$tmpRootPath . $aPath] = $aContent;
                    }
                }
                //the rels for files
                $zipContent[$tmpRootPath . '_rels/' . basename($tmpRibbonTarget) . '.rels'] = $this->getWriterPartRelsRibbon()->writeRibbonRelationships($this->spreadSheet);
            }
        }

        // Add relationships to ZIP file
        $zipContent['_rels/.rels'] = $this->getWriterPartRels()->writeRelationships($this->spreadSheet);
        $zipContent['xl/_rels/workbook.xml.rels'] = $this->getWriterPartRels()->writeWorkbookRelationships($this->spreadSheet);

        // Add document properties to ZIP file
        $zipContent['docProps/app.xml'] = $this->getWriterPartDocProps()->writeDocPropsApp($this->spreadSheet);
        $zipContent['docProps/core.xml'] = $this->getWriterPartDocProps()->writeDocPropsCore($this->spreadSheet);
        $customPropertiesPart = $this->getWriterPartDocProps()->writeDocPropsCustom($this->spreadSheet);
        if ($customPropertiesPart !== null) {
            $zipContent['docProps/custom.xml'] = $customPropertiesPart;
        }

        // Add theme to ZIP file
        $zipContent['xl/theme/theme1.xml'] = $this->getWriterPartTheme()->writeTheme($this->spreadSheet);

        // Add string table to ZIP file
        $zipContent['xl/sharedStrings.xml'] = $this->getWriterPartStringTable()->writeStringTable($this->stringTable);

        // Add styles to ZIP file
        $zipContent['xl/styles.xml'] = $this->getWriterPartStyle()->writeStyles($this->spreadSheet);

        // Add workbook to ZIP file
<<<<<<< HEAD
        $zipContent['xl/workbook.xml'] = $this->getWriterPartWorkbook()->writeWorkbook($this->spreadSheet, $this->preCalculateFormulas);
=======
        $zipContent['xl/workbook.xml'] = $this->getWriterPartWorkbook()->writeWorkbook($this->spreadSheet, $this->preCalculateFormulas, $this->forceFullCalc);
>>>>>>> match

        $chartCount = 0;
        // Add worksheets
        for ($i = 0; $i < $this->spreadSheet->getSheetCount(); ++$i) {
            $zipContent['xl/worksheets/sheet' . ($i + 1) . '.xml'] = $this->getWriterPartWorksheet()->writeWorksheet($this->spreadSheet->getSheet($i), $this->stringTable, $this->includeCharts);
            if ($this->includeCharts) {
                $charts = $this->spreadSheet->getSheet($i)->getChartCollection();
                if (count($charts) > 0) {
                    foreach ($charts as $chart) {
                        $zipContent['xl/charts/chart' . ($chartCount + 1) . '.xml'] = $this->getWriterPartChart()->writeChart($chart, $this->preCalculateFormulas);
                        ++$chartCount;
                    }
                }
            }
        }

        $chartRef1 = 0;
        $tableRef1 = 1;
        // Add worksheet relationships (drawings, ...)
        for ($i = 0; $i < $this->spreadSheet->getSheetCount(); ++$i) {
            // Add relationships
<<<<<<< HEAD
            $zipContent['xl/worksheets/_rels/sheet' . ($i + 1) . '.xml.rels'] = $this->getWriterPartRels()->writeWorksheetRelationships($this->spreadSheet->getSheet($i), ($i + 1), $this->includeCharts, $tableRef1);
=======
            $zipContent['xl/worksheets/_rels/sheet' . ($i + 1) . '.xml.rels'] = $this->getWriterPartRels()->writeWorksheetRelationships($this->spreadSheet->getSheet($i), ($i + 1), $this->includeCharts, $tableRef1, $zipContent);
>>>>>>> match

            // Add unparsedLoadedData
            $sheetCodeName = $this->spreadSheet->getSheet($i)->getCodeName();
            $unparsedLoadedData = $this->spreadSheet->getUnparsedLoadedData();
            if (isset($unparsedLoadedData['sheets'][$sheetCodeName]['ctrlProps'])) {
                foreach ($unparsedLoadedData['sheets'][$sheetCodeName]['ctrlProps'] as $ctrlProp) {
                    $zipContent[$ctrlProp['filePath']] = $ctrlProp['content'];
                }
            }
            if (isset($unparsedLoadedData['sheets'][$sheetCodeName]['printerSettings'])) {
                foreach ($unparsedLoadedData['sheets'][$sheetCodeName]['printerSettings'] as $ctrlProp) {
                    $zipContent[$ctrlProp['filePath']] = $ctrlProp['content'];
                }
            }

            $drawings = $this->spreadSheet->getSheet($i)->getDrawingCollection();
            $drawingCount = count($drawings);
            if ($this->includeCharts) {
                $chartCount = $this->spreadSheet->getSheet($i)->getChartCount();
            }

            // Add drawing and image relationship parts
            if (($drawingCount > 0) || ($chartCount > 0)) {
                // Drawing relationships
                $zipContent['xl/drawings/_rels/drawing' . ($i + 1) . '.xml.rels'] = $this->getWriterPartRels()->writeDrawingRelationships($this->spreadSheet->getSheet($i), $chartRef1, $this->includeCharts);

                // Drawings
                $zipContent['xl/drawings/drawing' . ($i + 1) . '.xml'] = $this->getWriterPartDrawing()->writeDrawings($this->spreadSheet->getSheet($i), $this->includeCharts);
            } elseif (isset($unparsedLoadedData['sheets'][$sheetCodeName]['drawingAlternateContents'])) {
                // Drawings
                $zipContent['xl/drawings/drawing' . ($i + 1) . '.xml'] = $this->getWriterPartDrawing()->writeDrawings($this->spreadSheet->getSheet($i), $this->includeCharts);
            }

            // Add unparsed drawings
<<<<<<< HEAD
            if (isset($unparsedLoadedData['sheets'][$sheetCodeName]['Drawings'])) {
=======
            if (isset($unparsedLoadedData['sheets'][$sheetCodeName]['Drawings']) && !isset($zipContent['xl/drawings/drawing' . ($i + 1) . '.xml'])) {
>>>>>>> match
                foreach ($unparsedLoadedData['sheets'][$sheetCodeName]['Drawings'] as $relId => $drawingXml) {
                    $drawingFile = array_search($relId, $unparsedLoadedData['sheets'][$sheetCodeName]['drawingOriginalIds']);
                    if ($drawingFile !== false) {
                        //$drawingFile = ltrim($drawingFile, '.');
                        //$zipContent['xl' . $drawingFile] = $drawingXml;
                        $zipContent['xl/drawings/drawing' . ($i + 1) . '.xml'] = $drawingXml;
                    }
                }
            }
<<<<<<< HEAD
=======
            if (isset($unparsedLoadedData['sheets'][$sheetCodeName]['drawingOriginalIds']) && !isset($zipContent['xl/drawings/drawing' . ($i + 1) . '.xml'])) {
                $zipContent['xl/drawings/drawing' . ($i + 1) . '.xml'] = '<xml></xml>';
            }
>>>>>>> match

            // Add comment relationship parts
            $legacy = $unparsedLoadedData['sheets'][$this->spreadSheet->getSheet($i)->getCodeName()]['legacyDrawing'] ?? null;
            if (count($this->spreadSheet->getSheet($i)->getComments()) > 0 || $legacy !== null) {
                // VML Comments relationships
                $zipContent['xl/drawings/_rels/vmlDrawing' . ($i + 1) . '.vml.rels'] = $this->getWriterPartRels()->writeVMLDrawingRelationships($this->spreadSheet->getSheet($i));

                // VML Comments
                $zipContent['xl/drawings/vmlDrawing' . ($i + 1) . '.vml'] = $legacy ?? $this->getWriterPartComments()->writeVMLComments($this->spreadSheet->getSheet($i));
            }

            // Comments
            if (count($this->spreadSheet->getSheet($i)->getComments()) > 0) {
                $zipContent['xl/comments' . ($i + 1) . '.xml'] = $this->getWriterPartComments()->writeComments($this->spreadSheet->getSheet($i));

                // Media
                foreach ($this->spreadSheet->getSheet($i)->getComments() as $comment) {
                    if ($comment->hasBackgroundImage()) {
                        $image = $comment->getBackgroundImage();
                        $zipContent['xl/media/' . $image->getMediaFilename()] = $this->processDrawing($image);
                    }
                }
            }

            // Add unparsed relationship parts
            if (isset($unparsedLoadedData['sheets'][$sheetCodeName]['vmlDrawings'])) {
                foreach ($unparsedLoadedData['sheets'][$sheetCodeName]['vmlDrawings'] as $vmlDrawing) {
                    if (!isset($zipContent[$vmlDrawing['filePath']])) {
                        $zipContent[$vmlDrawing['filePath']] = $vmlDrawing['content'];
                    }
                }
            }

            // Add header/footer relationship parts
            if (count($this->spreadSheet->getSheet($i)->getHeaderFooter()->getImages()) > 0) {
                // VML Drawings
                $zipContent['xl/drawings/vmlDrawingHF' . ($i + 1) . '.vml'] = $this->getWriterPartDrawing()->writeVMLHeaderFooterImages($this->spreadSheet->getSheet($i));

                // VML Drawing relationships
                $zipContent['xl/drawings/_rels/vmlDrawingHF' . ($i + 1) . '.vml.rels'] = $this->getWriterPartRels()->writeHeaderFooterDrawingRelationships($this->spreadSheet->getSheet($i));

                // Media
                foreach ($this->spreadSheet->getSheet($i)->getHeaderFooter()->getImages() as $image) {
<<<<<<< HEAD
                    $zipContent['xl/media/' . $image->getIndexedFilename()] = file_get_contents($image->getPath());
=======
                    if ($image->getPath() !== '') {
                        $zipContent['xl/media/' . $image->getIndexedFilename()] = file_get_contents($image->getPath());
                    }
>>>>>>> match
                }
            }

            // Add Table parts
            $tables = $this->spreadSheet->getSheet($i)->getTableCollection();
            foreach ($tables as $table) {
                $zipContent['xl/tables/table' . $tableRef1 . '.xml'] = $this->getWriterPartTable()->writeTable($table, $tableRef1++);
            }
        }

        // Add media
        for ($i = 0; $i < $this->getDrawingHashTable()->count(); ++$i) {
            if ($this->getDrawingHashTable()->getByIndex($i) instanceof WorksheetDrawing) {
                $imageContents = null;
                $imagePath = $this->getDrawingHashTable()->getByIndex($i)->getPath();
<<<<<<< HEAD
                if (strpos($imagePath, 'zip://') !== false) {
=======
                if ($imagePath === '') {
                    continue;
                }
                if (str_contains($imagePath, 'zip://')) {
>>>>>>> match
                    $imagePath = substr($imagePath, 6);
                    $imagePathSplitted = explode('#', $imagePath);

                    $imageZip = new ZipArchive();
                    $imageZip->open($imagePathSplitted[0]);
                    $imageContents = $imageZip->getFromName($imagePathSplitted[1]);
                    $imageZip->close();
                    unset($imageZip);
                } else {
                    $imageContents = file_get_contents($imagePath);
                }

                $zipContent['xl/media/' . $this->getDrawingHashTable()->getByIndex($i)->getIndexedFilename()] = $imageContents;
            } elseif ($this->getDrawingHashTable()->getByIndex($i) instanceof MemoryDrawing) {
                ob_start();
<<<<<<< HEAD
                /** @var callable */
=======
>>>>>>> match
                $callable = $this->getDrawingHashTable()->getByIndex($i)->getRenderingFunction();
                call_user_func(
                    $callable,
                    $this->getDrawingHashTable()->getByIndex($i)->getImageResource()
                );
                $imageContents = ob_get_contents();
                ob_end_clean();

                $zipContent['xl/media/' . $this->getDrawingHashTable()->getByIndex($i)->getIndexedFilename()] = $imageContents;
            }
        }

        Functions::setReturnDateType($saveDateReturnType);
        Calculation::getInstance($this->spreadSheet)->getDebugLog()->setWriteDebugLog($saveDebugLog);

        $this->openFileHandle($filename);

        $this->zip = ZipStream0::newZipStream($this->fileHandle);

        $this->addZipFiles($zipContent);

        // Close file
        try {
            $this->zip->finish();
<<<<<<< HEAD
        } catch (OverflowException $e) {
=======
        } catch (OverflowException) {
>>>>>>> match
            throw new WriterException('Could not close resource.');
        }

        $this->maybeCloseFileHandle();
    }

    /**
     * Get Spreadsheet object.
<<<<<<< HEAD
     *
     * @return Spreadsheet
     */
    public function getSpreadsheet()
=======
     */
    public function getSpreadsheet(): Spreadsheet
>>>>>>> match
    {
        return $this->spreadSheet;
    }

    /**
     * Set Spreadsheet object.
     *
     * @param Spreadsheet $spreadsheet PhpSpreadsheet object
     *
     * @return $this
     */
<<<<<<< HEAD
    public function setSpreadsheet(Spreadsheet $spreadsheet)
=======
    public function setSpreadsheet(Spreadsheet $spreadsheet): static
>>>>>>> match
    {
        $this->spreadSheet = $spreadsheet;

        return $this;
    }

    /**
     * Get string table.
     *
     * @return string[]
     */
<<<<<<< HEAD
    public function getStringTable()
=======
    public function getStringTable(): array
>>>>>>> match
    {
        return $this->stringTable;
    }

    /**
     * Get Style HashTable.
     *
     * @return HashTable<\PhpOffice\PhpSpreadsheet\Style\Style>
     */
<<<<<<< HEAD
    public function getStyleHashTable()
=======
    public function getStyleHashTable(): HashTable
>>>>>>> match
    {
        return $this->styleHashTable;
    }

    /**
     * Get Conditional HashTable.
     *
     * @return HashTable<Conditional>
     */
<<<<<<< HEAD
    public function getStylesConditionalHashTable()
=======
    public function getStylesConditionalHashTable(): HashTable
>>>>>>> match
    {
        return $this->stylesConditionalHashTable;
    }

    /**
     * Get Fill HashTable.
     *
     * @return HashTable<Fill>
     */
<<<<<<< HEAD
    public function getFillHashTable()
=======
    public function getFillHashTable(): HashTable
>>>>>>> match
    {
        return $this->fillHashTable;
    }

    /**
     * Get \PhpOffice\PhpSpreadsheet\Style\Font HashTable.
     *
     * @return HashTable<Font>
     */
<<<<<<< HEAD
    public function getFontHashTable()
=======
    public function getFontHashTable(): HashTable
>>>>>>> match
    {
        return $this->fontHashTable;
    }

    /**
     * Get Borders HashTable.
     *
     * @return HashTable<Borders>
     */
<<<<<<< HEAD
    public function getBordersHashTable()
=======
    public function getBordersHashTable(): HashTable
>>>>>>> match
    {
        return $this->bordersHashTable;
    }

    /**
     * Get NumberFormat HashTable.
     *
     * @return HashTable<NumberFormat>
     */
<<<<<<< HEAD
    public function getNumFmtHashTable()
=======
    public function getNumFmtHashTable(): HashTable
>>>>>>> match
    {
        return $this->numFmtHashTable;
    }

    /**
     * Get \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet\BaseDrawing HashTable.
     *
     * @return HashTable<BaseDrawing>
     */
<<<<<<< HEAD
    public function getDrawingHashTable()
=======
    public function getDrawingHashTable(): HashTable
>>>>>>> match
    {
        return $this->drawingHashTable;
    }

    /**
     * Get Office2003 compatibility.
<<<<<<< HEAD
     *
     * @return bool
     */
    public function getOffice2003Compatibility()
=======
     */
    public function getOffice2003Compatibility(): bool
>>>>>>> match
    {
        return $this->office2003compatibility;
    }

    /**
     * Set Office2003 compatibility.
     *
     * @param bool $office2003compatibility Office2003 compatibility?
     *
     * @return $this
     */
<<<<<<< HEAD
    public function setOffice2003Compatibility($office2003compatibility)
=======
    public function setOffice2003Compatibility(bool $office2003compatibility): static
>>>>>>> match
    {
        $this->office2003compatibility = $office2003compatibility;

        return $this;
    }

<<<<<<< HEAD
    /** @var array */
    private $pathNames = [];
=======
    private array $pathNames = [];
>>>>>>> match

    private function addZipFile(string $path, string $content): void
    {
        if (!in_array($path, $this->pathNames)) {
            $this->pathNames[] = $path;
            $this->zip->addFile($path, $content);
        }
    }

    private function addZipFiles(array $zipContent): void
    {
        foreach ($zipContent as $path => $content) {
            $this->addZipFile($path, $content);
        }
    }

<<<<<<< HEAD
    /**
     * @return mixed
     */
    private function processDrawing(WorksheetDrawing $drawing)
    {
        $data = null;
        $filename = $drawing->getPath();
=======
    private function processDrawing(WorksheetDrawing $drawing): string|null|false
    {
        $data = null;
        $filename = $drawing->getPath();
        if ($filename === '') {
            return null;
        }
>>>>>>> match
        $imageData = getimagesize($filename);

        if (!empty($imageData)) {
            switch ($imageData[2]) {
                case 1: // GIF, not supported by BIFF8, we convert to PNG
                    $image = imagecreatefromgif($filename);
                    if ($image !== false) {
                        ob_start();
                        imagepng($image);
                        $data = ob_get_contents();
                        ob_end_clean();
                    }

                    break;

                case 2: // JPEG
                    $data = file_get_contents($filename);

                    break;

                case 3: // PNG
                    $data = file_get_contents($filename);

                    break;

                case 6: // Windows DIB (BMP), we convert to PNG
                    $image = imagecreatefrombmp($filename);
                    if ($image !== false) {
                        ob_start();
                        imagepng($image);
                        $data = ob_get_contents();
                        ob_end_clean();
                    }

                    break;
            }
        }

        return $data;
    }
<<<<<<< HEAD
=======

    public function getExplicitStyle0(): bool
    {
        return $this->explicitStyle0;
    }

    /**
     * This may be useful if non-default Alignment is part of default style
     * and you think you might want to open the spreadsheet
     * with LibreOffice or Gnumeric.
     */
    public function setExplicitStyle0(bool $explicitStyle0): self
    {
        $this->explicitStyle0 = $explicitStyle0;

        return $this;
    }

    public function setUseCSEArrays(?bool $useCSEArrays): void
    {
        if ($useCSEArrays !== null) {
            $this->useCSEArrays = $useCSEArrays;
        }
        $this->determineUseDynamicArrays();
    }

    public function useDynamicArrays(): bool
    {
        return $this->useDynamicArray;
    }

    private function determineUseDynamicArrays(): void
    {
        $this->useDynamicArray = $this->preCalculateFormulas && Calculation::getInstance($this->spreadSheet)->getInstanceArrayReturnType() === Calculation::RETURN_ARRAY_AS_ARRAY && !$this->useCSEArrays;
    }

    /**
     * If this is set when a spreadsheet is opened,
     * values may not be automatically re-calculated,
     * and a button will be available to force re-calculation.
     * This may apply to all spreadsheets open at that time.
     * If null, this will be set to the opposite of $preCalculateFormulas.
     * It is likely that false is the desired setting, although
     * cases have been reported where true is required (issue #456).
     * Nevertheless, default is set to false in PhpSpreadsheet 4.0.0.
     */
    public function setForceFullCalc(?bool $forceFullCalc): self
    {
        $this->forceFullCalc = $forceFullCalc;

        return $this;
    }
>>>>>>> match
}
