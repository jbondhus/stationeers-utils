<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class AdvancedAirlockControl extends Thing
{
    public const TYPE = 'advanced_airlock_control';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}