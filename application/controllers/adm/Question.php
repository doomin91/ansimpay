<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class question extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library("session");
		$this->load->model("QuestionModel");
		$this->load->library('CustomClass');

		if($_SERVER['REQUEST_URI'] != "/admin"){
			$this->customclass->adminSessionCheck();
		}
	}

	public function questionInfo(){
		
	}

	public function getQuestion(){
		$result = $this->QuestionModel->getQuestionInfo();
		echo json_encode($result);
	}

	public function saveQuestion(){
		try {
			$desc1 = $this->input->post('desc1');
			$desc2 = $this->input->post('desc2');
			$desc3 = $this->input->post('desc3');

			$data = array(
				'QUESTION_DESC1' => $desc1, 
				'QUESTION_DESC2' => $desc2, 
				'QUESTION_DESC3' => $desc3, 
			);
			$result = $this->QuestionModel->saveQuestionInfo($data);

			if($result){
				$returnMsg = array(
					'code' => 200,
					'msg' => '저장되었습니다.'
				);
			}else {
				$returnMsg = array(
					'code' => 201,
					'msg' => '저장에 실패했습니다.'
				);
			}
			echo json_encode($returnMsg);
		} catch (Excetpion $e){
			$returnMsg = array(
				'code' => 403,
				'msg' => $e
			);
			echo json_encode($returnMsg);
		}
	}
}