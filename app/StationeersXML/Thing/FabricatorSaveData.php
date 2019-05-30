<?php


namespace App\StationeersXML\Thing;

class FabricatorSaveData extends StructureSaveData
{
    public const TYPE = 'fabricator';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}