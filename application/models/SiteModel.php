<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiteModel extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getSiteInfo(){
        $this->db->where("tbl_site_info.SITE_SEQ", "1");
		return $this->db->get("tbl_site_info")->row();
    }

    public function setSiteInfo($updateArr){
		$this->db->where("tbl_site_info.SITE_SEQ", "1");
		return $this->db->update("tbl_site_info", $updateArr);
	}

    public function getFamilyList(){
        return $this->db->get("tbl_family_site_info")->result();
    }
}
