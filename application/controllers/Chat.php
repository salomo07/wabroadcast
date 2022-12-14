<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {
	public function __construct()
    {
        parent::__construct();

        // if($this->session->userdata('walogin')==""){
        //     redirect('auth/login');
        // }
		
		$_ENV['UINFOBIP']=getenv('UINFOBIP');
		$_ENV['PINFOBIP']=getenv('PINFOBIP');

		// echo base64_encode($_ENV['UINFOBIP'].":".$_ENV['PINFOBIP']);
		$_ENV['SENDER']='6281119308391';
		// getenv('PINFOBIP')
		// echo $_ENV['SENDER'].$_ENV['UINFOBIP'].$_ENV['PINFOBIP'];
		$_ENV['BASEURL_SOCKETIO']='wasocket.herokuapp.com';
		$_ENV['api']=getenv('api');
    }
    public function closing(){
    	$this->M_chat->closeCoversation($_GET['from']);
    	redirect('chat');
    }
	public function index()
	{	
		if($this->session->userdata('walogin')==""){
            redirect('auth/login');
        }
        $_SERVER['userdata']=json_decode(base64_decode($this->session->userdata('walogin')));
		$listUser=$this->M_chat->getList($_SERVER['userdata']->nik);
		$this->load->view('chat',['data'=>json_decode(base64_decode($this->session->userdata('walogin'))),'listuser'=>$listUser,'company'=>getenv('COMPANY')]);
	}
	public function detail()
	{
		$_SERVER['userdata']=json_decode(base64_decode($this->session->userdata('walogin')));
		$detail=$this->M_chat->getConversation($_GET['from']);
		// print_r($detail);echo '\n'.$_SERVER['userdata']->nik;
		$this->M_chat->pickbyAgent(array("nik"=>$_SERVER['userdata']->nik,"fromnumber"=>$_GET['from']));
		$nik=false;
		foreach ($detail as $key => $val) {
			if($val->nik == $_SERVER['userdata']->nik || $val->nik==''){
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
		if(json_decode(file_get_contents('php://input'))==null){echo "Error";die();}
        else{
            $data=json_decode(file_get_contents('php://input'))->results;
            foreach ($data as $val) {
            	$convers=$this->M_chat->checkNewConversation($val->from);
            	$txt=$val->message->type=="IMAGE"?$val->message->caption:$val->message->text;
                $url=$val->message->type=="IMAGE"?$val->message->url:'';
                $name=isset($val->contact->name)?$val->contact->name:'';
            	$msgdata=array('msgid'=>$val->messageId,'from'=>$val->from,'url'=>$url,'text'=>$txt,'contactname'=>$name,'status'=>'Conversation','statusio'=>'In','time'=>date('Y-m-d H:i:s'),'type'=>$val->message->type,'nik'=>'');
            	$insertdata=array('msgid'=>$val->messageId,'fromnumber'=>$val->from,'url'=>$url,'text'=>$txt,'contactname'=>$name,'status'=>'Conversation','statusio'=>'In','time'=>date('Y-m-d H:i:s'),'type'=>$val->message->type,'nik'=>'');
            	if(count($convers)==0)
            	{
            		$this->M_chat->insertMsg($insertdata);
            		$this->sendtosocketBroadcast(json_encode($msgdata));
            	}
            	else{
            		$this->M_chat->insertMsg($insertdata);
            		$msgdata['namaevent']=$convers[0]->nik.' - '.$val->from;
    				$this->sendtosocketInbound(json_encode($msgdata));
            	}
            }
        }
	}
	public function sendtosocketInbound($data){
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => $_ENV['BASEURL_SOCKETIO'].'/inboundmsg',
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
		// echo 'sendtosocketInbound';
	}
	public function sendtosocketBroadcast($data){
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => $_ENV['BASEURL_SOCKETIO'].'/broadcast',
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
		// echo 'sendtosocketBroadcast';
	}
	public function sendtoclient($id,$from,$text)
	{	
		$curl = curl_init();

		curl_setopt_array($curl, array(
		    CURLOPT_URL => 'api.infobip.com/whatsapp/1/message/text',
		    CURLOPT_RETURNTRANSFER => true,
		    CURLOPT_ENCODING => '',
		    CURLOPT_MAXREDIRS => 10,
		    CURLOPT_TIMEOUT => 0,
		    CURLOPT_FOLLOWLOCATION => true,
		    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		    CURLOPT_CUSTOMREQUEST => 'POST',
		    CURLOPT_POSTFIELDS =>'{"from":"'.$_ENV['SENDER'].'","to":"'.$from.'","messageId":"'.$id.'","content":{"text":"'.$text.'"}}',
		    CURLOPT_HTTPHEADER => array(
		        'Authorization: App '.$_ENV['api'],
		        'Content-Type: application/json',
		        'Accept: application/json'
		    ),
		));

		$response = curl_exec($curl);

		curl_close($curl);
	}
}
