<?php


namespace App\StationeersXML\Thing;

class CircuitBoardSaveData extends MotherboardSaveData
{
    public const TYPE = 'circuit_board';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}