<?php


namespace App\StationeersXML\Thing;

class StackerSaveData extends SlotHandlerBaseSaveData
{
    public const TYPE = 'stacker';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}