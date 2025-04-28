<?php

namespace PhpOffice\PhpSpreadsheet\Reader\Xlsx;

use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;
use PhpOffice\PhpSpreadsheet\Chart\Axis;
use PhpOffice\PhpSpreadsheet\Chart\AxisText;
use PhpOffice\PhpSpreadsheet\Chart\ChartColor;
use PhpOffice\PhpSpreadsheet\Chart\DataSeries;
use PhpOffice\PhpSpreadsheet\Chart\DataSeriesValues;
use PhpOffice\PhpSpreadsheet\Chart\GridLines;
use PhpOffice\PhpSpreadsheet\Chart\Layout;
use PhpOffice\PhpSpreadsheet\Chart\Legend;
use PhpOffice\PhpSpreadsheet\Chart\PlotArea;
use PhpOffice\PhpSpreadsheet\Chart\Properties as ChartProperties;
use PhpOffice\PhpSpreadsheet\Chart\Title;
use PhpOffice\PhpSpreadsheet\Chart\TrendLine;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\Style\Font;
use SimpleXMLElement;

class Chart
{
<<<<<<< HEAD
    /** @var string */
    private $cNamespace;

    /** @var string */
    private $aNamespace;
=======
    private string $cNamespace;

    private string $aNamespace;
>>>>>>> match

