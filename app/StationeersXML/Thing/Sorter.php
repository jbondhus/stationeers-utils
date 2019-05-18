<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class Sorter extends Thing
{
    public const TYPE = 'sorter';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}