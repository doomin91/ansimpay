<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("AdminModel");
		$this->load->model("NewsModel");

		$this->load->library("session");
		$this->load->library('CustomClass');

		if($_SERVER['REQUEST_URI'] != "/admin"){
			$this->customclass->adminSessionCheck();
		}
	}
	
	public function index(){
		if($this->session->userdata("USER_SEQ") != ""){
			header("location: /admin/newsList");
		} else {
			$this->load->view('admin/login');
		}
	}

	public function siteInfo(){
		$data['info'] = $this->AdminModel->getSiteInfo();
		$this->load->view('admin/site-info', $data);
	}

	public function setInfo(){
		$site_name = $this->input->post("site_name");
		$site_url = $this->input->post("site_url");
		$site_admin_email = $this->input->post("site_admin_email");
		$site_admin_tel = $this->input->post("site_admin_tel");
		$site_admin_hp = $this->input->post("site_admin_hp");
		$ftp_ip = $this->input->post("ftp_ip");
		$ftp_id = $this->input->post("ftp_id");
		$ftp_pw = $this->input->post("ftp_pw");
		$comp_num = $this->input->post("comp_num");
		$comp_name = $this->input->post("comp_name");
		$comp_ceo_name = $this->input->post("comp_ceo_name");
		$comp_zip = $this->input->post("comp_zip");
		$comp_addr = $this->input->post("comp_addr");
		$comp_cate1 = $this->input->post("comp_cate1");
		$comp_cate2 = $this->input->post("comp_cate2");
		$comp_tel  = $this->input->post("comp_tel");
		$comp_fax = $this->input->post("comp_fax");

		$comp_working_time = $this->input->post("comp_working_time");
		$comp_cto_name = $this->input->post("comp_cto_name");
		$comp_sales_code = $this->input->post("comp_sales_code");
		$url_instagram = $this->input->post("url_instagram");
		$url_blog = $this->input->post("url_blog");
		$url_youtube = $this->input->post("url_youtube");

		$updateArr = array(
						"SITE_NAME" => $site_name,
						"SITE_URL" => $site_url,
						"SITE_ADMIN_EMAIL" => $site_admin_email,
						"SITE_ADMIN_TEL" => $site_admin_tel,
						"SITE_ADMIN_HP" => $site_admin_hp,
						"FTP_IP" => $ftp_ip,
						"FTP_ID" => $ftp_id,
						"FTP_PW" => $ftp_pw,
						"COMP_NUM" => $comp_num,
						"COMP_NAME" => $comp_name,
						"COMP_CEO_NAME" => $comp_ceo_name,
						"COMP_CTO_NAME" => $comp_cto_name,
						"COMP_ADDR" => $comp_addr,
						"COMP_SALES_CODE" => $comp_sales_code,
						"COMP_ZIP_CODE" => $comp_zip,
						"COMP_CATE1" => $comp_cate1,
						"COMP_CATE2" => $comp_cate2,
						"COMP_TEL" => $comp_tel,
						"COMP_FAX" => $comp_fax,
						"COMP_WORKING_TIME" => $comp_working_time,
						"URL_INSTAGRAM" => $url_instagram,
						"URL_NAVERBLOG" => $url_blog,
						"URL_YOUTUBE" => $url_youtube,
		);
		//print_r($updateArr);
		$result = $this->AdminModel->setSiteInfo($updateArr);
		//echo $this->db->last_query();
		if($result){
			echo json_encode(array("code"=>"200", "msg" => "사이트 정보 수정되었습니다."));
		} else {
			echo json_encode(array("code"=>"202", "msg" => "사이트 정보 수정 중 문제가 생겼습니다."));
		}
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
		$this->load->view('admin/recently_list', $data);
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

	public function getNewsList(){
		try {
			$result = $this->AdminModel->getNewsList();
			echo json_encode($result);
		} catch(Exception $e) {
			echo json_encode($e);
		}
	}

	public function inputNews(){
		try {
			$mode			= $this->input->post("mode");
			$newsSeq		= $this->input->post("newsSeq");
			$subject 		= $this->input->post("subject");
			$link 			= $this->input->post("link");
			$display		= $this->input->post("display");
			$displayDate	= $this->input->post("displayDate");

			if($mode == "createMode"){
				$data = array(
					"NL_SUBJECT" 	=> $subject,
					"NL_LINK" 		=> $link,
					"NL_DISPLAY_YN" => $display,
					"NL_DISPLAY_DATE" => $displayDate,
					"NL_REG_USER"	=> $this->session->userdata("USER_SEQ")
				);
				$result 	= $this->NewsModel->insertNews($data);
				if($result){
					$returnMsg = array(
						"code" => 200,
						"msg" => "등록완료"
					);
				} else {
					$returnMsg = array(
						"code" => 201,
						"msg" => "등록에 실패했습니다."
					);
				}
			} else {
				$data = array(
					"NL_SUBJECT" 	=> $subject,
					"NL_LINK" 		=> $link,
					"NL_DISPLAY_YN" => $display,
					"NL_DISPLAY_DATE" => $displayDate
				);
				$result 	= $this->NewsModel->updateNews($newsSeq, $data);
				if($result){
					$returnMsg = array(
						"code" => 200,
						"msg" => "업데이트 완료"
					);
				} else {
					$returnMsg = array(
						"code" => 201,
						"msg" => "수정에 실패했습니다."
					);
				}
			}

			echo json_encode($returnMsg);
		} catch(Exception $e) {
			echo json_encode($e);
		}
	}

	public function delNews(){
		try {
			$newsSeq	 	= $this->input->get("newsSeq");
			$result 		= $this->NewsModel->deleteNews($newsSeq);
			if($result){
				$returnMsg = array(
					"code" => 200,
					"msg" => "삭제 완료"
				);
			} else {
				$returnMsg = array(
					"code" => 201,
					"msg" => "게시글 삭제 실패했습니다."
				);
			}
			echo json_encode($returnMsg);
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
