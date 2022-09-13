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
        $_GET['uncontacted']='Salam Sahabat {{1}},\n\nKami telah menerima pengajuan pembiayaan sahabat melalui *{{2}}*. Untuk proses selanjutnya, Petugas telesales akan menghubungi Anda untuk konfirmasi pembiayaan yang diajukan. \n\nMohon kesediaannya menginformasikan jadwal Anda dapat kami telepon kembali.\n\nSilakan klik *tombol di bawah*, petugas kami akan mencatat ulang jadwal telepon Anda.\n\nTerima Kasih Sahabat';
        //telecenter_04

        $_GET['document']='Salam Sahabat {{1}},\n\nTerima kasih telah mengajukan pembiayaan {{2}} di Adira Finance. \n\nSesuai komunikasi kita melalui telepon, mohon dokumen dapat dikirimkan melalui whatsapp ini berupa :\n{{3}}\n\nSilakan klik *tombol di bawah* ini, petugas kami akan memverifikasi kelengkapan dokumen Anda.\n\nTerima Kasih Sahabat';
        //telecenter_3rev

        $_GET['promo']='Salam Sahabat {{1}},\n\nKabar Gembiraaaa !!! Sebagai pelanggan setia Adira Finance,\nSahabat terpilih untuk menerima promo *{{2}}*.\n\nMohon kesediaannya untuk menginformasikan kapan kami dapat menelepon Sahabat untuk menjelaskan detail promo {{3}}.\n\nSilakan klik *tombol di bawah*, petugas kami akan mencatat ulang jadwal telepon Anda.\n\nTerima Kasih Sahabat';
        //telecenter_2
    }
	public function index()
	{	
		$sample;
		if($_GET['status']=='Uncontacted'){
			$sample=$_GET['uncontacted'];
		}elseif ($_GET['status']=='Document') {
			$sample=$_GET['document'];
		}else{
			$sample=$_GET['promo'];
		}

		if($this->session->userdata('walogin')==""){
            redirect('auth/login');
        }
        $_SERVER['userdata']=json_decode(base64_decode($this->session->userdata('walogin')));
        // $listBlastUnclosed=$this->M_blast->getBlastUnclosed($_GET['status']);
		$this->load->view('blast',['data'=>json_decode(base64_decode($this->session->userdata('walogin'))),'company'=>getenv('COMPANY'),'sample'=>$sample]);
	}
	public function insert(){
        $dataIn=(object)$_POST;
        $userdata=json_decode(base64_decode($this->session->userdata('walogin')));
        $dataIn->id=base64_encode(date('Y-m-d H:i:s.u'));
        $dataIn->time=date('Y-m-d H:i:s');
        $dataIn->statussend='Sended';
        $dataIn->nik=$userdata->nik;
        if($dataIn->type=='Promo'){
            $this->M_blast->insertBlast($dataIn);
            $this->sendBlastPromo($dataIn->no,$dataIn->id,$dataIn->name,$dataIn->channel);
            echo json_encode($dataIn);
        }elseif($dataIn->type=='Document'){
            $this->M_blast->insertBlast($dataIn);
            $this->sendBlastDokumen($dataIn->no,$dataIn->id,$dataIn->name,$dataIn->channel,$dataIn->dokumen);
            echo json_encode($dataIn);
        }
        else{
            $this->M_blast->insertBlast($dataIn);
            $this->sendBlastUncontacted($dataIn->no,$dataIn->id,$dataIn->name,$dataIn->channel);
            echo json_encode($dataIn);
        }
	}
    public function getBlast(){
        $userdata=json_decode(base64_decode($this->session->userdata('walogin')));
        $listBlastUnclosed=$this->M_blast->getBlastUnclosed($userdata->nik,$_GET['status'],$_GET['search']['value'],$_GET['start'],$_GET['length'],$_GET['draw']);
        echo $listBlastUnclosed;
    }

    public function sendBlastPromo($to,$id,$name,$channel){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'api.infobip.com/whatsapp/1/message/template',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
            "messages": [
                {
                    "from": "6281119308391",
                    "to": "'.$to.'",
                    "messageId": "'.$id.'",
                    "content": {
                        "templateName": "telecenter_2",
                        "templateData": {
                            "body": {
                                "placeholders": [
                                    "'.$name.'",
                                    "'.$channel.'",
                                    "'.$channel.'"
                                ]
                            },
                            "buttons": [
                                {
                                    "type": "QUICK_REPLY",
                                    "parameter": "Kirim Dokumen"
                                }
                            ]
                        },
                        "language": "id"
                    }
                }
            ]
        }',
        CURLOPT_HTTPHEADER => array(
        'Authorization: App 2c163cf8268a2bcc2942218ac884ad3d-6c68f49f-23d8-4ef4-978e-84a57322fa36',
        'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);
    }
    public function sendBlastDokumen($to,$id,$name,$channel,$dokumen){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'api.infobip.com/whatsapp/1/message/template',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
                "messages": [
                    {
                        "from": "6281119308391",
                        "to": "'.$to.'",
                        "messageId": "'.$id.'",
                        "content": {
                            "templateName": "telecenter_3rev",
                            "templateData": {
                                "body": {
                                    "placeholders": [
                                        "'.$name.'",
                                        "'.$channel.'",
                                        "'.$dokumen.'"
                                    ]
                                },
                                "buttons": [
                                    {
                                        "type": "QUICK_REPLY",
                                        "parameter": "Kirim Dokumen"
                                    }
                                ]
                            },
                            "language": "id"
                        },
                        "callbackData": "Callback data",
                        "notifyUrl": "https://www.example.com/whatsapp"
                    }
                ]
            }',
        CURLOPT_HTTPHEADER => array(
        'Authorization: App 2c163cf8268a2bcc2942218ac884ad3d-6c68f49f-23d8-4ef4-978e-84a57322fa36',
        'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);
    }
    public function sendBlastUncontacted($to,$id,$name,$channel){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'api.infobip.com/whatsapp/1/message/template',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
            "messages": [
                {
                    "from": "6281119308391",
                    "to": "'.$to.'",
                    "messageId": "'.$id.'",
                    "content": {
                        "templateName": "telecenter_04",
                        "templateData": {
                            "body": {
                                "placeholders": [
                                    "'.$name.'",
                                    "'.$channel.'"
                                ]
                            },
                            "buttons": [
                                {
                                    "type": "QUICK_REPLY",
                                    "parameter": "Kirim Jadwal"
                                }
                            ]
                        },
                        "language": "id"
                    }
                }
            ]
        }',
        CURLOPT_HTTPHEADER => array(
        'Authorization: App 2c163cf8268a2bcc2942218ac884ad3d-6c68f49f-23d8-4ef4-978e-84a57322fa36',
        'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);
    }
}
