<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->model("MainModel");
	}
	
	/**
	 * @Function Name : customerService
	 * @Description : 제휴 문의
	 */
	public function question(){
		$this->load->view('customer_service');
	}
	/**
	 * @Function Name : library
	 * @Description : 자료실
	 */
	public function library(){
		$this->load->view('customer_service_1');
	}
	/**
	 * @Function Name : faq
	 * @Description : FAQ
	 */
	public function faq(){
		$this->load->view('customer_service_2');

	}

}
