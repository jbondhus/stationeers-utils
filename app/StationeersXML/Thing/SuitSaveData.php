<?php


namespace App\StationeersXML\Thing;

class SuitSaveData extends AtmosphericItemSaveData
{
    public const TYPE = 'suit';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}