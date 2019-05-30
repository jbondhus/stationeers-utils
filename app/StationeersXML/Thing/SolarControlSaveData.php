<?php


namespace App\StationeersXML\Thing;

class SolarControlSaveData extends MotherboardSaveData
{
    public const TYPE = 'solar_control';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}