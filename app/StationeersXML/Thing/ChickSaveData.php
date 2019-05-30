<?php


namespace App\StationeersXML\Thing;

class ChickSaveData extends EntitySaveData
{
    public const TYPE = 'chick';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}