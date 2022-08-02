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
        $this->db->order_by("NL_REG_DATE", "DESC");
        if($getCount){
            return $this->db->get("tbl_news_list")->num_rows();
        } else {
            $this->db->limit($wheresql["limit"], $wheresql["start"]);
            return $this->db->get("tbl_news_list")->result();
        }
    }

    public function getSiteInfo(){
        $this->db->where("tbl_site_info.SITE_SEQ", "1");
		return $this->db->get("tbl_site_info")->row();
    }

    public function setSiteInfo($updateArr){
		$this->db->where("tbl_site_info.SITE_SEQ", "1");
		return $this->db->update("tbl_site_info", $updateArr);
	}
}
