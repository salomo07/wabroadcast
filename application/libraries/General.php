<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class General {

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('Mdefault');
        header('Access-Control-Allow-Origin: *');
    }
    function checkLogged()
    {
        if(!isset($this->session->UserData))
        {return false;}
        else
        {return true;}
    }
    function loginUser($uname,$upass)
    {
        $result = $this->CI->Mdefault->getUser(['$or'=>[['Username'=>$uname],['Email'=>$uname]],'Password'=>md5($upass)]);
        if(count($result)>0)
        {
            $this->CI->session->set_userdata('UserData', json_encode($result));
        }
        echo json_encode($result);//die();
    }
    function registerUser($uname,$uemail,$upass,$type)
    {
        if($type=='checkexist')
        {
            $result = $this->CI->Mdefault->getUser(['$or'=>[['Username'=>$uname],['Email'=>$uname]],'Password'=>md5($upass)]);
            echo json_encode($result);//die();
            return json_encode($result);
        }
        else if($type=='insertuser')
        {
            $result=$this->CI->Mdefault->insertUser(['Username'=>$uname,'Password'=>md5($upass),'Email'=>$uemail,'Role'=>'','CompanyId'=>'']);
            return $result->getInsertedId();
            //$this->CI->Email->confirmEmail($uname,$result->insertedId());
        }
    }
    

}
