<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reference extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("SiteModel");
		// $this->load->model("MainModel");
	}
	
	public function viewCorporation(){
		$data["SITE"] = $this->SiteModel->getSiteInfo();
		$data["FAMILY"] = $this->SiteModel->getFamilyList();
		$this->load->view('include/corporation', $data);
    }

	/**
	 * @Function Name : sector
	 * @Description : 사용 업종
	 */
	public function sector(){
		$this->load->view('franchisee');
		$this->viewCorporation();
	}
	/**
	 * @Function Name : reference
	 * @Description : 사용 가맹점
	 */
	public function franchisee(){
		$this->load->view('franchisee_1');
		$this->viewCorporation();
	}
}
