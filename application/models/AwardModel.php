<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AwardModel extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

/**
 * 최근 소식 관련 Model
 */
    public function getAwardForFront(){
        $this->db->where("AL_DISPLAY_YN", "Y");
        $this->db->where("AL_DEL_YN", "N");
        $this->db->order_by("AL_REG_DATE", "DESC");
        return $this->db->get("tbl_award_list")->result();
    }

    public function getAwardList($wheresql, $getCount=false){
        if ((isset($wheresql["regDateStart"])) && ($wheresql["regDateStart"] != "")){
            $this->db->where("DATE(tbl_award_list.AL_REG_DATE) >=", $wheresql["regDateStart"]);
        }

        if ((isset($wheresql["regDateEnd"])) && ($wheresql["regDateEnd"] != "")){
            $this->db->where("DATE(tbl_award_list.AL_REG_DATE) <=", $wheresql["regDateEnd"]);
        }

        if((isset($wheresql['searchString'])) && $wheresql['searchField'] == "SUBJECT"){
            $this->db->LIKE("tbl_award_list.AL_SUBJECT", $wheresql['searchString']);
        }

        if((isset($wheresql['searchString'])) && $wheresql['searchField'] == "USER_NAME"){
            $this->db->LIKE("USER.USER_NAME", $wheresql['searchString']);
        }

        if((isset($wheresql['searchString'])) && ($wheresql['searchField'] == "all" || $wheresql['searchField'] == "")){
            $this->db->group_start();
            $this->db->LIKE("tbl_award_list.AL_SUBJECT", $wheresql['searchString']);
            $this->db->LIKE("tbl_manager_list.ADMIN_NAME", $wheresql['searchString']);
            $this->db->group_end();
        }
        $this->db->where("AL_DEL_YN", "N");
        $this->db->join("tbl_manager_list", "tbl_manager_list.ADMIN_SEQ = AL_REG_USER", "LEFT");
        $this->db->order_by("AL_REG_DATE", "DESC");
        if($getCount){
            return $this->db->get("tbl_award_list")->num_rows();
        } else {
            $this->db->limit($wheresql["limit"], $wheresql["start"]);
            return $this->db->get("tbl_award_list")->result();
        }
    }

    public function insertAward($data){
        return $this->db->insert("tbl_award_list", $data);
    }

    public function updateAward($alSeq, $data){
        $this->db->where("AL_SEQ", $alSeq);
        return $this->db->update("tbl_award_list", $data);
    }

    public function deleteAward($alSeq){
        $this->db->where("AL_SEQ", $alSeq);
        return $this->db->update("tbl_award_list", array("AL_DEL_YN" => "Y"));
    }
    
}
