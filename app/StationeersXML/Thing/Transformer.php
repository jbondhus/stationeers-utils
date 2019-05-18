<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class Transformer extends Thing
{
    public const TYPE = 'transformer';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}