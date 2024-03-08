<?php

class Tempconverter_Model_Converter extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Tempconverter_Model_Resource_Converter';
        $this->_collectionClass = 'Tempconverter_Model_Resource_Collection_Converter';
        $this->_modelClass = "tempconverter/converter";
    }

    public function getTempResult($data)
    {
        $userTemp = $data['temprature'];
        $unit = $data['unit'];
        $convertUnit = $data['convert_unit'];
        $resultTemp = $data['result'];
        if ($unit == $convertUnit) {
            $data['result'] = $userTemp;
        } else {
            if ($unit == 'Celsius') {
                if ($convertUnit == 'Fahrenheit') {
                    $data['result'] = ($userTemp * 9 / 5) + 32;
                } else {
                    $data['result'] = $userTemp + 273.15;
                }
            }
            if ($unit == 'Fahrenheit') {
                if ($convertUnit == 'Celsius') {
                    $data['result'] = ($userTemp - 32) * 5 / 9;
                } else {
                    $data['result'] = ($userTemp - 32) * 5 / 9 + 273.15;
                }
            }
            if ($unit == 'Kelvin') {
                if ($convertUnit == 'Celsius') {
                    $data['result'] = $userTemp - 273.15;
                } else {
                    $data['result'] = ($userTemp - 273.15) * 9 / 5 + 32;
                }
            }
        }
        return $data;
    }
}
