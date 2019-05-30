<?php


namespace App\StationeersXML\Thing;

class MotherboardSaveData extends DynamicThingSaveData
{
    public const TYPE = 'motherboard';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}