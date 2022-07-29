<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class notice extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->model("MainModel");
	}
	
	public function index(){
		$this->load->view('main');
	}
	/**
	 * @Function Name : notice
	 * @Description : 소개 - 안심페이란
	 */
	public function ansimpay(){
		$this->load->view('about');
	}
	/**
	 * @Function Name : kiosk
	 * @Description : 소개 - 키오스크
	 */
	public function kiosk(){
		$this->load->view('about_1');
	}
	/**
	 * @Function Name : news
	 * @Description : 소개 - News
	 */
	public function news(){
		$this->load->view('about_2');
	}
	/**
	 * @Function Name : awards
	 * @Description : 소개 - 상장
	 */
	public function awards(){
		$this->load->view('about_3');
	}
}
