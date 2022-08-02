<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getUser($userId){
        $this->db->where("USER_ID", $userId);
        return $this->db->get("tbl_user_list")->row();
    }

    public function insertUser($data){
        return $this->db->insert("tbl_user_list", $data);
    }

    public function getUserByIDAndPassword($userId, $userPwd){
        $this->db->where("USER_ID", $userId);
        $this->db->where("USER_PWD", $userPwd);
        return $this->db->get("tbl_user_list")->row();
    }

}
