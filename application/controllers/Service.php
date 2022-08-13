<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class service extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("SiteModel");
		$this->load->model("ServiceModel");
		// $this->load->model("MainModel");
	}
	
	public function viewCorporation(){
		$data["SITE"] = $this->SiteModel->getSiteInfo();
		$data["FAMILY"] = $this->SiteModel->getFamilyList();
		$this->load->view('include/corporation', $data);
    }

	public function payment($orderNumber){
		$data["CATEGORY"] = $this->ServiceModel->getServiceCateOrder($orderNumber);
		$data["LIST"] = $this->ServiceModel->getServiceByNumber($orderNumber);
		$this->load->view('service', $data);
		$this->viewCorporation();
	}

	public function getServiceCategory(){
		$result = $this->ServiceModel->getServiceCategory();
		echo json_encode($result);
	}
	/**
	 * @Function Name : awayService
	 * @Description : 원거리 결제
	 */
	public function away(){
		$this->load->view('service');
		$this->viewCorporation();
	}
	/**
	 * @Function Name : nfcService
	 * @Description : NFC, QR코드 결제
	 */
	public function nfc(){
		$this->load->view('service_1');
		$this->viewCorporation();
	}
	/**
	 * @Function Name : mobileService
	 * @Description : 모바일 결제
	 */
	public function mobile(){
		$this->load->view('service_2');
		$this->viewCorporation();
	}
	/**
	 * @Function Name : kioskService
	 * @Description : 키오스크 결제
	 */
	public function kiosk(){
		$this->load->view('service_3');
		$this->viewCorporation();
	}
	/**
	 * @Function Name : parkingManager
	 * @Description : 주차관리 시스템
	 */
	public function parking(){
		$this->load->view('service_4');
		$this->viewCorporation();
	}

}
