<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class LogicWriter extends Thing
{
    public const TYPE = 'logic_writer';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}