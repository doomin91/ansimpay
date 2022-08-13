<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PatentModel extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

/**
 * 최근 소식 관련 Model
 */
    public function getPatentForFront(){
        $this->db->where("PL_DISPLAY_YN", "Y");
        $this->db->where("PL_DEL_YN", "N");
        $this->db->order_by("PL_REG_DATE", "DESC");
        return $this->db->get("tbl_patent_list")->result();
    }

    public function getPatentList($wheresql, $getCount=false){
        if ((isset($wheresql["regDateStart"])) && ($wheresql["regDateStart"] != "")){
            $this->db->where("DATE(tbl_patent_list.PL_REG_DATE) >=", $wheresql["regDateStart"]);
        }

        if ((isset($wheresql["regDateEnd"])) && ($wheresql["regDateEnd"] != "")){
            $this->db->where("DATE(tbl_patent_list.PL_REG_DATE) <=", $wheresql["regDateEnd"]);
        }

        if((isset($wheresql['searchString'])) && $wheresql['searchField'] == "SUBJECT"){
            $this->db->LIKE("tbl_patent_list.PL_SUBJECT", $wheresql['searchString']);
        }

        if((isset($wheresql['searchString'])) && $wheresql['searchField'] == "USER_NAME"){
            $this->db->LIKE("USER.USER_NAME", $wheresql['searchString']);
        }

        if((isset($wheresql['searchString'])) && ($wheresql['searchField'] == "all" || $wheresql['searchField'] == "")){
            $this->db->group_start();
            $this->db->LIKE("tbl_patent_list.PL_SUBJECT", $wheresql['searchString']);
            $this->db->LIKE("tbl_manager_list.ADMIN_NAME", $wheresql['searchString']);
            $this->db->group_end();
        }
        $this->db->where("PL_DEL_YN", "N");
        $this->db->join("tbl_manager_list", "tbl_manager_list.ADMIN_SEQ = PL_REG_USER", "LEFT");
        $this->db->order_by("PL_REG_DATE", "DESC");
        if($getCount){
            return $this->db->get("tbl_patent_list")->num_rows();
        } else {
            $this->db->limit($wheresql["limit"], $wheresql["start"]);
            return $this->db->get("tbl_patent_list")->result();
        }
    }

    public function insertPatent($data){
        return $this->db->insert("tbl_patent_list", $data);
    }

    public function updatePatent($alSeq, $data){
        $this->db->where("PL_SEQ", $alSeq);
        return $this->db->update("tbl_patent_list", $data);
    }

    public function deletePatent($alSeq){
        $this->db->where("PL_SEQ", $alSeq);
        return $this->db->update("tbl_patent_list", array("PL_DEL_YN" => "Y"));
    }
    
}
