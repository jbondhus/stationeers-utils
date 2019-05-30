<?php


namespace App\StationeersXML\Thing;

class AdvAirlockControldSaveData extends CircuitBoardSaveData
{
    public const TYPE = 'advanced_airlock_control';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}