<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("AdminModel");
		$this->load->model("NewsModel");
		$this->load->model("SiteModel");
		$this->load->model("ManagerModel");
		$this->load->model("PartnersModel");

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
	public function partnerList(){
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
		$this->load->view('admin/partners_list', $data);
	}

}
