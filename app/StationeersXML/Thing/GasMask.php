<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class GasMask extends Thing
{
    public const TYPE = 'gas_mask';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}