<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class SorterMotherboard extends Thing
{
    public const TYPE = 'sorter_motherboard';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}