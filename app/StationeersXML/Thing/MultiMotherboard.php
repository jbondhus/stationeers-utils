<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class MultiMotherboard extends Thing
{
    public const TYPE = 'multi_motherboard';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}