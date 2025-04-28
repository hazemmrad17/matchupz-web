<?php

namespace PhpOffice\PhpSpreadsheet\Chart;

use PhpOffice\PhpSpreadsheet\Calculation\Calculation;
use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class DataSeriesValues extends Properties
{
    const DATASERIES_TYPE_STRING = 'String';
    const DATASERIES_TYPE_NUMBER = 'Number';

    private const DATA_TYPE_VALUES = [
        self::DATASERIES_TYPE_STRING,
        self::DATASERIES_TYPE_NUMBER,
    ];

    /**
     * Series Data Type.
<<<<<<< HEAD
     *
     * @var string
     */
    private $dataType;

    /**
     * Series Data Source.
     *
     * @var ?string
     */
    private $dataSource;

    /**
     * Format Code.
     *
     * @var string
     */
    private $formatCode;

    /**
     * Series Point Marker.
     *
     * @var string
     */
    private $pointMarker;

    /** @var ChartColor */
    private $markerFillColor;

    /** @var ChartColor */
    private $markerBorderColor;

    /**
     * Series Point Size.
     *
     * @var int
     */
    private $pointSize = 3;

    /**
     * Point Count (The number of datapoints in the dataseries).
     *
     * @var int
     */
    private $pointCount = 0;

    /**
     * Data Values.
     *
     * @var mixed[]
     */
    private $dataValues = [];
=======
     */
    private string $dataType;

    /**
     * Series Data Source.
     */
    private ?string $dataSource;

    /**
     * Format Code.
     */
    private ?string $formatCode;

    /**
     * Series Point Marker.
     */
    private ?string $pointMarker;

    private ChartColor $markerFillColor;

    private ChartColor $markerBorderColor;

    /**
     * Series Point Size.
     */
    private int $pointSize = 3;

    /**
     * Point Count (The number of datapoints in the dataseries).
     */
    private int $pointCount;

    /**
     * Data Values.
     */
    private ?array $dataValues;
>>>>>>> match

    /**
     * Fill color (can be array with colors if dataseries have custom colors).
     *
     * @var null|ChartColor|ChartColor[]
     */
    private $fillColor;

<<<<<<< HEAD
    /** @var bool */
    private $scatterLines = true;

    /** @var bool */
    private $bubble3D = false;

    /** @var ?Layout */
    private $labelLayout;

    /** @var TrendLine[] */
    private $trendLines = [];
=======
    private bool $scatterLines = true;

    private bool $bubble3D = false;

    private ?Layout $labelLayout = null;

    /** @var TrendLine[] */
    private array $trendLines = [];
>>>>>>> match

    /**
     * Create a new DataSeriesValues object.
     *
<<<<<<< HEAD
     * @param string $dataType
     * @param string $dataSource
     * @param null|mixed $formatCode
     * @param int $pointCount
     * @param mixed $dataValues
     * @param null|mixed $marker
     * @param null|ChartColor|ChartColor[]|string|string[] $fillColor
     * @param string $pointSize
     */
    public function __construct($dataType = self::DATASERIES_TYPE_NUMBER, $dataSource = null, $formatCode = null, $pointCount = 0, $dataValues = [], $marker = null, $fillColor = null, $pointSize = '3')
    {
=======
     * @param null|ChartColor|ChartColor[]|string|string[] $fillColor
     */
    public function __construct(
        string $dataType = self::DATASERIES_TYPE_NUMBER,
        ?string $dataSource = null,
        ?string $formatCode = null,
        int $pointCount = 0,
        ?array $dataValues = [],
        ?string $marker = null,
        null|ChartColor|array|string $fillColor = null,
        int|string $pointSize = 3
    ) {
>>>>>>> match
        parent::__construct();
        $this->markerFillColor = new ChartColor();
        $this->markerBorderColor = new ChartColor();
        $this->setDataType($dataType);
        $this->dataSource = $dataSource;
        $this->formatCode = $formatCode;
        $this->pointCount = $pointCount;
        $this->dataValues = $dataValues;
        $this->pointMarker = $marker;
        if ($fillColor !== null) {
            $this->setFillColor($fillColor);
        }
        if (is_numeric($pointSize)) {
            $this->pointSize = (int) $pointSize;
        }
    }

    /**
     * Get Series Data Type.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getDataType()
=======
     */
    public function getDataType(): string
>>>>>>> match
    {
        return $this->dataType;
    }

    /**
     * Set Series Data Type.
     *
     * @param string $dataType Datatype of this data series
     *                                Typical values are:
     *                                    DataSeriesValues::DATASERIES_TYPE_STRING
     *                                        Normally used for axis point values
     *                                    DataSeriesValues::DATASERIES_TYPE_NUMBER
     *                                        Normally used for chart data values
     *
     * @return $this
     */
<<<<<<< HEAD
    public function setDataType($dataType)
=======
    public function setDataType(string $dataType): static
>>>>>>> match
    {
        if (!in_array($dataType, self::DATA_TYPE_VALUES)) {
            throw new Exception('Invalid datatype for chart data series values');
        }
        $this->dataType = $dataType;

        return $this;
    }

    /**
     * Get Series Data Source (formula).
<<<<<<< HEAD
     *
     * @return ?string
     */
    public function getDataSource()
=======
     */
    public function getDataSource(): ?string
>>>>>>> match
    {
        return $this->dataSource;
    }

    /**
     * Set Series Data Source (formula).
     *
<<<<<<< HEAD
     * @param ?string $dataSource
     *
     * @return $this
     */
    public function setDataSource($dataSource)
=======
     * @return $this
     */
    public function setDataSource(?string $dataSource): static
>>>>>>> match
    {
        $this->dataSource = $dataSource;

        return $this;
    }

    /**
     * Get Point Marker.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getPointMarker()
=======
     */
    public function getPointMarker(): ?string
>>>>>>> match
    {
        return $this->pointMarker;
    }

    /**
     * Set Point Marker.
     *
<<<<<<< HEAD
     * @param string $marker
     *
     * @return $this
     */
    public function setPointMarker($marker)
=======
     * @return $this
     */
    public function setPointMarker(string $marker): static
>>>>>>> match
    {
        $this->pointMarker = $marker;

        return $this;
    }

    public function getMarkerFillColor(): ChartColor
    {
        return $this->markerFillColor;
    }

    public function getMarkerBorderColor(): ChartColor
    {
        return $this->markerBorderColor;
    }

    /**
     * Get Point Size.
     */
    public function getPointSize(): int
    {
        return $this->pointSize;
    }

    /**
     * Set Point Size.
     *
     * @return $this
     */
<<<<<<< HEAD
    public function setPointSize(int $size = 3)
=======
    public function setPointSize(int $size = 3): static
>>>>>>> match
    {
        $this->pointSize = $size;

        return $this;
    }

    /**
     * Get Series Format Code.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getFormatCode()
=======
     */
    public function getFormatCode(): ?string
>>>>>>> match
    {
        return $this->formatCode;
    }

    /**
     * Set Series Format Code.
     *
<<<<<<< HEAD
     * @param string $formatCode
     *
     * @return $this
     */
    public function setFormatCode($formatCode)
=======
     * @return $this
     */
    public function setFormatCode(string $formatCode): static
>>>>>>> match
    {
        $this->formatCode = $formatCode;

        return $this;
    }

    /**
     * Get Series Point Count.
<<<<<<< HEAD
     *
     * @return int
     */
    public function getPointCount()
=======
     */
    public function getPointCount(): int
>>>>>>> match
    {
        return $this->pointCount;
    }

    /**
     * Get fill color object.
     *
     * @return null|ChartColor|ChartColor[]
     */
    public function getFillColorObject()
    {
        return $this->fillColor;
    }

    private function stringToChartColor(string $fillString): ChartColor
    {
        $value = $type = '';
<<<<<<< HEAD
        if (substr($fillString, 0, 1) === '*') {
            $type = 'schemeClr';
            $value = substr($fillString, 1);
        } elseif (substr($fillString, 0, 1) === '/') {
=======
        if (str_starts_with($fillString, '*')) {
            $type = 'schemeClr';
            $value = substr($fillString, 1);
        } elseif (str_starts_with($fillString, '/')) {
>>>>>>> match
            $type = 'prstClr';
            $value = substr($fillString, 1);
        } elseif ($fillString !== '') {
            $type = 'srgbClr';
            $value = $fillString;
            $this->validateColor($value);
        }

        return new ChartColor($value, null, $type);
    }

    private function chartColorToString(ChartColor $chartColor): string
    {
        $type = (string) $chartColor->getColorProperty('type');
        $value = (string) $chartColor->getColorProperty('value');
        if ($type === '' || $value === '') {
            return '';
        }
        if ($type === 'schemeClr') {
            return "*$value";
        }
        if ($type === 'prstClr') {
            return "/$value";
        }

        return $value;
    }

    /**
     * Get fill color.
     *
     * @return string|string[] HEX color or array with HEX colors
     */
<<<<<<< HEAD
    public function getFillColor()
=======
    public function getFillColor(): string|array
>>>>>>> match
    {
        if ($this->fillColor === null) {
            return '';
        }
        if (is_array($this->fillColor)) {
            $array = [];
            foreach ($this->fillColor as $chartColor) {
                $array[] = $this->chartColorToString($chartColor);
            }

            return $array;
        }

        return $this->chartColorToString($this->fillColor);
    }

    /**
     * Set fill color for series.
     *
     * @param ChartColor|ChartColor[]|string|string[] $color HEX color or array with HEX colors
     *
<<<<<<< HEAD
     * @return   DataSeriesValues
     */
    public function setFillColor($color)
=======
     * @return   $this
     */
    public function setFillColor($color): static
>>>>>>> match
    {
        if (is_array($color)) {
            $this->fillColor = [];
            foreach ($color as $fillString) {
                if ($fillString instanceof ChartColor) {
                    $this->fillColor[] = $fillString;
                } else {
                    $this->fillColor[] = $this->stringToChartColor($fillString);
                }
            }
        } elseif ($color instanceof ChartColor) {
            $this->fillColor = $color;
        } else {
            $this->fillColor = $this->stringToChartColor($color);
        }

        return $this;
    }

    /**
     * Method for validating hex color.
     *
     * @param string $color value for color
     *
     * @return bool true if validation was successful
     */
<<<<<<< HEAD
    private function validateColor($color)
=======
    private function validateColor(string $color): bool
>>>>>>> match
    {
        if (!preg_match('/^[a-f0-9]{6}$/i', $color)) {
            throw new Exception(sprintf('Invalid hex color for chart series (color: "%s")', $color));
        }

        return true;
    }

    /**
     * Get line width for series.
<<<<<<< HEAD
     *
     * @return null|float|int
     */
    public function getLineWidth()
=======
     */
    public function getLineWidth(): null|float|int
>>>>>>> match
    {
        return $this->lineStyleProperties['width'];
    }

    /**
     * Set line width for the series.
     *
<<<<<<< HEAD
     * @param null|float|int $width
     *
     * @return $this
     */
    public function setLineWidth($width)
=======
     * @return $this
     */
    public function setLineWidth(null|float|int $width): static
>>>>>>> match
    {
        $this->lineStyleProperties['width'] = $width;

        return $this;
    }

    /**
     * Identify if the Data Series is a multi-level or a simple series.
<<<<<<< HEAD
     *
     * @return null|bool
     */
    public function isMultiLevelSeries()
=======
     */
    public function isMultiLevelSeries(): ?bool
>>>>>>> match
    {
        if (!empty($this->dataValues)) {
            return is_array(array_values($this->dataValues)[0]);
        }

        return null;
    }

    /**
     * Return the level count of a multi-level Data Series.
<<<<<<< HEAD
     *
     * @return int
     */
    public function multiLevelCount()
    {
        $levelCount = 0;
        foreach ($this->dataValues as $dataValueSet) {
=======
     */
    public function multiLevelCount(): int
    {
        $levelCount = 0;
        foreach (($this->dataValues ?? []) as $dataValueSet) {
>>>>>>> match
            $levelCount = max($levelCount, count($dataValueSet));
        }

        return $levelCount;
    }

    /**
     * Get Series Data Values.
<<<<<<< HEAD
     *
     * @return mixed[]
     */
    public function getDataValues()
=======
     */
    public function getDataValues(): ?array
>>>>>>> match
    {
        return $this->dataValues;
    }

    /**
     * Get the first Series Data value.
<<<<<<< HEAD
     *
     * @return mixed
     */
    public function getDataValue()
    {
=======
     */
    public function getDataValue(): mixed
    {
        if ($this->dataValues === null) {
            return null;
        }
>>>>>>> match
        $count = count($this->dataValues);
        if ($count == 0) {
            return null;
        } elseif ($count == 1) {
            return $this->dataValues[0];
        }

        return $this->dataValues;
    }

    /**
     * Set Series Data Values.
     *
<<<<<<< HEAD
     * @param array $dataValues
     *
     * @return $this
     */
    public function setDataValues($dataValues)
=======
     * @return $this
     */
    public function setDataValues(array $dataValues): static
>>>>>>> match
    {
        $this->dataValues = Functions::flattenArray($dataValues);
        $this->pointCount = count($dataValues);

        return $this;
    }

    public function refresh(Worksheet $worksheet, bool $flatten = true): void
    {
        if ($this->dataSource !== null) {
            $calcEngine = Calculation::getInstance($worksheet->getParent());
            $newDataValues = Calculation::unwrapResult(
                $calcEngine->_calculateFormulaValue(
                    '=' . $this->dataSource,
                    null,
                    $worksheet->getCell('A1')
                )
            );
            if ($flatten) {
                $this->dataValues = Functions::flattenArray($newDataValues);
                foreach ($this->dataValues as &$dataValue) {
                    if (is_string($dataValue) && !empty($dataValue) && $dataValue[0] == '#') {
                        $dataValue = 0.0;
                    }
                }
                unset($dataValue);
            } else {
<<<<<<< HEAD
                [$worksheet, $cellRange] = Worksheet::extractSheetTitle($this->dataSource, true);
                $dimensions = Coordinate::rangeDimension(str_replace('$', '', $cellRange));
                if (($dimensions[0] == 1) || ($dimensions[1] == 1)) {
                    $this->dataValues = Functions::flattenArray($newDataValues);
                } else {
                    $newArray = array_values(array_shift(/** @scrutinizer ignore-type */ $newDataValues));
=======
                [, $cellRange] = Worksheet::extractSheetTitle($this->dataSource, true);
                $dimensions = Coordinate::rangeDimension(str_replace('$', '', $cellRange ?? ''));
                if (($dimensions[0] == 1) || ($dimensions[1] == 1)) {
                    $this->dataValues = Functions::flattenArray($newDataValues);
                } else {
                    /** @var array<int, array> */
                    $newDataValuesx = $newDataValues;
                    $newArray = array_values(array_shift($newDataValuesx) ?? []);
>>>>>>> match
                    foreach ($newArray as $i => $newDataSet) {
                        $newArray[$i] = [$newDataSet];
                    }

<<<<<<< HEAD
                    foreach ($newDataValues as $newDataSet) {
=======
                    foreach ($newDataValuesx as $newDataSet) {
>>>>>>> match
                        $i = 0;
                        foreach ($newDataSet as $newDataVal) {
                            array_unshift($newArray[$i++], $newDataVal);
                        }
                    }
                    $this->dataValues = $newArray;
                }
            }
            $this->pointCount = count($this->dataValues);
        }
    }

    public function getScatterLines(): bool
    {
        return $this->scatterLines;
    }

    public function setScatterLines(bool $scatterLines): self
    {
        $this->scatterLines = $scatterLines;

        return $this;
    }

    public function getBubble3D(): bool
    {
        return $this->bubble3D;
    }

    public function setBubble3D(bool $bubble3D): self
    {
        $this->bubble3D = $bubble3D;

        return $this;
    }

    /**
     * Smooth Line. Must be specified for both DataSeries and DataSeriesValues.
<<<<<<< HEAD
     *
     * @var bool
     */
    private $smoothLine;

    /**
     * Get Smooth Line.
     *
     * @return bool
     */
    public function getSmoothLine()
=======
     */
    private bool $smoothLine = false;

    /**
     * Get Smooth Line.
     */
    public function getSmoothLine(): bool
>>>>>>> match
    {
        return $this->smoothLine;
    }

    /**
     * Set Smooth Line.
     *
<<<<<<< HEAD
     * @param bool $smoothLine
     *
     * @return $this
     */
    public function setSmoothLine($smoothLine)
=======
     * @return $this
     */
    public function setSmoothLine(bool $smoothLine): static
>>>>>>> match
    {
        $this->smoothLine = $smoothLine;

        return $this;
    }

    public function getLabelLayout(): ?Layout
    {
        return $this->labelLayout;
    }

    public function setLabelLayout(?Layout $labelLayout): self
    {
        $this->labelLayout = $labelLayout;

        return $this;
    }

    public function setTrendLines(array $trendLines): self
    {
        $this->trendLines = $trendLines;

        return $this;
    }

    public function getTrendLines(): array
    {
        return $this->trendLines;
    }
<<<<<<< HEAD
=======

    /**
     * Implement PHP __clone to create a deep clone, not just a shallow copy.
     */
    public function __clone()
    {
        parent::__clone();
        $this->markerFillColor = clone $this->markerFillColor;
        $this->markerBorderColor = clone $this->markerBorderColor;
        if (is_array($this->fillColor)) {
            $fillColor = $this->fillColor;
            $this->fillColor = [];
            foreach ($fillColor as $color) {
                $this->fillColor[] = clone $color;
            }
        } elseif ($this->fillColor instanceof ChartColor) {
            $this->fillColor = clone $this->fillColor;
        }
        $this->labelLayout = ($this->labelLayout === null) ? null : clone $this->labelLayout;
        $trendLines = $this->trendLines;
        $this->trendLines = [];
        foreach ($trendLines as $trendLine) {
            $this->trendLines[] = clone $trendLine;
        }
    }
>>>>>>> match
}
