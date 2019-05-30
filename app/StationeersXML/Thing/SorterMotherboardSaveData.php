<?php


namespace App\StationeersXML\Thing;

class SorterMotherboardSaveData extends MultiMotherboardSaveData
{
    public const TYPE = 'sorter_motherboard';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}