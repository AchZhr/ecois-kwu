<?php defined('BASEPATH') || exit('No direct script access allowed');

class Admin extends Data_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->login();
    }

    function login()
    {

        $this->data['view']       = 'admin/login';
        $this->data['param']       = '';

        $this->form_validation->set_rules('npm', 'NPM', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');


        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('npm');
            $password = $this->input->post('password');


            if ($this->auth->login($username, $password)) {
                // $this->session->set_userdata('userId', 'oke');
                redirect($this->requested_page);
            } else {
                $this->load->view('template/default', $this->data);
            }
        } else {
            if ($this->auth->is_logged_in()) {

                $this->data['view']       = 'home';
                $this->data['param']       = '';
                $this->load->view('template/default', $this->data);
            } else {

                $this->load->view('template/default', $this->data);
            }
        }
    }



    function logout()
    {
        $this->auth->logout();
        redirect('Home');
    }
}
