<?php


namespace App\StationeersXML\Thing;

class DynamicGasCanisterSaveData extends DynamicThingSaveData
{
    public const TYPE = 'dynamic_gas_canister';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}