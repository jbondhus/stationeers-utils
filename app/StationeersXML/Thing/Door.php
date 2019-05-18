<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class Door extends Thing
{
    public const TYPE = 'door';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}