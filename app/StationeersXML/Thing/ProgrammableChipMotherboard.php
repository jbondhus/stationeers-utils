<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class ProgrammableChipMotherboard extends Thing
{
    public const TYPE = 'programmable_chip_motherboard';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}