<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class partners extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library("session");
		$this->load->library('CustomClass');

		if($_SERVER['REQUEST_URI'] != "/admin"){
			$this->customclass->adminSessionCheck();
		}
	}
	
	public function getRecentlyNewsList(){
		try {
			$result = $this->AdminModel->getRecentlyNewsList();
			echo json_encode($result);
		} catch(Exception $e) {
			echo json_encode($e);
		}
	}
	
	public function inputRecentlyNews(){
		try {
			$mode			= $this->input->post("mode");
			$rlSeq			= $this->input->post("rlSeq");
			$subject 		= $this->input->post("subject");
			$link 			= $this->input->post("link");
			$display		= $this->input->post("display");
			$displayDate	= $this->input->post("displayDate");

			if(!empty($_FILES["file"]["name"])){
				$filePermitType = array(
					"image/png", "image/jpg", "image/jpeg", "image/webp"
				);

				$fileUpload = $this->customclass->fileUpload($_FILES, "recentlyNews", $filePermitType, 5);
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
					"RL_SUBJECT" 		=> $subject,
					"RL_LINK" 			=> $link,
					"RL_DISPLAY_YN" 	=> $display,
					"RL_IMAGE_URL" 		=> $fileUpload["result"]["uploadedPath"],
					"RL_DISPLAY_DATE" 	=> $displayDate,
					"RL_REG_USER"		=> $this->session->userdata("ADMIN_SEQ")
				);
				$result 	= $this->NewsModel->insertRecentlyNews($data);
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
					"RL_SUBJECT" 	=> $subject,
					"RL_LINK" 		=> $link,
					"RL_DISPLAY_YN" => $display,
					"RL_DISPLAY_DATE" => $displayDate
				);
				// 수정 시 업로드 파일이 존재하는 경우
				if(!empty($_FILES["file"]["name"])) $data["RL_IMAGE_URL"] = $fileUpload["result"]["uploadedPath"];
				$result 	= $this->NewsModel->updateRecentlyNews($rlSeq, $data);
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
	
	public function delRecentlyNews(){
		try {
			$rlSeq	 	= $this->input->get("rlSeq");
			$result 		= $this->NewsModel->deleteRecentlyNews($rlSeq);
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