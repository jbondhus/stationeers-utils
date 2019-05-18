<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class BasketBase extends Thing
{
    public const TYPE = 'basket_base';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}