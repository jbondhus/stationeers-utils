<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class DeviceImport extends Thing
{
    public const TYPE = 'device_import';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}