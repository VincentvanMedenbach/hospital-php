<?php

class clients extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Client_model');
        $this->load->helper('url_helper');
        $this->load->library('javascript');
        $this->javascript->external();
        $this->javascript->compile();

    }

    public function index()
    {

        $data['clients'] = $this->Client_model->list_clients();
        $data['title'] = 'Client archive';
        $this->load->view('templates/header', $data);
        $this->load->view('clients/index', $data);
//        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        echo "zo";
        $data['title'] = 'add a new client';

        $this->form_validation->set_rules('client_firstname', 'Voornaam', 'required');
        $this->form_validation->set_rules('client_lastname', 'Achternaam', 'required');
        $this->form_validation->set_rules('client_phone', 'Phone', 'required');
        $this->form_validation->set_rules('client_email', 'Email', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('clients/create');
            echo "dat";

        } else {
            $this->Client_model->set_clients();
            $this->load->view('clients/succes', $data);
            echo "dit";
        }
    }

    public function edit()
    {
        $data['link'] = basename(uri_string());
        $data['editContent'] = $this->Client_model->get_clients($data['link']);
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Edit a client';
        $this->form_validation->set_rules('client_firstname', 'Voornaam', 'required');
        $this->form_validation->set_rules('client_lastname', 'Achternaam', 'required');
        $this->form_validation->set_rules('client_phone', 'Phone', 'required');
        $this->form_validation->set_rules('client_email', 'Email', 'required');
        echo $data['link'];

        if ($this->form_validation->run() === FALSE) {

            echo 'hier is ie';
            $this->load->view('templates/header', $data);
            $this->load->view('clients/edit', $data);

        } else {
            echo 'nu doet ie';
            $this->Client_model->edit_clients($data['link']);
            $this->load->view('clients/succes', $data);
        }
    }

    public function delete()
    {

        $this->Client_model->delete_clients(basename(uri_string()));
        $this->load->view('clients/delete');
    }

}