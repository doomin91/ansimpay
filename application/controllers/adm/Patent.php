<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class patent extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library("session");
		$this->load->library('CustomClass');
		$this->load->model("PatentModel");

		if($_SERVER['REQUEST_URI'] != "/admin"){
			$this->customclass->adminSessionCheck();
		}
	}

	public function inputPatent(){
		try {
			$mode			= $this->input->post("mode");
			$plSeq			= $this->input->post("plSeq");
			$subject 		= $this->input->post("subject");
			$desc 			= $this->input->post("desc");
			$display		= $this->input->post("display");

			if(!empty($_FILES["file"]["name"])){
				$filePermitType = array(
					"image/png", "image/jpg", "image/jpeg", "image/webp"
				);

				$fileUpload = $this->customclass->fileUpload($_FILES, "Patent", $filePermitType, 5);
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
					"PL_SUBJECT" 		=> $subject,
					"PL_DESC" 			=> $desc,
					"PL_DISPLAY_YN" 	=> $display,
					"PL_IMAGE_URL" 		=> $fileUpload["result"]["uploadedPath"],
					"PL_REG_USER"		=> $this->session->userdata("ADMIN_SEQ")
				);
				$result 	= $this->PatentModel->insertPatent($data);
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
					"PL_SUBJECT" 	=> $subject,
					"PL_DESC" 			=> $desc,
					"PL_DISPLAY_YN" => $display,
				);
				// 수정 시 업로드 파일이 존재하는 경우
				if(!empty($_FILES["file"]["name"])) $data["PL_IMAGE_URL"] = $fileUpload["result"]["uploadedPath"];
				$result 	= $this->PatentModel->updatePatent($plSeq, $data);
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
	
	public function delPatent(){
		try {
			$plSeq	 	= $this->input->get("plSeq");
			$result 	= $this->PatentModel->deletePatent($plSeq);
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