<?php

class patients extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('patient_model');
        $this->load->model('species_Model');
        $this->load->model('Client_model');
        $this->load->helper('url_helper');
        $this->load->library('javascript');
        $this->javascript->external();
        $this->javascript->compile();

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
        $data['species'] = $this->species_Model->list_species();
        $data['firstnaam'] = $this->Client_model->list_clients();
        $data['title'] = 'add a new patient';

        $this->form_validation->set_rules('patient_name', 'Voornaam', 'required');
        $this->form_validation->set_rules('species_description', 'Achternaam', 'required');
        $this->form_validation->set_rules('client_firstname', 'Phone', 'required');
        $this->form_validation->set_rules('patient_status', 'Status', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('patients/create');

        } else {
            $this->patient_model->set_patients();
            $this->load->view('template/succes', $data);
        }
    }

    public function edit()
    {
        $data['link'] = basename(uri_string());
        $data['editContent'] = $this->patient_model->get_patients($data['link']);
        $data['species'] = $this->species_Model->list_species();
        $data['firstnaam'] = $this->Client_model->list_clients();
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Edit a patient';
        $this->form_validation->set_rules('patient_name', 'Voornaam', 'required');
        $this->form_validation->set_rules('species_description', 'Diersoort', 'required');
        $this->form_validation->set_rules('client_firstname', 'Client', 'required');
        $this->form_validation->set_rules('patient_status', 'Status', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('patients/edit', $data);

        } else {
            $this->patient_model->edit_patients($data['link']);
            $this->load->view('templates/succes', $data);
        }
    }

    public function delete()
    {

        $this->patient_model->delete_patients(basename(uri_string()));
        $this->load->view('patients/delete');
    }

}