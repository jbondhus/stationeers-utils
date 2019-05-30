<?php


namespace App\StationeersXML\Thing;

class ProgrammableChipMotherboardSaveData extends MotherboardSaveData
{
    public const TYPE = 'programmable_chip_motherboard';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}