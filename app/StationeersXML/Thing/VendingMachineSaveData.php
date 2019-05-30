<?php


namespace App\StationeersXML\Thing;

class VendingMachineSaveData extends MachineSaveData
{
    public const TYPE = 'vending_machine';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}