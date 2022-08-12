<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class libary extends CI_Controller {

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
		echo json_encode(1);
	}

}