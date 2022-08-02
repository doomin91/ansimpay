<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("UserModel");
		$this->load->library('session');

	}
	public function join(){
		$userId 	= $this->input->post("userId");
		$userPwd 	= $this->input->post("userPwd");
		$userName 	= $this->input->post("userName");
		if($this->UserModel->getUser($userId)){	
			$insertArr = array(
				"USER_ID" 		=> $userId,
				"USER_PWD" 		=> md5($userPwd),
				"USER_NAME" 	=> $userName,
				"USER_AUTH" 	=> "Y",
				"USER_REG_DATE" => date("Y-m-d H:i:s"),
			);
			$result = $this->UserModel->insertUser($insertArr);
		} else {
			$returnMsg = array("code" => "203", "msg" => "이미 동일한 아이디가 존재합니다.");
		}

		if ($result == true){
			$returnMsg = array("code" => "200", "msg" => "회원 정보 등록 완료되었습니다.");
		}else{
			$returnMsg = array("code" => "202", "msg" => "회원 정보 등록중 문제가 생겼습니다.");
		}

		echo json_encode($returnMsg);
	}

	public function login(){
		try {
			$userId 	= $this->input->post("userId");
			$userPwd 	= md5($this->input->post("userPwd"));
			$result 	= $this->UserModel->getUserByIDAndPassword($userId, $userPwd);

			if ($result){
				$returnMsg = array(
					"code" 	=> 200,
					"msg"	=> "로그인 성공"
				);
				$sessionData = array(
					"USER_SEQ" 	=>$result->USER_SEQ,
					"USER_ID" 	=>$result->USER_ID,
					"USER_PWD" 	=>$result->USER_PWD,
					"USER_NAME" =>$result->USER_NAME,
					"USER_AUTH" =>$result->USER_AUTH
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
