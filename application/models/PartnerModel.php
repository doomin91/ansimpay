<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PartnerModel extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    /**
     * Partners Category 
     */
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

    /**
     * Partner
     */

    public function getPatnerForFront(){
        $this->db->where("PL_DISPLAY_YN", "Y");
        $this->db->where("PL_DEL_YN", "N");
        $this->db->order_by("PL_REG_DATE", "DESC");
        return $this->db->get("tbl_partner_list")->result();
    }

    public function getPartnersByCateSeq($cateSeq){
        $this->db->where("PC_SEQ", $cateSeq);
        $this->db->where("PL_DISPLAY_YN", "Y");
        $this->db->join("tbl_partner_category", "tbl_partner_category.PC_SEQ = PL_CATEGORY_SEQ", "LEFT");
        return $this->db->get("tbl_partner_list")->result();
    }

    public function getPartnersList($wheresql, $getCount=false){
        if ((isset($wheresql["regDateStart"])) && ($wheresql["regDateStart"] != "")){
            $this->db->where("DATE(tbl_partner_list.PL_REG_DATE) >=", $wheresql["regDateStart"]);
        }

        if ((isset($wheresql["regDateEnd"])) && ($wheresql["regDateEnd"] != "")){
            $this->db->where("DATE(tbl_partner_list.PL_REG_DATE) <=", $wheresql["regDateEnd"]);
        }

        if((isset($wheresql['searchString'])) && $wheresql['searchField'] == "SUBJECT"){
            $this->db->LIKE("tbl_partner_list.PL_SUBJECT", $wheresql['searchString']);
        }

        if((isset($wheresql['searchString'])) && $wheresql['searchField'] == "CATEGORY"){
            $this->db->LIKE("tbl_partner_category.PC_CATEGORY_NAME", $wheresql['searchString']);
        }

        if((isset($wheresql['searchString'])) && $wheresql['searchField'] == "ADMIN_NAME"){
            $this->db->LIKE("tbl_manager_list.ADMIN_NAME", $wheresql['searchString']);
        }

        if((isset($wheresql['searchString'])) && ($wheresql['searchField'] == "all" || $wheresql['searchField'] == "")){
            $this->db->group_start();
            $this->db->LIKE("tbl_partner_list.PL_SUBJECT", $wheresql['searchString']);
            $this->db->OR_LIKE("tbl_partner_list.PL_LINK", $wheresql['searchString']);
            $this->db->OR_LIKE("tbl_manager_list.ADMIN_NAME", $wheresql['searchString']);
            $this->db->group_end();
        }
        $this->db->where("PL_DEL_YN", "N");
        $this->db->where("tbl_partner_category.PC_SEQ", $wheresql['cateSeq']);
        $this->db->join("tbl_manager_list", "tbl_manager_list.ADMIN_SEQ = PL_REG_USER", "LEFT");
        $this->db->join("tbl_partner_category", "tbl_partner_category.PC_SEQ = PL_CATEGORY_SEQ", "LEFT");
        $this->db->order_by("PL_REG_DATE", "DESC");
        if($getCount){
            return $this->db->get("tbl_partner_list")->num_rows();
        } else {
            $this->db->limit($wheresql["limit"], $wheresql["start"]);
            return $this->db->get("tbl_partner_list")->result();
        }
    }

    public function insPartner($data){
        return $this->db->insert("tbl_partner_list", $data);
    }

    public function uptPartner($plSeq, $data){
        $this->db->where("PL_SEQ", $plSeq);
        return $this->db->update("tbl_partner_list", $data);
    }

    public function delPartner($plSeq){
        $this->db->where("PL_SEQ", $plSeq);
        return $this->db->update("tbl_partner_list", array("PL_DEL_YN" => "Y"));
    }

}
