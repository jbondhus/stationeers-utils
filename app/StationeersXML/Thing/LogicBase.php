<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class LogicBase extends Thing
{
    public const TYPE = 'logic_base';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}