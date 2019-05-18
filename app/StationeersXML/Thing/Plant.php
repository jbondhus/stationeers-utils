<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class Plant extends Thing
{
    public const TYPE = 'plant';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}