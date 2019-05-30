<?php


namespace App\StationeersXML\Thing;

class StackableSaveData extends DynamicThingSaveData
{
    public const TYPE = 'stackable';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}