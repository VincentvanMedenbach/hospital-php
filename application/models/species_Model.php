<?php


class Species_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_species($species_id = false)
    {
        if ($species_id === false) {
            $query = $this->db->get('species');
            return $query->result_array();
        }
        $query = $this->db->get('species', array('species_id' => $species_id));
        return $query->row_array();
    }

    public function list_species()
    {
        $this->db->select('species_description,species_id');
        $query = $this->db->get('species');
        $listed = array();
        if ($results = $query->result()) {
            foreach ($results as $result) {
                $listed[$result->species_id] = $result;
            }
        }
        return $listed;
    }

    public
    function set_species()
    {
        echo "setting species";
        $this->load->helper('url');
        $data = array(
            'species_description' => $this->input->post('species_description'),
        );

        return $this->db->insert('species', $data);
    }

    function edit_species($species_id)
    {
        $Data = array(
            'species_description' => $this->input->post('species_description'),
            'species_id' => $species_id
        );
        $this->db->where('species_id', $species_id);
        $this->db->replace('species', $Data);
        return;
    }

    function delete_species($species_id)
    {
        $this->db->where('species_id', $species_id);
        $this->db->delete('species');
    }


}