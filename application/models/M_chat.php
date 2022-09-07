<?php

class M_chat extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    function getConversation($from)
    {   
        $query = $this->db->query("select msgid,fromnumber,nik,type,contextid,text,url,contactname,status,statusio, DATE_FORMAT(time, '%H:%i:%s %d/%m/%Y') as 'time' from tblmsg where fromnumber='$from' and status <> 'Closed' order by time asc");
        return $query->result();
    }
    function checkNewConversation($from)
    {
        $query = $this->db->query("SELECT nik,text FROM `tblmsg` where fromnumber='$from' and nik<>'' and status <> 'Closed' limit 1");
        return $query->result();
    }
    function closeCoversation($from){
        $xxx=(object)array('status'=>'Closed');;
        $this->db->where('fromnumber', $from);
        $this->db->update('tblmsg', $xxx);
    }
    function getList($nik)
    {   
        $query = $this->db->query("SELECT contactname, (select text from `tblmsg` where fromnumber=m.fromnumber order by time desc limit 1) as 'text',fromnumber,DATE_FORMAT(time, '%H:%i %d/%m/%Y') as 'time',(select count(msgid) from `tblmsg` where fromnumber=m.fromnumber and nik='' and status <> 'Closed') as 'unread' FROM `tblmsg` m where status <>'Closed' GROUP by fromnumber");
        return $query->result();
    }
    function pickbyAgent($data)
    {   
        $xxx=(object)$data;;
        $this->db->where('fromnumber', $xxx->fromnumber);
        $this->db->update('tblmsg', $xxx);
    }
    function insertMsg($data)
    {   
        $query = $this->db->insert('tblmsg', $data);
    }
}