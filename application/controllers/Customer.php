<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("SiteModel");
		$this->load->model("QuestionModel");
		$this->load->model("FaqModel");
		// $this->load->model("MainModel");
	}

	public function viewCorporation(){
		$data["SITE"] = $this->SiteModel->getSiteInfo();
		$data["FAMILY"] = $this->SiteModel->getFamilyList();
		$this->load->view('include/corporation', $data);
    }
	/**
	 * @Function Name : customerService
	 * @Description : 제휴 문의
	 */
	public function question(){
		$data = $this->QuestionModel->getQuestionInfo();
		$this->load->view('customer_service', $data);
		$this->viewCorporation();
	}
	/**
	 * @Function Name : library
	 * @Description : 자료실
	 */
	public function library(){
		$this->load->view('customer_service_1');
		$this->viewCorporation();
	}
	/**
	 * @Function Name : faq
	 * @Description : FAQ
	 */
	public function faq(){
		$data['LIST'] = $this->FaqModel->getFaqForFront();
		$this->load->view('customer_service_2', $data);
		$this->viewCorporation();

	}

}

