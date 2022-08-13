<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class faq extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library("session");
		$this->load->library('CustomClass');
		$this->load->model("FaqModel");

		if($_SERVER['REQUEST_URI'] != "/admin"){
			$this->customclass->adminSessionCheck();
		}
	}

	public function inputFaq(){
		try {
			$mode			= $this->input->post("mode");
			$faqSeq			= $this->input->post("faqSeq");
			$question 		= $this->input->post("question");
			$answer 		= $this->input->post("answer");
			$display		= $this->input->post("display");

			if($mode == "createMode"){
				$data = array(
					"FAQ_QUESTION" 		=> $question,
					"FAQ_ANSWER" 		=> $answer,
					"FAQ_DISPLAY_YN" 	=> $display,
					"FAQ_REG_USER"		=> $this->session->userdata("ADMIN_SEQ")
				);
				$result 	= $this->FaqModel->insertFaq($data);
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
					"FAQ_QUESTION" 	=> $question,
					"FAQ_ANSWER" 		=> $answer,
					"FAQ_DISPLAY_YN" => $display,
				);

				$result 	= $this->FaqModel->updateFaq($faqSeq, $data);
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
	
	public function getFaq(){
		try {
			$faqSeq	 		= $this->input->get("faqSeq");
			$result 			= $this->FaqModel->getFaqByCateSeq($faqSeq);
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

	public function delFaq(){
		try {
			$faqSeq	 	= $this->input->get("faqSeq");
			$result 		= $this->FaqModel->deleteFaq($faqSeq);
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