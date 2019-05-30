<?php


namespace App\StationeersXML\Thing;

class LogicReaderSaveData extends LogicBaseSaveData
{
    public const TYPE = 'logic_reader';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}