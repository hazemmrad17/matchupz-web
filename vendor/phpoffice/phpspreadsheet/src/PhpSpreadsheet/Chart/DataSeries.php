<?php

namespace PhpOffice\PhpSpreadsheet\Chart;

use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class DataSeries
{
    const TYPE_BARCHART = 'barChart';
    const TYPE_BARCHART_3D = 'bar3DChart';
    const TYPE_LINECHART = 'lineChart';
    const TYPE_LINECHART_3D = 'line3DChart';
    const TYPE_AREACHART = 'areaChart';
    const TYPE_AREACHART_3D = 'area3DChart';
    const TYPE_PIECHART = 'pieChart';
    const TYPE_PIECHART_3D = 'pie3DChart';
    const TYPE_DOUGHNUTCHART = 'doughnutChart';
    const TYPE_DONUTCHART = self::TYPE_DOUGHNUTCHART; // Synonym
    const TYPE_SCATTERCHART = 'scatterChart';
    const TYPE_SURFACECHART = 'surfaceChart';
    const TYPE_SURFACECHART_3D = 'surface3DChart';
    const TYPE_RADARCHART = 'radarChart';
    const TYPE_BUBBLECHART = 'bubbleChart';
    const TYPE_STOCKCHART = 'stockChart';
    const TYPE_CANDLECHART = self::TYPE_STOCKCHART; // Synonym

    const GROUPING_CLUSTERED = 'clustered';
    const GROUPING_STACKED = 'stacked';
    const GROUPING_PERCENT_STACKED = 'percentStacked';
    const GROUPING_STANDARD = 'standard';

    const DIRECTION_BAR = 'bar';
    const DIRECTION_HORIZONTAL = self::DIRECTION_BAR;
    const DIRECTION_COL = 'col';
    const DIRECTION_COLUMN = self::DIRECTION_COL;
    const DIRECTION_VERTICAL = self::DIRECTION_COL;

    const STYLE_LINEMARKER = 'lineMarker';
    const STYLE_SMOOTHMARKER = 'smoothMarker';
    const STYLE_MARKER = 'marker';
    const STYLE_FILLED = 'filled';

    const EMPTY_AS_GAP = 'gap';
    const EMPTY_AS_ZERO = 'zero';
    const EMPTY_AS_SPAN = 'span';
<<<<<<< HEAD

    /**
     * Series Plot Type.
     *
     * @var string
     */
    private $plotType;

    /**
     * Plot Grouping Type.
     *
     * @var string
     */
    private $plotGrouping;

    /**
     * Plot Direction.
     *
     * @var string
     */
    private $plotDirection;

    /**
     * Plot Style.
     *
     * @var null|string
     */
    private $plotStyle;
=======
    const DEFAULT_EMPTY_AS = self::EMPTY_AS_GAP;
    const VALID_EMPTY_AS = [self::EMPTY_AS_GAP, self::EMPTY_AS_ZERO, self::EMPTY_AS_SPAN];

    /**
     * Series Plot Type.
     */
    private ?string $plotType;

    /**
     * Plot Grouping Type.
     */
    private ?string $plotGrouping;

    /**
     * Plot Direction.
     */
    private string $plotDirection;

    /**
     * Plot Style.
     */
    private ?string $plotStyle;
>>>>>>> match

    /**
     * Order of plots in Series.
     *
     * @var int[]
     */
<<<<<<< HEAD
    private $plotOrder = [];
=======
    private array $plotOrder;
>>>>>>> match

    /**
     * Plot Label.
     *
     * @var DataSeriesValues[]
     */
<<<<<<< HEAD
    private $plotLabel = [];
=======
    private array $plotLabel;
>>>>>>> match

    /**
     * Plot Category.
     *
     * @var DataSeriesValues[]
     */
<<<<<<< HEAD
    private $plotCategory = [];

    /**
     * Smooth Line. Must be specified for both DataSeries and DataSeriesValues.
     *
     * @var bool
     */
    private $smoothLine;
=======
    private array $plotCategory;

    /**
     * Smooth Line. Must be specified for both DataSeries and DataSeriesValues.
     */
    private bool $smoothLine;
>>>>>>> match

    /**
     * Plot Values.
     *
     * @var DataSeriesValues[]
     */
<<<<<<< HEAD
    private $plotValues = [];
=======
    private array $plotValues;
>>>>>>> match

    /**
     * Plot Bubble Sizes.
     *
     * @var DataSeriesValues[]
     */
<<<<<<< HEAD
    private $plotBubbleSizes = [];
=======
    private array $plotBubbleSizes = [];
>>>>>>> match

    /**
     * Create a new DataSeries.
     *
<<<<<<< HEAD
     * @param null|mixed $plotType
     * @param null|mixed $plotGrouping
=======
>>>>>>> match
     * @param int[] $plotOrder
     * @param DataSeriesValues[] $plotLabel
     * @param DataSeriesValues[] $plotCategory
     * @param DataSeriesValues[] $plotValues
<<<<<<< HEAD
     * @param null|string $plotDirection
     * @param bool $smoothLine
     * @param null|string $plotStyle
     */
    public function __construct($plotType = null, $plotGrouping = null, array $plotOrder = [], array $plotLabel = [], array $plotCategory = [], array $plotValues = [], $plotDirection = null, $smoothLine = false, $plotStyle = null)
    {
=======
     */
    public function __construct(
        null|string $plotType = null,
        null|string $plotGrouping = null,
        array $plotOrder = [],
        array $plotLabel = [],
        array $plotCategory = [],
        array $plotValues = [],
        ?string $plotDirection = null,
        bool $smoothLine = false,
        ?string $plotStyle = null
    ) {
>>>>>>> match
        $this->plotType = $plotType;
        $this->plotGrouping = $plotGrouping;
        $this->plotOrder = $plotOrder;
        $keys = array_keys($plotValues);
        $this->plotValues = $plotValues;
        if (!isset($plotLabel[$keys[0]])) {
            $plotLabel[$keys[0]] = new DataSeriesValues();
        }
        $this->plotLabel = $plotLabel;

        if (!isset($plotCategory[$keys[0]])) {
            $plotCategory[$keys[0]] = new DataSeriesValues();
        }
        $this->plotCategory = $plotCategory;

<<<<<<< HEAD
        $this->smoothLine = $smoothLine;
=======
        $this->smoothLine = (bool) $smoothLine;
>>>>>>> match
        $this->plotStyle = $plotStyle;

        if ($plotDirection === null) {
            $plotDirection = self::DIRECTION_COL;
        }
        $this->plotDirection = $plotDirection;
    }

    /**
     * Get Plot Type.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getPlotType()
=======
     */
    public function getPlotType(): ?string
>>>>>>> match
    {
        return $this->plotType;
    }

    /**
     * Set Plot Type.
     *
<<<<<<< HEAD
     * @param string $plotType
     *
     * @return $this
     */
    public function setPlotType($plotType)
=======
     * @return $this
     */
    public function setPlotType(string $plotType): static
>>>>>>> match
    {
        $this->plotType = $plotType;

        return $this;
    }

    /**
     * Get Plot Grouping Type.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getPlotGrouping()
=======
     */
    public function getPlotGrouping(): ?string
>>>>>>> match
    {
        return $this->plotGrouping;
    }

    /**
     * Set Plot Grouping Type.
     *
<<<<<<< HEAD
     * @param string $groupingType
     *
     * @return $this
     */
    public function setPlotGrouping($groupingType)
=======
     * @return $this
     */
    public function setPlotGrouping(string $groupingType): static
>>>>>>> match
    {
        $this->plotGrouping = $groupingType;

        return $this;
    }

    /**
     * Get Plot Direction.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getPlotDirection()
=======
     */
    public function getPlotDirection(): string
>>>>>>> match
    {
        return $this->plotDirection;
    }

    /**
     * Set Plot Direction.
     *
<<<<<<< HEAD
     * @param string $plotDirection
     *
     * @return $this
     */
    public function setPlotDirection($plotDirection)
=======
     * @return $this
     */
    public function setPlotDirection(string $plotDirection): static
>>>>>>> match
    {
        $this->plotDirection = $plotDirection;

        return $this;
    }

    /**
     * Get Plot Order.
     *
     * @return int[]
     */
<<<<<<< HEAD
    public function getPlotOrder()
=======
    public function getPlotOrder(): array
>>>>>>> match
    {
        return $this->plotOrder;
    }

    /**
     * Get Plot Labels.
     *
     * @return DataSeriesValues[]
     */
<<<<<<< HEAD
    public function getPlotLabels()
=======
    public function getPlotLabels(): array
>>>>>>> match
    {
        return $this->plotLabel;
    }

    /**
     * Get Plot Label by Index.
     *
<<<<<<< HEAD
     * @param mixed $index
     *
     * @return DataSeriesValues|false
     */
    public function getPlotLabelByIndex($index)
=======
     * @return DataSeriesValues|false
     */
    public function getPlotLabelByIndex(int $index): bool|DataSeriesValues
>>>>>>> match
    {
        $keys = array_keys($this->plotLabel);
        if (in_array($index, $keys)) {
            return $this->plotLabel[$index];
        }

        return false;
    }

    /**
     * Get Plot Categories.
     *
     * @return DataSeriesValues[]
     */
<<<<<<< HEAD
    public function getPlotCategories()
=======
    public function getPlotCategories(): array
>>>>>>> match
    {
        return $this->plotCategory;
    }

    /**
     * Get Plot Category by Index.
     *
<<<<<<< HEAD
     * @param mixed $index
     *
     * @return DataSeriesValues|false
     */
    public function getPlotCategoryByIndex($index)
=======
     * @return DataSeriesValues|false
     */
    public function getPlotCategoryByIndex(int $index): bool|DataSeriesValues
>>>>>>> match
    {
        $keys = array_keys($this->plotCategory);
        if (in_array($index, $keys)) {
            return $this->plotCategory[$index];
        } elseif (isset($keys[$index])) {
            return $this->plotCategory[$keys[$index]];
        }

        return false;
    }

    /**
     * Get Plot Style.
<<<<<<< HEAD
     *
     * @return null|string
     */
    public function getPlotStyle()
=======
     */
    public function getPlotStyle(): ?string
>>>>>>> match
    {
        return $this->plotStyle;
    }

    /**
     * Set Plot Style.
     *
<<<<<<< HEAD
     * @param null|string $plotStyle
     *
     * @return $this
     */
    public function setPlotStyle($plotStyle)
=======
     * @return $this
     */
    public function setPlotStyle(?string $plotStyle): static
>>>>>>> match
    {
        $this->plotStyle = $plotStyle;

        return $this;
    }

    /**
     * Get Plot Values.
     *
     * @return DataSeriesValues[]
     */
<<<<<<< HEAD
    public function getPlotValues()
=======
    public function getPlotValues(): array
>>>>>>> match
    {
        return $this->plotValues;
    }

    /**
     * Get Plot Values by Index.
     *
<<<<<<< HEAD
     * @param mixed $index
     *
     * @return DataSeriesValues|false
     */
    public function getPlotValuesByIndex($index)
=======
     * @return DataSeriesValues|false
     */
    public function getPlotValuesByIndex(int $index): bool|DataSeriesValues
>>>>>>> match
    {
        $keys = array_keys($this->plotValues);
        if (in_array($index, $keys)) {
            return $this->plotValues[$index];
        }

        return false;
    }

    /**
     * Get Plot Bubble Sizes.
     *
     * @return DataSeriesValues[]
     */
    public function getPlotBubbleSizes(): array
    {
        return $this->plotBubbleSizes;
    }

    /**
     * Set Plot Bubble Sizes.
     *
     * @param DataSeriesValues[] $plotBubbleSizes
     */
    public function setPlotBubbleSizes(array $plotBubbleSizes): self
    {
        $this->plotBubbleSizes = $plotBubbleSizes;

        return $this;
    }

    /**
     * Get Number of Plot Series.
<<<<<<< HEAD
     *
     * @return int
     */
    public function getPlotSeriesCount()
=======
     */
    public function getPlotSeriesCount(): int
>>>>>>> match
    {
        return count($this->plotValues);
    }

    /**
     * Get Smooth Line.
<<<<<<< HEAD
     *
     * @return bool
     */
    public function getSmoothLine()
=======
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

    public function refresh(Worksheet $worksheet): void
    {
        foreach ($this->plotValues as $plotValues) {
<<<<<<< HEAD
            if ($plotValues !== null) {
                $plotValues->refresh($worksheet, true);
            }
        }
        foreach ($this->plotLabel as $plotValues) {
            if ($plotValues !== null) {
                $plotValues->refresh($worksheet, true);
            }
        }
        foreach ($this->plotCategory as $plotValues) {
            if ($plotValues !== null) {
                $plotValues->refresh($worksheet, false);
            }
=======
            $plotValues->refresh($worksheet, true);
        }
        foreach ($this->plotLabel as $plotValues) {
            $plotValues->refresh($worksheet, true);
        }
        foreach ($this->plotCategory as $plotValues) {
            $plotValues->refresh($worksheet, false);
        }
    }

    /**
     * Implement PHP __clone to create a deep clone, not just a shallow copy.
     */
    public function __clone()
    {
        $plotLabels = $this->plotLabel;
        $this->plotLabel = [];
        foreach ($plotLabels as $plotLabel) {
            $this->plotLabel[] = $plotLabel;
        }
        $plotCategories = $this->plotCategory;
        $this->plotCategory = [];
        foreach ($plotCategories as $plotCategory) {
            $this->plotCategory[] = clone $plotCategory;
        }
        $plotValues = $this->plotValues;
        $this->plotValues = [];
        foreach ($plotValues as $plotValue) {
            $this->plotValues[] = clone $plotValue;
        }
        $plotBubbleSizes = $this->plotBubbleSizes;
        $this->plotBubbleSizes = [];
        foreach ($plotBubbleSizes as $plotBubbleSize) {
            $this->plotBubbleSizes[] = clone $plotBubbleSize;
>>>>>>> match
        }
    }
}
