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

    public function get_atmospherics_mols()
    {
        $mols = [];

        $gas_types = [
            'Oxygen',
            'Nitrogen',
            'CarbonDioxide',
            'Volatiles',
            'Chlorine',
            'Water',
            'NitrousOxide',
        ];

        foreach ($gas_types as $gas_type)
        {
            $mols[$gas_type] = 0.0;
        }

        foreach ($this->doc->Atmospheres->AtmosphereSaveData as $atmosphere_element)
        {
            foreach ($gas_types as $gas_type)
            {
                $mols[$gas_type] += floatval($atmosphere_element->$gas_type);
            }
        }

        foreach ($mols as $type=>&$amount)
        {
            $amount = round($amount, 2);
        }

        return array_reverse(array_sort($mols));
    }
}