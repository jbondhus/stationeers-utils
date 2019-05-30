<?php


namespace App\StationeersXML\Thing;

class TransformerSaveData extends MachineSaveData
{
    public const TYPE = 'transformer';

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);
    }
}