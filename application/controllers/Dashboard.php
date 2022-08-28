<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        if(get_cookie("walogin")==""){
            redirect('auth/login');
        }
    }
	public function index()
	{
		$this->load->view('dashboard',['data'=>json_decode(base64_decode(get_cookie("walogin")))]);
	}
}
