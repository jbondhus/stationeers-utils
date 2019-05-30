<?php


namespace App\StationeersXML\Thing;

class DoorSaveData extends StructureSaveData
{
    public const TYPE = 'door';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}