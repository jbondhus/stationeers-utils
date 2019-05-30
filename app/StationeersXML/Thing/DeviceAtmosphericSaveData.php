<?php


namespace App\StationeersXML\Thing;

class DeviceAtmosphericSaveData extends StructureSaveData
{
    public const TYPE = 'device_atmospheric';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}