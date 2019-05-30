<?php


namespace App\StationeersXML\Thing;

class DiodeSlideSaveData extends StructureSaveData
{
    public const TYPE = 'diode_slide';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}