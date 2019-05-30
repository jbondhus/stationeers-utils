<?php


namespace App\StationeersXML\Thing;

class ChuteSaveData extends StructureSaveData
{
    public const TYPE = 'chute';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}