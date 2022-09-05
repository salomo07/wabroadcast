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
        echo base64_encode("Telecenter_WA:@Dira2021danny");
		$_ENV['BASEURL_SOCKETIO']='wasocket.herokuapp.com';
        $uncontacted='Salam Sahabat {{1}},\n\nKami telah menerima pengajuan pembiayaan sahabat melalui *{{2}}*. Untuk proses selanjutnya, Petugas telesales akan menghubungi Anda untuk konfirmasi pembiayaan yang diajukan. \n\nMohon kesediaannya menginformasikan jadwal Anda dapat kami telepon kembali.\n\nSilakan klik *tombol di bawah*, petugas kami akan mencatat ulang jadwal telepon Anda.\n\nTerima Kasih Sahabat';
        $document='Salam Sahabat {{1}},\n\nTerima kasih telah mengajukan pembiayaan {{2}} di Adira Finance. \n\nSesuai komunikasi kita melalui telepon, mohon dokumen dapat dikirimkan melalui whatsapp ini berupa :\n{{3}}\n\nSilakan klik *tombol di bawah* ini, petugas kami akan memverifikasi kelengkapan dokumen Anda.\n\nTerima Kasih Sahabat';
        $promo='Salam Sahabat {{1}},\n\nKabar Gembiraaaa !!! Sebagai pelanggan setia Adira Finance,\nSahabat terpilih untuk menerima promo *{{2}}*.\n\nMohon kesediaannya untuk menginformasikan kapan kami dapat menelepon Sahabat untuk menjelaskan detail promo {{3}}.\n\nSilakan klik *tombol di bawah*, petugas kami akan mencatat ulang jadwal telepon Anda.\n\nTerima Kasih Sahabat';
    }
	public function index()
	{	
		if($this->session->userdata('walogin')==""){
            redirect('auth/login');
        }
        $_SERVER['userdata']=json_decode(base64_decode($this->session->userdata('walogin')));
        $listUser=$this->M_chat->getList($_SERVER['userdata']->nik);
		$status=$_GET['status'];
		$this->load->view('blast',['data'=>json_decode(base64_decode($this->session->userdata('walogin'))),'listuser'=>$listUser,'company'=>getenv('COMPANY')]);
	}
}
