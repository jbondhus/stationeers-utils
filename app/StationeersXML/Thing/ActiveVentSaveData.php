<?php


namespace App\StationeersXML\Thing;

class ActiveVentSaveData extends DeviceAtmosphericSaveData
{
    public const TYPE = 'active_vent';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}