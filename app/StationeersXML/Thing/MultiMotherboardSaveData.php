<?php


namespace App\StationeersXML\Thing;

class MultiMotherboardSaveData extends MotherboardSaveData
{
    public const TYPE = 'multi_motherboard';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}