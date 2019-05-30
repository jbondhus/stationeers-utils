<?php


namespace App\StationeersXML\Thing;

class LogicWriterSwitchSaveData extends LogicBaseSaveData
{
    public const TYPE = 'logic_writer_switch';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}