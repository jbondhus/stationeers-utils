<?php


namespace App\StationeersXML\Thing;

class DeviceInputOutputImportSaveData extends DeviceAtmosphericSaveData
{
    public const TYPE = 'device_input_output_import';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}