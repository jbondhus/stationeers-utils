<?php


namespace App\StationeersXML\Thing;

class DockSaveData extends StructureSaveData
{
    public const TYPE = 'dock';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}