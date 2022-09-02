<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('walogin')==""){
            redirect('auth/login');
        }
        $_ENV['BASEURL_SOCKETIO']='wasocket.herokuapp.com';
    }
	public function index()
	{
        if($this->session->userdata('walogin')==""){
            redirect('auth/login');
        }
        $_SERVER['userdata']=json_decode(base64_decode($this->session->userdata('walogin')));
        $listUser=$this->M_chat->getList($_SERVER['userdata']->nik);
		$this->load->view('dashboard',['listuser'=>$listUser,'data'=>json_decode(base64_decode($this->session->userdata('walogin')))]);
	}
}
