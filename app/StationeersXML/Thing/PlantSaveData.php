<?php


namespace App\StationeersXML\Thing;

class PlantSaveData extends StackableSaveData
{
    public const TYPE = 'plant';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}