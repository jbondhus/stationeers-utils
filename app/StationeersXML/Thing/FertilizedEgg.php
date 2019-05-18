<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class FertilizedEgg extends Thing
{
    public const TYPE = 'fertilized_egg';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}