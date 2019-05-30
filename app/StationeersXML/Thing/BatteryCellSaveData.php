<?php


namespace App\StationeersXML\Thing;

class BatteryCellSaveData extends DynamicThingSaveData
{
    public const TYPE = 'battery_cell';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}