<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KioskModel extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

/**
 * 최근 소식 관련 Model
 */
    public function getKioskForFront(){
        $this->db->where("RL_DISPLAY_YN", "Y");
        $this->db->where("KL_DEL_YN", "N");
        $this->db->order_by("KL_REG_DATE", "DESC");
        return $this->db->get("tbl_kiosk_list")->result();
    }

    public function getKioskList($wheresql, $getCount=false){
        if ((isset($wheresql["regDateStart"])) && ($wheresql["regDateStart"] != "")){
            $this->db->where("DATE(tbl_kiosk_list.KL_REG_DATE) >=", $wheresql["regDateStart"]);
        }

        if ((isset($wheresql["regDateEnd"])) && ($wheresql["regDateEnd"] != "")){
            $this->db->where("DATE(tbl_kiosk_list.KL_REG_DATE) <=", $wheresql["regDateEnd"]);
        }

        if((isset($wheresql['searchString'])) && $wheresql['searchField'] == "SUBJECT"){
            $this->db->LIKE("tbl_kiosk_list.KL_SUBJECT", $wheresql['searchString']);
        }

        if((isset($wheresql['searchString'])) && $wheresql['searchField'] == "USER_NAME"){
            $this->db->LIKE("USER.USER_NAME", $wheresql['searchString']);
        }

        if((isset($wheresql['searchString'])) && ($wheresql['searchField'] == "all" || $wheresql['searchField'] == "")){
            $this->db->group_start();
            $this->db->LIKE("tbl_kiosk_list.KL_SUBJECT", $wheresql['searchString']);
            $this->db->LIKE("tbl_manager_list.ADMIN_NAME", $wheresql['searchString']);
            $this->db->group_end();
        }
        $this->db->where("KL_DEL_YN", "N");
        $this->db->join("tbl_manager_list", "tbl_manager_list.ADMIN_SEQ = KL_REG_USER", "LEFT");
        $this->db->order_by("KL_REG_DATE", "DESC");
        if($getCount){
            return $this->db->get("tbl_kiosk_list")->num_rows();
        } else {
            $this->db->limit($wheresql["limit"], $wheresql["start"]);
            return $this->db->get("tbl_kiosk_list")->result();
        }
    }

    public function insertKiosk($data){
        return $this->db->insert("tbl_kiosk_list", $data);
    }

    public function updateKiosk($rlSeq, $data){
        $this->db->where("RL_SEQ", $rlSeq);
        return $this->db->update("tbl_kiosk_list", $data);
    }

    public function deleteKiosk($rlSeq){
        $this->db->where("RL_SEQ", $rlSeq);
        return $this->db->update("tbl_kiosk_list", array("KL_DEL_YN" => "Y"));
    }
    
}
