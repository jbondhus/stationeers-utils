<?php


namespace App\StationeersXML\Thing;

class ChickenSaveData extends EntitySaveData
{
    public const TYPE = 'chicken';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}