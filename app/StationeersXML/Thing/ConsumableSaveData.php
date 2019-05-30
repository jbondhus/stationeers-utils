<?php


namespace App\StationeersXML\Thing;

class ConsumableSaveData extends DynamicThingSaveData
{
    public const TYPE = 'consumable';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}