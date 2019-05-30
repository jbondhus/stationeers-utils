<?php


namespace App\StationeersXML\Thing;

class LogicBaseSaveData extends StructureSaveData
{
    public const TYPE = 'logic_base';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}