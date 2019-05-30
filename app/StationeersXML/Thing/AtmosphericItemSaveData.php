<?php


namespace App\StationeersXML\Thing;

class AtmosphericItemSaveData extends DynamicThingSaveData
{
    public const TYPE = 'atmospheric_item';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}