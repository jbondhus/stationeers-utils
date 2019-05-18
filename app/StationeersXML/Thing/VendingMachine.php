<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class VendingMachine extends Thing
{
    public const TYPE = 'vending_machine';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}