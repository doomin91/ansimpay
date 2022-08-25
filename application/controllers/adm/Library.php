<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class library extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library("session");
		$this->load->library('CustomClass');
		$this->load->model("LibraryModel");

		if($_SERVER['REQUEST_URI'] != "/admin"){
			$this->customclass->adminSessionCheck();
		}
	}

	public function inputLibrary(){
		try {
			$mode			= $this->input->post("mode");
			$libSeq			= $this->input->post("libSeq");
			$category 		= $this->input->post("category");
			$subject 		= $this->input->post("subject");
			$display		= $this->input->post("display");
			if(!empty($_FILES["file"]["name"])){
				$filePermitType = array(
					"application/pdf",
					"application/msword",
					"application/octet-stream",
					"application/x-hwp", 
					"application/haansofthwp", 
					"application/vnd.hancom.hwp"
				);
				
				$fileUpload = $this->customclass->fileUpload($_FILES, "Library", $filePermitType, 5);
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
						"msg" => "파일을 업로드 해주세요."
					);
					echo json_encode($returnMsg);
					return false;
				}
			}
	
			if($mode == "createMode"){
				$data = array(
					"LIB_SUBJECT" 		=> $subject,
					"LIB_CATEGORY"		=> $category,
					"LIB_DISPLAY_YN" 	=> $display,
					"LIB_FILE_NAME"		=> $fileUpload["result"]["originalName"],
					"LIB_FILE_PATH" 	=> $fileUpload["result"]["uploadedPath"],
					"LIB_REG_USER"		=> $this->session->userdata("ADMIN_SEQ")
				);
				$result 	= $this->LibraryModel->insertLibrary($data);
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
					"LIB_SUBJECT" 		=> $subject,
					"LIB_CATEGORY"		=> $category,
					"LIB_DISPLAY_YN" 	=> $display,
				);
				// 수정 시 업로드 파일이 존재하는 경우
				if(!empty($_FILES["file"]["name"])) {
					$data["LIB_FILE_NAME"] = $fileUpload["result"]["originalName"];
					$data["LIB_FILE_PATH"] = $fileUpload["result"]["uploadedPath"];
				}
				$result 	= $this->LibraryModel->updateLibrary($libSeq, $data);
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
	
	public function delLibrary(){
		try {
			$libSeq	 	= $this->input->get("libSeq");
			$result 		= $this->LibraryModel->deleteLibrary($libSeq);
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