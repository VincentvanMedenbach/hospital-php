<?php

class patient_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_patients($species_description = false)
    {
        if ($species_description === false) {
            $query = $this->db->get('patients');
            return $query->result_array();
        }
        $query = $this->db->get_where('patients', array('species_description' => $species_description));
        return $query->row_array();
    }


    public function list_patients()
    {
        $this->db->select('patient_name,client_firstname,patient_status,species_description,patient_id');
        $query = $this->db->get('patients');
        $listed = array();
        if ($results = $query->result()) {
            foreach ($results as $result) {
                $listed[$result->patient_id] = $result;
            }
        }
        return $listed;
    }

    public
    function set_patients()
    {
        echo "setting patients";
        $this->load->helper('url');
        $data = array(
            'patient_name' => $this->input->post('patient_name'),
            'species_description' => $this->input->post('patient_description'),
            'client_firstname' => $this->input->post('client_firstname'),
            'patient_status' => $this->input->post('patient_status'),
        );

        return $this->db->insert('patients', $data);
    }
    function edit_patients($species_description)
    {
        $Data = array(
            'patient_name' => $this->input->post('patient_name'),
            'species_description' => $this->input->post('patient_description'),
            'client_firstname' => $this->input->post('client_firstname'),
            'patient_status' => $this->input->post('patient_status'),
            'species_description' => $species_description
        );
        $this->db->where('species_description', $species_description);
        $this->db->replace('patients', $Data);
        return;
    }
    function delete_patients($species_description)
    {
        $this->db->where('species_description', $species_description);
        $this->db->delete('patients');
    }


}