    public function __construct(string $cNamespace = Namespaces::CHART, string $aNamespace = Namespaces::DRAWINGML)
    {
        $this->cNamespace = $cNamespace;
        $this->aNamespace = $aNamespace;
    }

<<<<<<< HEAD
    /**
     * @param string $name
     * @param string $format
     *
     * @return null|bool|float|int|string
     */
    private static function getAttribute(SimpleXMLElement $component, $name, $format)
    {
        $attributes = $component->attributes();
        if (@isset($attributes[$name])) {
            if ($format == 'string') {
                return (string) $attributes[$name];
            } elseif ($format == 'integer') {
                return (int) $attributes[$name];
            } elseif ($format == 'boolean') {
                $value = (string) $attributes[$name];

                return $value === 'true' || $value === '1';
            }

=======
    private static function getAttributeString(SimpleXMLElement $component, string $name): string|null
    {
        $attributes = $component->attributes();
        if (@isset($attributes[$name])) {
            return (string) $attributes[$name];
        }

        return null;
    }

    private static function getAttributeInteger(SimpleXMLElement $component, string $name): int|null
    {
        $attributes = $component->attributes();
        if (@isset($attributes[$name])) {
            return (int) $attributes[$name];
        }

        return null;
    }

    private static function getAttributeBoolean(SimpleXMLElement $component, string $name): bool|null
    {
        $attributes = $component->attributes();
        if (@isset($attributes[$name])) {
            $value = (string) $attributes[$name];

            return $value === 'true' || $value === '1';
        }

        return null;
    }

    private static function getAttributeFloat(SimpleXMLElement $component, string $name): float|null
    {
        $attributes = $component->attributes();
        if (@isset($attributes[$name])) {
>>>>>>> match
            return (float) $attributes[$name];
        }

        return null;
    }

<<<<<<< HEAD
    /**
     * @param string $chartName
     *
     * @return \PhpOffice\PhpSpreadsheet\Chart\Chart
     */
    public function readChart(SimpleXMLElement $chartElements, $chartName)
=======
    public function readChart(SimpleXMLElement $chartElements, string $chartName): \PhpOffice\PhpSpreadsheet\Chart\Chart
>>>>>>> match
    {
        $chartElementsC = $chartElements->children($this->cNamespace);

        $XaxisLabel = $YaxisLabel = $legend = $title = null;
<<<<<<< HEAD
        $dispBlanksAs = $plotVisOnly = null;
=======
        $dispBlanksAs = null;
        $plotVisOnly = false;
>>>>>>> match
        $plotArea = null;
        $rotX = $rotY = $rAngAx = $perspective = null;
        $xAxis = new Axis();
        $yAxis = new Axis();
        $autoTitleDeleted = null;
        $chartNoFill = false;
        $chartBorderLines = null;
        $chartFillColor = null;
        $gradientArray = [];
        $gradientLin = null;
        $roundedCorners = false;
        $gapWidth = null;
        $useUpBars = null;
        $useDownBars = null;
<<<<<<< HEAD
=======
        $noBorder = false;
>>>>>>> match
        foreach ($chartElementsC as $chartElementKey => $chartElement) {
            switch ($chartElementKey) {
                case 'spPr':
                    $children = $chartElementsC->spPr->children($this->aNamespace);
                    if (isset($children->noFill)) {
                        $chartNoFill = true;
                    }
                    if (isset($children->solidFill)) {
                        $chartFillColor = $this->readColor($children->solidFill);
                    }
                    if (isset($children->ln)) {
                        $chartBorderLines = new GridLines();
                        $this->readLineStyle($chartElementsC, $chartBorderLines);
<<<<<<< HEAD
=======
                        if (isset($children->ln->noFill)) {
                            $noBorder = true;
                        }
>>>>>>> match
                    }

                    break;
                case 'roundedCorners':
<<<<<<< HEAD
                    /** @var bool */
                    $roundedCorners = self::getAttribute($chartElementsC->roundedCorners, 'val', 'boolean');
=======
                    /** @var bool $roundedCorners */
                    $roundedCorners = self::getAttributeBoolean($chartElementsC->roundedCorners, 'val');
>>>>>>> match

                    break;
                case 'chart':
                    foreach ($chartElement as $chartDetailsKey => $chartDetails) {
                        $chartDetails = Xlsx::testSimpleXml($chartDetails);
                        switch ($chartDetailsKey) {
                            case 'autoTitleDeleted':
<<<<<<< HEAD
                                /** @var bool */
                                $autoTitleDeleted = self::getAttribute($chartElementsC->chart->autoTitleDeleted, 'val', 'boolean');

                                break;
                            case 'view3D':
                                $rotX = self::getAttribute($chartDetails->rotX, 'val', 'integer');
                                $rotY = self::getAttribute($chartDetails->rotY, 'val', 'integer');
                                $rAngAx = self::getAttribute($chartDetails->rAngAx, 'val', 'integer');
                                $perspective = self::getAttribute($chartDetails->perspective, 'val', 'integer');
=======
                                /** @var bool $autoTitleDeleted */
                                $autoTitleDeleted = self::getAttributeBoolean($chartElementsC->chart->autoTitleDeleted, 'val');

                                break;
                            case 'view3D':
                                $rotX = self::getAttributeInteger($chartDetails->rotX, 'val');
                                $rotY = self::getAttributeInteger($chartDetails->rotY, 'val');
                                $rAngAx = self::getAttributeInteger($chartDetails->rAngAx, 'val');
                                $perspective = self::getAttributeInteger($chartDetails->perspective, 'val');
>>>>>>> match

                                break;
                            case 'plotArea':
                                $plotAreaLayout = $XaxisLabel = $YaxisLabel = null;
                                $plotSeries = $plotAttributes = [];
                                $catAxRead = false;
                                $plotNoFill = false;
                                foreach ($chartDetails as $chartDetailKey => $chartDetail) {
                                    $chartDetail = Xlsx::testSimpleXml($chartDetail);
                                    switch ($chartDetailKey) {
                                        case 'spPr':
                                            $possibleNoFill = $chartDetails->spPr->children($this->aNamespace);
                                            if (isset($possibleNoFill->noFill)) {
                                                $plotNoFill = true;
                                            }
                                            if (isset($possibleNoFill->gradFill->gsLst)) {
                                                foreach ($possibleNoFill->gradFill->gsLst->gs as $gradient) {
                                                    $gradient = Xlsx::testSimpleXml($gradient);
<<<<<<< HEAD
                                                    /** @var float */
                                                    $pos = self::getAttribute($gradient, 'pos', 'float');
=======
                                                    /** @var float $pos */
                                                    $pos = self::getAttributeFloat($gradient, 'pos');
>>>>>>> match
                                                    $gradientArray[] = [
                                                        $pos / ChartProperties::PERCENTAGE_MULTIPLIER,
                                                        new ChartColor($this->readColor($gradient)),
                                                    ];
                                                }
                                            }
                                            if (isset($possibleNoFill->gradFill->lin)) {
<<<<<<< HEAD
                                                $gradientLin = ChartProperties::XmlToAngle((string) self::getAttribute($possibleNoFill->gradFill->lin, 'ang', 'string'));
=======
                                                $gradientLin = ChartProperties::XmlToAngle((string) self::getAttributeString($possibleNoFill->gradFill->lin, 'ang'));
>>>>>>> match
                                            }

                                            break;
                                        case 'layout':
                                            $plotAreaLayout = $this->chartLayoutDetails($chartDetail);

                                            break;
                                        case Axis::AXIS_TYPE_CATEGORY:
                                        case Axis::AXIS_TYPE_DATE:
                                            $catAxRead = true;
                                            if (isset($chartDetail->title)) {
                                                $XaxisLabel = $this->chartTitle($chartDetail->title->children($this->cNamespace));
                                            }
                                            $xAxis->setAxisType($chartDetailKey);
                                            $this->readEffects($chartDetail, $xAxis);
                                            $this->readLineStyle($chartDetail, $xAxis);
                                            if (isset($chartDetail->spPr)) {
                                                $sppr = $chartDetail->spPr->children($this->aNamespace);
                                                if (isset($sppr->solidFill)) {
                                                    $axisColorArray = $this->readColor($sppr->solidFill);
                                                    $xAxis->setFillParameters($axisColorArray['value'], $axisColorArray['alpha'], $axisColorArray['type']);
                                                }
                                                if (isset($chartDetail->spPr->ln->noFill)) {
                                                    $xAxis->setNoFill(true);
                                                }
                                            }
                                            if (isset($chartDetail->majorGridlines)) {
                                                $majorGridlines = new GridLines();
                                                if (isset($chartDetail->majorGridlines->spPr)) {
                                                    $this->readEffects($chartDetail->majorGridlines, $majorGridlines);
                                                    $this->readLineStyle($chartDetail->majorGridlines, $majorGridlines);
                                                }
                                                $xAxis->setMajorGridlines($majorGridlines);
                                            }
                                            if (isset($chartDetail->minorGridlines)) {
                                                $minorGridlines = new GridLines();
                                                $minorGridlines->activateObject();
                                                if (isset($chartDetail->minorGridlines->spPr)) {
                                                    $this->readEffects($chartDetail->minorGridlines, $minorGridlines);
                                                    $this->readLineStyle($chartDetail->minorGridlines, $minorGridlines);
                                                }
                                                $xAxis->setMinorGridlines($minorGridlines);
                                            }
                                            $this->setAxisProperties($chartDetail, $xAxis);

                                            break;
                                        case Axis::AXIS_TYPE_VALUE:
                                            $whichAxis = null;
                                            $axPos = null;
                                            if (isset($chartDetail->axPos)) {
<<<<<<< HEAD
                                                $axPos = self::getAttribute($chartDetail->axPos, 'val', 'string');
=======
                                                $axPos = self::getAttributeString($chartDetail->axPos, 'val');
>>>>>>> match
                                            }
                                            if ($catAxRead) {
                                                $whichAxis = $yAxis;
                                                $yAxis->setAxisType($chartDetailKey);
                                            } elseif (!empty($axPos)) {
                                                switch ($axPos) {
                                                    case 't':
                                                    case 'b':
                                                        $whichAxis = $xAxis;
                                                        $xAxis->setAxisType($chartDetailKey);

                                                        break;
                                                    case 'r':
                                                    case 'l':
                                                        $whichAxis = $yAxis;
                                                        $yAxis->setAxisType($chartDetailKey);

                                                        break;
                                                }
                                            }
                                            if (isset($chartDetail->title)) {
                                                $axisLabel = $this->chartTitle($chartDetail->title->children($this->cNamespace));

                                                switch ($axPos) {
                                                    case 't':
                                                    case 'b':
                                                        $XaxisLabel = $axisLabel;

                                                        break;
                                                    case 'r':
                                                    case 'l':
                                                        $YaxisLabel = $axisLabel;

                                                        break;
                                                }
                                            }
                                            $this->readEffects($chartDetail, $whichAxis);
                                            $this->readLineStyle($chartDetail, $whichAxis);
                                            if ($whichAxis !== null && isset($chartDetail->spPr)) {
                                                $sppr = $chartDetail->spPr->children($this->aNamespace);
                                                if (isset($sppr->solidFill)) {
                                                    $axisColorArray = $this->readColor($sppr->solidFill);
                                                    $whichAxis->setFillParameters($axisColorArray['value'], $axisColorArray['alpha'], $axisColorArray['type']);
                                                }
                                                if (isset($sppr->ln->noFill)) {
                                                    $whichAxis->setNoFill(true);
                                                }
                                            }
                                            if ($whichAxis !== null && isset($chartDetail->majorGridlines)) {
                                                $majorGridlines = new GridLines();
                                                if (isset($chartDetail->majorGridlines->spPr)) {
                                                    $this->readEffects($chartDetail->majorGridlines, $majorGridlines);
                                                    $this->readLineStyle($chartDetail->majorGridlines, $majorGridlines);
                                                }
                                                $whichAxis->setMajorGridlines($majorGridlines);
                                            }
                                            if ($whichAxis !== null && isset($chartDetail->minorGridlines)) {
                                                $minorGridlines = new GridLines();
                                                $minorGridlines->activateObject();
                                                if (isset($chartDetail->minorGridlines->spPr)) {
                                                    $this->readEffects($chartDetail->minorGridlines, $minorGridlines);
                                                    $this->readLineStyle($chartDetail->minorGridlines, $minorGridlines);
                                                }
                                                $whichAxis->setMinorGridlines($minorGridlines);
                                            }
                                            $this->setAxisProperties($chartDetail, $whichAxis);

                                            break;
                                        case 'barChart':
                                        case 'bar3DChart':
<<<<<<< HEAD
                                            $barDirection = self::getAttribute($chartDetail->barDir, 'val', 'string');
=======
                                            $barDirection = self::getAttributeString($chartDetail->barDir, 'val');
>>>>>>> match
                                            $plotSer = $this->chartDataSeries($chartDetail, $chartDetailKey);
                                            $plotSer->setPlotDirection("$barDirection");
                                            $plotSeries[] = $plotSer;
                                            $plotAttributes = $this->readChartAttributes($chartDetail);

                                            break;
                                        case 'lineChart':
                                        case 'line3DChart':
                                            $plotSeries[] = $this->chartDataSeries($chartDetail, $chartDetailKey);
                                            $plotAttributes = $this->readChartAttributes($chartDetail);

                                            break;
                                        case 'areaChart':
                                        case 'area3DChart':
                                            $plotSeries[] = $this->chartDataSeries($chartDetail, $chartDetailKey);
                                            $plotAttributes = $this->readChartAttributes($chartDetail);

                                            break;
                                        case 'doughnutChart':
                                        case 'pieChart':
                                        case 'pie3DChart':
<<<<<<< HEAD
                                            $explosion = self::getAttribute($chartDetail->ser->explosion, 'val', 'string');
=======
                                            $explosion = self::getAttributeString($chartDetail->ser->explosion, 'val');
>>>>>>> match
                                            $plotSer = $this->chartDataSeries($chartDetail, $chartDetailKey);
                                            $plotSer->setPlotStyle("$explosion");
                                            $plotSeries[] = $plotSer;
                                            $plotAttributes = $this->readChartAttributes($chartDetail);

                                            break;
                                        case 'scatterChart':
<<<<<<< HEAD
                                            /** @var string */
                                            $scatterStyle = self::getAttribute($chartDetail->scatterStyle, 'val', 'string');
=======
                                            /** @var string $scatterStyle */
                                            $scatterStyle = self::getAttributeString($chartDetail->scatterStyle, 'val');
>>>>>>> match
                                            $plotSer = $this->chartDataSeries($chartDetail, $chartDetailKey);
                                            $plotSer->setPlotStyle($scatterStyle);
                                            $plotSeries[] = $plotSer;
                                            $plotAttributes = $this->readChartAttributes($chartDetail);

                                            break;
                                        case 'bubbleChart':
<<<<<<< HEAD
                                            $bubbleScale = self::getAttribute($chartDetail->bubbleScale, 'val', 'integer');
=======
                                            $bubbleScale = self::getAttributeInteger($chartDetail->bubbleScale, 'val');
>>>>>>> match
                                            $plotSer = $this->chartDataSeries($chartDetail, $chartDetailKey);
                                            $plotSer->setPlotStyle("$bubbleScale");
                                            $plotSeries[] = $plotSer;
                                            $plotAttributes = $this->readChartAttributes($chartDetail);

                                            break;
                                        case 'radarChart':
<<<<<<< HEAD
                                            /** @var string */
                                            $radarStyle = self::getAttribute($chartDetail->radarStyle, 'val', 'string');
=======
                                            /** @var string $radarStyle */
                                            $radarStyle = self::getAttributeString($chartDetail->radarStyle, 'val');
>>>>>>> match
                                            $plotSer = $this->chartDataSeries($chartDetail, $chartDetailKey);
                                            $plotSer->setPlotStyle($radarStyle);
                                            $plotSeries[] = $plotSer;
                                            $plotAttributes = $this->readChartAttributes($chartDetail);

                                            break;
                                        case 'surfaceChart':
                                        case 'surface3DChart':
<<<<<<< HEAD
                                            $wireFrame = self::getAttribute($chartDetail->wireframe, 'val', 'boolean');
=======
                                            $wireFrame = self::getAttributeBoolean($chartDetail->wireframe, 'val');
>>>>>>> match
                                            $plotSer = $this->chartDataSeries($chartDetail, $chartDetailKey);
                                            $plotSer->setPlotStyle("$wireFrame");
                                            $plotSeries[] = $plotSer;
                                            $plotAttributes = $this->readChartAttributes($chartDetail);

                                            break;
                                        case 'stockChart':
                                            $plotSeries[] = $this->chartDataSeries($chartDetail, $chartDetailKey);
                                            if (isset($chartDetail->upDownBars->gapWidth)) {
<<<<<<< HEAD
                                                $gapWidth = self::getAttribute($chartDetail->upDownBars->gapWidth, 'val', 'integer');
=======
                                                $gapWidth = self::getAttributeInteger($chartDetail->upDownBars->gapWidth, 'val');
>>>>>>> match
                                            }
                                            if (isset($chartDetail->upDownBars->upBars)) {
                                                $useUpBars = true;
                                            }
                                            if (isset($chartDetail->upDownBars->downBars)) {
                                                $useDownBars = true;
                                            }
                                            $plotAttributes = $this->readChartAttributes($chartDetail);

                                            break;
                                    }
                                }
                                if ($plotAreaLayout == null) {
                                    $plotAreaLayout = new Layout();
                                }
                                $plotArea = new PlotArea($plotAreaLayout, $plotSeries);
                                $this->setChartAttributes($plotAreaLayout, $plotAttributes);
                                if ($plotNoFill) {
                                    $plotArea->setNoFill(true);
                                }
                                if (!empty($gradientArray)) {
                                    $plotArea->setGradientFillProperties($gradientArray, $gradientLin);
                                }
                                if (is_int($gapWidth)) {
                                    $plotArea->setGapWidth($gapWidth);
                                }
                                if ($useUpBars === true) {
                                    $plotArea->setUseUpBars(true);
                                }
                                if ($useDownBars === true) {
                                    $plotArea->setUseDownBars(true);
                                }

                                break;
                            case 'plotVisOnly':
<<<<<<< HEAD
                                $plotVisOnly = self::getAttribute($chartDetails, 'val', 'string');

                                break;
                            case 'dispBlanksAs':
                                $dispBlanksAs = self::getAttribute($chartDetails, 'val', 'string');
=======
                                $plotVisOnly = (bool) self::getAttributeString($chartDetails, 'val');

                                break;
                            case 'dispBlanksAs':
                                $dispBlanksAs = self::getAttributeString($chartDetails, 'val');
>>>>>>> match

                                break;
                            case 'title':
                                $title = $this->chartTitle($chartDetails);

                                break;
                            case 'legend':
                                $legendPos = 'r';
                                $legendLayout = null;
                                $legendOverlay = false;
                                $legendBorderLines = null;
                                $legendFillColor = null;
                                $legendText = null;
                                $addLegendText = false;
                                foreach ($chartDetails as $chartDetailKey => $chartDetail) {
                                    $chartDetail = Xlsx::testSimpleXml($chartDetail);
                                    switch ($chartDetailKey) {
                                        case 'legendPos':
<<<<<<< HEAD
                                            $legendPos = self::getAttribute($chartDetail, 'val', 'string');

                                            break;
                                        case 'overlay':
                                            $legendOverlay = self::getAttribute($chartDetail, 'val', 'boolean');
=======
                                            $legendPos = self::getAttributeString($chartDetail, 'val');

                                            break;
                                        case 'overlay':
                                            $legendOverlay = self::getAttributeBoolean($chartDetail, 'val');
>>>>>>> match

                                            break;
                                        case 'layout':
                                            $legendLayout = $this->chartLayoutDetails($chartDetail);

                                            break;
                                        case 'spPr':
                                            $children = $chartDetails->spPr->children($this->aNamespace);
                                            if (isset($children->solidFill)) {
                                                $legendFillColor = $this->readColor($children->solidFill);
                                            }
                                            if (isset($children->ln)) {
                                                $legendBorderLines = new GridLines();
                                                $this->readLineStyle($chartDetails, $legendBorderLines);
                                            }

                                            break;
                                        case 'txPr':
                                            $children = $chartDetails->txPr->children($this->aNamespace);
                                            $addLegendText = false;
                                            $legendText = new AxisText();
                                            if (isset($children->p->pPr->defRPr->solidFill)) {
                                                $colorArray = $this->readColor($children->p->pPr->defRPr->solidFill);
                                                $legendText->getFillColorObject()->setColorPropertiesArray($colorArray);
                                                $addLegendText = true;
                                            }
                                            if (isset($children->p->pPr->defRPr->effectLst)) {
                                                $this->readEffects($children->p->pPr->defRPr, $legendText, false);
                                                $addLegendText = true;
                                            }

                                            break;
                                    }
                                }
                                $legend = new Legend("$legendPos", $legendLayout, (bool) $legendOverlay);
                                if ($legendFillColor !== null) {
                                    $legend->getFillColor()->setColorPropertiesArray($legendFillColor);
                                }
                                if ($legendBorderLines !== null) {
                                    $legend->setBorderLines($legendBorderLines);
                                }
                                if ($addLegendText) {
                                    $legend->setLegendText($legendText);
                                }

                                break;
                        }
                    }
            }
        }
        $chart = new \PhpOffice\PhpSpreadsheet\Chart\Chart($chartName, $title, $legend, $plotArea, $plotVisOnly, (string) $dispBlanksAs, $XaxisLabel, $YaxisLabel, $xAxis, $yAxis);
        if ($chartNoFill) {
            $chart->setNoFill(true);
        }
        if ($chartFillColor !== null) {
            $chart->getFillColor()->setColorPropertiesArray($chartFillColor);
        }
        if ($chartBorderLines !== null) {
            $chart->setBorderLines($chartBorderLines);
        }
<<<<<<< HEAD
=======
        $chart->setNoBorder($noBorder);
>>>>>>> match
        $chart->setRoundedCorners($roundedCorners);
        if (is_bool($autoTitleDeleted)) {
            $chart->setAutoTitleDeleted($autoTitleDeleted);
        }
        if (is_int($rotX)) {
            $chart->setRotX($rotX);
        }
        if (is_int($rotY)) {
            $chart->setRotY($rotY);
        }
        if (is_int($rAngAx)) {
            $chart->setRAngAx($rAngAx);
        }
        if (is_int($perspective)) {
            $chart->setPerspective($perspective);
        }

        return $chart;
    }

    private function chartTitle(SimpleXMLElement $titleDetails): Title
    {
<<<<<<< HEAD
        $caption = [];
        $titleLayout = null;
        $titleOverlay = false;
=======
        $caption = '';
        $titleLayout = null;
        $titleOverlay = false;
        $titleFormula = null;
        $titleFont = null;
>>>>>>> match
        foreach ($titleDetails as $titleDetailKey => $chartDetail) {
            $chartDetail = Xlsx::testSimpleXml($chartDetail);
            switch ($titleDetailKey) {
                case 'tx':
<<<<<<< HEAD
=======
                    $caption = [];
>>>>>>> match
                    if (isset($chartDetail->rich)) {
                        $titleDetails = $chartDetail->rich->children($this->aNamespace);
                        foreach ($titleDetails as $titleKey => $titleDetail) {
                            $titleDetail = Xlsx::testSimpleXml($titleDetail);
                            switch ($titleKey) {
                                case 'p':
                                    $titleDetailPart = $titleDetail->children($this->aNamespace);
                                    $caption[] = $this->parseRichText($titleDetailPart);
                            }
                        }
                    } elseif (isset($chartDetail->strRef->strCache)) {
                        foreach ($chartDetail->strRef->strCache->pt as $pt) {
                            if (isset($pt->v)) {
                                $caption[] = (string) $pt->v;
                            }
                        }
<<<<<<< HEAD
=======
                        if (isset($chartDetail->strRef->f)) {
                            $titleFormula = (string) $chartDetail->strRef->f;
                        }
>>>>>>> match
                    }

                    break;
                case 'overlay':
<<<<<<< HEAD
                    $titleOverlay = self::getAttribute($chartDetail, 'val', 'boolean');
=======
                    $titleOverlay = self::getAttributeBoolean($chartDetail, 'val');
>>>>>>> match

                    break;
                case 'layout':
                    $titleLayout = $this->chartLayoutDetails($chartDetail);

                    break;
<<<<<<< HEAD
            }
        }

        return new Title($caption, $titleLayout, (bool) $titleOverlay);
=======
                case 'txPr':
                    if (isset($chartDetail->children($this->aNamespace)->p)) {
                        $titleFont = $this->parseFont($chartDetail->children($this->aNamespace)->p);
                    }

                    break;
            }
        }
        $title = new Title($caption, $titleLayout, (bool) $titleOverlay);
        if (!empty($titleFormula)) {
            $title->setCellReference($titleFormula);
        }
        if ($titleFont !== null) {
            $title->setFont($titleFont);
        }

        return $title;
>>>>>>> match
    }

