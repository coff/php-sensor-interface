<?php

namespace Coff\Sensor;

use Coff\DataSource\DataSourceInterface;

abstract class MqttSensor extends Sensor implements MqttTopicInterface
{
    protected $mqttBaseTopic;
    protected $mqttValueSuffix = 'value';
    protected $mqttTimestampSuffix = 'stamp';

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