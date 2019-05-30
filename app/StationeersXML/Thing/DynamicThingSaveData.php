<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\ThingSaveData;

class DynamicThingSaveData extends ThingSaveData
{
    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}