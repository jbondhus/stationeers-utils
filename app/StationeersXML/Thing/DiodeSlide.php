<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class DiodeSlide extends Thing
{
    public const TYPE = 'diode_slide';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}