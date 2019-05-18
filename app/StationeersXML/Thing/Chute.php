<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class Chute extends Thing
{
    public const TYPE = 'chute';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}