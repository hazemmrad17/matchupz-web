<?php

namespace PhpOffice\PhpSpreadsheet\Writer\Pdf;

use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;
<<<<<<< HEAD
use PhpOffice\PhpSpreadsheet\Writer\Html;
=======
>>>>>>> match
use PhpOffice\PhpSpreadsheet\Writer\Pdf;

class Mpdf extends Pdf
{
<<<<<<< HEAD
    /** @var bool */
    protected $isMPdf = true;
=======
    public const SIMULATED_BODY_START = '<!-- simulated body start -->';
    private const BODY_TAG = '<body>';
>>>>>>> match

    /**
     * Gets the implementation of external PDF library that should be used.
     *
     * @param array $config Configuration array
     *
     * @return \Mpdf\Mpdf implementation
     */
<<<<<<< HEAD
    protected function createExternalWriterInstance($config)
=======
    protected function createExternalWriterInstance(array $config): \Mpdf\Mpdf
>>>>>>> match
    {
        return new \Mpdf\Mpdf($config);
    }

    /**
     * Save Spreadsheet to file.
     *
     * @param string $filename Name of the file to save as
     */
    public function save($filename, int $flags = 0): void
    {
        $fileHandle = parent::prepareForSave($filename);

        //  Check for paper size and page orientation
        $setup = $this->spreadsheet->getSheet($this->getSheetIndex() ?? 0)->getPageSetup();
        $orientation = $this->getOrientation() ?? $setup->getOrientation();
        $orientation = ($orientation === PageSetup::ORIENTATION_LANDSCAPE) ? 'L' : 'P';
        $printPaperSize = $this->getPaperSize() ?? $setup->getPaperSize();
        $paperSize = self::$paperSizes[$printPaperSize] ?? PageSetup::getPaperSizeDefault();

        //  Create PDF
        $config = ['tempDir' => $this->tempDir . '/mpdf'];
        $pdf = $this->createExternalWriterInstance($config);
        $ortmp = $orientation;
        $pdf->_setPageSize($paperSize, $ortmp);
        $pdf->DefOrientation = $orientation;
        $pdf->AddPageByArray([
            'orientation' => $orientation,
            'margin-left' => $this->inchesToMm($this->spreadsheet->getActiveSheet()->getPageMargins()->getLeft()),
            'margin-right' => $this->inchesToMm($this->spreadsheet->getActiveSheet()->getPageMargins()->getRight()),
            'margin-top' => $this->inchesToMm($this->spreadsheet->getActiveSheet()->getPageMargins()->getTop()),
            'margin-bottom' => $this->inchesToMm($this->spreadsheet->getActiveSheet()->getPageMargins()->getBottom()),
        ]);

        //  Document info
        $pdf->SetTitle($this->spreadsheet->getProperties()->getTitle());
        $pdf->SetAuthor($this->spreadsheet->getProperties()->getCreator());
        $pdf->SetSubject($this->spreadsheet->getProperties()->getSubject());
        $pdf->SetKeywords($this->spreadsheet->getProperties()->getKeywords());
        $pdf->SetCreator($this->spreadsheet->getProperties()->getCreator());

        $html = $this->generateHTMLAll();
<<<<<<< HEAD
        $bodyLocation = strpos($html, Html::BODY_LINE);
        // Make sure first data presented to Mpdf includes body tag
        //   so that Mpdf doesn't parse it as content. Issue 2432.
        if ($bodyLocation !== false) {
            $bodyLocation += strlen(Html::BODY_LINE);
            $pdf->WriteHTML(substr($html, 0, $bodyLocation));
            $html = substr($html, $bodyLocation);
        }
        foreach (\array_chunk(\explode(PHP_EOL, $html), 1000) as $lines) {
            $pdf->WriteHTML(\implode(PHP_EOL, $lines));
=======
        $bodyLocation = strpos($html, self::SIMULATED_BODY_START);
        if ($bodyLocation === false) {
            $bodyLocation = strpos($html, self::BODY_TAG);
            if ($bodyLocation !== false) {
                $bodyLocation += strlen(self::BODY_TAG);
            }
        }
        // Make sure first data presented to Mpdf includes body tag
        //   (and any htmlpageheader/htmlpagefooter tags)
        //   so that Mpdf doesn't parse it as content. Issue 2432.
        if ($bodyLocation !== false) {
            $pdf->WriteHTML(substr($html, 0, $bodyLocation));
            $html = substr($html, $bodyLocation);
        }
        foreach (explode("\n", $html) as $line) {
            $pdf->WriteHTML("$line\n");
>>>>>>> match
        }

        //  Write to file
        fwrite($fileHandle, $pdf->Output('', 'S'));

        parent::restoreStateAfterSave();
    }

    /**
     * Convert inches to mm.
<<<<<<< HEAD
     *
     * @param float $inches
     *
     * @return float
     */
    private function inchesToMm($inches)
=======
     */
    private function inchesToMm(float $inches): float
>>>>>>> match
    {
        return $inches * 25.4;
    }
}
