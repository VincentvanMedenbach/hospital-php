<?php
class patients extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('patient_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['patients'] = $this->patient_model->list_patients();
        $data['title'] = 'patient archive';
        $this->load->view('templates/header', $data);
        $this->load->view('patients/index', $data);
//        $this->load->view('templates/footer');
    }
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        echo "zo";
        $data['title'] = 'add a new patient';

        $this->form_validation->set_rules('patient_name', 'Voornaam', 'required');
        $this->form_validation->set_rules('species_description','Achternaam', 'required');
        $this->form_validation->set_rules('client_firstname', 'Phone', 'required');
        $this->form_validation->set_rules('patient_status','Status', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('patients/create');
            echo "dat";

        } else {
            $this->patient_model->set_patients();
            $this->load->view('patients/succes', $data);
            echo "dit";
        }
    }
    public function edit()
    {
        $data['link'] = basename(uri_string());
        $data['editContent'] = $this->patient_model->get_patients($data['link']);
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Edit a patient';
        $this->form_validation->set_rules('patient_name', 'Voornaam', 'required');
        $this->form_validation->set_rules('species_description','Achternaam', 'required');
        $this->form_validation->set_rules('client_firstname', 'Phone', 'required');
        $this->form_validation->set_rules('patient_status','Status', 'required');
        echo $data['link'];

        if ($this->form_validation->run() === FALSE) {

            echo 'hier is ie';
            $this->load->view('templates/header' ,$data);
            $this->load->view('patients/edit', $data);

        } else {
            echo 'nu doet ie';
            $this->patient_model->edit_patients($data['link']);
            $this->load->view('patients/succes', $data);
        }
    }
    public function delete(){

        $this->patient_model->delete_patients(basename(uri_string()));
        $this->load->view('patients/delete');
    }

}