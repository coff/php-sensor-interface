<?php

namespace Coff\Sensor;

use Coff\DataSource\DataSourceInterface;

abstract class MqttSensor extends Sensor implements MqttTopicInterface
{
    public static $defaultMqttValueSuffix = 'value';
    public static $defaultMqttTimetampSuffix = 'stamp';

    protected $mqttBaseTopic;
    protected $mqttValueSuffix;
    protected $mqttTimestampSuffix;

    public function __construct()
    {
        parent::__construct();

        $this->mqttValueSuffix = self::$defaultMqttValueSuffix;
        $this->mqttTimestampSuffix = self::$defaultMqttTimetampSuffix;
    }

    public function setMqttBaseTopic($topic)
    {
        $this->mqttBaseTopic = $topic;
        return $this;
    }

    public function getMqttBaseTopic()
    {
        return $this->mqttBaseTopic;
    }

    public function setMqttValueSuffix($suffix)
    {
        $this->mqttValueSuffix = $suffix;
        return $this;
    }

    public function getMqttValueSuffix()
    {
        return $this->mqttValueSuffix;
    }

    public function setMqttTimestampSuffix($suffix)
    {
        $this->mqttTimestampSuffix = $suffix;
        return $this;
    }

    public function getMqttTimestampSuffix()
    {
        return $this->mqttTimestampSuffix;
    }

    public function getMqttTimestampTopic()
    {
        return $this->mqttBaseTopic . '/' . $this->mqttTimestampSuffix;
    }

    public function getMqttValueTopic()
    {
        return $this->mqttBaseTopic . '/' . $this->mqttValueSuffix;
    }
}