<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class DeviceInputOutputImportExport extends Thing
{
    public const TYPE = 'device_input_output_import_export';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}