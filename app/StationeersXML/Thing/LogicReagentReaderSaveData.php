<?php


namespace App\StationeersXML\Thing;

class LogicReagentReaderSaveData extends LogicBaseSaveData
{
    public const TYPE = 'logic_reagent_reader';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}