<?php


namespace App\StationeersXML\Thing;

class FurnaceSaveData extends DeviceInputOutputImportExportSaveData
{
    public const TYPE = 'furnace';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}