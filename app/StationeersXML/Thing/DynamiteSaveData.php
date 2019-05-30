<?php


namespace App\StationeersXML\Thing;

class DynamiteSaveData extends DynamicThingSaveData
{
    public const TYPE = 'dynamite';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}