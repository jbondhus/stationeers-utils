<?php


namespace App\StationeersXML\Thing;

class FertilizedEggSaveData extends DynamicThingSaveData
{
    public const TYPE = 'dynamic_thing';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}