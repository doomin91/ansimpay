<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManagerModel extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }


	public function getManager($whereArr){
		$this->db->where("tbl_manager_list.ADMIN_DEL_YN", "N");
		$this->db->select("tbl_manager_list.*");
		$this->db->order_by("tbl_manager_list.ADMIN_SEQ", "DESC");
		$this->db->limit($whereArr["limit"], $whereArr["start"]);
		return $this->db->get("tbl_manager_list")->result();
	}
    public function getUserByIDAndPassword($userId, $userPwd){
		$this->db->where("tbl_manager_list.ADMIN_DEL_YN", "N");
        $this->db->where("ADMIN_ID", $userId);
        $this->db->where("ADMIN_PW", $userPwd);
        return $this->db->get("tbl_manager_list")->row();
    }

	public function getManagerCount($whereArr){
		$this->db->where("tbl_manager_list.ADMIN_DEL_YN", "N");
		$this->db->select("tbl_manager_list.*");
		$this->db->from("tbl_manager_list");
		return $this->db->count_all_results();
	}

	public function getManagerInfo($admin_seq){
		$this->db->where("tbl_manager_list.ADMIN_SEQ", $admin_seq);
		return $this->db->get("tbl_manager_list")->row();
	}

	public function updateManager($whereArr, $admin_seq){
		$this->db->where("tbl_manager_list.ADMIN_SEQ", $admin_seq);
		return $this->db->update("tbl_manager_list", $whereArr);
	}

	public function insertManager($insertArr){
		return $this->db->insert("tbl_manager_list", $insertArr);
	}

	public function getManagerById($admin_id){
		$this->db->where("tbl_manager_list.ADMIN_ID", $admin_id);
		return $this->db->get("tbl_manager_list")->row();
	}

	public function deleteManager($admin_seq){
		$this->db->where("tbl_manager_list.ADMIN_SEQ", $admin_seq);
		return $this->db->update("tbl_manager_list", array("ADMIN_DEL_YN" => "Y"));
	}
}
