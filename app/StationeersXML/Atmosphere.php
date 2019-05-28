<?php


namespace App\StationeersXML;


use SimpleXMLElement;

class Atmosphere
{
    protected $dom;

    protected $network_reference_id;
    protected $thing_reference_id;

    /**
     * Thing constructor.
     * @param SimpleXMLElement $dom_element
     */
    public function __construct($dom_element)
    {
        $this->dom = $dom_element;

        $this->network_reference_id = $this->get_node_value('NetworkReferenceId');
        $this->thing_reference_id = $this->get_node_value('ThingReferenceId');
    }

    protected function get_node_value($node_name)
    {
        /**
         * @var $data SimpleXMLElement
         */
        $data = $this->dom->$node_name;

        if ($data->count() === 0)
        {
            return null;
        }

        return (string)$data;
    }

    public function get_network_reference_id()
    {
        return $this->network_reference_id;
    }

    public function get_thing_reference_id()
    {
        return $this->thing_reference_id;
    }
}