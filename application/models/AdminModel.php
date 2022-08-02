<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getPartnerCatrgory(){
        $this->db->where("PC_DEL_YN", "N");
        return $this->db->get("tbl_partner_category")->result();
    }

    public function getPartnerCateName($cateName){
        $this->db->where("PC_CATEGORY_NAME", $cateName);
        return $this->db->get("tbl_partner_category")->row();
    }

    public function insPartnerCate($data){
        return $this->db->insert("tbl_partner_category", $data);
    }

    public function uptPartnerCate($partCateSeq, $data){
        $this->db->where($partCateSeq);
        return $this->db->update("tbl_partner_category", $data);
    }

    public function delPartnerCate($pcSeq){
        $this->db->where("PC_SEQ", $pcSeq);
        return $this->db->update("tbl_partner_category", array("PC_DEL_YN" => "Y"));
    }

    public function getPartnerCatrgoryCount(){
        $this->db->where("PC_DEL_YN", "N");
        return $this->db->get("tbl_partner_category")->num_rows();
    }

    public function insPartner(){

    }

    public function uptPartner(){

    }

    public function delPartner(){

    }

    public function getNewsList(){
        $this->db->where("NL_DEL_YN", "N");
        $this->db->order_by("NL_REG_DATE", "DESC");
        return $this->db->get("tbl_news_list")->result();
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
