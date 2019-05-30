<?php


namespace App\StationeersXML\Thing;

class SpeakerSaveData extends StructureSaveData
{
    public const TYPE = 'speaker';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}