<?php defined('BASEPATH') || exit('No direct script access allowed');

class User extends Data_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('penjual_model');
    }

    
}
