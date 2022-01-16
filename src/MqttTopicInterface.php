<?php

namespace Coff\Sensor;

interface MqttTopicInterface
{
    /**
     * @param string $topic
     * @return $this
     */
    public function setMqttBaseTopic($topic);

    /**
     * @return string
     */
    public function getMqttBaseTopic();

    /**
     * @param string $suffix
     * @return $this
     */
    public function setMqttTimestampSuffix($suffix);

    /**
     * @return string
     */
    public function getMqttTimestampSuffix();
    /**
     * @param string $suffix
     * @return $this
     */
    public function setMqttValueSuffix($suffix);

    /**
     * @return string
     */
    public function getMqttValueSuffix();

    public function getMqttTimestampTopic();

    public function getMqttValueTopic();
}