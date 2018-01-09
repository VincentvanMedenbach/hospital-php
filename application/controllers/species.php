<?php
class species extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('species_Model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['species'] = $this->species_Model->list_species();
        $data['title'] = 'Species archive';
        $this->load->view('templates/header', $data);
        $this->load->view('species/index', $data);
//        $this->load->view('templates/footer');
    }
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title'] = 'add a new species';

        $this->form_validation->set_rules('species_description', 'DOETDITWAT?', 'required');


        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('species/create');
            echo "dat";

        } else {
            $this->species_Model->set_species();
            $this->load->view('species/succes', $data);
            echo "dit";
        }
    }
    public function edit()
    {
        $data['link'] = basename(uri_string());
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Edit a species';
        $this->form_validation->set_rules('species_description', 'DOETDITWAT?', 'required');
        echo $data['link'];

        if ($this->form_validation->run() === FALSE) {
            echo 'hier is ie';
            $this->load->view('templates/header' ,$data);
            $this->load->view('species/edit', $data);

        } else {
            echo 'nu doet ie';
            $this->species_Model->edit_species($data['link']);
            $this->load->view('species/succes', $data);
        }
    }
    public function delete(){

        $this->species_Model->delete_species(basename(uri_string()));
        $this->load->view('species/delete');
    }

}