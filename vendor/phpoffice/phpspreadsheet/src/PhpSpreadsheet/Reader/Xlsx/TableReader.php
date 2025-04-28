<?php

namespace PhpOffice\PhpSpreadsheet\Reader\Xlsx;

use PhpOffice\PhpSpreadsheet\Worksheet\Table;
use PhpOffice\PhpSpreadsheet\Worksheet\Table\TableStyle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use SimpleXMLElement;

class TableReader
{
<<<<<<< HEAD
    /**
     * @var Worksheet
     */
    private $worksheet;

    /**
     * @var SimpleXMLElement
     */
    private $tableXml;
=======
    private Worksheet $worksheet;

    private SimpleXMLElement $tableXml;

    /** @var array|SimpleXMLElement */
    private $tableAttributes;
>>>>>>> match

    public function __construct(Worksheet $workSheet, SimpleXMLElement $tableXml)
    {
        $this->worksheet = $workSheet;
        $this->tableXml = $tableXml;
    }

    /**
     * Loads Table into the Worksheet.
     */
<<<<<<< HEAD
    public function load(): void
    {
        // Remove all "$" in the table range
        $tableRange = (string) preg_replace('/\$/', '', $this->tableXml['ref'] ?? '');
        if (strpos($tableRange, ':') !== false) {
            $this->readTable($tableRange, $this->tableXml);
=======
    public function load(array $tableStyles, array $dxfs): void
    {
        $this->tableAttributes = $this->tableXml->attributes() ?? [];
        // Remove all "$" in the table range
        $tableRange = (string) preg_replace('/\$/', '', $this->tableAttributes['ref'] ?? '');
        if (str_contains($tableRange, ':')) {
            $this->readTable($tableRange, $tableStyles, $dxfs);
>>>>>>> match
        }
    }

    /**
     * Read Table from xml.
     */
<<<<<<< HEAD
    private function readTable(string $tableRange, SimpleXMLElement $tableXml): void
    {
        $table = new Table($tableRange);
        $table->setName((string) $tableXml['displayName']);
        $table->setShowHeaderRow((string) $tableXml['headerRowCount'] !== '0');
        $table->setShowTotalsRow((string) $tableXml['totalsRowCount'] === '1');

        $this->readTableAutoFilter($table, $tableXml->autoFilter);
        $this->readTableColumns($table, $tableXml->tableColumns);
        $this->readTableStyle($table, $tableXml->tableStyleInfo);

        (new AutoFilter($table, $tableXml))->load();
=======
    private function readTable(string $tableRange, array $tableStyles, array $dxfs): void
    {
        $table = new Table($tableRange);
        $table->setName((string) ($this->tableAttributes['displayName'] ?? ''));
        $table->setShowHeaderRow(((string) ($this->tableAttributes['headerRowCount'] ?? '')) !== '0');
        $table->setShowTotalsRow(((string) ($this->tableAttributes['totalsRowCount'] ?? '')) === '1');

        $this->readTableAutoFilter($table, $this->tableXml->autoFilter);
        $this->readTableColumns($table, $this->tableXml->tableColumns);
        $this->readTableStyle($table, $this->tableXml->tableStyleInfo, $tableStyles, $dxfs);

        (new AutoFilter($table, $this->tableXml))->load();
>>>>>>> match
        $this->worksheet->addTable($table);
    }

    /**
     * Reads TableAutoFilter from xml.
     */
    private function readTableAutoFilter(Table $table, SimpleXMLElement $autoFilterXml): void
    {
        if ($autoFilterXml->filterColumn === null) {
            $table->setAllowFilter(false);

            return;
        }

        foreach ($autoFilterXml->filterColumn as $filterColumn) {
<<<<<<< HEAD
            $column = $table->getColumnByOffset((int) $filterColumn['colId']);
            $column->setShowFilterButton((string) $filterColumn['hiddenButton'] !== '1');
=======
            $attributes = $filterColumn->attributes() ?? ['colId' => 0, 'hiddenButton' => 0];
            $column = $table->getColumnByOffset((int) $attributes['colId']);
            $column->setShowFilterButton(((string) $attributes['hiddenButton']) !== '1');
>>>>>>> match
        }
    }

    /**
     * Reads TableColumns from xml.
     */
    private function readTableColumns(Table $table, SimpleXMLElement $tableColumnsXml): void
    {
        $offset = 0;
        foreach ($tableColumnsXml->tableColumn as $tableColumn) {
<<<<<<< HEAD
            $column = $table->getColumnByOffset($offset++);

            if ($table->getShowTotalsRow()) {
                if ($tableColumn['totalsRowLabel']) {
                    $column->setTotalsRowLabel((string) $tableColumn['totalsRowLabel']);
                }

                if ($tableColumn['totalsRowFunction']) {
                    $column->setTotalsRowFunction((string) $tableColumn['totalsRowFunction']);
=======
            $attributes = $tableColumn->attributes() ?? ['totalsRowLabel' => 0, 'totalsRowFunction' => 0];
            $column = $table->getColumnByOffset($offset++);

            if ($table->getShowTotalsRow()) {
                if ($attributes['totalsRowLabel']) {
                    $column->setTotalsRowLabel((string) $attributes['totalsRowLabel']);
                }

                if ($attributes['totalsRowFunction']) {
                    $column->setTotalsRowFunction((string) $attributes['totalsRowFunction']);
>>>>>>> match
                }
            }

            if ($tableColumn->calculatedColumnFormula) {
                $column->setColumnFormula((string) $tableColumn->calculatedColumnFormula);
            }
        }
    }

    /**
     * Reads TableStyle from xml.
     */
<<<<<<< HEAD
    private function readTableStyle(Table $table, SimpleXMLElement $tableStyleInfoXml): void
    {
        $tableStyle = new TableStyle();
        $tableStyle->setTheme((string) $tableStyleInfoXml['name']);
        $tableStyle->setShowRowStripes((string) $tableStyleInfoXml['showRowStripes'] === '1');
        $tableStyle->setShowColumnStripes((string) $tableStyleInfoXml['showColumnStripes'] === '1');
        $tableStyle->setShowFirstColumn((string) $tableStyleInfoXml['showFirstColumn'] === '1');
        $tableStyle->setShowLastColumn((string) $tableStyleInfoXml['showLastColumn'] === '1');
=======
    private function readTableStyle(Table $table, SimpleXMLElement $tableStyleInfoXml, array $tableStyles, array $dxfs): void
    {
        $tableStyle = new TableStyle();
        $attributes = $tableStyleInfoXml->attributes();
        if ($attributes !== null) {
            $tableStyle->setTheme((string) $attributes['name']);
            $tableStyle->setShowRowStripes((string) $attributes['showRowStripes'] === '1');
            $tableStyle->setShowColumnStripes((string) $attributes['showColumnStripes'] === '1');
            $tableStyle->setShowFirstColumn((string) $attributes['showFirstColumn'] === '1');
            $tableStyle->setShowLastColumn((string) $attributes['showLastColumn'] === '1');

            foreach ($tableStyles as $style) {
                if ($style->getName() === (string) $attributes['name']) {
                    $tableStyle->setTableDxfsStyle($style, $dxfs);
                }
            }
        }
>>>>>>> match
        $table->setStyle($tableStyle);
    }
}
