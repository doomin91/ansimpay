<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class news extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library("session");
		$this->load->library('CustomClass');
		$this->load->model("NewsModel");
		$this->load->model("AdminModel");

		if($_SERVER['REQUEST_URI'] != "/admin"){
			$this->customclass->adminSessionCheck();
		}
	}

	public function inputNews(){
		try {
			$mode			= $this->input->post("mode");
			$newsSeq		= $this->input->post("newsSeq");
			$subject 		= $this->input->post("subject");
			$link 			= $this->input->post("link");
			$display		= $this->input->post("display");
			$displayDate	= $this->input->post("displayDate");

			if($mode == "createMode"){
				$data = array(
					"NL_SUBJECT" 	=> $subject,
					"NL_LINK" 		=> $link,
					"NL_DISPLAY_YN" => $display,
					"NL_DISPLAY_DATE" => $displayDate,
					"NL_REG_USER"	=> $this->session->userdata("ADMIN_SEQ")
				);
				$result 	= $this->NewsModel->insertNews($data);
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
			
			if($mode == "modifyMode"){
				$data = array(
					"NL_SUBJECT" 	=> $subject,
					"NL_LINK" 		=> $link,
					"NL_DISPLAY_YN" => $display,
					"NL_DISPLAY_DATE" => $displayDate
				);
				$result 	= $this->NewsModel->updateNews($newsSeq, $data);
				if($result){
					$returnMsg = array(
						"code" => 200,
						"msg" => "업데이트 완료"
					);
				} else {
					$returnMsg = array(
						"code" => 201,
						"msg" => "수정에 실패했습니다."
					);
				}
			}

			echo json_encode($returnMsg);
		} catch(Exception $e) {
			echo json_encode($e);
		}
	}

	public function delNews(){
		try {
			$newsSeq	 	= $this->input->get("newsSeq");
			$result 		= $this->NewsModel->deleteNews($newsSeq);
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