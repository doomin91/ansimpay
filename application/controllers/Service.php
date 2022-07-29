<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class service extends CI_Controller {

	/**
	 * @Function Name : awayService
	 * @Description : 원거리 결제
	 */
	public function away(){
		$this->load->view('service');
	}
	/**
	 * @Function Name : nfcService
	 * @Description : NFC, QR코드 결제
	 */
	public function nfc(){
		$this->load->view('service_1');
	}
	/**
	 * @Function Name : mobileService
	 * @Description : 모바일 결제
	 */
	public function mobile(){
		$this->load->view('service_2');
	}
	/**
	 * @Function Name : kioskService
	 * @Description : 키오스크 결제
	 */
	public function kiosk(){
		$this->load->view('service_3');
	}
	/**
	 * @Function Name : parkingManager
	 * @Description : 주차관리 시스템
	 */
	public function parking(){
		$this->load->view('service_4');
	}
}
