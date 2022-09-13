<?php

class M_blast extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    function insertBlast($data)
    {   
        $this->db->insert('tblblast', $data);
    }
    function getBlastUnclosed($nik,$type,$src,$start,$length,$draw)
    {
    	$draw+1;
    	$query='';
    	if($src==''){
    		$query = $this->db->query("SELECT no,name,type,dokumen,statussend,channel FROM `tblblast` b where type='$type' and nik = '$nik'  GROUP by no LIMIT $start, $length");
    	}else{
    		$query = $this->db->query("SELECT no,name,type,dokumen,statussend,channel FROM `tblblast` b where type='$type' and (no like '%$src%' or name like '%$src%')  GROUP by no LIMIT $start, $length");
    	}
        $count=$this->db->query("SELECT count(id) as 'count' FROM `tblblast` b where type='$type'")->row();
        $tot=$count->count;
        $xxx=$query->result();$temp=[];
        foreach ($xxx as $key => $value) {
        	array_push($temp, [$value->no,$value->name,$value->channel,$value->dokumen,$value->statussend]);
        }
        $arr=array('draw'=>$draw,'recordsTotal' => $tot, 'recordsFiltered'=>count($query->result()),'data'=>$temp);
        return json_encode($arr);
    }
}