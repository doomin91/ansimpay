<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("ManagerModel");
		$this->load->library('session');

	}
	public function login(){
		try {
			$userId 	= $this->input->post("userId");
			$userPwd 	= md5($this->input->post("userPwd"));
			$result 	= $this->ManagerModel->getUserByIDAndPassword($userId, $userPwd);

			if ($result){
				$returnMsg = array(
					"code" 	=> 200,
					"msg"	=> "로그인 성공"
				);
				$sessionData = array(
					"ADMIN_SEQ" 	=> $result->ADMIN_SEQ,
					"ADMIN_ID" 		=> $result->ADMIN_ID,
					"ADMIN_NAME" 	=> $result->ADMIN_NAME,
					"ADMIN_PERMI" 	=> $result->ADMIN_PERMI
				);

				$this->session->set_userdata($sessionData);
			}else{
				$returnMsg = array(
					"code" 	=> 201,
					"msg"	=> "아이디 또는 비밀번호가 일치하지 않습니다."
				);
			}
			
			echo json_encode($returnMsg);
		} catch (Exception $e){
			$returnMsg = array(
				"code" 	=> 202,
				"msg"	=> $e
			);
			echo json_encode($returnMsg);
		}

	}

	public function logout(){
		$this->session->sess_destroy();
		// redirect("/admin", "location");
		header("location:/admin/");
	}
}
