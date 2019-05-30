<?php


namespace App\StationeersXML\Thing;

class AirConditionerSaveData extends MachineSaveData
{
    public const TYPE = 'air_conditioner';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}