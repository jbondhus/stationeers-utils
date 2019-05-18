<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class Fabricator extends Thing
{
    public const TYPE = 'fabricator';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}