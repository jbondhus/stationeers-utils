<?php


namespace App\StationeersXML;


class MapStats
{
    protected $xml;

    protected $doc;

    public function __construct($xml)
    {
        $this->xml = $xml;

        $this->doc = simplexml_load_string($this->xml);
    }

    public function get_thing_counts()
    {
        $counts = [];

        foreach ($this->doc->Things->ThingSaveData as $thing_element)
        {
            $type = (string)$thing_element->attributes('xsi', true)->type;

            if (!isset($counts[$type]))
            {
                $counts[$type] = 0;
            }

            $counts[$type]++;
        }

        return array_reverse(array_sort($counts));
    }
}