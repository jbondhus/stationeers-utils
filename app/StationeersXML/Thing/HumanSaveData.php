<?php


namespace App\StationeersXML\Thing;

class HumanSaveData extends EntitySaveData
{
    public const TYPE = 'human';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}