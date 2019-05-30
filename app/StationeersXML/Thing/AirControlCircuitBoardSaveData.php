<?php


namespace App\StationeersXML\Thing;

class AirControlCircuitBoardSaveData extends CircuitBoardSaveData
{
    public const TYPE = 'air_control_circuit_board';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}