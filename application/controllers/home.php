<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('smarty_acl');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('History_model');

	    $this->load->library('datatables');
        $this->logged_in();
        $this->smarty_acl->authorized();
    }

    protected function logged_in()
    {
        if (!$this->smarty_acl->logged_in()) {
            return redirect('admin/login');
        }
    }

    public function index(){

        $this->load->view('index');

    }

}
