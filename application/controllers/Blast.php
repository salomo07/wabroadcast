<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blast extends CI_Controller {
	public function __construct()
    {
        parent::__construct();

        // if($this->session->userdata('walogin')==""){
        //     redirect('auth/login');
        // }
        // $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'../../..');
		// $dotenv->load();
		$_ENV['BASEURL_SOCKETIO']='wasocket.herokuapp.com';
    }
	public function index()
	{	
		if($this->session->userdata('walogin')==""){
            redirect('auth/login');
        }
        $_SERVER['userdata']=json_decode(base64_decode($this->session->userdata('walogin')));
		$listUser=$this->M_chat->getList($_SERVER['userdata']->nik);
		$status=$_GET['status'];
		$this->load->view('chat',['data'=>json_decode(base64_decode($this->session->userdata('walogin'))),'listuser'=>$listUser,'company'=>getenv('COMPANY')]);
	}
}
