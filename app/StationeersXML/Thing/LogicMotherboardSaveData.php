<?php


namespace App\StationeersXML\Thing;

class LogicMotherboardSaveData extends MotherboardSaveData
{
    public const TYPE = 'logic_motherboard';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}