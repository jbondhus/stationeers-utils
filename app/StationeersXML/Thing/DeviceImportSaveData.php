<?php


namespace App\StationeersXML\Thing;

class DeviceImportSaveData extends StructureSaveData
{
    public const TYPE = 'device_import';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}