<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class service extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library("session");
		$this->load->library('CustomClass');
		$this->load->model("ServiceModel");

		if($_SERVER['REQUEST_URI'] != "/admin"){
			$this->customclass->adminSessionCheck();
		}
	}
	
	public function inputService(){
		try {
			$mode			= $this->input->post("mode");
			$cateSeq		= $this->input->post("cateSeq");
			$slSeq			= $this->input->post("slSeq");
			$subject 		= $this->input->post("subject");
			$desc 			= $this->input->post("desc");
			$display		= $this->input->post("display");

			if(!empty($_FILES["file"]["name"])){
				$filePermitType = array(
					"image/png", "image/jpg", "image/jpeg", "image/webp", "image/gif"
				);

				$fileUpload = $this->customclass->fileUpload($_FILES, "service", $filePermitType, 5);
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
					"SL_SUBJECT" 		=> $subject,
					"SL_CATEGORY_SEQ"	=> $cateSeq,
					"SL_DESC" 			=> $desc,
					"SL_DISPLAY_YN" 	=> $display,
					"SL_IMAGE_URL" 		=> $fileUpload["result"]["uploadedPath"],
					"SL_REG_USER"		=> $this->session->userdata("ADMIN_SEQ")
				);
				$result 	= $this->ServiceModel->insService($data);
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
					"SL_SUBJECT" 	=> $subject,
					"SL_DESC" 		=> $desc,
					"SL_DISPLAY_YN" => $display,
				);
				// 수정 시 업로드 파일이 존재하는 경우
				if(!empty($_FILES["file"]["name"])) $data["SL_IMAGE_URL"] = $fileUpload["result"]["uploadedPath"];
				$result 	= $this->ServiceModel->uptService($slSeq, $data);
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
	
	public function getService(){
		try {
			$slSeq	 		= $this->input->get("slSeq");
			$result 		= $this->ServiceModel->getServiceByCateSeq($slSeq);
			if($result){
				$returnMsg = array(
					"code" => 200,
					"msg" => "불러오기 완료",
					"objects" => $result
				);
			} else {
				$returnMsg = array(
					"code" => 201,
					"msg" => "불러 올 수 없습니다."
				);
			}
			echo json_encode($returnMsg);
		} catch(Exception $e){
			echo json_encode($e);
		}
	}

	public function delService(){
		try {
			$slSeq	 	= $this->input->get("slSeq");
			$result 		= $this->ServiceModel->delService($slSeq);
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