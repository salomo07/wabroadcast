<?php

class M_auth extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    function signin($username,$password)
    {   
        $query = $this->db->query("select * from tbluser where Username = '$username' and password='".base64_encode($password)."'");
        return json_encode($query->row());
    }
}