<?php


namespace App\StationeersXML\Thing;

class SimpleFabricatorSaveData extends DeviceImportExportSaveData
{
    public const TYPE = 'simple_fabricator';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}