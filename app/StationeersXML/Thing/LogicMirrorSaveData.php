<?php


namespace App\StationeersXML\Thing;

class LogicMirrorSaveData extends StructureSaveData
{
    public const TYPE = 'logic_mirror';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}