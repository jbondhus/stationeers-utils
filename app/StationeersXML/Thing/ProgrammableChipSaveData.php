<?php


namespace App\StationeersXML\Thing;

class ProgrammableChipSaveData extends DynamicThingSaveData
{
    public const TYPE = 'programmable_chip';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}