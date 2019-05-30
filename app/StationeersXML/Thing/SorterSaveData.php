<?php


namespace App\StationeersXML\Thing;

class SorterSaveData extends DeviceImportExportSaveData
{
    public const TYPE = 'sorter';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}