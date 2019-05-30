<?php


namespace App\StationeersXML\Thing;

class LogicBatchSlotReaderSaveData extends LogicBaseSaveData
{
    public const TYPE = 'logic_batch_slot_reader';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}