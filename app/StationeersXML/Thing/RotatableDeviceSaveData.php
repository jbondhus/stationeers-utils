<?php


namespace App\StationeersXML\Thing;

class RotatableDeviceSaveData extends StructureSaveData
{
    public const TYPE = 'rotatable_device';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}