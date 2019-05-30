<?php


namespace App\StationeersXML\Thing;

class CircuitHousingSaveData extends LogicBaseSaveData
{
    public const TYPE = 'circuit_housing';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}