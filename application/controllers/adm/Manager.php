<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manager extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library("session");
		$this->load->library('CustomClass');
		$this->load->model("ManagerModel");

		if($_SERVER['REQUEST_URI'] != "/admin"){
			$this->customclass->adminSessionCheck();
		}
	}

	public function managerModifyProc(){
		//print_r($this->input->post());
		$admin_seq = $this->input->post("admin_seq");
		$admin_id = $this->input->post("admin_id");
		$admin_pw = $this->input->post("admin_pw");
		$admin_name = $this->input->post("admin_name");
		$admin_email = $this->input->post("admin_email");
		$admin_tel = $this->input->post("admin_tel");
		$admin_hp = $this->input->post("admin_hp");
		$admin_permi = $this->input->post("admin_permi");
		$admin_memo = $this->input->post("admin_memo");

		$update_arr = array(
							"ADMIN_ID" => $admin_id,
							"ADMIN_NAME" => $admin_name,
							"ADMIN_EMAIL" => $admin_email,
							"ADMIN_HP" => $admin_hp,
							"ADMIN_TEL" => $admin_tel,
							"ADMIN_MEMO" => $admin_memo,
							"ADMIN_PERMI" => implode("|",$admin_permi)
							);

		if ($admin_pw != ""){
			//array_push($update_arr, "ADMIN_PW" => md5($admin_pw));
			$update_arr["ADMIN_PW"] = md5($admin_pw);
		}

		$result = $this->ManagerModel->updateManager($update_arr, $admin_seq);

		if($result){
			echo json_encode(array("code"=>"200", "msg" => "관리자 정보 수정되었습니다."));
		} else {
			echo json_encode(array("code"=>"202", "msg" => "관리자 정보 수정중 문제가 생겼습니다."));
		}
	}

	public function managerWriteProc(){
		$admin_id = $this->input->post("admin_id");
		$admin_pw = $this->input->post("admin_pw");
		$admin_name = $this->input->post("admin_name");
		$admin_email = $this->input->post("admin_email");
		$admin_tel = $this->input->post("admin_tel");
		$admin_hp = $this->input->post("admin_hp");
		$admin_memo = $this->input->post("admin_memo");

		$searchId = $this->ManagerModel->getManagerById($admin_id);
		if (!empty($searchId)){
			echo json_encode(array("code"=>"202", "msg" => "이미 등록되어 있는 아이디 입니다."));
			exit;
		}

		$insert_arr = array(
							"ADMIN_ID" => $admin_id,
							"ADMIN_PW" => md5($admin_pw),
							"ADMIN_NAME" => $admin_name,
							"ADMIN_EMAIL" => $admin_email,
							"ADMIN_HP" => $admin_hp,
							"ADMIN_TEL" => $admin_tel,
							"ADMIN_MEMO" => $admin_memo,
							"ADMIN_DEL_YN" => "N",
							"ADMIN_REG_DATE" => date("Y-m-d H:i:s"),
							"ADMIN_REG_ID" => $this->session->userdata("ADMIN_ID"),
							"ADMIN_REG_IP" => $_SERVER["REMOTE_ADDR"]
							);

		$result = $this->ManagerModel->insertManager($insert_arr);

		if($result){
			echo json_encode(array("code"=>"200", "msg" => "관리자 정보 등록되었습니다."));
		} else {

		}
	}

	public function managerDeleteProc(){
		$admin_seq = $this->input->post("admin_seq");

		$result = $this->ManagerModel->deleteManager($admin_seq);

		if($result){
			echo json_encode(array("code"=>"200", "msg" => "관리자 정보 삭제되었습니다."));
		} else {
			echo json_encode(array("code"=>"202", "msg" => "관리자 정보 삭제중 문제가 생겼습니다."));
		}
	}


}