<?php


namespace App\StationeersXML\Thing;

class SatelliteDishSaveData extends RotatableDeviceSaveData
{
    public const TYPE = 'satellite_dish';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}