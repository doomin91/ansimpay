<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reference extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->model("MainModel");
	}
	
	/**
	 * @Function Name : sector
	 * @Description : 사용 업종
	 */
	public function sector(){
		$this->load->view('franchisee');

	}
	/**
	 * @Function Name : reference
	 * @Description : 사용 가맹점
	 */
	public function franchisee(){
		$this->load->view('franchisee_1');

	}
}
