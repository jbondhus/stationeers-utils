<?php


namespace App\StationeersXML\Thing;

class EntitySaveData extends DynamicThingSaveData
{
    public const TYPE = 'entity';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}