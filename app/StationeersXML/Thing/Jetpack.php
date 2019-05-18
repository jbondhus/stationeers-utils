<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class Jetpack extends Thing
{
    public const TYPE = 'jetpack';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}