<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\ThingSaveData;

class StructureSaveData extends ThingSaveData
{
    public const TYPE = 'structure';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}