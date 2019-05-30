<?php


namespace App\StationeersXML\Thing;

class MachineSaveData extends StructureSaveData
{
    public const TYPE = 'machine';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}