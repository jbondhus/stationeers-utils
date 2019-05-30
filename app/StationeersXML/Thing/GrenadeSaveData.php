<?php


namespace App\StationeersXML\Thing;

class GrenadeSaveData extends DynamicThingSaveData
{
    public const TYPE = 'grenade';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}