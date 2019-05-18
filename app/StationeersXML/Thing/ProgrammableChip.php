<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class ProgrammableChip extends Thing
{
    public const TYPE = 'programmable_chip';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}