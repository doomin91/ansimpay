<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PartnersModel extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getPartnerCatrgory(){
        $this->db->where("PC_DEL_YN", "N");
        $this->db->order_by("PC_ORDER_NUMBER");
        return $this->db->get("tbl_partner_category")->result();
    }

    public function getPartnerCateName($cateName){
        $this->db->where("PC_DEL_YN", "N");
        $this->db->where("PC_CATEGORY_NAME", $cateName);
        return $this->db->get("tbl_partner_category")->row();
    }

    public function getPartnerCateBySeq($cateSeq){
        $this->db->where("PC_DEL_YN", "N");
        $this->db->where("PC_SEQ", $cateSeq);
        return $this->db->get("tbl_partner_category")->row();
    }

    public function getPartnersCateOrder($orderNumber){
        $this->db->where("PC_ORDER_NUMBER", $orderNumber);
        return $this->db->get("tbl_partner_category")->row();
    }

    public function getUpPartners($orderNumber){
        $this->db->where("PC_DEL_YN", "N");
        $this->db->where("PC_ORDER_NUMBER >", $orderNumber);
        return $this->db->get("tbl_partner_category")->result();
    }

    public function insPartnerCate($data){
        return $this->db->insert("tbl_partner_category", $data);
    }

    public function uptPartnerCate($cateSeq, $data){
        $this->db->where("PC_SEQ", $cateSeq);
        return $this->db->update("tbl_partner_category", $data);
    }

    public function delPartnerCate($cateSeq){
        $this->db->where("PC_SEQ", $cateSeq);
        return $this->db->update("tbl_partner_category", array("PC_DEL_YN" => "Y", "PC_ORDER_NUMBER" => null));
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

}
