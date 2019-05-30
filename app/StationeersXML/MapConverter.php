<?php


namespace App\StationeersXML;


use DOMElement;
use FluidXml\FluidXml;

class MapConverter
{
    protected $xml;

    protected $doc;

    public function __construct($xml)
    {
        $this->xml = $xml;

        $this->doc = simplexml_load_string($this->xml);
    }

    public function get_pipe_networks()
    {
        $networks = $this->doc->PipeNetworks->NetworkId;

        $network_ids = [];

        foreach ($networks as $network)
        {
            $network_ids[] = (string)$network;
        }

        return $network_ids;
    }

    public function get_cable_networks()
    {
        $networks = $this->doc->CableNetworks->NetworkId;

        $network_ids = [];

        foreach ($networks as $network)
        {
            $network_ids[] = (string)$network;
        }

        return $network_ids;
    }

    public function get_things()
    {
        $things = [];

        foreach ($this->doc->Things->ThingSaveData as $thing_element)
        {
            $type = (string)$thing_element->attributes('xsi', true)->type;

            $class = "App\\StationeersXML\\Thing\\$type";

            /**
             * @var ThingSaveData $thing
             */
            $thing = new $class($thing_element);

            $things[$thing->get_reference_id()] = $thing;
        }

        return $things;
    }


    public function get_atmospheres()
    {
        $atmospheres = [];

        foreach ($this->doc->Atmospheres->AtmosphereSaveData as $atmosphere_element)
        {
            $atmospheres[] = new AtmosphereSaveData($atmosphere_element);
        }

        return $atmospheres;
    }
}