    private function chartLayoutDetails(SimpleXMLElement $chartDetail): ?Layout
    {
        if (!isset($chartDetail->manualLayout)) {
            return null;
        }
        $details = $chartDetail->manualLayout->children($this->cNamespace);
        if ($details === null) {
            return null;
        }
        $layout = [];
        foreach ($details as $detailKey => $detail) {
            $detail = Xlsx::testSimpleXml($detail);
<<<<<<< HEAD
            $layout[$detailKey] = self::getAttribute($detail, 'val', 'string');
=======
            $layout[$detailKey] = self::getAttributeString($detail, 'val');
>>>>>>> match
        }

        return new Layout($layout);
    }

    private function chartDataSeries(SimpleXMLElement $chartDetail, string $plotType): DataSeries
    {
        $multiSeriesType = null;
        $smoothLine = false;
        $seriesLabel = $seriesCategory = $seriesValues = $plotOrder = $seriesBubbles = [];
<<<<<<< HEAD
=======
        $plotDirection = null;
>>>>>>> match

        $seriesDetailSet = $chartDetail->children($this->cNamespace);
        foreach ($seriesDetailSet as $seriesDetailKey => $seriesDetails) {
            switch ($seriesDetailKey) {
                case 'grouping':
<<<<<<< HEAD
                    $multiSeriesType = self::getAttribute($chartDetail->grouping, 'val', 'string');
=======
                    $multiSeriesType = self::getAttributeString($chartDetail->grouping, 'val');
>>>>>>> match

                    break;
                case 'ser':
                    $marker = null;
                    $seriesIndex = '';
                    $fillColor = null;
                    $pointSize = null;
                    $noFill = false;
                    $bubble3D = false;
                    $dptColors = [];
                    $markerFillColor = null;
                    $markerBorderColor = null;
                    $lineStyle = null;
                    $labelLayout = null;
                    $trendLines = [];
                    foreach ($seriesDetails as $seriesKey => $seriesDetail) {
                        $seriesDetail = Xlsx::testSimpleXml($seriesDetail);
                        switch ($seriesKey) {
                            case 'idx':
<<<<<<< HEAD
                                $seriesIndex = self::getAttribute($seriesDetail, 'val', 'integer');

                                break;
                            case 'order':
                                $seriesOrder = self::getAttribute($seriesDetail, 'val', 'integer');
                                $plotOrder[$seriesIndex] = $seriesOrder;

                                break;
                            case 'tx':
                                $seriesLabel[$seriesIndex] = $this->chartDataSeriesValueSet($seriesDetail);
=======
                                $seriesIndex = self::getAttributeInteger($seriesDetail, 'val');

                                break;
                            case 'order':
                                $seriesOrder = self::getAttributeInteger($seriesDetail, 'val');
                                if ($seriesOrder !== null) {
                                    $plotOrder[$seriesIndex] = $seriesOrder;
                                }

                                break;
                            case 'tx':
                                $temp = $this->chartDataSeriesValueSet($seriesDetail);
                                if ($temp !== null) {
                                    $seriesLabel[$seriesIndex] = $temp;
                                }
>>>>>>> match

                                break;
                            case 'spPr':
                                $children = $seriesDetail->children($this->aNamespace);
                                if (isset($children->ln)) {
                                    $ln = $children->ln;
                                    if (is_countable($ln->noFill) && count($ln->noFill) === 1) {
                                        $noFill = true;
                                    }
                                    $lineStyle = new GridLines();
                                    $this->readLineStyle($seriesDetails, $lineStyle);
                                }
                                if (isset($children->effectLst)) {
                                    if ($lineStyle === null) {
                                        $lineStyle = new GridLines();
                                    }
                                    $this->readEffects($seriesDetails, $lineStyle);
                                }
                                if (isset($children->solidFill)) {
                                    $fillColor = new ChartColor($this->readColor($children->solidFill));
                                }

                                break;
                            case 'dPt':
<<<<<<< HEAD
                                $dptIdx = (int) self::getAttribute($seriesDetail->idx, 'val', 'string');
=======
                                $dptIdx = (int) self::getAttributeString($seriesDetail->idx, 'val');
>>>>>>> match
                                if (isset($seriesDetail->spPr)) {
                                    $children = $seriesDetail->spPr->children($this->aNamespace);
                                    if (isset($children->solidFill)) {
                                        $arrayColors = $this->readColor($children->solidFill);
                                        $dptColors[$dptIdx] = new ChartColor($arrayColors);
                                    }
                                }

                                break;
                            case 'trendline':
                                $trendLine = new TrendLine();
                                $this->readLineStyle($seriesDetail, $trendLine);
<<<<<<< HEAD
                                /** @var ?string */
                                $trendLineType = self::getAttribute($seriesDetail->trendlineType, 'val', 'string');
                                /** @var ?bool */
                                $dispRSqr = self::getAttribute($seriesDetail->dispRSqr, 'val', 'boolean');
                                /** @var ?bool */
                                $dispEq = self::getAttribute($seriesDetail->dispEq, 'val', 'boolean');
                                /** @var ?int */
                                $order = self::getAttribute($seriesDetail->order, 'val', 'integer');
                                /** @var ?int */
                                $period = self::getAttribute($seriesDetail->period, 'val', 'integer');
                                /** @var ?float */
                                $forward = self::getAttribute($seriesDetail->forward, 'val', 'float');
                                /** @var ?float */
                                $backward = self::getAttribute($seriesDetail->backward, 'val', 'float');
                                /** @var ?float */
                                $intercept = self::getAttribute($seriesDetail->intercept, 'val', 'float');
                                /** @var ?string */
=======
                                $trendLineType = self::getAttributeString($seriesDetail->trendlineType, 'val');
                                $dispRSqr = self::getAttributeBoolean($seriesDetail->dispRSqr, 'val');
                                $dispEq = self::getAttributeBoolean($seriesDetail->dispEq, 'val');
                                $order = self::getAttributeInteger($seriesDetail->order, 'val');
                                $period = self::getAttributeInteger($seriesDetail->period, 'val');
                                $forward = self::getAttributeFloat($seriesDetail->forward, 'val');
                                $backward = self::getAttributeFloat($seriesDetail->backward, 'val');
                                $intercept = self::getAttributeFloat($seriesDetail->intercept, 'val');
>>>>>>> match
                                $name = (string) $seriesDetail->name;
                                $trendLine->setTrendLineProperties(
                                    $trendLineType,
                                    $order,
                                    $period,
                                    $dispRSqr,
                                    $dispEq,
                                    $backward,
                                    $forward,
                                    $intercept,
                                    $name
                                );
                                $trendLines[] = $trendLine;

                                break;
                            case 'marker':
<<<<<<< HEAD
                                $marker = self::getAttribute($seriesDetail->symbol, 'val', 'string');
                                $pointSize = self::getAttribute($seriesDetail->size, 'val', 'string');
=======
                                $marker = self::getAttributeString($seriesDetail->symbol, 'val');
                                $pointSize = self::getAttributeString($seriesDetail->size, 'val');
>>>>>>> match
                                $pointSize = is_numeric($pointSize) ? ((int) $pointSize) : null;
                                if (isset($seriesDetail->spPr)) {
                                    $children = $seriesDetail->spPr->children($this->aNamespace);
                                    if (isset($children->solidFill)) {
                                        $markerFillColor = $this->readColor($children->solidFill);
                                    }
                                    if (isset($children->ln->solidFill)) {
                                        $markerBorderColor = $this->readColor($children->ln->solidFill);
                                    }
                                }

                                break;
                            case 'smooth':
<<<<<<< HEAD
                                $smoothLine = self::getAttribute($seriesDetail, 'val', 'boolean');

                                break;
                            case 'cat':
                                $seriesCategory[$seriesIndex] = $this->chartDataSeriesValueSet($seriesDetail);

                                break;
                            case 'val':
                                $seriesValues[$seriesIndex] = $this->chartDataSeriesValueSet($seriesDetail, "$marker", $fillColor, "$pointSize");

                                break;
                            case 'xVal':
                                $seriesCategory[$seriesIndex] = $this->chartDataSeriesValueSet($seriesDetail, "$marker", $fillColor, "$pointSize");

                                break;
                            case 'yVal':
                                $seriesValues[$seriesIndex] = $this->chartDataSeriesValueSet($seriesDetail, "$marker", $fillColor, "$pointSize");

                                break;
                            case 'bubbleSize':
                                $seriesBubbles[$seriesIndex] = $this->chartDataSeriesValueSet($seriesDetail, "$marker", $fillColor, "$pointSize");

                                break;
                            case 'bubble3D':
                                $bubble3D = self::getAttribute($seriesDetail, 'val', 'boolean');
=======
                                $smoothLine = self::getAttributeBoolean($seriesDetail, 'val') ?? false;

                                break;
                            case 'cat':
                                $temp = $this->chartDataSeriesValueSet($seriesDetail);
                                if ($temp !== null) {
                                    $seriesCategory[$seriesIndex] = $temp;
                                }

                                break;
                            case 'val':
                                $temp = $this->chartDataSeriesValueSet($seriesDetail, "$marker", $fillColor, "$pointSize");
                                if ($temp !== null) {
                                    $seriesValues[$seriesIndex] = $temp;
                                }

                                break;
                            case 'xVal':
                                $temp = $this->chartDataSeriesValueSet($seriesDetail, "$marker", $fillColor, "$pointSize");
                                if ($temp !== null) {
                                    $seriesCategory[$seriesIndex] = $temp;
                                }

                                break;
                            case 'yVal':
                                $temp = $this->chartDataSeriesValueSet($seriesDetail, "$marker", $fillColor, "$pointSize");
                                if ($temp !== null) {
                                    $seriesValues[$seriesIndex] = $temp;
                                }

                                break;
                            case 'bubbleSize':
                                $seriesBubble = $this->chartDataSeriesValueSet($seriesDetail, "$marker", $fillColor, "$pointSize");
                                if ($seriesBubble !== null) {
                                    $seriesBubbles[$seriesIndex] = $seriesBubble;
                                }

                                break;
                            case 'bubble3D':
                                $bubble3D = self::getAttributeBoolean($seriesDetail, 'val');
>>>>>>> match

                                break;
                            case 'dLbls':
                                $labelLayout = new Layout($this->readChartAttributes($seriesDetails));

                                break;
                        }
                    }
                    if ($labelLayout) {
                        if (isset($seriesLabel[$seriesIndex])) {
                            $seriesLabel[$seriesIndex]->setLabelLayout($labelLayout);
                        }
                        if (isset($seriesCategory[$seriesIndex])) {
                            $seriesCategory[$seriesIndex]->setLabelLayout($labelLayout);
                        }
                        if (isset($seriesValues[$seriesIndex])) {
                            $seriesValues[$seriesIndex]->setLabelLayout($labelLayout);
                        }
                    }
                    if ($noFill) {
                        if (isset($seriesLabel[$seriesIndex])) {
                            $seriesLabel[$seriesIndex]->setScatterLines(false);
                        }
                        if (isset($seriesCategory[$seriesIndex])) {
                            $seriesCategory[$seriesIndex]->setScatterLines(false);
                        }
                        if (isset($seriesValues[$seriesIndex])) {
                            $seriesValues[$seriesIndex]->setScatterLines(false);
                        }
                    }
                    if ($lineStyle !== null) {
                        if (isset($seriesLabel[$seriesIndex])) {
                            $seriesLabel[$seriesIndex]->copyLineStyles($lineStyle);
                        }
                        if (isset($seriesCategory[$seriesIndex])) {
                            $seriesCategory[$seriesIndex]->copyLineStyles($lineStyle);
                        }
                        if (isset($seriesValues[$seriesIndex])) {
                            $seriesValues[$seriesIndex]->copyLineStyles($lineStyle);
                        }
                    }
                    if ($bubble3D) {
                        if (isset($seriesLabel[$seriesIndex])) {
                            $seriesLabel[$seriesIndex]->setBubble3D($bubble3D);
                        }
                        if (isset($seriesCategory[$seriesIndex])) {
                            $seriesCategory[$seriesIndex]->setBubble3D($bubble3D);
                        }
                        if (isset($seriesValues[$seriesIndex])) {
                            $seriesValues[$seriesIndex]->setBubble3D($bubble3D);
                        }
                    }
                    if (!empty($dptColors)) {
                        if (isset($seriesLabel[$seriesIndex])) {
                            $seriesLabel[$seriesIndex]->setFillColor($dptColors);
                        }
                        if (isset($seriesCategory[$seriesIndex])) {
                            $seriesCategory[$seriesIndex]->setFillColor($dptColors);
                        }
                        if (isset($seriesValues[$seriesIndex])) {
                            $seriesValues[$seriesIndex]->setFillColor($dptColors);
                        }
                    }
                    if ($markerFillColor !== null) {
                        if (isset($seriesLabel[$seriesIndex])) {
                            $seriesLabel[$seriesIndex]->getMarkerFillColor()->setColorPropertiesArray($markerFillColor);
                        }
                        if (isset($seriesCategory[$seriesIndex])) {
                            $seriesCategory[$seriesIndex]->getMarkerFillColor()->setColorPropertiesArray($markerFillColor);
                        }
                        if (isset($seriesValues[$seriesIndex])) {
                            $seriesValues[$seriesIndex]->getMarkerFillColor()->setColorPropertiesArray($markerFillColor);
                        }
                    }
                    if ($markerBorderColor !== null) {
                        if (isset($seriesLabel[$seriesIndex])) {
                            $seriesLabel[$seriesIndex]->getMarkerBorderColor()->setColorPropertiesArray($markerBorderColor);
                        }
                        if (isset($seriesCategory[$seriesIndex])) {
                            $seriesCategory[$seriesIndex]->getMarkerBorderColor()->setColorPropertiesArray($markerBorderColor);
                        }
                        if (isset($seriesValues[$seriesIndex])) {
                            $seriesValues[$seriesIndex]->getMarkerBorderColor()->setColorPropertiesArray($markerBorderColor);
                        }
                    }
                    if ($smoothLine) {
                        if (isset($seriesLabel[$seriesIndex])) {
                            $seriesLabel[$seriesIndex]->setSmoothLine(true);
                        }
                        if (isset($seriesCategory[$seriesIndex])) {
                            $seriesCategory[$seriesIndex]->setSmoothLine(true);
                        }
                        if (isset($seriesValues[$seriesIndex])) {
                            $seriesValues[$seriesIndex]->setSmoothLine(true);
                        }
                    }
                    if (!empty($trendLines)) {
                        if (isset($seriesLabel[$seriesIndex])) {
                            $seriesLabel[$seriesIndex]->setTrendLines($trendLines);
                        }
                        if (isset($seriesCategory[$seriesIndex])) {
                            $seriesCategory[$seriesIndex]->setTrendLines($trendLines);
                        }
                        if (isset($seriesValues[$seriesIndex])) {
                            $seriesValues[$seriesIndex]->setTrendLines($trendLines);
                        }
                    }
            }
        }
<<<<<<< HEAD
        /** @phpstan-ignore-next-line */
        $series = new DataSeries($plotType, $multiSeriesType, $plotOrder, $seriesLabel, $seriesCategory, $seriesValues, $smoothLine);
=======
        $series = new DataSeries($plotType, $multiSeriesType, $plotOrder, $seriesLabel, $seriesCategory, $seriesValues, $plotDirection, $smoothLine);
>>>>>>> match
        $series->setPlotBubbleSizes($seriesBubbles);

        return $series;
    }

<<<<<<< HEAD
    /**
     * @return mixed
     */
    private function chartDataSeriesValueSet(SimpleXMLElement $seriesDetail, ?string $marker = null, ?ChartColor $fillColor = null, ?string $pointSize = null)
=======
    private function chartDataSeriesValueSet(SimpleXMLElement $seriesDetail, ?string $marker = null, ?ChartColor $fillColor = null, ?string $pointSize = null): ?DataSeriesValues
>>>>>>> match
    {
        if (isset($seriesDetail->strRef)) {
            $seriesSource = (string) $seriesDetail->strRef->f;
            $seriesValues = new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_STRING, $seriesSource, null, 0, null, $marker, $fillColor, "$pointSize");

            if (isset($seriesDetail->strRef->strCache)) {
                $seriesData = $this->chartDataSeriesValues($seriesDetail->strRef->strCache->children($this->cNamespace), 's');
                $seriesValues
                    ->setFormatCode($seriesData['formatCode'])
                    ->setDataValues($seriesData['dataValues']);
            }

            return $seriesValues;
        } elseif (isset($seriesDetail->numRef)) {
            $seriesSource = (string) $seriesDetail->numRef->f;
            $seriesValues = new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_NUMBER, $seriesSource, null, 0, null, $marker, $fillColor, "$pointSize");
            if (isset($seriesDetail->numRef->numCache)) {
                $seriesData = $this->chartDataSeriesValues($seriesDetail->numRef->numCache->children($this->cNamespace));
                $seriesValues
                    ->setFormatCode($seriesData['formatCode'])
                    ->setDataValues($seriesData['dataValues']);
            }

