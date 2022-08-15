<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class notice extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("NewsModel");
		$this->load->model("PartnerModel");
		$this->load->model("KioskModel");
		$this->load->model("AwardModel");
		$this->load->model("PatentModel");
		$this->load->model("SiteModel");
		$this->load->library('CustomClass');
	}
	
	
	public function index(){
		$data['recentlyNews'] = $this->NewsModel->getRecentlyNewsForFront();
		$this->load->view('main', $data);
		$this->viewCorporation();
	}

	public function viewCorporation(){
		$data["SITE"] = $this->SiteModel->getSiteInfo();
		$data["FAMILY"] = $this->SiteModel->getFamilyList();
		$this->load->view('include/corporation', $data);
    }
	/**
	 * @Function Name : notice
	 * @Description : 소개 - 안심페이란
	 */	
	public function ansimpay(){
		$this->load->view('about');
		$this->viewCorporation();
	}

	public function getPartners(){
		$result = $this->PartnerModel->getPatnerForFront();
		echo json_encode($result);
	}

	/**
	 * @Function Name : kiosk
	 * @Description : 소개 - 키오스크
	 */
	public function kiosk(){
		$data['lists'] = $this->KioskModel->getKioskForFront();
		
		$this->load->view('about_1', $data);
		$this->viewCorporation();
	}
	/**
	 * @Function Name : news
	 * @Description : 소개 - News
	 */
	public function news(){
		$limit = 10;
		$nowpage = "";
		if (!isset($_GET["per_page"])){
			$start = 0;
		}else{
			$start = ($_GET["per_page"]-1)*10;
			$nowpage = $_GET["per_page"];
		}

		$wheresql = array(
						"start" => $start,
						"limit" => $limit
						);
						
		$lists = $this->NewsModel->getNewsListFront($wheresql);
		//echo $this->db->last_query();
		$listCount = $this->NewsModel->getNewsListFront($wheresql, true);
		if ($nowpage != ""){
			$pagenum = $listCount-(($nowpage-1)*10);
		}else{
			$pagenum = $listCount;
		}

		$pagination = $this->customclass->front_pagenavi("/notice/news", $listCount, 10, 2, $nowpage);
		//print_r($lists);
		$data = array(
					"lists" => $lists,
					"listCount" => $listCount,
					"pagination" => $pagination,
					"pagenum" => $pagenum,
					"start" => $start,
					"limit" => $limit
					);

		$this->load->view('about_2', $data);
		$this->viewCorporation();
	}


	public function getNewsList(){
		try {
			$result = $this->NewsModel->getNewsListFront();
			echo json_encode($result);
		} catch(Exception $e) {
			echo json_encode($e);
		}
	}
	/**
	 * @Function Name : awards
	 * @Description : 소개 - 상장
	 */
	public function awards(){
		$data['award'] = $this->AwardModel->getAwardForFront();
		$data['patent'] = $this->PatentModel->getPatentForFront();

		$this->load->view('about_3', $data);
		$this->viewCorporation();
	}

	/**
	 * @Function Name : notice
	 * @Description : 소개 - 파트너스
	 */	
	public function partners(){
		$category = $this->PartnerModel->getPartnerCatrgory();

		$resultArray = [];
		foreach ($category as $cate){
			$partner = $this->PartnerModel->getPartnersByCateSeq($cate->PC_SEQ);
			if(count($partner) > 0){
				$cateData = array(
					"CATEGORY_NAME" => $cate->PC_CATEGORY_NAME,
					"LIST" => $partner
				);
				array_push($resultArray, $cateData);
			}
		}

		$data["lists"] = $resultArray;

		$this->load->view('about_4', $data);
		$this->viewCorporation();
	}
}
