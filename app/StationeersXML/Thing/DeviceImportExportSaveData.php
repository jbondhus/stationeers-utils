<?php


namespace App\StationeersXML\Thing;

class DeviceImportExportSaveData extends DeviceImportSaveData
{
    public const TYPE = 'device_import_export';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}