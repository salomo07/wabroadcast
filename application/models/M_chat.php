<?php

class M_chat extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    function getConversation($nik,$from)
    {   
        $query = $this->db->query("select msgid,fromnumber,nik,type,contextid,text,url,contactname,status, DATE_FORMAT(time, '%H:%i %d/%m/%Y') as 'time' from tblmsg where nik = '$nik' and fromnumber='$from' and status <> 'Closed' order by time asc");
        return $query->result();
    }
    function getList($nik)
    {   
        $query = $this->db->query("SELECT contactname, (select text from `tblmsg` where fromnumber=m.fromnumber order by time desc limit 1) as 'text',fromnumber,DATE_FORMAT(time, '%H:%i %d/%m/%Y') as 'time',(select count(msgid) from `tblmsg` where fromnumber=m.fromnumber and status <> 'Closed') as 'unread' FROM `tblmsg` m where status <>'Closed' and nik = '$nik' GROUP by fromnumber");
        return $query->result();
    }
}