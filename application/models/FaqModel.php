<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FaqModel extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

/**
 * 최근 소식 관련 Model
 */
    public function getFaqForFront(){
        $this->db->where("FAQ_DISPLAY_YN", "Y");
        $this->db->where("FAQ_DEL_YN", "N");
        $this->db->order_by("FAQ_REG_DATE", "DESC");
        return $this->db->get("tbl_faq_list")->result();
    }

    public function getFaqByCateSeq($faqSeq){
        $this->db->where("FAQ_SEQ", $faqSeq);
        $this->db->where("FAQ_DISPLAY_YN", "Y");
        return $this->db->get("tbl_faq_list")->result();
    }

    public function getFaqList($wheresql, $getCount=false){
        if ((isset($wheresql["regDateStart"])) && ($wheresql["regDateStart"] != "")){
            $this->db->where("DATE(tbl_faq_list.FAQ_REG_DATE) >=", $wheresql["regDateStart"]);
        }

        if ((isset($wheresql["regDateEnd"])) && ($wheresql["regDateEnd"] != "")){
            $this->db->where("DATE(tbl_faq_list.FAQ_REG_DATE) <=", $wheresql["regDateEnd"]);
        }

        if((isset($wheresql['searchString'])) && $wheresql['searchField'] == "QUESTION"){
            $this->db->LIKE("tbl_faq_list.FAQ_QUESTION", $wheresql['searchString']);
        }

        if((isset($wheresql['searchString'])) && $wheresql['searchField'] == "ANSWER"){
            $this->db->LIKE("tbl_faq_list.FAQ_ANSWER", $wheresql['searchString']);
        }

        if((isset($wheresql['searchString'])) && $wheresql['searchField'] == "ADMIN_NAME"){
            $this->db->LIKE("USER.ADMIN_NAME", $wheresql['searchString']);
        }

        if((isset($wheresql['searchString'])) && ($wheresql['searchField'] == "all" || $wheresql['searchField'] == "")){
            $this->db->group_start();
            $this->db->LIKE("tbl_faq_list.FAQ_QUESTION", $wheresql['searchString']);
            $this->db->LIKE("tbl_faq_list.FAQ_ANSWER", $wheresql['searchString']);
            $this->db->LIKE("tbl_manager_list.ADMIN_NAME", $wheresql['searchString']);
            $this->db->group_end();
        }
        $this->db->where("FAQ_DEL_YN", "N");
        $this->db->join("tbl_manager_list", "tbl_manager_list.ADMIN_SEQ = FAQ_REG_USER", "LEFT");
        $this->db->order_by("FAQ_REG_DATE", "DESC");
        if($getCount){
            return $this->db->get("tbl_faq_list")->num_rows();
        } else {
            $this->db->limit($wheresql["limit"], $wheresql["start"]);
            return $this->db->get("tbl_faq_list")->result();
        }
    }

    public function insertFaq($data){
        return $this->db->insert("tbl_faq_list", $data);
    }

    public function updateFaq($faqSeq, $data){
        $this->db->where("FAQ_SEQ", $faqSeq);
        return $this->db->update("tbl_faq_list", $data);
    }

    public function deleteFaq($faqSeq){
        $this->db->where("FAQ_SEQ", $faqSeq);
        return $this->db->update("tbl_faq_list", array("FAQ_DEL_YN" => "Y"));
    }
    
}
