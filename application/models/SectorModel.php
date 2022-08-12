<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SectorModel extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

/**
 * 최근 소식 관련 Model
 */
    public function getSectorForFront(){
        $this->db->where("SECTOR_DISPLAY_YN", "Y");
        $this->db->where("SECTOR_DEL_YN", "N");
        $this->db->order_by("SECTOR_REG_DATE", "DESC");
        return $this->db->get("tbl_sector_list")->result();
    }

    public function getSectorByCateSeq($sectorSeq){
        $this->db->where("SECTOR_SEQ", $sectorSeq);
        $this->db->where("SECTOR_DISPLAY_YN", "Y");
        return $this->db->get("tbl_sector_list")->result();
    }

    public function getSectorList($wheresql, $getCount=false){
        if ((isset($wheresql["regDateStart"])) && ($wheresql["regDateStart"] != "")){
            $this->db->where("DATE(tbl_sector_list.SECTOR_REG_DATE) >=", $wheresql["regDateStart"]);
        }

        if ((isset($wheresql["regDateEnd"])) && ($wheresql["regDateEnd"] != "")){
            $this->db->where("DATE(tbl_sector_list.SECTOR_REG_DATE) <=", $wheresql["regDateEnd"]);
        }

        if((isset($wheresql['searchString'])) && $wheresql['searchField'] == "SUBJECT"){
            $this->db->LIKE("tbl_sector_list.SECTOR_SUBJECT", $wheresql['searchString']);
        }

        if((isset($wheresql['searchString'])) && $wheresql['searchField'] == "USER_NAME"){
            $this->db->LIKE("USER.USER_NAME", $wheresql['searchString']);
        }

        if((isset($wheresql['searchString'])) && ($wheresql['searchField'] == "all" || $wheresql['searchField'] == "")){
            $this->db->group_start();
            $this->db->LIKE("tbl_sector_list.SECTOR_SUBJECT", $wheresql['searchString']);
            $this->db->LIKE("tbl_manager_list.ADMIN_NAME", $wheresql['searchString']);
            $this->db->group_end();
        }
        $this->db->where("SECTOR_DEL_YN", "N");
        $this->db->join("tbl_manager_list", "tbl_manager_list.ADMIN_SEQ = SECTOR_REG_USER", "LEFT");
        $this->db->order_by("SECTOR_REG_DATE", "DESC");
        if($getCount){
            return $this->db->get("tbl_sector_list")->num_rows();
        } else {
            $this->db->limit($wheresql["limit"], $wheresql["start"]);
            return $this->db->get("tbl_sector_list")->result();
        }
    }

    public function insertSector($data){
        return $this->db->insert("tbl_sector_list", $data);
    }

    public function updateSector($sectorSeq, $data){
        $this->db->where("SECTOR_SEQ", $sectorSeq);
        return $this->db->update("tbl_sector_list", $data);
    }

    public function deleteSector($sectorSeq){
        $this->db->where("SECTOR_SEQ", $sectorSeq);
        return $this->db->update("tbl_sector_list", array("SECTOR_DEL_YN" => "Y"));
    }
    
}
