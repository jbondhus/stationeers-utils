<?php


namespace App\StationeersXML\Thing;

class BrainSaveData extends DynamicThingSaveData
{
    public const TYPE = 'brain';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}