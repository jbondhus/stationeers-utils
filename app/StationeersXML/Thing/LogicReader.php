<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class LogicReader extends Thing
{
    public const TYPE = 'logic_reader';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}