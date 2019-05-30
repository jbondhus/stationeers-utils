<?php


namespace App\StationeersXML\Thing;

class SolarPanelSaveData extends RotatableDeviceSaveData
{
    public const TYPE = 'solar_panel';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}