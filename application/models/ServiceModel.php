<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceModel extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    /**
     * Service Category 
     */
    public function getServiceCategory(){
        $this->db->where("SC_DEL_YN", "N");
        $this->db->order_by("SC_ORDER_NUMBER");
        return $this->db->get("tbl_service_category")->result();
    }

    public function getServiceCateName($cateName){
        $this->db->where("SC_DEL_YN", "N");
        $this->db->where("SC_CATEGORY_NAME", $cateName);
        return $this->db->get("tbl_service_category")->row();
    }

    public function getServiceCateBySeq($cateSeq){
        $this->db->where("SC_DEL_YN", "N");
        $this->db->where("SC_SEQ", $cateSeq);
        return $this->db->get("tbl_service_category")->row();
    }

    public function getServiceCateOrder($orderNumber){
        $this->db->where("SC_ORDER_NUMBER", $orderNumber);
        return $this->db->get("tbl_service_category")->row();
    }

    public function getUpService($orderNumber){
        $this->db->where("SC_DEL_YN", "N");
        $this->db->where("SC_ORDER_NUMBER >", $orderNumber);
        return $this->db->get("tbl_service_category")->result();
    }

    public function insServiceCate($data){
        return $this->db->insert("tbl_service_category", $data);
    }

    public function uptServiceCate($cateSeq, $data){
        $this->db->where("SC_SEQ", $cateSeq);
        return $this->db->update("tbl_service_category", $data);
    }

    public function delServiceCate($cateSeq){
        $this->db->where("SC_SEQ", $cateSeq);
        return $this->db->update("tbl_service_category", array("SC_DEL_YN" => "Y", "SC_ORDER_NUMBER" => null));
    }

    public function getServiceCategoryCount(){
        $this->db->where("SC_DEL_YN", "N");
        return $this->db->get("tbl_service_category")->num_rows();
    }

    /**
     * Service
     */

    public function getServiceByCateSeq($cateSeq){
        $this->db->where("SL_SEQ", $cateSeq);
        $this->db->where("SL_DISPLAY_YN", "Y");
        $this->db->join("tbl_service_category", "tbl_service_category.SC_SEQ = SL_CATEGORY_SEQ", "LEFT");
        return $this->db->get("tbl_service_list")->result();
    }

    public function getServiceByNumber($orderNumber){
        $this->db->where("SC_ORDER_NUMBER", $orderNumber);
        $this->db->where("SL_DISPLAY_YN", "Y");
        $this->db->join("tbl_service_category", "tbl_service_category.SC_SEQ = SL_CATEGORY_SEQ", "LEFT");
        return $this->db->get("tbl_service_list")->result();
    }

    public function getServiceList($wheresql, $getCount=false){
        if ((isset($wheresql["regDateStart"])) && ($wheresql["regDateStart"] != "")){
            $this->db->where("DATE(tbl_service_list.SL_REG_DATE) >=", $wheresql["regDateStart"]);
        }

        if ((isset($wheresql["regDateEnd"])) && ($wheresql["regDateEnd"] != "")){
            $this->db->where("DATE(tbl_service_list.SL_REG_DATE) <=", $wheresql["regDateEnd"]);
        }

        if((isset($wheresql['searchString'])) && $wheresql['searchField'] == "SUBJECT"){
            $this->db->LIKE("tbl_service_list.SL_SUBJECT", $wheresql['searchString']);
        }

        if((isset($wheresql['searchString'])) && $wheresql['searchField'] == "CATEGORY"){
            $this->db->LIKE("tbl_service_category.SC_CATEGORY_NAME", $wheresql['searchString']);
        }

        if((isset($wheresql['searchString'])) && $wheresql['searchField'] == "ADMIN_NAME"){
            $this->db->LIKE("tbl_manager_list.ADMIN_NAME", $wheresql['searchString']);
        }

        if((isset($wheresql['searchString'])) && ($wheresql['searchField'] == "all" || $wheresql['searchField'] == "")){
            $this->db->group_start();
            $this->db->LIKE("tbl_service_list.SL_SUBJECT", $wheresql['searchString']);
            $this->db->OR_LIKE("tbl_service_list.SL_LINK", $wheresql['searchString']);
            $this->db->OR_LIKE("tbl_manager_list.ADMIN_NAME", $wheresql['searchString']);
            $this->db->group_end();
        }
        $this->db->where("SL_DEL_YN", "N");
        $this->db->where("tbl_service_category.SC_SEQ", $wheresql['cateSeq']);
        $this->db->join("tbl_manager_list", "tbl_manager_list.ADMIN_SEQ = SL_REG_USER", "LEFT");
        $this->db->join("tbl_service_category", "tbl_service_category.SC_SEQ = SL_CATEGORY_SEQ", "LEFT");
        $this->db->order_by("SL_REG_DATE", "DESC");
        if($getCount){
            return $this->db->get("tbl_service_list")->num_rows();
        } else {
            $this->db->limit($wheresql["limit"], $wheresql["start"]);
            return $this->db->get("tbl_service_list")->result();
        }
    }

    public function insService($data){
        return $this->db->insert("tbl_service_list", $data);
    }

    public function uptService($plSeq, $data){
        $this->db->where("SL_SEQ", $plSeq);
        return $this->db->update("tbl_service_list", $data);
    }

    public function delService($plSeq){
        $this->db->where("SL_SEQ", $plSeq);
        return $this->db->update("tbl_service_list", array("SL_DEL_YN" => "Y"));
    }

}
