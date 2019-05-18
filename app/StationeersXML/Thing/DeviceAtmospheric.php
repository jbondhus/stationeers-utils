<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class DeviceAtmospheric extends Thing
{
    public const TYPE = 'device_atmospheric';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}