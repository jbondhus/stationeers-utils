<?php


namespace App\StationeersXML\Thing;

class LogicBatchWriterSaveData extends LogicBaseSaveData
{
    public const TYPE = 'logic_batch_writer';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}