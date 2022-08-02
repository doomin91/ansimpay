<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewsModel extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getNewsList($wheresql, $getCount=false){
        if ((isset($wheresql["regDateStart"])) && ($wheresql["regDateStart"] != "")){
			$this->db->where("DATE(tbl_news_list.NL_REG_DATE) >=", $wheresql["regDateStart"]);
		}

		if ((isset($wheresql["regDateEnd"])) && ($wheresql["regDateEnd"] != "")){
			$this->db->where("DATE(tbl_news_list.NL_REG_DATE) <=", $wheresql["regDateEnd"]);
		}

        if((isset($wheresql['searchString'])) && $wheresql['searchField'] == "SUBJECT"){
            $this->db->LIKE("tbl_news_list.NL_SUBJECT", $wheresql['searchString']);
        }

        if((isset($wheresql['searchString'])) && $wheresql['searchField'] == "LINK"){
            $this->db->LIKE("tbl_news_list.NL_LINK", $wheresql['searchString']);
        }

        if((isset($wheresql['searchString'])) && $wheresql['searchField'] == "USER_NAME"){
            // $this->db->LIKE("USER.USER_NAME", $wheresql['searchString']);
        }

        if((isset($wheresql['searchString'])) && ($wheresql['searchField'] == "all" || $wheresql['searchField'] == "")){
            $this->db->group_start();
            $this->db->LIKE("tbl_news_list.NL_SUBJECT", $wheresql['searchString']);
            $this->db->OR_LIKE("tbl_news_list.NL_LINK", $wheresql['searchString']);
            $this->db->group_end();
        }
        $this->db->where("NL_DEL_YN", "N");
        $this->db->join("tbl_user_list", "tbl_user_list.USER_SEQ = NL_REG_USER", "LEFT");
        $this->db->order_by("NL_REG_DATE", "DESC");
        if($getCount){
            return $this->db->get("tbl_news_list")->num_rows();
        } else {
            $this->db->limit($wheresql["limit"], $wheresql["start"]);
            return $this->db->get("tbl_news_list")->result();
        }
    }

    public function insertNews($data){
        return $this->db->insert("tbl_news_list", $data);
    }

    public function updateNews($newsSeq, $data){
        $this->db->where("NL_SEQ", $newsSeq);
        return $this->db->update("tbl_news_list", $data);
    }

    public function deleteNews($newsSeq){
        $this->db->where("NL_SEQ", $newsSeq);
        return $this->db->update("tbl_news_list", array("NL_DEL_YN" => "Y"));
    }

    /** 
     * Frontend 
     */

    public function getNewsListFront(){
        $this->db->where("NL_DEL_YN", "N");
        $this->db->where("NL_DISPLAY_YN", "Y");
        $this->db->order_by("NL_REG_DATE", "DESC");
        return $this->db->get("tbl_news_list")->result();
    }

    
}
