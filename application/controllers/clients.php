<?php
class clients extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Client_model');
        $this->load->helper('url_helper');
    }

    public function view($page = 'home')
    {
        if (!file_exists(APPPATH . 'views/clients/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('templates/header', $data);
        $this->load->view('clients/' . $page, $data);
//        $this->load->view('templates/footer', $data);
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

        $data['title'] = 'add a new client';

        $this->form_validation->set_rules('client_firstname', 'required');
        $this->form_validation->set_rules('client_lastname', 'required');


        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('clients/create');

        } else {
            $this->Client_model->set_clients();
            $this->load->view('clients/create');
        }
    }


}