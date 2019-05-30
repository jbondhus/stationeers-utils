<?php


namespace App\StationeersXML\Thing;

class MixingMachineSaveData extends MachineSaveData
{
    public const TYPE = 'mixing_machine';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}