<?php


namespace App\StationeersXML\Thing;

class BatterySaveData extends MachineSaveData
{
    public const TYPE = 'battery';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}