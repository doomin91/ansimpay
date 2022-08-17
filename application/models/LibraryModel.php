<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LibraryModel extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

/**
 * 최근 소식 관련 Model
 */

    # 개인 사업자용 서류 다운로드
    public function getLibraryFiles1(){
        $this->db->where("LIB_DISPLAY_YN", "Y");
        $this->db->where("LIB_DEL_YN", "N");
        $this->db->where("LIB_CATEGORY", 1);
        return $this->db->get("tbl_library_list")->result();
    }

    # 법인 사업자용 서류 다운로드
    public function getLibraryFiles2(){
        $this->db->where("LIB_DISPLAY_YN", "Y");
        $this->db->where("LIB_DEL_YN", "N");
        $this->db->where("LIB_CATEGORY", 2);
        return $this->db->get("tbl_library_list")->result();
    }

    # 양수양도계약
    public function getLibraryFiles3(){
        $this->db->where("LIB_DISPLAY_YN", "Y");
        $this->db->where("LIB_DEL_YN", "N");
        $this->db->where("LIB_CATEGORY", 3);
        return $this->db->get("tbl_library_list")->result();
    }

    # 고객용 메뉴얼
    public function getLibraryFiles4(){
        $this->db->where("LIB_DISPLAY_YN", "Y");
        $this->db->where("LIB_DEL_YN", "N");
        $this->db->where("LIB_CATEGORY", 4);
        return $this->db->get("tbl_library_list")->result();
    }

    # 가맹점용 메뉴얼
    public function getLibraryFiles5(){
        $this->db->where("LIB_DISPLAY_YN", "Y");
        $this->db->where("LIB_DEL_YN", "N");
        $this->db->where("LIB_CATEGORY", 5);
        return $this->db->get("tbl_library_list")->result();
    }

    public function getLibraryList($wheresql, $getCount=false){
        if ((isset($wheresql["regDateStart"])) && ($wheresql["regDateStart"] != "")){
            $this->db->where("DATE(tbl_library_list.LIB_REG_DATE) >=", $wheresql["regDateStart"]);
        }

        if ((isset($wheresql["regDateEnd"])) && ($wheresql["regDateEnd"] != "")){
            $this->db->where("DATE(tbl_library_list.LIB_REG_DATE) <=", $wheresql["regDateEnd"]);
        }

        if((isset($wheresql['searchString'])) && $wheresql['searchField'] == "SUBJECT"){
            $this->db->LIKE("tbl_library_list.LIB_SUBJECT", $wheresql['searchString']);
        }

        if((isset($wheresql['searchString'])) && $wheresql['searchField'] == "CATEGORY"){
            $this->db->LIKE("tbl_library_category.LC_CATEGORY_NAME", $wheresql['searchString']);
        }

        if((isset($wheresql['searchString'])) && $wheresql['searchField'] == "USER_NAME"){
            $this->db->LIKE("USER.USER_NAME", $wheresql['searchString']);
        }

        if((isset($wheresql['searchString'])) && ($wheresql['searchField'] == "all" || $wheresql['searchField'] == "")){
            $this->db->group_start();
            $this->db->LIKE("tbl_library_list.LIB_SUBJECT", $wheresql['searchString']);
            $this->db->LIKE("tbl_library_list.LIB_CATEGORY", $wheresql['searchString']);
            $this->db->LIKE("tbl_manager_list.ADMIN_NAME", $wheresql['searchString']);
            $this->db->group_end();
        }
        $this->db->where("LIB_DEL_YN", "N");
        $this->db->join("tbl_manager_list", "tbl_manager_list.ADMIN_SEQ = LIB_REG_USER", "LEFT");
        $this->db->join("tbl_library_category", "tbl_library_category.LC_SEQ = LIB_CATEGORY", "LEFT");
        $this->db->order_by("LIB_REG_DATE", "DESC");
        if($getCount){
            return $this->db->get("tbl_library_list")->num_rows();
        } else {
            $this->db->limit($wheresql["limit"], $wheresql["start"]);
            return $this->db->get("tbl_library_list")->result();
        }
    }

    public function insertLibrary($data){
        return $this->db->insert("tbl_library_list", $data);
    }

    public function updateLibrary($libSeq, $data){
        $this->db->where("LIB_SEQ", $libSeq);
        return $this->db->update("tbl_library_list", $data);
    }

    public function deleteLibrary($libSeq){
        $this->db->where("LIB_SEQ", $libSeq);
        return $this->db->update("tbl_library_list", array("LIB_DEL_YN" => "Y"));
    }

    public function getLibraryCate(){
        return $this->db->get("tbl_library_category")->result();
    }
    
}
