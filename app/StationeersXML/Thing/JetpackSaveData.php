<?php


namespace App\StationeersXML\Thing;

class JetpackSaveData extends AtmosphericItemSaveData
{
    public const TYPE = 'jetpack';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}