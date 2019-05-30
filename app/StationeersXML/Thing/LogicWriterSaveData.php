<?php


namespace App\StationeersXML\Thing;

class LogicWriterSaveData extends LogicBaseSaveData
{
    public const TYPE = 'logic_writer';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}