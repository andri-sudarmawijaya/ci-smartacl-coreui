<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    function __construct()
    {
        parent::__construct();
        $this->load->library('smarty_acl');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');

	    $this->load->library('datatables');
        //$this->logged_in();
        //$this->smarty_acl->authorized();
    }

	public function index()
	{   $data['title'] = 'Welcome to CodeIgniter !';
		$this->load->view('welcome_message', $data);
	}

	public function account()
	{   $data['title'] = 'Account USER Welcome to CodeIgniter !';
		$this->load->view('account', $data);
	}
}
