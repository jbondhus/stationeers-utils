<?php


namespace App\StationeersXML\Thing;

class CommsMotherboardSaveData extends MotherboardSaveData
{
    public const TYPE = 'comms_motherboard';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}