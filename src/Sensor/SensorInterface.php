<?php

namespace Coff\Sensor;

interface SensorInterface
{
    public function getMeasureUnit();

    public function setDescription($description);

    public function getDescription();

    /**
     * Updates sensor from DataSource
     * @return \Coff\OneWire\Sensor\SensorInterface
     */
    public function update();

    /**
     * Returns sensor measure
     * @return double
     */
    public function getValue();
}