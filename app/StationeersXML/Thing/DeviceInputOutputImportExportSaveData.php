<?php


namespace App\StationeersXML\Thing;

class DeviceInputOutputImportExportSaveData extends DeviceInputOutputImportSaveData
{
    public const TYPE = 'device_input_output_import_export';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}