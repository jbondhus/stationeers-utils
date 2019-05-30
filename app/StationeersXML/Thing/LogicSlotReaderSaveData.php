<?php


namespace App\StationeersXML\Thing;

class LogicSlotReaderSaveData extends LogicBaseSaveData
{
    public const TYPE = 'logic_slot_reader';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}