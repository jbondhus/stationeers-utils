<?php


namespace App\StationeersXML\Thing;

class SlotHandlerBaseSaveData extends DeviceImportExportSaveData
{
    public const TYPE = 'slot_handler_base';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}