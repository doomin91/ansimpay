<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("AdminModel");
	}
	
	public function index(){
		$this->load->view('admin/login');
	}

	public function login(){
		$this->load->view('admin/login');
	}

	public function logout(){
		$this->load->view('admin/login');
	}

	/**
	 * 	게시글 관리 - 최근 소식 관리
	 */

	public function recentlyList(){
		$this->load->view("admin/recently_list");
	}

	/**
	 * 	게시글 관리 - NEWS 관리
	 */

	public function newsList(){
		$regDateStart = $this->input->get("regDateStart");
		$regDateEnd = $this->input->get("regDateEnd");
		$searchField = $this->input->get("searchField");
		$searchString = $this->input->get("searchString");

		$data["startDate"] = $regDateStart;
		$data["endDate"] = $regDateEnd;
		$data["searchString"] = $searchString;
		$this->load->view('admin/news_list', $data);
	}

	public function getNewsList(){
		try {
			$result = $this->AdminModel->getNewsList();
			echo json_encode($result);
		} catch(Exception $e) {
			echo json_encode($e);
		}
	}

	public function insNews(){
		try {
			$subject 	= $this->input->post("subject");
			$link 		= $this->input->post("link");
			$data = array(
				"NL_SUBJECT" 	=> $subject,
				"NL_LINK" 		=> $link
			);
			$result 	= $this->AdminModel->insNews($data);
			echo json_encode($result);
		} catch(Exception $e) {
			echo json_encode($e);
		}
	}

	public function uptNews(){
		try {
			$nlSeq 		= $this->input->post("nlSeq");
			$subject 	= $this->input->post("subject");
			$link 		= $this->input->post("link");
			$regData	= $this->input->post("regDate");
			$data = array(
				"NL_SUBJECT" 	=> $subject,
				"NL_LINK" 		=> $link,
				"NL_REG_DATA"	=> $regData
			);
			$result 	= $this->AdminModel->uptNews($nlSeq, $data);
			echo json_encode($result);
		} catch(Exception $e) {
			echo json_encode($e);
		}
	}

	public function delNews(){
		try {
			$nlSeq	 	= $this->input->post("nlSeq");
			$result 	= $this->AdminModel->delNews($nlSeq);
			echo json_encode($result);
		} catch(Exception $e) {
			echo json_encode($e);
		}
	}
	/**
	 *  파트너스 카테고리 관리 
	 */
	public function partnerCategoryList(){
		$this->load->view('admin/partners_category_list');
	}

	public function getPartnerCate(){
		$result = $this->AdminModel->getPartnerCatrgory();
		echo json_encode($result);
	}

	public function insPartnerCate(){
		$cateName = $this->input->post("cateName");

		$check = $this->AdminModel->getPartnerCateName($cateName);
		if(!$check){
			$count = $this->AdminModel->getPartnerCatrgoryCount();
			$data = array(
				"PC_ORDER_NUMBER" => $count + 1,
				"PC_CATEGORY_NAME" => $cateName
			);
			$this->AdminModel->insPartnerCate($data);

			$result = array(
				"code" => 200,
				"msg" => "카테고리가 정상적으로 생성되었습니다."
			);
		} else {
			$result = array(
				"code" => 201,
				"msg" => "중복되는 카테고리명이 존재합니다."
			);
		}
		echo json_encode($result);
	}

	public function uptPartnerCate(){

	}

	public function delPartnerCate(){
		$pcSeq = $this->input->post("pcSeq");
		$result = $this->AdminModel->delPartnerCate($pcSeq);
		echo json_encode($result);
	}

	/**
	 * 파트너스 관리
	 */
	public function partnerList(){

	}

	public function insPartner(){

	}

	public function uptPartner(){

	}

	public function delPartner(){

	}

}
