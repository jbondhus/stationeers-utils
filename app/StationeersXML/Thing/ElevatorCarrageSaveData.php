<?php


namespace App\StationeersXML\Thing;

class ElevatorCarrageSaveData extends DynamicThingSaveData
{
    public const TYPE = 'elevator_carrage';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}