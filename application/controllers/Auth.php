<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }
	public function login()
	{
		$this->load->view('login');
	}
	public function signout()
	{
		delete_cookie('walogin');
		redirect('auth/login');
	}
	public function signin()
	{
		$userdata=$this->M_auth->signin($_POST['username'],$_POST['password']);
		
		if ($userdata=="null"){
			redirect('auth/login');
		}else{
			set_cookie('walogin',base64_encode($userdata),'28800');
			redirect('dashboard');
		}
	}
}
