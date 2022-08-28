<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        if(get_cookie("walogin")==""){
            redirect('auth/login');
        }
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'../../..');
		$dotenv->load();
    }
	public function index()
	{	
		$userdata=json_decode(base64_decode(get_cookie("walogin")));
		$listUser=$this->M_chat->getList($userdata->nik);
		$this->load->view('chat',['data'=>json_decode(base64_decode(get_cookie("walogin"))),'listuser'=>$listUser]);
	}
	public function detail()
	{
		$detail=$this->M_chat->getConversation($_GET['nik'],$_GET['from']);
		echo json_encode($detail);
	}
	public function insertchat()
	{	
		if(isset($_POST['from']) && isset($_POST['nik']) && isset($_POST['type']) && isset($_POST['text'])){
			$id=base64_encode(date('Y-m-d H:i:s.u'));
			$listUser=array('msgid'=>$id,'fromnumber'=>$_POST['from'],
				'nik'=>$_POST['nik'],
				'type'=>$_POST['type'],
				'text'=>$_POST['text'],
				'url'=>isset($_POST['url'])?$_POST['url']:'',
				'contactname'=>isset($_POST['contactname'])?$_POST['contactname']:'',
				'status'=>'Conversation',
				'time'=>date('Y-m-d H:i:s')
			);
			$this->db->insert('tblmsg', $listUser);
			$this->sendtoclient($id,$_POST['from'],$_POST['text']);
		}else{
			echo 'from, nik, type, text must included';
		}
	}
	public function inboundmsg()
	{
		if(json_decode(file_get_contents('php://input'))==null){echo "Error";die();}
        else{
            $now=new DateTime('NOW');
            $now=$now->format('c');
            $data=json_decode(file_get_contents('php://input'))->results;
            foreach ($data as $val) {
                $msg= $val->message;
                print_r($val);
                $msg=array('msgid'=>$val->messageId)
            }
        }
	}
	public function sendtoclient($id,$from,$text)
	{	
		$curl = curl_init();

		curl_setopt_array($curl, array(
		    CURLOPT_URL => $_ENV['BASEURL'].'/whatsapp/1/message/text',
		    CURLOPT_RETURNTRANSFER => true,
		    CURLOPT_ENCODING => '',
		    CURLOPT_MAXREDIRS => 10,
		    CURLOPT_TIMEOUT => 0,
		    CURLOPT_FOLLOWLOCATION => true,
		    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		    CURLOPT_CUSTOMREQUEST => 'POST',
		    CURLOPT_POSTFIELDS =>'{"from":"'.$_ENV['SENDER'].'","to":"'.$from.'","messageId":"'.$id.'","content":{"text":"'.$text.'"}}',
		    CURLOPT_HTTPHEADER => array(
		        'Authorization: Basic '.base64_encode($_ENV['UINFOBIP'].':'.$_ENV['PINFOBIP']),
		        'Content-Type: application/json',
		        'Accept: application/json'
		    ),
		));

		$response = curl_exec($curl);

		curl_close($curl);
	}
}
