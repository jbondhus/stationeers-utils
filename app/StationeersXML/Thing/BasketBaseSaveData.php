<?php


namespace App\StationeersXML\Thing;

class BasketBaseSaveData extends StructureSaveData
{
    public const TYPE = 'basket_base';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}