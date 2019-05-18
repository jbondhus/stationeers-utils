<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class LogicSlotReader extends Thing
{
    public const TYPE = 'logic_slot_reader';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}