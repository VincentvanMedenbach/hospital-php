<?php

class Client_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_clients($client_id = false)
    {
        if ($client_id === false) {
            $query = $this->db->get('clients');
            return $query->result_array();
        }
        $query = $this->db->get('clients', array('client_id' => $client_id));
        return $query->row_array();
    }

    public function list_clients()
    {
        $this->db->select('client_firstname,client_lastname,client_id');
        $query = $this->db->get('clients');
        $listed = array();
        if ($results = $query->result()) {
            foreach ($results as $result) {
                $listed[$result->client_id] = $result;
            }
        }
        return $listed;
    }

    public
    function set_clients()
    {
        echo "setting clients";
        $this->load->helper('url');
        $data = array(
            'client_firstname' => $this->input->post('client_firstname'),
            'client_lastname' => $this->input->post('client_lastname'),
        );

        return $this->db->insert('clients', $data);
    }
    function edit_clients($client_id)
    {
        $Data = array(
            'client_firstname' => $this->input->post('client_firstname'),
            'client_lastname' => $this->input->post('client_lastname'),
            'client_id' => $client_id
        );
        $this->db->where('client_id', $client_id);
        $this->db->replace('clients', $Data);
        return;
    }
    function delete_clients($client_id)
    {
        $this->db->where('client_id', $client_id);
        $this->db->delete('clients');
    }


}