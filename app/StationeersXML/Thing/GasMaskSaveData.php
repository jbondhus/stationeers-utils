<?php


namespace App\StationeersXML\Thing;

class GasMaskSaveData extends AtmosphericItemSaveData
{
    public const TYPE = 'gas_mask';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}