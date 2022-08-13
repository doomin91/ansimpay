<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("AdminModel");
		$this->load->model("NewsModel");
		$this->load->model("SiteModel");
		$this->load->model("AwardModel");
		$this->load->model("ManagerModel");
		$this->load->model("ServiceModel");
		$this->load->model("PartnerModel");
		$this->load->model("KioskModel");
		$this->load->model("FranchiseeModel");
		$this->load->model("SectorModel");
		$this->load->model("FaqModel");
		$this->load->model("PatentModel");


		$this->load->library("session");
		$this->load->library('CustomClass');

		if($_SERVER['REQUEST_URI'] != "/admin"){
			$this->customclass->adminSessionCheck();
		}
	}
	
	public function index(){
		if($this->session->userdata("ADMIN_ID") != ""){
			header("location: /admin/siteInfo");
		} else {
			$this->load->view('admin/login');
		}
	}

	public function siteInfo(){
		$data['info'] = $this->SiteModel->getSiteInfo();
		$this->load->view('admin/site-info', $data);
	}

	public function managers(){
		$limit = 10;
		$nowpage = "";
		if (!isset($_GET["per_page"])){
			$start = 0;
		}else{
			$start = ($_GET["per_page"]-1)*10;
			$nowpage = $_GET["per_page"];
		}

		$reg_date_start = isset($_GET["reg_date_start"]) ? $_GET["reg_date_start"] : "";
		$reg_date_end = isset($_GET["reg_date_end"]) ? $_GET["reg_date_end"] : "";
		$last_login_start = isset($_POST["last_login_start"]) ? $_POST["last_login_start"] : "";
		$last_login_end = isset($_POST["last_login_end"]) ? $_POST["last_login_end"] : "";
		$user_type = isset($_GET["user_type"]) ? $_GET["user_type"] : "";
		$searchField = isset($_GET["searchField"]) ? $_GET["searchField"] : "";
		$searchString = isset($_GET["searchString"]) ? $_GET["searchString"] : "";

		$wheresql = array(
						"reg_date_start" => $reg_date_start,
						"reg_date_end" => $reg_date_end,
						"last_login_start" => $last_login_start,
						"last_login_end" => $last_login_end,
						"user_type" => $user_type,
						"searchField" => $searchField,
						"searchString" => $searchString,
						"start" => $start,
						"limit" => $limit
						);
		$lists = $this->ManagerModel->getManager($wheresql);
		//echo $this->db->last_query();
		$listCount = $this->ManagerModel->getManagerCount($wheresql);
		if ($nowpage != ""){
			$pagenum = $listCount-(($nowpage-1)*10);
		}else{
			$pagenum = $listCount;
		}

		$pagination = $this->customclass->pagenavi("/admin/managers", $listCount, 10, 5, $nowpage);
		//print_r($lists);
		$data = array(
					"reg_date_start" => $reg_date_start,
					"reg_date_end" => $reg_date_end,
					"last_login_start" => $last_login_start,
					"last_login_end" => $last_login_end,
					"user_type" => $user_type,
					"searchField" => $searchField,
					"searchString" => $searchString,
					"lists" => $lists,
					"listCount" => $listCount,
					"pagination" => $pagination,
					"pagenum" => $pagenum,
					"start" => $start,
					"limit" => $limit
					);

		$this->load->view("/admin/manager-list", $data);
	}

	public function managerModify($admin_seq){
		$info = $this->ManagerModel->getManagerInfo($admin_seq);

		$data = array(
			"info" => $info
		);
		$this->load->view("/admin/manager-modify", $data);
	}

	public function managerWrite(){
		$this->load->view("/admin/manager-write");
	}

	/**
	 * 	게시글 관리 - NEWS 관리
	 */
	public function newsList(){
		$regDateStart = $this->input->get("regDateStart");
		$regDateEnd = $this->input->get("regDateEnd");
		$searchField = $this->input->get("searchField");
		$searchString = $this->input->get("searchString");

		$limit = 10;
		$nowpage = "";
		if (!isset($_GET["per_page"])){
			$start = 0;
		}else{
			$start = ($_GET["per_page"]-1)*$limit;
			$nowpage = $_GET["per_page"];
		}
		
		$wheresql = array(
			"regDateStart" => $regDateStart,
			"regDateEnd" => $regDateEnd,
			"searchField" => $searchField,
			"searchString" => $searchString,
			"start" => $start,
			"limit" => $limit
			);

		$lists = $this->NewsModel->getNewsList($wheresql);
		$listCount = $this->NewsModel->getNewsList($wheresql, true);

        if ($nowpage != ""){
            $pagenum = $listCount-(($nowpage-1)*$limit);
        }else{
            $pagenum = $listCount;
        }
		$queryString = "?regDateStart=".$regDateStart."&regDateEnd=".$regDateEnd."&searchField=". $searchField. "&searchString=".$searchString;
		$pagination = $this->customclass->pagenavi("/admin/newsList".$queryString, $listCount, 10, 3, $nowpage);

		$data = array(
			"regDateStart" => $regDateStart,
			"regDateEnd" => $regDateEnd,
			"searchField" => $searchField,
			"searchString" => $searchString,
			"lists" => $lists,
			"listCount" => $listCount,
			"pagination" => $pagination,
			"pagenum" => $pagenum,
			"start" => $start,
			"limit" => $limit
			);
		$this->load->view('admin/news_list', $data);
	}


	/**
	 * 	게시글 관리 - 최근 소식 관리
	 */

	public function recentlyList(){
		$regDateStart = $this->input->get("regDateStart");
		$regDateEnd = $this->input->get("regDateEnd");
		$searchField = $this->input->get("searchField");
		$searchString = $this->input->get("searchString");

		$limit = 10;
		$nowpage = "";
		if (!isset($_GET["per_page"])){
			$start = 0;
		}else{
			$start = ($_GET["per_page"]-1)*$limit;
			$nowpage = $_GET["per_page"];
		}
		
		$wheresql = array(
			"regDateStart" => $regDateStart,
			"regDateEnd" => $regDateEnd,
			"searchField" => $searchField,
			"searchString" => $searchString,
			"start" => $start,
			"limit" => $limit
			);

		$lists = $this->NewsModel->getRecentlyNewsList($wheresql);
		$listCount = $this->NewsModel->getRecentlyNewsList($wheresql, true);

        if ($nowpage != ""){
            $pagenum = $listCount-(($nowpage-1)*$limit);
        }else{
            $pagenum = $listCount;
        }
		$queryString = "?regDateStart=".$regDateStart."&regDateEnd=".$regDateEnd."&searchField=". $searchField. "&searchString=".$searchString;
		$pagination = $this->customclass->pagenavi("/admin/newsList".$queryString, $listCount, 10, 3, $nowpage);

		$data = array(
			"regDateStart" => $regDateStart,
			"regDateEnd" => $regDateEnd,
			"searchField" => $searchField,
			"searchString" => $searchString,
			"lists" => $lists,
			"listCount" => $listCount,
			"pagination" => $pagination,
			"pagenum" => $pagenum,
			"start" => $start,
			"limit" => $limit
			);
		$this->load->view('admin/recently_list', $data);
	}

	/**
	 *  파트너스 카테고리 관리 
	 */

	public function partnerCategoryList(){
		$this->load->view('admin/partners_category_list');
	}


	/**
	 * 파트너스 관리
	 */
	public function partnerList($cateSeq){
		$regDateStart = $this->input->get("regDateStart");
		$regDateEnd = $this->input->get("regDateEnd");
		$searchField = $this->input->get("searchField");
		$searchString = $this->input->get("searchString");

		$category = $this->PartnerModel->getPartnerCateBySeq($cateSeq);

		$limit = 10;
		$nowpage = "";
		if (!isset($_GET["per_page"])){
			$start = 0;
		}else{
			$start = ($_GET["per_page"]-1)*$limit;
			$nowpage = $_GET["per_page"];
		}
		
		$wheresql = array(
			"cateSeq" => $cateSeq,
			"regDateStart" => $regDateStart,
			"regDateEnd" => $regDateEnd,
			"searchField" => $searchField,
			"searchString" => $searchString,
			"start" => $start,
			"limit" => $limit
			);

		$lists = $this->PartnerModel->getPartnersList($wheresql);
		$listCount = $this->PartnerModel->getPartnersList($wheresql, true);

        if ($nowpage != ""){
            $pagenum = $listCount-(($nowpage-1)*$limit);
        }else{
            $pagenum = $listCount;
        }
		$queryString = "?regDateStart=".$regDateStart."&regDateEnd=".$regDateEnd."&searchField=". $searchField. "&searchString=".$searchString;
		$pagination = $this->customclass->pagenavi("/admin/partnerList/".$cateSeq.$queryString, $listCount, 10, 3, $nowpage);

		$data = array(
			"category" => $category,
			"regDateStart" => $regDateStart,
			"regDateEnd" => $regDateEnd,
			"searchField" => $searchField,
			"searchString" => $searchString,
			"lists" => $lists,
			"listCount" => $listCount,
			"pagination" => $pagination,
			"pagenum" => $pagenum,
			"start" => $start,
			"limit" => $limit
			);
		$this->load->view('admin/partners_list', $data);
	}

	/**
	 * 키오스크 관리
	 */
	public function kiosk(){
		$regDateStart = $this->input->get("regDateStart");
		$regDateEnd = $this->input->get("regDateEnd");
		$searchField = $this->input->get("searchField");
		$searchString = $this->input->get("searchString");

		$limit = 10;
		$nowpage = "";
		if (!isset($_GET["per_page"])){
			$start = 0;
		}else{
			$start = ($_GET["per_page"]-1)*$limit;
			$nowpage = $_GET["per_page"];
		}
		
		$wheresql = array(
			"regDateStart" => $regDateStart,
			"regDateEnd" => $regDateEnd,
			"searchField" => $searchField,
			"searchString" => $searchString,
			"start" => $start,
			"limit" => $limit
			);

		$lists = $this->KioskModel->getKioskList($wheresql);
		$listCount = $this->KioskModel->getKioskList($wheresql, true);

        if ($nowpage != ""){
            $pagenum = $listCount-(($nowpage-1)*$limit);
        }else{
            $pagenum = $listCount;
        }
		$queryString = "?regDateStart=".$regDateStart."&regDateEnd=".$regDateEnd."&searchField=". $searchField. "&searchString=".$searchString;
		$pagination = $this->customclass->pagenavi("/admin/kiosk".$queryString, $listCount, 10, 3, $nowpage);

		$data = array(
			"regDateStart" => $regDateStart,
			"regDateEnd" => $regDateEnd,
			"searchField" => $searchField,
			"searchString" => $searchString,
			"lists" => $lists,
			"listCount" => $listCount,
			"pagination" => $pagination,
			"pagenum" => $pagenum,
			"start" => $start,
			"limit" => $limit
			);
		$this->load->view('admin/kiosk_list', $data);
	}


	/**
	 * 상장 관리
	 */
	public function award(){
		$regDateStart = $this->input->get("regDateStart");
		$regDateEnd = $this->input->get("regDateEnd");
		$searchField = $this->input->get("searchField");
		$searchString = $this->input->get("searchString");

		$limit = 10;
		$nowpage = "";
		if (!isset($_GET["per_page"])){
			$start = 0;
		}else{
			$start = ($_GET["per_page"]-1)*$limit;
			$nowpage = $_GET["per_page"];
		}
		
		$wheresql = array(
			"regDateStart" => $regDateStart,
			"regDateEnd" => $regDateEnd,
			"searchField" => $searchField,
			"searchString" => $searchString,
			"start" => $start,
			"limit" => $limit
			);

		$lists = $this->AwardModel->getAwardList($wheresql);
		$listCount = $this->AwardModel->getAwardList($wheresql, true);

        if ($nowpage != ""){
            $pagenum = $listCount-(($nowpage-1)*$limit);
        }else{
            $pagenum = $listCount;
        }
		$queryString = "?regDateStart=".$regDateStart."&regDateEnd=".$regDateEnd."&searchField=". $searchField. "&searchString=".$searchString;
		$pagination = $this->customclass->pagenavi("/admin/award".$queryString, $listCount, 10, 3, $nowpage);

		$data = array(
			"regDateStart" => $regDateStart,
			"regDateEnd" => $regDateEnd,
			"searchField" => $searchField,
			"searchString" => $searchString,
			"lists" => $lists,
			"listCount" => $listCount,
			"pagination" => $pagination,
			"pagenum" => $pagenum,
			"start" => $start,
			"limit" => $limit
			);
		$this->load->view('admin/award_list', $data);
	}

	/**
	 * 특허 관리
	 */
	public function patent(){
		$regDateStart = $this->input->get("regDateStart");
		$regDateEnd = $this->input->get("regDateEnd");
		$searchField = $this->input->get("searchField");
		$searchString = $this->input->get("searchString");

		$limit = 10;
		$nowpage = "";
		if (!isset($_GET["per_page"])){
			$start = 0;
		}else{
			$start = ($_GET["per_page"]-1)*$limit;
			$nowpage = $_GET["per_page"];
		}
		
		$wheresql = array(
			"regDateStart" => $regDateStart,
			"regDateEnd" => $regDateEnd,
			"searchField" => $searchField,
			"searchString" => $searchString,
			"start" => $start,
			"limit" => $limit
			);

		$lists = $this->PatentModel->getPatentList($wheresql);
		$listCount = $this->PatentModel->getPatentList($wheresql, true);

        if ($nowpage != ""){
            $pagenum = $listCount-(($nowpage-1)*$limit);
        }else{
            $pagenum = $listCount;
        }
		$queryString = "?regDateStart=".$regDateStart."&regDateEnd=".$regDateEnd."&searchField=". $searchField. "&searchString=".$searchString;
		$pagination = $this->customclass->pagenavi("/admin/patent".$queryString, $listCount, 10, 3, $nowpage);

		$data = array(
			"regDateStart" => $regDateStart,
			"regDateEnd" => $regDateEnd,
			"searchField" => $searchField,
			"searchString" => $searchString,
			"lists" => $lists,
			"listCount" => $listCount,
			"pagination" => $pagination,
			"pagenum" => $pagenum,
			"start" => $start,
			"limit" => $limit
			);
		$this->load->view('admin/patent_list', $data);
	}

	/**
	 *  서비스 카테고리 관리 
	 */

	public function serviceCategoryList(){
		$this->load->view('admin/service_category_list');
	}


	/**
	 * 서비스 관리
	 */
	public function serviceList($cateSeq){
		$regDateStart = $this->input->get("regDateStart");
		$regDateEnd = $this->input->get("regDateEnd");
		$searchField = $this->input->get("searchField");
		$searchString = $this->input->get("searchString");

		$category = $this->ServiceModel->getServiceCateBySeq($cateSeq);

		$limit = 10;
		$nowpage = "";
		if (!isset($_GET["per_page"])){
			$start = 0;
		}else{
			$start = ($_GET["per_page"]-1)*$limit;
			$nowpage = $_GET["per_page"];
		}
		
		$wheresql = array(
			"cateSeq" => $cateSeq,
			"regDateStart" => $regDateStart,
			"regDateEnd" => $regDateEnd,
			"searchField" => $searchField,
			"searchString" => $searchString,
			"start" => $start,
			"limit" => $limit
			);

		$lists = $this->ServiceModel->getServiceList($wheresql);
		$listCount = $this->ServiceModel->getServiceList($wheresql, true);

        if ($nowpage != ""){
            $pagenum = $listCount-(($nowpage-1)*$limit);
        }else{
            $pagenum = $listCount;
        }
		$queryString = "?regDateStart=".$regDateStart."&regDateEnd=".$regDateEnd."&searchField=". $searchField. "&searchString=".$searchString;
		$pagination = $this->customclass->pagenavi("/admin/ServiceList/".$cateSeq.$queryString, $listCount, 10, 3, $nowpage);

		$data = array(
			"category" => $category,
			"regDateStart" => $regDateStart,
			"regDateEnd" => $regDateEnd,
			"searchField" => $searchField,
			"searchString" => $searchString,
			"lists" => $lists,
			"listCount" => $listCount,
			"pagination" => $pagination,
			"pagenum" => $pagenum,
			"start" => $start,
			"limit" => $limit
			);
		$this->load->view('admin/service_list', $data);
	}
	

	/**
	 * 가맹점 관리
	 */
	public function franchisee(){
		$regDateStart = $this->input->get("regDateStart");
		$regDateEnd = $this->input->get("regDateEnd");
		$searchField = $this->input->get("searchField");
		$searchString = $this->input->get("searchString");

		$limit = 10;
		$nowpage = "";
		if (!isset($_GET["per_page"])){
			$start = 0;
		}else{
			$start = ($_GET["per_page"]-1)*$limit;
			$nowpage = $_GET["per_page"];
		}
		
		$wheresql = array(
			"regDateStart" => $regDateStart,
			"regDateEnd" => $regDateEnd,
			"searchField" => $searchField,
			"searchString" => $searchString,
			"start" => $start,
			"limit" => $limit
			);

		$lists = $this->FranchiseeModel->getFranchiseeList($wheresql);
		$listCount = $this->FranchiseeModel->getFranchiseeList($wheresql, true);

        if ($nowpage != ""){
            $pagenum = $listCount-(($nowpage-1)*$limit);
        }else{
            $pagenum = $listCount;
        }
		$queryString = "?regDateStart=".$regDateStart."&regDateEnd=".$regDateEnd."&searchField=". $searchField. "&searchString=".$searchString;
		$pagination = $this->customclass->pagenavi("/admin/franchisee".$queryString, $listCount, 10, 3, $nowpage);

		$data = array(
			"regDateStart" => $regDateStart,
			"regDateEnd" => $regDateEnd,
			"searchField" => $searchField,
			"searchString" => $searchString,
			"lists" => $lists,
			"listCount" => $listCount,
			"pagination" => $pagination,
			"pagenum" => $pagenum,
			"start" => $start,
			"limit" => $limit
			);
		$this->load->view('admin/franchisee_list', $data);
	}

	/**
	 * 업종 관리
	 */
	public function sector(){
		$regDateStart = $this->input->get("regDateStart");
		$regDateEnd = $this->input->get("regDateEnd");
		$searchField = $this->input->get("searchField");
		$searchString = $this->input->get("searchString");

		$limit = 10;
		$nowpage = "";
		if (!isset($_GET["per_page"])){
			$start = 0;
		}else{
			$start = ($_GET["per_page"]-1)*$limit;
			$nowpage = $_GET["per_page"];
		}
		
		$wheresql = array(
			"regDateStart" => $regDateStart,
			"regDateEnd" => $regDateEnd,
			"searchField" => $searchField,
			"searchString" => $searchString,
			"start" => $start,
			"limit" => $limit
			);

		$lists = $this->SectorModel->getSectorList($wheresql);
		$listCount = $this->SectorModel->getSectorList($wheresql, true);

		if ($nowpage != ""){
			$pagenum = $listCount-(($nowpage-1)*$limit);
		}else{
			$pagenum = $listCount;
		}
		$queryString = "?regDateStart=".$regDateStart."&regDateEnd=".$regDateEnd."&searchField=". $searchField. "&searchString=".$searchString;
		$pagination = $this->customclass->pagenavi("/admin/sector".$queryString, $listCount, 10, 3, $nowpage);

		$data = array(
			"regDateStart" => $regDateStart,
			"regDateEnd" => $regDateEnd,
			"searchField" => $searchField,
			"searchString" => $searchString,
			"lists" => $lists,
			"listCount" => $listCount,
			"pagination" => $pagination,
			"pagenum" => $pagenum,
			"start" => $start,
			"limit" => $limit
			);
		$this->load->view('admin/sector_list', $data);
	}

	public function question(){
		$this->load->view('admin/question');
	}

	public function library(){
		$this->load->view('admin/library');
	}

	public function faq(){
		$regDateStart = $this->input->get("regDateStart");
		$regDateEnd = $this->input->get("regDateEnd");
		$searchField = $this->input->get("searchField");
		$searchString = $this->input->get("searchString");

		$limit = 10;
		$nowpage = "";
		if (!isset($_GET["per_page"])){
			$start = 0;
		}else{
			$start = ($_GET["per_page"]-1)*$limit;
			$nowpage = $_GET["per_page"];
		}
		
		$wheresql = array(
			"regDateStart" => $regDateStart,
			"regDateEnd" => $regDateEnd,
			"searchField" => $searchField,
			"searchString" => $searchString,
			"start" => $start,
			"limit" => $limit
			);

		$lists = $this->FaqModel->getFaqList($wheresql);
		$listCount = $this->FaqModel->getFaqList($wheresql, true);

        if ($nowpage != ""){
            $pagenum = $listCount-(($nowpage-1)*$limit);
        }else{
            $pagenum = $listCount;
        }
		$queryString = "?regDateStart=".$regDateStart."&regDateEnd=".$regDateEnd."&searchField=". $searchField. "&searchString=".$searchString;
		$pagination = $this->customclass->pagenavi("/admin/faq".$queryString, $listCount, 10, 3, $nowpage);

		$data = array(
			"regDateStart" => $regDateStart,
			"regDateEnd" => $regDateEnd,
			"searchField" => $searchField,
			"searchString" => $searchString,
			"lists" => $lists,
			"listCount" => $listCount,
			"pagination" => $pagination,
			"pagenum" => $pagenum,
			"start" => $start,
			"limit" => $limit
			);
		$this->load->view('admin/faq', $data);
	}

}
