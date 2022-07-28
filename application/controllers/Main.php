<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
	public function notice1(){
		$this->load->view('about_1');
	}
	/**
	 * @Function Name : kiosk
	 * @Description : 소개 - 키오스크
	 */
	public function kiosk(){
		$this->load->view('about_2');

	}
	/**
	 * @Function Name : news
	 * @Description : 소개 - News
	 */
	public function news(){
		$this->load->view('about_3');
	}
	/**
	 * @Function Name : awards
	 * @Description : 소개 - 상장
	 */
	public function awards(){
		$this->load->view('about_4');
	}
	/**
	 * @Function Name : awayService
	 * @Description : 원거리 결제
	 */
	public function awayService(){
		$this->load->view('service');

	}
	/**
	 * @Function Name : nfcService
	 * @Description : NFC, QR코드 결제
	 */
	public function nfcService(){
		$this->load->view('service_1');
	}
	/**
	 * @Function Name : mobileService
	 * @Description : 모바일 결제
	 */
	public function mobileService(){
		$this->load->view('service_2');
	}
	/**
	 * @Function Name : kioskService
	 * @Description : 키오스크 결제
	 */
	public function kioskService(){
		$this->load->view('service_3');
	}
	/**
	 * @Function Name : parkingManager
	 * @Description : 주차관리 시스템
	 */
	public function parkingService(){
		$this->load->view('service_4');
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
	public function reference(){
		$this->load->view('franchisee_1');

	}
	/**
	 * @Function Name : customerService
	 * @Description : 제휴 문의
	 */
	public function customerService(){
		$this->load->view('customer_service');
	}
	/**
	 * @Function Name : library
	 * @Description : 자료실
	 */
	public function library(){
		$this->load->view('customer_service1');
	}
	/**
	 * @Function Name : faq
	 * @Description : FAQ
	 */
	public function faq(){
		$this->load->view('faq');

	}

}
