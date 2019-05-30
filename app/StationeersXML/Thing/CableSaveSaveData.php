<?php


namespace App\StationeersXML\Thing;

class CableSaveSaveData extends StructureSaveData
{
    protected $cable_network_id;

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);

        $this->cable_network_id = $this->get_node_value('CableNetworkId');
    }

    public function get_cable_network_id()
    {
        return $this->cable_network_id;
    }
}