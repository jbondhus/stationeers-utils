<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class DynamicGasCanister extends Thing
{
    public const TYPE = 'dynamic_gas_canister';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}