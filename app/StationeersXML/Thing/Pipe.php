<?php


namespace App\StationeersXML\Thing;

use App\StationeersXML\Thing;

class Pipe extends Thing
{
    public const TYPE = 'pipe';

    protected $pipe_network_id;

    public function __construct($dom_element)
    {
        parent::__construct($dom_element);

        $this->pipe_network_id = $this->get_node_value('PipeNetworkId');
    }

    public function get_pipe_network_id()
    {
        return $this->pipe_network_id;
    }

    public function get_is_burst()
    {
        return strtolower($this->get_node_value('IsBurst')) === 'true' ? true : false;
    }
}