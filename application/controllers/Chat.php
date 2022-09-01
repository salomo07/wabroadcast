<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        if(get_cookie("walogin")==""){
            redirect('auth/login');
        }
  //       $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'../../..');
		// $dotenv->load();
		
		$_GET['userdata']=json_decode(base64_decode(get_cookie("walogin")));
    }
	public function index()
	{	
		$listUser=$this->M_chat->getList($_GET['userdata']->nik);
		$this->load->view('chat',['data'=>json_decode(base64_decode(get_cookie("walogin"))),'listuser'=>$listUser,'company'=>getenv('COMPANY')]);
	}
	public function detail()
	{
		$detail=$this->M_chat->getConversation($_GET['from']);
		// print_r($detail);
		$nik=false;
		foreach ($detail as $key => $val) {
			if($val->nik == $_GET['userdata']->nik || $val->nik==''){
				$nik=true;
			}
		}
		echo $nik? json_encode($detail):json_encode(array());
	}
	public function saveOutboundMsg()
	{	
		$data=json_decode(file_get_contents('php://input'));
		if(isset($data->from) && isset($data->nik) && isset($data->text)){
			$id=base64_encode(date('Y-m-d H:i:s.u'));
			$listUser=array('msgid'=>$id,'fromnumber'=>$data->from,
				'nik'=>$data->nik,
				'type'=>'TEXT',
				'text'=>$data->text,
				'url'=>isset($_POST['url'])?$_POST['url']:'',
				'status'=>'Conversation',
				'statusio'=>'Out',
				'time'=>date('Y-m-d H:i:s')
			);
			
			$this->M_chat->insertMsg($listUser);
			$this->sendtoclient($id,$data->from,$data->text);//Via infobip
			echo json_encode($listUser);
		}else{
			echo 'from, nik, type, text must included';
		}
	}
	public function inboundmsg()
	{
		echo 'stringxxxxxxxxxxx';
		if(json_decode(file_get_contents('php://input'))==null){echo "Error";die();}
        else{
            $data=json_decode(file_get_contents('php://input'))->results;
            foreach ($data as $val) {
            	if($this->M_chat->checkNewConversation($_GET['userdata']->nik,$val->from)->Count==0)
            	{
            		$this->sendtosocketBroadcast(json_encode($data));
            	}
            	else{
            		$data->namaevent=$_GET['userdata']->nik.' - '.$val->from;
    				$this->sendtosocketInbound(json_encode($data));
            	}

        		$txt=$val->message->type=="IMAGE"?$val->message->caption:$val->message->text;
                $url=$val->message->type=="IMAGE"?$val->message->url:'';
                $name=isset($val->contact->name)?$val->contact->name:'';
                $msgdata=array('msgid'=>$val->messageId,'fromnumber'=>$val->from,'url'=>$url,'text'=>$txt,'contactname'=>$name,'status'=>'Conversation','statusio'=>'In','time'=>date('Y-m-d H:i:s'),'type'=>$val->message->type);
                $this->M_chat->insertMsg($msgdata);
            }
        }
	}
	public function sendtosocketInbound($data){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => getenv('BASEURL_SOCKETIO').'inboundmsg',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS => 'text=Selamat&from=6281288643757w',
		CURLOPT_HTTPHEADER => array(
			'Content-Type: application/x-www-form-urlencoded'
		),
		));

		$response = curl_exec($curl);

		curl_close($curl);
	}
	public function sendtosocketBroadcast($data){
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => getenv('BASEURL_SOCKETIO').'broadcast',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS =>$data,
			CURLOPT_HTTPHEADER => array(
			'Content-Type: application/json'
		  ),
		));

		$response = curl_exec($curl);

		curl_close($curl);
	}
	public function sendtoclient($id,$from,$text)
	{	
		$curl = curl_init();

		curl_setopt_array($curl, array(
		    CURLOPT_URL => getenv('BASEURL').'/whatsapp/1/message/text',
		    CURLOPT_RETURNTRANSFER => true,
		    CURLOPT_ENCODING => '',
		    CURLOPT_MAXREDIRS => 10,
		    CURLOPT_TIMEOUT => 0,
		    CURLOPT_FOLLOWLOCATION => true,
		    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		    CURLOPT_CUSTOMREQUEST => 'POST',
		    CURLOPT_POSTFIELDS =>'{"from":"'.getenv('SENDER').'","to":"'.$from.'","messageId":"'.$id.'","content":{"text":"'.$text.'"}}',
		    CURLOPT_HTTPHEADER => array(
		        'Authorization: Basic '.base64_encode(getenv('UINFOBIP').':'.getenv('PINFOBIP')),
		        'Content-Type: application/json',
		        'Accept: application/json'
		    ),
		));

		$response = curl_exec($curl);

		curl_close($curl);
	}
}
