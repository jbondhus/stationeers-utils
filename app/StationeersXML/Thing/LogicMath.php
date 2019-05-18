<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class LogicMath extends Thing
{
    public const TYPE = 'logic_math';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}