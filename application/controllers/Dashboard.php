<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('walogin')==""){
            redirect('auth/login');
        }
    }
	public function index()
	{
        $listUser=$this->M_chat->getList($_SERVER['userdata']->nik);
		$this->load->view('dashboard',['listuser'=>$listUser,'data'=>json_decode(base64_decode($this->session->userdata('walogin')))]);
	}
}
