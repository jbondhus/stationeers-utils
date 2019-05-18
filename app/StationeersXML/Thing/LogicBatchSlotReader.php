<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class LogicBatchSlotReader extends Thing
{
    public const TYPE = 'logic_batch_slot_reader';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}