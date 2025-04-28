<?php

namespace PhpOffice\PhpSpreadsheet\Chart;

use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PlotArea
{
    /**
     * No fill in plot area (show Excel gridlines through chart).
<<<<<<< HEAD
     *
     * @var bool
     */
    private $noFill = false;
=======
     */
    private bool $noFill = false;
>>>>>>> match

    /**
     * PlotArea Gradient Stop list.
     * Each entry is a 2-element array.
     *     First is position in %.
     *     Second is ChartColor.
     *
     * @var array[]
     */
<<<<<<< HEAD
    private $gradientFillStops = [];

    /**
     * PlotArea Gradient Angle.
     *
     * @var ?float
     */
    private $gradientFillAngle;

    /**
     * PlotArea Layout.
     *
     * @var ?Layout
     */
    private $layout;
=======
    private array $gradientFillStops = [];

    /**
     * PlotArea Gradient Angle.
     */
    private ?float $gradientFillAngle = null;

    /**
     * PlotArea Layout.
     */
    private ?Layout $layout;
>>>>>>> match

    /**
     * Plot Series.
     *
     * @var DataSeries[]
     */
<<<<<<< HEAD
    private $plotSeries = [];
=======
    private array $plotSeries;
>>>>>>> match

    /**
     * Create a new PlotArea.
     *
     * @param DataSeries[] $plotSeries
     */
    public function __construct(?Layout $layout = null, array $plotSeries = [])
    {
        $this->layout = $layout;
        $this->plotSeries = $plotSeries;
    }

    public function getLayout(): ?Layout
    {
        return $this->layout;
    }

    /**
     * Get Number of Plot Groups.
     */
    public function getPlotGroupCount(): int
    {
        return count($this->plotSeries);
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
    public function getPlotSeriesCount(): int|float
>>>>>>> match
    {
        $seriesCount = 0;
        foreach ($this->plotSeries as $plot) {
            $seriesCount += $plot->getPlotSeriesCount();
        }

        return $seriesCount;
    }

    /**
     * Get Plot Series.
     *
     * @return DataSeries[]
     */
<<<<<<< HEAD
    public function getPlotGroup()
=======
    public function getPlotGroup(): array
>>>>>>> match
    {
        return $this->plotSeries;
    }

    /**
     * Get Plot Series by Index.
<<<<<<< HEAD
     *
     * @param mixed $index
     *
     * @return DataSeries
     */
    public function getPlotGroupByIndex($index)
=======
     */
    public function getPlotGroupByIndex(int $index): DataSeries
>>>>>>> match
    {
        return $this->plotSeries[$index];
    }

    /**
     * Set Plot Series.
     *
     * @param DataSeries[] $plotSeries
     *
     * @return $this
     */
<<<<<<< HEAD
    public function setPlotSeries(array $plotSeries)
=======
    public function setPlotSeries(array $plotSeries): static
>>>>>>> match
    {
        $this->plotSeries = $plotSeries;

        return $this;
    }

    public function refresh(Worksheet $worksheet): void
    {
        foreach ($this->plotSeries as $plotSeries) {
            $plotSeries->refresh($worksheet);
        }
    }

    public function setNoFill(bool $noFill): self
    {
        $this->noFill = $noFill;

        return $this;
    }

    public function getNoFill(): bool
    {
        return $this->noFill;
    }

    public function setGradientFillProperties(array $gradientFillStops, ?float $gradientFillAngle): self
    {
        $this->gradientFillStops = $gradientFillStops;
        $this->gradientFillAngle = $gradientFillAngle;

        return $this;
    }

    /**
     * Get gradientFillAngle.
     */
    public function getGradientFillAngle(): ?float
    {
        return $this->gradientFillAngle;
    }

    /**
     * Get gradientFillStops.
<<<<<<< HEAD
     *
     * @return array
     */
    public function getGradientFillStops()
=======
     */
    public function getGradientFillStops(): array
>>>>>>> match
    {
        return $this->gradientFillStops;
    }

<<<<<<< HEAD
    /** @var ?int */
    private $gapWidth;

    /** @var bool */
    private $useUpBars = false;

    /** @var bool */
    private $useDownBars = false;
=======
    private ?int $gapWidth = null;

    private bool $useUpBars = false;

    private bool $useDownBars = false;
>>>>>>> match

    public function getGapWidth(): ?int
    {
        return $this->gapWidth;
    }

    public function setGapWidth(?int $gapWidth): self
    {
        $this->gapWidth = $gapWidth;

        return $this;
    }

    public function getUseUpBars(): bool
    {
        return $this->useUpBars;
    }

    public function setUseUpBars(bool $useUpBars): self
    {
        $this->useUpBars = $useUpBars;

        return $this;
    }

    public function getUseDownBars(): bool
    {
        return $this->useDownBars;
    }

    public function setUseDownBars(bool $useDownBars): self
    {
        $this->useDownBars = $useDownBars;

        return $this;
    }
<<<<<<< HEAD
=======

    /**
     * Implement PHP __clone to create a deep clone, not just a shallow copy.
     */
    public function __clone()
    {
        $this->layout = ($this->layout === null) ? null : clone $this->layout;
        $plotSeries = $this->plotSeries;
        $this->plotSeries = [];
        foreach ($plotSeries as $series) {
            $this->plotSeries[] = clone $series;
        }
    }
>>>>>>> match
}
