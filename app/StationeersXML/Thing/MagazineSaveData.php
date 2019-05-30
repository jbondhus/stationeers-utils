<?php


namespace App\StationeersXML\Thing;

class MagazineSaveData extends DynamicThingSaveData
{
    public const TYPE = 'magazine';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}