<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class site extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library("session");
		$this->load->model("SiteModel");
		$this->load->library('CustomClass');

		if($_SERVER['REQUEST_URI'] != "/admin"){
			$this->customclass->adminSessionCheck();
		}
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
		$comp_zip_sub = $this->input->post("comp_zip_sub");
		$comp_addr_sub = $this->input->post("comp_addr_sub");
		$comp_email = $this->input->post("comp_email");
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
						"COMP_ADDR_SUB" => $comp_addr_sub,
						"COMP_EMAIL" => $comp_email,
						"COMP_SALES_CODE" => $comp_sales_code,
						"COMP_ZIP_CODE" => $comp_zip,
						"COMP_ZIP_CODE_SUB" => $comp_zip_sub,
						"COMP_CATE1" => $comp_cate1,
						"COMP_CATE2" => $comp_cate2,
						"COMP_TEL" => $comp_tel,
						"COMP_FAX" => $comp_fax,
						"COMP_WORKING_TIME" => $comp_working_time,
						"URL_INSTAGRAM" => $url_instagram,
						"URL_NAVERBLOG" => $url_blog,
						"URL_YOUTUBE" => $url_youtube,
		);
		$result = $this->SiteModel->setSiteInfo($updateArr);
		if($result){
			echo json_encode(array("code"=>"200", "msg" => "사이트 정보 수정되었습니다."));
		} else {
			echo json_encode(array("code"=>"202", "msg" => "사이트 정보 수정 중 문제가 생겼습니다."));
		}
	}

}