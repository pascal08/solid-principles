<?php

namespace Acme\Shapes;

use Acme\Shapes\Contracts\SolidInterface;

class Cone implements SolidInterface
{

    /**
     * @var float|int
     */
    private $height;

    /**
     * @var float|int
     */
    private $radius;

    /**
     * Cone constructor.
     *
     * @param float|int $radius
     * @param float|int $height
     */
    public function __construct($radius, $height)
    {
        $this->height = $height;
        $this->radius = $radius;
    }

    /**
     * @return float
     */
    public function volume()
    {
        return (1/3) * pi() * pow($this->radius, 2) * $this->height;
    }

    /**
     * @return float
     */
    public function surfaceArea()
    {
        return pi() * $this->radius * ($this->radius + sqrt(pow($this->radius, 2) + pow($this->height, 2)));
    }
}