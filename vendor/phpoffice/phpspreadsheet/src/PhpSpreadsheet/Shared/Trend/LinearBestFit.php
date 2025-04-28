<?php

namespace PhpOffice\PhpSpreadsheet\Shared\Trend;

class LinearBestFit extends BestFit
{
    /**
     * Algorithm type to use for best-fit
     * (Name of this Trend class).
<<<<<<< HEAD
     *
     * @var string
     */
    protected $bestFitType = 'linear';
=======
     */
    protected string $bestFitType = 'linear';
>>>>>>> match

    /**
     * Return the Y-Value for a specified value of X.
     *
     * @param float $xValue X-Value
     *
     * @return float Y-Value
     */
<<<<<<< HEAD
    public function getValueOfYForX($xValue)
=======
    public function getValueOfYForX(float $xValue): float
>>>>>>> match
    {
        return $this->getIntersect() + $this->getSlope() * $xValue;
    }

    /**
     * Return the X-Value for a specified value of Y.
     *
     * @param float $yValue Y-Value
     *
     * @return float X-Value
     */
<<<<<<< HEAD
    public function getValueOfXForY($yValue)
=======
    public function getValueOfXForY(float $yValue): float
>>>>>>> match
    {
        return ($yValue - $this->getIntersect()) / $this->getSlope();
    }

    /**
     * Return the Equation of the best-fit line.
     *
     * @param int $dp Number of places of decimal precision to display
<<<<<<< HEAD
     *
     * @return string
     */
    public function getEquation($dp = 0)
=======
     */
    public function getEquation(int $dp = 0): string
>>>>>>> match
    {
        $slope = $this->getSlope($dp);
        $intersect = $this->getIntersect($dp);

        return 'Y = ' . $intersect . ' + ' . $slope . ' * X';
    }

    /**
     * Execute the regression and calculate the goodness of fit for a set of X and Y data values.
     *
     * @param float[] $yValues The set of Y-values for this regression
     * @param float[] $xValues The set of X-values for this regression
     */
    private function linearRegression(array $yValues, array $xValues, bool $const): void
    {
        $this->leastSquareFit($yValues, $xValues, $const);
    }

    /**
     * Define the regression and calculate the goodness of fit for a set of X and Y data values.
     *
     * @param float[] $yValues The set of Y-values for this regression
     * @param float[] $xValues The set of X-values for this regression
<<<<<<< HEAD
     * @param bool $const
     */
    public function __construct($yValues, $xValues = [], $const = true)
=======
     */
    public function __construct(array $yValues, array $xValues = [], bool $const = true)
>>>>>>> match
    {
        parent::__construct($yValues, $xValues);

        if (!$this->error) {
            $this->linearRegression($yValues, $xValues, (bool) $const);
        }
    }
}
