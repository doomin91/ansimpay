<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FranchiseeModel extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

/**
 * 최근 소식 관련 Model
 */
    public function getFranchiseeForFront(){
        $this->db->where("FL_DISPLAY_YN", "Y");
        $this->db->where("FL_DEL_YN", "N");
        $this->db->order_by("FL_REG_DATE", "DESC");
        return $this->db->get("tbl_franchisee_list")->result();
    }

    public function getFranchiseeList($wheresql, $getCount=false){
        if ((isset($wheresql["regDateStart"])) && ($wheresql["regDateStart"] != "")){
            $this->db->where("DATE(tbl_franchisee_list.FL_REG_DATE) >=", $wheresql["regDateStart"]);
        }

        if ((isset($wheresql["regDateEnd"])) && ($wheresql["regDateEnd"] != "")){
            $this->db->where("DATE(tbl_franchisee_list.FL_REG_DATE) <=", $wheresql["regDateEnd"]);
        }

        if((isset($wheresql['searchString'])) && $wheresql['searchField'] == "SUBJECT"){
            $this->db->LIKE("tbl_franchisee_list.FL_SUBJECT", $wheresql['searchString']);
        }

        if((isset($wheresql['searchString'])) && $wheresql['searchField'] == "USER_NAME"){
            $this->db->LIKE("USER.USER_NAME", $wheresql['searchString']);
        }

        if((isset($wheresql['searchString'])) && ($wheresql['searchField'] == "all" || $wheresql['searchField'] == "")){
            $this->db->group_start();
            $this->db->LIKE("tbl_franchisee_list.FL_SUBJECT", $wheresql['searchString']);
            $this->db->LIKE("tbl_manager_list.ADMIN_NAME", $wheresql['searchString']);
            $this->db->group_end();
        }
        $this->db->where("FL_DEL_YN", "N");
        $this->db->join("tbl_manager_list", "tbl_manager_list.ADMIN_SEQ = FL_REG_USER", "LEFT");
        $this->db->order_by("FL_REG_DATE", "DESC");
        if($getCount){
            return $this->db->get("tbl_franchisee_list")->num_rows();
        } else {
            $this->db->limit($wheresql["limit"], $wheresql["start"]);
            return $this->db->get("tbl_franchisee_list")->result();
        }
    }

    public function insertFranchisee($data){
        return $this->db->insert("tbl_franchisee_list", $data);
    }

    public function updateFranchisee($rlSeq, $data){
        $this->db->where("FL_SEQ", $rlSeq);
        return $this->db->update("tbl_franchisee_list", $data);
    }

    public function deleteFranchisee($rlSeq){
        $this->db->where("FL_SEQ", $rlSeq);
        return $this->db->update("tbl_franchisee_list", array("FL_DEL_YN" => "Y"));
    }
    
}
