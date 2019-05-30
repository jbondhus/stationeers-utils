<?php


namespace App\StationeersXML\Thing;

class RoadflareSaveData extends StackableSaveData
{
    public const TYPE = 'road_flare';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}