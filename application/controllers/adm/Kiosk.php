<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kiosk extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library("session");
		$this->load->library('CustomClass');
		$this->load->model("KioskModel");

		if($_SERVER['REQUEST_URI'] != "/admin"){
			$this->customclass->adminSessionCheck();
		}
	}

	public function inputKiosk(){
		try {
			$mode			= $this->input->post("mode");
			$klSeq			= $this->input->post("klSeq");
			$subject 		= $this->input->post("subject");
			$display		= $this->input->post("display");

			if(!empty($_FILES["file"]["name"])){
				$filePermitType = array(
					"image/png", "image/jpg", "image/jpeg", "image/webp"
				);

				$fileUpload = $this->customclass->fileUpload($_FILES, "Kiosk", $filePermitType, 3);
				if($fileUpload["uploaded"] == "failed") {
					$returnMsg = array(
						"code" => 203,
						"msg" => $fileUpload["reason"]
					);
					echo json_encode($returnMsg);
					return false;
				}
			} else {
				if($mode == "createMode"){
					$returnMsg = array(
						"code" => 203,
						"msg" => "이미지를 업로드 해주세요."
					);
					echo json_encode($returnMsg);
					return false;
				}
			}
	
			if($mode == "createMode"){
				$data = array(
					"KL_SUBJECT" 		=> $subject,
					"KL_DISPLAY_YN" 	=> $display,
					"KL_IMAGE_URL" 		=> $fileUpload["result"]["uploadedPath"],
					"KL_REG_USER"		=> $this->session->userdata("ADMIN_SEQ")
				);
				$result 	= $this->KioskModel->insertKiosk($data);
				if($result){
					$returnMsg = array(
						"code" => 200,
						"msg" => "등록완료"
					);
				} else {
					$returnMsg = array(
						"code" => 201,
						"msg" => "등록에 실패했습니다."
					);
				}
			} 

			if($mode == "modifyMode") {
				$data = array(
					"KL_SUBJECT" 	=> $subject,
					"KL_DISPLAY_YN" => $display,
				);
				// 수정 시 업로드 파일이 존재하는 경우
				if(!empty($_FILES["file"]["name"])) $data["KL_IMAGE_URL"] = $fileUpload["result"]["uploadedPath"];
				$result 	= $this->KioskModel->updateKiosk($klSeq, $data);
				if($result){
					$returnMsg = array(
						"code" => 200,
						"msg" => "수정 완료"
					);
				} else {
					$returnMsg = array(
						"code" => 202,
						"msg" => "수정에 실패했습니다."
					);
				}
			}
	
			echo json_encode($returnMsg);
		} catch(Exception $e) {
			echo json_encode($e);
		}
	}
	
	public function delKiosk(){
		try {
			$klSeq	 	= $this->input->get("klSeq");
			$result 		= $this->KioskModel->deleteKiosk($klSeq);
			if($result){
				$returnMsg = array(
					"code" => 200,
					"msg" => "삭제 완료"
				);
			} else {
				$returnMsg = array(
					"code" => 201,
					"msg" => "게시글 삭제 실패했습니다."
				);
			}
			echo json_encode($returnMsg);
		} catch(Exception $e) {
			echo json_encode($e);
		}
	}
}