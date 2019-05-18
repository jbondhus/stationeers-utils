<?php


namespace App\StationeersXML;


use DOMElement;

class Thing
{
    protected $dom;

    protected $reference_id;
    protected $parent_reference_id;

    public const TYPE = 'generic';

    /**
     * Thing constructor.
     * @param DOMElement $dom_element
     */
    public function __construct($dom_element)
    {
        $this->dom = $dom_element;

        $this->reference_id = $this->get_node_value('ReferenceId');
        $this->parent_reference_id = $this->get_node_value('ParentReferenceId');
    }

    protected function get_node_value($node_name)
    {
        $data = $this->dom->getElementsByTagName($node_name);

        if ($data->count() === 0)
        {
            return null;
        }

        $dom_element = $data->item(0);

        return $dom_element->nodeValue;
    }

    public function get_reference_id()
    {
        return $this->reference_id;
    }

    public function get_parent_reference_id()
    {
        return $this->parent_reference_id;
    }
}