            return $seriesValues;
        } elseif (isset($seriesDetail->multiLvlStrRef)) {
            $seriesSource = (string) $seriesDetail->multiLvlStrRef->f;
            $seriesValues = new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_STRING, $seriesSource, null, 0, null, $marker, $fillColor, "$pointSize");

            if (isset($seriesDetail->multiLvlStrRef->multiLvlStrCache)) {
                $seriesData = $this->chartDataSeriesValuesMultiLevel($seriesDetail->multiLvlStrRef->multiLvlStrCache->children($this->cNamespace), 's');
                $seriesValues
                    ->setFormatCode($seriesData['formatCode'])
                    ->setDataValues($seriesData['dataValues']);
            }

            return $seriesValues;
        } elseif (isset($seriesDetail->multiLvlNumRef)) {
            $seriesSource = (string) $seriesDetail->multiLvlNumRef->f;
            $seriesValues = new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_STRING, $seriesSource, null, 0, null, $marker, $fillColor, "$pointSize");

            if (isset($seriesDetail->multiLvlNumRef->multiLvlNumCache)) {
                $seriesData = $this->chartDataSeriesValuesMultiLevel($seriesDetail->multiLvlNumRef->multiLvlNumCache->children($this->cNamespace), 's');
                $seriesValues
                    ->setFormatCode($seriesData['formatCode'])
                    ->setDataValues($seriesData['dataValues']);
            }

            return $seriesValues;
        }

        if (isset($seriesDetail->v)) {
            return new DataSeriesValues(
                DataSeriesValues::DATASERIES_TYPE_STRING,
                null,
                null,
                1,
                [(string) $seriesDetail->v]
            );
        }

        return null;
    }

    private function chartDataSeriesValues(SimpleXMLElement $seriesValueSet, string $dataType = 'n'): array
    {
        $seriesVal = [];
        $formatCode = '';
        $pointCount = 0;

        foreach ($seriesValueSet as $seriesValueIdx => $seriesValue) {
            $seriesValue = Xlsx::testSimpleXml($seriesValue);
            switch ($seriesValueIdx) {
                case 'ptCount':
<<<<<<< HEAD
                    $pointCount = self::getAttribute($seriesValue, 'val', 'integer');
=======
                    $pointCount = self::getAttributeInteger($seriesValue, 'val');
>>>>>>> match

                    break;
                case 'formatCode':
                    $formatCode = (string) $seriesValue;

                    break;
                case 'pt':
<<<<<<< HEAD
                    $pointVal = self::getAttribute($seriesValue, 'idx', 'integer');
=======
                    $pointVal = self::getAttributeInteger($seriesValue, 'idx');
>>>>>>> match
                    if ($dataType == 's') {
                        $seriesVal[$pointVal] = (string) $seriesValue->v;
                    } elseif ((string) $seriesValue->v === ExcelError::NA()) {
                        $seriesVal[$pointVal] = null;
                    } else {
                        $seriesVal[$pointVal] = (float) $seriesValue->v;
                    }

                    break;
            }
        }

        return [
            'formatCode' => $formatCode,
            'pointCount' => $pointCount,
            'dataValues' => $seriesVal,
        ];
    }

    private function chartDataSeriesValuesMultiLevel(SimpleXMLElement $seriesValueSet, string $dataType = 'n'): array
    {
        $seriesVal = [];
        $formatCode = '';
        $pointCount = 0;

        foreach ($seriesValueSet->lvl as $seriesLevelIdx => $seriesLevel) {
            foreach ($seriesLevel as $seriesValueIdx => $seriesValue) {
                $seriesValue = Xlsx::testSimpleXml($seriesValue);
                switch ($seriesValueIdx) {
                    case 'ptCount':
<<<<<<< HEAD
                        $pointCount = self::getAttribute($seriesValue, 'val', 'integer');
=======
                        $pointCount = self::getAttributeInteger($seriesValue, 'val');
>>>>>>> match

                        break;
                    case 'formatCode':
                        $formatCode = (string) $seriesValue;

                        break;
                    case 'pt':
<<<<<<< HEAD
                        $pointVal = self::getAttribute($seriesValue, 'idx', 'integer');
=======
                        $pointVal = self::getAttributeInteger($seriesValue, 'idx');
>>>>>>> match
                        if ($dataType == 's') {
                            $seriesVal[$pointVal][] = (string) $seriesValue->v;
                        } elseif ((string) $seriesValue->v === ExcelError::NA()) {
                            $seriesVal[$pointVal] = null;
                        } else {
                            $seriesVal[$pointVal][] = (float) $seriesValue->v;
                        }

                        break;
                }
            }
        }

        return [
            'formatCode' => $formatCode,
            'pointCount' => $pointCount,
            'dataValues' => $seriesVal,
        ];
    }

    private function parseRichText(SimpleXMLElement $titleDetailPart): RichText
    {
        $value = new RichText();
        $defaultFontSize = null;
        $defaultBold = null;
        $defaultItalic = null;
        $defaultUnderscore = null;
        $defaultStrikethrough = null;
        $defaultBaseline = null;
        $defaultFontName = null;
        $defaultLatin = null;
        $defaultEastAsian = null;
        $defaultComplexScript = null;
        $defaultFontColor = null;
        if (isset($titleDetailPart->pPr->defRPr)) {
<<<<<<< HEAD
            /** @var ?int */
            $defaultFontSize = self::getAttribute($titleDetailPart->pPr->defRPr, 'sz', 'integer');
            /** @var ?bool */
            $defaultBold = self::getAttribute($titleDetailPart->pPr->defRPr, 'b', 'boolean');
            /** @var ?bool */
            $defaultItalic = self::getAttribute($titleDetailPart->pPr->defRPr, 'i', 'boolean');
            /** @var ?string */
            $defaultUnderscore = self::getAttribute($titleDetailPart->pPr->defRPr, 'u', 'string');
            /** @var ?string */
            $defaultStrikethrough = self::getAttribute($titleDetailPart->pPr->defRPr, 'strike', 'string');
            /** @var ?int */
            $defaultBaseline = self::getAttribute($titleDetailPart->pPr->defRPr, 'baseline', 'integer');
=======
            $defaultFontSize = self::getAttributeInteger($titleDetailPart->pPr->defRPr, 'sz');
            $defaultBold = self::getAttributeBoolean($titleDetailPart->pPr->defRPr, 'b');
            $defaultItalic = self::getAttributeBoolean($titleDetailPart->pPr->defRPr, 'i');
            $defaultUnderscore = self::getAttributeString($titleDetailPart->pPr->defRPr, 'u');
            $defaultStrikethrough = self::getAttributeString($titleDetailPart->pPr->defRPr, 'strike');
            $defaultBaseline = self::getAttributeInteger($titleDetailPart->pPr->defRPr, 'baseline');
>>>>>>> match
            if (isset($titleDetailPart->defRPr->rFont['val'])) {
                $defaultFontName = (string) $titleDetailPart->defRPr->rFont['val'];
            }
            if (isset($titleDetailPart->pPr->defRPr->latin)) {
<<<<<<< HEAD
                /** @var ?string */
                $defaultLatin = self::getAttribute($titleDetailPart->pPr->defRPr->latin, 'typeface', 'string');
            }
            if (isset($titleDetailPart->pPr->defRPr->ea)) {
                /** @var ?string */
                $defaultEastAsian = self::getAttribute($titleDetailPart->pPr->defRPr->ea, 'typeface', 'string');
            }
            if (isset($titleDetailPart->pPr->defRPr->cs)) {
                /** @var ?string */
                $defaultComplexScript = self::getAttribute($titleDetailPart->pPr->defRPr->cs, 'typeface', 'string');
=======
                $defaultLatin = self::getAttributeString($titleDetailPart->pPr->defRPr->latin, 'typeface');
            }
            if (isset($titleDetailPart->pPr->defRPr->ea)) {
                $defaultEastAsian = self::getAttributeString($titleDetailPart->pPr->defRPr->ea, 'typeface');
            }
            if (isset($titleDetailPart->pPr->defRPr->cs)) {
                $defaultComplexScript = self::getAttributeString($titleDetailPart->pPr->defRPr->cs, 'typeface');
>>>>>>> match
            }
            if (isset($titleDetailPart->pPr->defRPr->solidFill)) {
                $defaultFontColor = $this->readColor($titleDetailPart->pPr->defRPr->solidFill);
            }
        }
        foreach ($titleDetailPart as $titleDetailElementKey => $titleDetailElement) {
            if (
                (string) $titleDetailElementKey !== 'r'
                || !isset($titleDetailElement->t)
            ) {
                continue;
            }
            $objText = $value->createTextRun((string) $titleDetailElement->t);
            if ($objText->getFont() === null) {
                // @codeCoverageIgnoreStart
                continue;
                // @codeCoverageIgnoreEnd
            }
            $fontSize = null;
            $bold = null;
            $italic = null;
            $underscore = null;
            $strikethrough = null;
            $baseline = null;
            $fontName = null;
            $latinName = null;
            $eastAsian = null;
            $complexScript = null;
            $fontColor = null;
            $underlineColor = null;
            if (isset($titleDetailElement->rPr)) {
                // not used now, not sure it ever was, grandfathering
                if (isset($titleDetailElement->rPr->rFont['val'])) {
                    // @codeCoverageIgnoreStart
                    $fontName = (string) $titleDetailElement->rPr->rFont['val'];
                    // @codeCoverageIgnoreEnd
                }
                if (isset($titleDetailElement->rPr->latin)) {
<<<<<<< HEAD
                    /** @var ?string */
                    $latinName = self::getAttribute($titleDetailElement->rPr->latin, 'typeface', 'string');
                }
                if (isset($titleDetailElement->rPr->ea)) {
                    /** @var ?string */
                    $eastAsian = self::getAttribute($titleDetailElement->rPr->ea, 'typeface', 'string');
                }
                if (isset($titleDetailElement->rPr->cs)) {
                    /** @var ?string */
                    $complexScript = self::getAttribute($titleDetailElement->rPr->cs, 'typeface', 'string');
                }
                /** @var ?int */
                $fontSize = self::getAttribute($titleDetailElement->rPr, 'sz', 'integer');
=======
                    $latinName = self::getAttributeString($titleDetailElement->rPr->latin, 'typeface');
                }
                if (isset($titleDetailElement->rPr->ea)) {
                    $eastAsian = self::getAttributeString($titleDetailElement->rPr->ea, 'typeface');
                }
                if (isset($titleDetailElement->rPr->cs)) {
                    $complexScript = self::getAttributeString($titleDetailElement->rPr->cs, 'typeface');
                }
                $fontSize = self::getAttributeInteger($titleDetailElement->rPr, 'sz');
>>>>>>> match

                // not used now, not sure it ever was, grandfathering
                if (isset($titleDetailElement->rPr->solidFill)) {
                    $fontColor = $this->readColor($titleDetailElement->rPr->solidFill);
                }

<<<<<<< HEAD
                /** @var ?bool */
                $bold = self::getAttribute($titleDetailElement->rPr, 'b', 'boolean');

                /** @var ?bool */
                $italic = self::getAttribute($titleDetailElement->rPr, 'i', 'boolean');

                /** @var ?int */
                $baseline = self::getAttribute($titleDetailElement->rPr, 'baseline', 'integer');

                /** @var ?string */
                $underscore = self::getAttribute($titleDetailElement->rPr, 'u', 'string');
=======
                $bold = self::getAttributeBoolean($titleDetailElement->rPr, 'b');
                $italic = self::getAttributeBoolean($titleDetailElement->rPr, 'i');
                $baseline = self::getAttributeInteger($titleDetailElement->rPr, 'baseline');
                $underscore = self::getAttributeString($titleDetailElement->rPr, 'u');
>>>>>>> match
                if (isset($titleDetailElement->rPr->uFill->solidFill)) {
                    $underlineColor = $this->readColor($titleDetailElement->rPr->uFill->solidFill);
                }

<<<<<<< HEAD
                /** @var ?string */
                $strikethrough = self::getAttribute($titleDetailElement->rPr, 'strike', 'string');
=======
                $strikethrough = self::getAttributeString($titleDetailElement->rPr, 'strike');
>>>>>>> match
            }

            $fontFound = false;
            $latinName = $latinName ?? $defaultLatin;
            if ($latinName !== null) {
                $objText->getFont()->setLatin($latinName);
                $fontFound = true;
            }
            $eastAsian = $eastAsian ?? $defaultEastAsian;
            if ($eastAsian !== null) {
                $objText->getFont()->setEastAsian($eastAsian);
                $fontFound = true;
            }
            $complexScript = $complexScript ?? $defaultComplexScript;
            if ($complexScript !== null) {
                $objText->getFont()->setComplexScript($complexScript);
                $fontFound = true;
            }
            $fontName = $fontName ?? $defaultFontName;
            if ($fontName !== null) {
                // @codeCoverageIgnoreStart
                $objText->getFont()->setName($fontName);
                $fontFound = true;
                // @codeCoverageIgnoreEnd
            }

            $fontSize = $fontSize ?? $defaultFontSize;
            if (is_int($fontSize)) {
                $objText->getFont()->setSize(floor($fontSize / 100));
                $fontFound = true;
            } else {
                $objText->getFont()->setSize(null, true);
            }

            $fontColor = $fontColor ?? $defaultFontColor;
            if (!empty($fontColor)) {
                $objText->getFont()->setChartColor($fontColor);
                $fontFound = true;
            }

            $bold = $bold ?? $defaultBold;
            if ($bold !== null) {
                $objText->getFont()->setBold($bold);
                $fontFound = true;
            }

            $italic = $italic ?? $defaultItalic;
            if ($italic !== null) {
                $objText->getFont()->setItalic($italic);
                $fontFound = true;
            }

            $baseline = $baseline ?? $defaultBaseline;
            if ($baseline !== null) {
                $objText->getFont()->setBaseLine($baseline);
                if ($baseline > 0) {
                    $objText->getFont()->setSuperscript(true);
                } elseif ($baseline < 0) {
                    $objText->getFont()->setSubscript(true);
                }
                $fontFound = true;
            }

            $underscore = $underscore ?? $defaultUnderscore;
            if ($underscore !== null) {
                if ($underscore == 'sng') {
                    $objText->getFont()->setUnderline(Font::UNDERLINE_SINGLE);
                } elseif ($underscore == 'dbl') {
                    $objText->getFont()->setUnderline(Font::UNDERLINE_DOUBLE);
                } elseif ($underscore !== '') {
                    $objText->getFont()->setUnderline($underscore);
                } else {
                    $objText->getFont()->setUnderline(Font::UNDERLINE_NONE);
                }
                $fontFound = true;
                if ($underlineColor) {
                    $objText->getFont()->setUnderlineColor($underlineColor);
                }
            }

            $strikethrough = $strikethrough ?? $defaultStrikethrough;
            if ($strikethrough !== null) {
                $objText->getFont()->setStrikeType($strikethrough);
                if ($strikethrough == 'noStrike') {
                    $objText->getFont()->setStrikethrough(false);
                } else {
                    $objText->getFont()->setStrikethrough(true);
                }
                $fontFound = true;
            }
            if ($fontFound === false) {
                $objText->setFont(null);
            }
        }

        return $value;
    }

    private function parseFont(SimpleXMLElement $titleDetailPart): ?Font
    {
        if (!isset($titleDetailPart->pPr->defRPr)) {
            return null;
        }
        $fontArray = [];
<<<<<<< HEAD
        $fontArray['size'] = self::getAttribute($titleDetailPart->pPr->defRPr, 'sz', 'integer');
        $fontArray['bold'] = self::getAttribute($titleDetailPart->pPr->defRPr, 'b', 'boolean');
        $fontArray['italic'] = self::getAttribute($titleDetailPart->pPr->defRPr, 'i', 'boolean');
        $fontArray['underscore'] = self::getAttribute($titleDetailPart->pPr->defRPr, 'u', 'string');
        $fontArray['strikethrough'] = self::getAttribute($titleDetailPart->pPr->defRPr, 'strike', 'string');

        if (isset($titleDetailPart->pPr->defRPr->latin)) {
            $fontArray['latin'] = self::getAttribute($titleDetailPart->pPr->defRPr->latin, 'typeface', 'string');
        }
        if (isset($titleDetailPart->pPr->defRPr->ea)) {
            $fontArray['eastAsian'] = self::getAttribute($titleDetailPart->pPr->defRPr->ea, 'typeface', 'string');
        }
        if (isset($titleDetailPart->pPr->defRPr->cs)) {
            $fontArray['complexScript'] = self::getAttribute($titleDetailPart->pPr->defRPr->cs, 'typeface', 'string');
=======
        $fontArray['size'] = self::getAttributeInteger($titleDetailPart->pPr->defRPr, 'sz');
        if ($fontArray['size'] !== null && $fontArray['size'] >= 100) {
            $fontArray['size'] /= 100.0;
        }
        $fontArray['bold'] = self::getAttributeBoolean($titleDetailPart->pPr->defRPr, 'b');
        $fontArray['italic'] = self::getAttributeBoolean($titleDetailPart->pPr->defRPr, 'i');
        $fontArray['underscore'] = self::getAttributeString($titleDetailPart->pPr->defRPr, 'u');
        $fontArray['strikethrough'] = self::getAttributeString($titleDetailPart->pPr->defRPr, 'strike');
        $fontArray['cap'] = self::getAttributeString($titleDetailPart->pPr->defRPr, 'cap');

        if (isset($titleDetailPart->pPr->defRPr->latin)) {
            $fontArray['latin'] = self::getAttributeString($titleDetailPart->pPr->defRPr->latin, 'typeface');
        }
        if (isset($titleDetailPart->pPr->defRPr->ea)) {
            $fontArray['eastAsian'] = self::getAttributeString($titleDetailPart->pPr->defRPr->ea, 'typeface');
        }
        if (isset($titleDetailPart->pPr->defRPr->cs)) {
            $fontArray['complexScript'] = self::getAttributeString($titleDetailPart->pPr->defRPr->cs, 'typeface');
>>>>>>> match
        }
        if (isset($titleDetailPart->pPr->defRPr->solidFill)) {
            $fontArray['chartColor'] = new ChartColor($this->readColor($titleDetailPart->pPr->defRPr->solidFill));
        }
        $font = new Font();
        $font->setSize(null, true);
        $font->applyFromArray($fontArray);

        return $font;
    }

<<<<<<< HEAD
    /**
     * @param ?SimpleXMLElement $chartDetail
     */
    private function readChartAttributes($chartDetail): array
=======
    private function readChartAttributes(?SimpleXMLElement $chartDetail): array
>>>>>>> match
    {
        $plotAttributes = [];
        if (isset($chartDetail->dLbls)) {
            if (isset($chartDetail->dLbls->dLblPos)) {
<<<<<<< HEAD
                $plotAttributes['dLblPos'] = self::getAttribute($chartDetail->dLbls->dLblPos, 'val', 'string');
            }
            if (isset($chartDetail->dLbls->numFmt)) {
                $plotAttributes['numFmtCode'] = self::getAttribute($chartDetail->dLbls->numFmt, 'formatCode', 'string');
                $plotAttributes['numFmtLinked'] = self::getAttribute($chartDetail->dLbls->numFmt, 'sourceLinked', 'boolean');
            }
            if (isset($chartDetail->dLbls->showLegendKey)) {
                $plotAttributes['showLegendKey'] = self::getAttribute($chartDetail->dLbls->showLegendKey, 'val', 'string');
            }
            if (isset($chartDetail->dLbls->showVal)) {
                $plotAttributes['showVal'] = self::getAttribute($chartDetail->dLbls->showVal, 'val', 'string');
            }
            if (isset($chartDetail->dLbls->showCatName)) {
                $plotAttributes['showCatName'] = self::getAttribute($chartDetail->dLbls->showCatName, 'val', 'string');
            }
            if (isset($chartDetail->dLbls->showSerName)) {
                $plotAttributes['showSerName'] = self::getAttribute($chartDetail->dLbls->showSerName, 'val', 'string');
            }
            if (isset($chartDetail->dLbls->showPercent)) {
                $plotAttributes['showPercent'] = self::getAttribute($chartDetail->dLbls->showPercent, 'val', 'string');
            }
            if (isset($chartDetail->dLbls->showBubbleSize)) {
                $plotAttributes['showBubbleSize'] = self::getAttribute($chartDetail->dLbls->showBubbleSize, 'val', 'string');
            }
            if (isset($chartDetail->dLbls->showLeaderLines)) {
                $plotAttributes['showLeaderLines'] = self::getAttribute($chartDetail->dLbls->showLeaderLines, 'val', 'string');
=======
                $plotAttributes['dLblPos'] = self::getAttributeString($chartDetail->dLbls->dLblPos, 'val');
            }
            if (isset($chartDetail->dLbls->numFmt)) {
                $plotAttributes['numFmtCode'] = self::getAttributeString($chartDetail->dLbls->numFmt, 'formatCode');
                $plotAttributes['numFmtLinked'] = self::getAttributeBoolean($chartDetail->dLbls->numFmt, 'sourceLinked');
            }
            if (isset($chartDetail->dLbls->showLegendKey)) {
                $plotAttributes['showLegendKey'] = self::getAttributeString($chartDetail->dLbls->showLegendKey, 'val');
            }
            if (isset($chartDetail->dLbls->showVal)) {
                $plotAttributes['showVal'] = self::getAttributeString($chartDetail->dLbls->showVal, 'val');
            }
            if (isset($chartDetail->dLbls->showCatName)) {
                $plotAttributes['showCatName'] = self::getAttributeString($chartDetail->dLbls->showCatName, 'val');
            }
            if (isset($chartDetail->dLbls->showSerName)) {
                $plotAttributes['showSerName'] = self::getAttributeString($chartDetail->dLbls->showSerName, 'val');
            }
            if (isset($chartDetail->dLbls->showPercent)) {
                $plotAttributes['showPercent'] = self::getAttributeString($chartDetail->dLbls->showPercent, 'val');
            }
            if (isset($chartDetail->dLbls->showBubbleSize)) {
                $plotAttributes['showBubbleSize'] = self::getAttributeString($chartDetail->dLbls->showBubbleSize, 'val');
            }
            if (isset($chartDetail->dLbls->showLeaderLines)) {
                $plotAttributes['showLeaderLines'] = self::getAttributeString($chartDetail->dLbls->showLeaderLines, 'val');
>>>>>>> match
            }
            if (isset($chartDetail->dLbls->spPr)) {
                $sppr = $chartDetail->dLbls->spPr->children($this->aNamespace);
                if (isset($sppr->solidFill)) {
                    $plotAttributes['labelFillColor'] = new ChartColor($this->readColor($sppr->solidFill));
                }
                if (isset($sppr->ln->solidFill)) {
                    $plotAttributes['labelBorderColor'] = new ChartColor($this->readColor($sppr->ln->solidFill));
                }
            }
            if (isset($chartDetail->dLbls->txPr)) {
                $txpr = $chartDetail->dLbls->txPr->children($this->aNamespace);
                if (isset($txpr->p)) {
                    $plotAttributes['labelFont'] = $this->parseFont($txpr->p);
                    if (isset($txpr->p->pPr->defRPr->effectLst)) {
                        $labelEffects = new GridLines();
                        $this->readEffects($txpr->p->pPr->defRPr, $labelEffects, false);
                        $plotAttributes['labelEffects'] = $labelEffects;
                    }
                }
            }
        }

        return $plotAttributes;
    }

<<<<<<< HEAD
    /**
     * @param mixed $plotAttributes
     */
    private function setChartAttributes(Layout $plotArea, $plotAttributes): void
=======
    private function setChartAttributes(Layout $plotArea, array $plotAttributes): void
>>>>>>> match
    {
        foreach ($plotAttributes as $plotAttributeKey => $plotAttributeValue) {
            switch ($plotAttributeKey) {
                case 'showLegendKey':
                    $plotArea->setShowLegendKey($plotAttributeValue);

                    break;
                case 'showVal':
                    $plotArea->setShowVal($plotAttributeValue);

                    break;
                case 'showCatName':
                    $plotArea->setShowCatName($plotAttributeValue);

                    break;
                case 'showSerName':
                    $plotArea->setShowSerName($plotAttributeValue);

                    break;
                case 'showPercent':
                    $plotArea->setShowPercent($plotAttributeValue);

                    break;
                case 'showBubbleSize':
                    $plotArea->setShowBubbleSize($plotAttributeValue);

                    break;
                case 'showLeaderLines':
                    $plotArea->setShowLeaderLines($plotAttributeValue);

                    break;
<<<<<<< HEAD
=======
                case 'labelFont':
                    $plotArea->setLabelFont($plotAttributeValue);

                    break;
>>>>>>> match
            }
        }
    }

    private function readEffects(SimpleXMLElement $chartDetail, ?ChartProperties $chartObject, bool $getSppr = true): void
    {
        if (!isset($chartObject)) {
            return;
        }
        if ($getSppr) {
            if (!isset($chartDetail->spPr)) {
                return;
            }
            $sppr = $chartDetail->spPr->children($this->aNamespace);
        } else {
            $sppr = $chartDetail;
        }
        if (isset($sppr->effectLst->glow)) {
<<<<<<< HEAD
            $axisGlowSize = (float) self::getAttribute($sppr->effectLst->glow, 'rad', 'integer') / ChartProperties::POINTS_WIDTH_MULTIPLIER;
=======
            $axisGlowSize = (float) self::getAttributeInteger($sppr->effectLst->glow, 'rad') / ChartProperties::POINTS_WIDTH_MULTIPLIER;
>>>>>>> match
            if ($axisGlowSize != 0.0) {
                $colorArray = $this->readColor($sppr->effectLst->glow);
                $chartObject->setGlowProperties($axisGlowSize, $colorArray['value'], $colorArray['alpha'], $colorArray['type']);
            }
        }

        if (isset($sppr->effectLst->softEdge)) {
<<<<<<< HEAD
            /** @var string */
            $softEdgeSize = self::getAttribute($sppr->effectLst->softEdge, 'rad', 'string');
=======
            $softEdgeSize = self::getAttributeString($sppr->effectLst->softEdge, 'rad');
>>>>>>> match
            if (is_numeric($softEdgeSize)) {
                $chartObject->setSoftEdges((float) ChartProperties::xmlToPoints($softEdgeSize));
            }
        }

        $type = '';
        foreach (self::SHADOW_TYPES as $shadowType) {
            if (isset($sppr->effectLst->$shadowType)) {
                $type = $shadowType;

                break;
            }
        }
        if ($type !== '') {
<<<<<<< HEAD
            /** @var string */
            $blur = self::getAttribute($sppr->effectLst->$type, 'blurRad', 'string');
            $blur = is_numeric($blur) ? ChartProperties::xmlToPoints($blur) : null;
            /** @var string */
            $dist = self::getAttribute($sppr->effectLst->$type, 'dist', 'string');
            $dist = is_numeric($dist) ? ChartProperties::xmlToPoints($dist) : null;
            /** @var string */
            $direction = self::getAttribute($sppr->effectLst->$type, 'dir', 'string');
            $direction = is_numeric($direction) ? ChartProperties::xmlToAngle($direction) : null;
            $algn = self::getAttribute($sppr->effectLst->$type, 'algn', 'string');
            $rot = self::getAttribute($sppr->effectLst->$type, 'rotWithShape', 'string');
            $size = [];
            foreach (['sx', 'sy'] as $sizeType) {
                $sizeValue = self::getAttribute($sppr->effectLst->$type, $sizeType, 'string');
=======
            $blur = self::getAttributeString($sppr->effectLst->$type, 'blurRad');
            $blur = is_numeric($blur) ? ChartProperties::xmlToPoints($blur) : null;
            $dist = self::getAttributeString($sppr->effectLst->$type, 'dist');
            $dist = is_numeric($dist) ? ChartProperties::xmlToPoints($dist) : null;
            $direction = self::getAttributeString($sppr->effectLst->$type, 'dir');
            $direction = is_numeric($direction) ? ChartProperties::xmlToAngle($direction) : null;
            $algn = self::getAttributeString($sppr->effectLst->$type, 'algn');
            $rot = self::getAttributeString($sppr->effectLst->$type, 'rotWithShape');
            $size = [];
            foreach (['sx', 'sy'] as $sizeType) {
                $sizeValue = self::getAttributeString($sppr->effectLst->$type, $sizeType);
>>>>>>> match
                if (is_numeric($sizeValue)) {
                    $size[$sizeType] = ChartProperties::xmlToTenthOfPercent((string) $sizeValue);
                } else {
                    $size[$sizeType] = null;
                }
            }
            foreach (['kx', 'ky'] as $sizeType) {
<<<<<<< HEAD
                $sizeValue = self::getAttribute($sppr->effectLst->$type, $sizeType, 'string');
=======
                $sizeValue = self::getAttributeString($sppr->effectLst->$type, $sizeType);
>>>>>>> match
                if (is_numeric($sizeValue)) {
                    $size[$sizeType] = ChartProperties::xmlToAngle((string) $sizeValue);
                } else {
                    $size[$sizeType] = null;
                }
            }
            $colorArray = $this->readColor($sppr->effectLst->$type);
            $chartObject
                ->setShadowProperty('effect', $type)
                ->setShadowProperty('blur', $blur)
                ->setShadowProperty('direction', $direction)
                ->setShadowProperty('distance', $dist)
                ->setShadowProperty('algn', $algn)
                ->setShadowProperty('rotWithShape', $rot)
                ->setShadowProperty('size', $size)
                ->setShadowProperty('color', $colorArray);
        }
    }

    private const SHADOW_TYPES = [
        'outerShdw',
        'innerShdw',
    ];

    private function readColor(SimpleXMLElement $colorXml): array
    {
        $result = [
            'type' => null,
            'value' => null,
            'alpha' => null,
            'brightness' => null,
        ];
        foreach (ChartColor::EXCEL_COLOR_TYPES as $type) {
            if (isset($colorXml->$type)) {
                $result['type'] = $type;
<<<<<<< HEAD
                $result['value'] = self::getAttribute($colorXml->$type, 'val', 'string');
                if (isset($colorXml->$type->alpha)) {
                    /** @var string */
                    $alpha = self::getAttribute($colorXml->$type->alpha, 'val', 'string');
=======
                $result['value'] = self::getAttributeString($colorXml->$type, 'val');
                if (isset($colorXml->$type->alpha)) {
                    $alpha = self::getAttributeString($colorXml->$type->alpha, 'val');
>>>>>>> match
                    if (is_numeric($alpha)) {
                        $result['alpha'] = ChartColor::alphaFromXml($alpha);
                    }
                }
                if (isset($colorXml->$type->lumMod)) {
<<<<<<< HEAD
                    /** @var string */
                    $brightness = self::getAttribute($colorXml->$type->lumMod, 'val', 'string');
=======
                    $brightness = self::getAttributeString($colorXml->$type->lumMod, 'val');
>>>>>>> match
                    if (is_numeric($brightness)) {
                        $result['brightness'] = ChartColor::alphaFromXml($brightness);
                    }
                }

                break;
            }
        }

        return $result;
    }

    private function readLineStyle(SimpleXMLElement $chartDetail, ?ChartProperties $chartObject): void
    {
        if (!isset($chartObject, $chartDetail->spPr)) {
            return;
        }
        $sppr = $chartDetail->spPr->children($this->aNamespace);

        if (!isset($sppr->ln)) {
            return;
        }
        $lineWidth = null;
<<<<<<< HEAD
        /** @var string */
        $lineWidthTemp = self::getAttribute($sppr->ln, 'w', 'string');
        if (is_numeric($lineWidthTemp)) {
            $lineWidth = ChartProperties::xmlToPoints($lineWidthTemp);
        }
        /** @var string */
        $compoundType = self::getAttribute($sppr->ln, 'cmpd', 'string');
        /** @var string */
        $dashType = self::getAttribute($sppr->ln->prstDash, 'val', 'string');
        /** @var string */
        $capType = self::getAttribute($sppr->ln, 'cap', 'string');
=======
        $lineWidthTemp = self::getAttributeString($sppr->ln, 'w');
        if (is_numeric($lineWidthTemp)) {
            $lineWidth = ChartProperties::xmlToPoints($lineWidthTemp);
        }
        /** @var string $compoundType */
        $compoundType = self::getAttributeString($sppr->ln, 'cmpd');
        /** @var string $dashType */
        $dashType = self::getAttributeString($sppr->ln->prstDash, 'val');
        /** @var string $capType */
        $capType = self::getAttributeString($sppr->ln, 'cap');
>>>>>>> match
        if (isset($sppr->ln->miter)) {
            $joinType = ChartProperties::LINE_STYLE_JOIN_MITER;
        } elseif (isset($sppr->ln->bevel)) {
            $joinType = ChartProperties::LINE_STYLE_JOIN_BEVEL;
        } else {
            $joinType = '';
        }
<<<<<<< HEAD
        $headArrowSize = '';
        $endArrowSize = '';
        /** @var string */
        $headArrowType = self::getAttribute($sppr->ln->headEnd, 'type', 'string');
        /** @var string */
        $headArrowWidth = self::getAttribute($sppr->ln->headEnd, 'w', 'string');
        /** @var string */
        $headArrowLength = self::getAttribute($sppr->ln->headEnd, 'len', 'string');
        /** @var string */
        $endArrowType = self::getAttribute($sppr->ln->tailEnd, 'type', 'string');
        /** @var string */
        $endArrowWidth = self::getAttribute($sppr->ln->tailEnd, 'w', 'string');
        /** @var string */
        $endArrowLength = self::getAttribute($sppr->ln->tailEnd, 'len', 'string');
=======
        $headArrowSize = 0;
        $endArrowSize = 0;
        $headArrowType = self::getAttributeString($sppr->ln->headEnd, 'type');
        $headArrowWidth = self::getAttributeString($sppr->ln->headEnd, 'w');
        $headArrowLength = self::getAttributeString($sppr->ln->headEnd, 'len');
        $endArrowType = self::getAttributeString($sppr->ln->tailEnd, 'type');
        $endArrowWidth = self::getAttributeString($sppr->ln->tailEnd, 'w');
        $endArrowLength = self::getAttributeString($sppr->ln->tailEnd, 'len');
>>>>>>> match
        $chartObject->setLineStyleProperties(
            $lineWidth,
            $compoundType,
            $dashType,
            $capType,
            $joinType,
            $headArrowType,
            $headArrowSize,
            $endArrowType,
            $endArrowSize,
            $headArrowWidth,
            $headArrowLength,
            $endArrowWidth,
            $endArrowLength
        );
        $colorArray = $this->readColor($sppr->ln->solidFill);
        $chartObject->getLineColor()->setColorPropertiesArray($colorArray);
    }

    private function setAxisProperties(SimpleXMLElement $chartDetail, ?Axis $whichAxis): void
    {
        if (!isset($whichAxis)) {
            return;
        }
        if (isset($chartDetail->delete)) {
<<<<<<< HEAD
            $whichAxis->setAxisOption('hidden', (string) self::getAttribute($chartDetail->delete, 'val', 'string'));
        }
        if (isset($chartDetail->numFmt)) {
            $whichAxis->setAxisNumberProperties(
                (string) self::getAttribute($chartDetail->numFmt, 'formatCode', 'string'),
                null,
                (int) self::getAttribute($chartDetail->numFmt, 'sourceLinked', 'int')
            );
        }
        if (isset($chartDetail->crossBetween)) {
            $whichAxis->setCrossBetween((string) self::getAttribute($chartDetail->crossBetween, 'val', 'string'));
        }
        if (isset($chartDetail->majorTickMark)) {
            $whichAxis->setAxisOption('major_tick_mark', (string) self::getAttribute($chartDetail->majorTickMark, 'val', 'string'));
        }
        if (isset($chartDetail->minorTickMark)) {
            $whichAxis->setAxisOption('minor_tick_mark', (string) self::getAttribute($chartDetail->minorTickMark, 'val', 'string'));
        }
        if (isset($chartDetail->tickLblPos)) {
            $whichAxis->setAxisOption('axis_labels', (string) self::getAttribute($chartDetail->tickLblPos, 'val', 'string'));
        }
        if (isset($chartDetail->crosses)) {
            $whichAxis->setAxisOption('horizontal_crosses', (string) self::getAttribute($chartDetail->crosses, 'val', 'string'));
        }
        if (isset($chartDetail->crossesAt)) {
            $whichAxis->setAxisOption('horizontal_crosses_value', (string) self::getAttribute($chartDetail->crossesAt, 'val', 'string'));
        }
        if (isset($chartDetail->scaling->orientation)) {
            $whichAxis->setAxisOption('orientation', (string) self::getAttribute($chartDetail->scaling->orientation, 'val', 'string'));
        }
        if (isset($chartDetail->scaling->max)) {
            $whichAxis->setAxisOption('maximum', (string) self::getAttribute($chartDetail->scaling->max, 'val', 'string'));
        }
        if (isset($chartDetail->scaling->min)) {
            $whichAxis->setAxisOption('minimum', (string) self::getAttribute($chartDetail->scaling->min, 'val', 'string'));
        }
        if (isset($chartDetail->scaling->min)) {
            $whichAxis->setAxisOption('minimum', (string) self::getAttribute($chartDetail->scaling->min, 'val', 'string'));
        }
        if (isset($chartDetail->majorUnit)) {
            $whichAxis->setAxisOption('major_unit', (string) self::getAttribute($chartDetail->majorUnit, 'val', 'string'));
        }
        if (isset($chartDetail->minorUnit)) {
            $whichAxis->setAxisOption('minor_unit', (string) self::getAttribute($chartDetail->minorUnit, 'val', 'string'));
        }
        if (isset($chartDetail->baseTimeUnit)) {
            $whichAxis->setAxisOption('baseTimeUnit', (string) self::getAttribute($chartDetail->baseTimeUnit, 'val', 'string'));
        }
        if (isset($chartDetail->majorTimeUnit)) {
            $whichAxis->setAxisOption('majorTimeUnit', (string) self::getAttribute($chartDetail->majorTimeUnit, 'val', 'string'));
        }
        if (isset($chartDetail->minorTimeUnit)) {
            $whichAxis->setAxisOption('minorTimeUnit', (string) self::getAttribute($chartDetail->minorTimeUnit, 'val', 'string'));
=======
            $whichAxis->setAxisOption('hidden', (string) self::getAttributeString($chartDetail->delete, 'val'));
        }
        if (isset($chartDetail->numFmt)) {
            $whichAxis->setAxisNumberProperties(
                (string) self::getAttributeString($chartDetail->numFmt, 'formatCode'),
                null,
                (int) self::getAttributeInteger($chartDetail->numFmt, 'sourceLinked')
            );
        }
        if (isset($chartDetail->crossBetween)) {
            $whichAxis->setCrossBetween((string) self::getAttributeString($chartDetail->crossBetween, 'val'));
        }
        if (isset($chartDetail->dispUnits, $chartDetail->dispUnits->builtInUnit)) {
            $whichAxis->setAxisOption('dispUnitsBuiltIn', (string) self::getAttributeString($chartDetail->dispUnits->builtInUnit, 'val'));
            if (isset($chartDetail->dispUnits->dispUnitsLbl)) {
                $whichAxis->setDispUnitsTitle(new Title());
                // TODO parse title elements
            }
        }
        if (isset($chartDetail->majorTickMark)) {
            $whichAxis->setAxisOption('major_tick_mark', (string) self::getAttributeString($chartDetail->majorTickMark, 'val'));
        }
        if (isset($chartDetail->minorTickMark)) {
            $whichAxis->setAxisOption('minor_tick_mark', (string) self::getAttributeString($chartDetail->minorTickMark, 'val'));
        }
        if (isset($chartDetail->tickLblPos)) {
            $whichAxis->setAxisOption('axis_labels', (string) self::getAttributeString($chartDetail->tickLblPos, 'val'));
        }
        if (isset($chartDetail->crosses)) {
            $whichAxis->setAxisOption('horizontal_crosses', (string) self::getAttributeString($chartDetail->crosses, 'val'));
        }
        if (isset($chartDetail->crossesAt)) {
            $whichAxis->setAxisOption('horizontal_crosses_value', (string) self::getAttributeString($chartDetail->crossesAt, 'val'));
        }
        if (isset($chartDetail->scaling->logBase)) {
            $whichAxis->setAxisOption('logBase', (string) self::getAttributeString($chartDetail->scaling->logBase, 'val'));
        }
        if (isset($chartDetail->scaling->orientation)) {
            $whichAxis->setAxisOption('orientation', (string) self::getAttributeString($chartDetail->scaling->orientation, 'val'));
        }
        if (isset($chartDetail->scaling->max)) {
            $whichAxis->setAxisOption('maximum', (string) self::getAttributeString($chartDetail->scaling->max, 'val'));
        }
        if (isset($chartDetail->scaling->min)) {
            $whichAxis->setAxisOption('minimum', (string) self::getAttributeString($chartDetail->scaling->min, 'val'));
        }
        if (isset($chartDetail->scaling->min)) {
            $whichAxis->setAxisOption('minimum', (string) self::getAttributeString($chartDetail->scaling->min, 'val'));
        }
        if (isset($chartDetail->majorUnit)) {
            $whichAxis->setAxisOption('major_unit', (string) self::getAttributeString($chartDetail->majorUnit, 'val'));
        }
        if (isset($chartDetail->minorUnit)) {
            $whichAxis->setAxisOption('minor_unit', (string) self::getAttributeString($chartDetail->minorUnit, 'val'));
        }
        if (isset($chartDetail->baseTimeUnit)) {
            $whichAxis->setAxisOption('baseTimeUnit', (string) self::getAttributeString($chartDetail->baseTimeUnit, 'val'));
        }
        if (isset($chartDetail->majorTimeUnit)) {
            $whichAxis->setAxisOption('majorTimeUnit', (string) self::getAttributeString($chartDetail->majorTimeUnit, 'val'));
        }
        if (isset($chartDetail->minorTimeUnit)) {
            $whichAxis->setAxisOption('minorTimeUnit', (string) self::getAttributeString($chartDetail->minorTimeUnit, 'val'));
>>>>>>> match
        }
        if (isset($chartDetail->txPr)) {
            $children = $chartDetail->txPr->children($this->aNamespace);
            $addAxisText = false;
            $axisText = new AxisText();
            if (isset($children->bodyPr)) {
<<<<<<< HEAD
                /** @var string */
                $textRotation = self::getAttribute($children->bodyPr, 'rot', 'string');
=======
                $textRotation = self::getAttributeString($children->bodyPr, 'rot');
>>>>>>> match
                if (is_numeric($textRotation)) {
                    $axisText->setRotation((int) ChartProperties::xmlToAngle($textRotation));
                    $addAxisText = true;
                }
            }
            if (isset($children->p->pPr->defRPr)) {
                $font = $this->parseFont($children->p);
                if ($font !== null) {
                    $axisText->setFont($font);
                    $addAxisText = true;
                }
            }
            if (isset($children->p->pPr->defRPr->effectLst)) {
                $this->readEffects($children->p->pPr->defRPr, $axisText, false);
                $addAxisText = true;
            }
            if ($addAxisText) {
                $whichAxis->setAxisText($axisText);
            }
        }
    }
}
