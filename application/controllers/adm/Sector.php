<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sector extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library("session");
		$this->load->library('CustomClass');
		$this->load->model("SectorModel");

		if($_SERVER['REQUEST_URI'] != "/admin"){
			$this->customclass->adminSessionCheck();
		}
	}

	public function inputSector(){
		try {
			$mode			= $this->input->post("mode");
			$sectorSeq		= $this->input->post("sectorSeq");
			$icon	 		= $this->input->post("icon");
			$subject 		= $this->input->post("subject");
			$desc	 		= $this->input->post("desc");
			$display		= $this->input->post("display");
	
			if($mode == "createMode"){
				$data = array(
					"SECTOR_FA_ICON"		=> $icon,
					"SECTOR_SUBJECT" 		=> $subject,
					"SECTOR_DESC"			=> $desc,
					"SECTOR_DISPLAY_YN" 	=> $display,
					"SECTOR_REG_USER"		=> $this->session->userdata("ADMIN_SEQ")
				);
				$result 	= $this->SectorModel->insertSector($data);
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
			} 

			if($mode == "modifyMode") {
				$data = array(
					"SECTOR_FA_ICON"		=> $icon,
					"SECTOR_SUBJECT" 		=> $subject,
					"SECTOR_DESC"			=> $desc,
					"SECTOR_DISPLAY_YN" => $display,
				);
				$result 	= $this->SectorModel->updateSector($sectorSeq, $data);
				if($result){
					$returnMsg = array(
						"code" => 200,
						"msg" => "수정 완료"
					);
				} else {
					$returnMsg = array(
						"code" => 202,
						"msg" => "수정에 실패했습니다."
					);
				}
			}
	
			echo json_encode($returnMsg);
		} catch(Exception $e) {
			echo json_encode($e);
		}
	}
	
	public function getSector(){
		try {
			$sectorSeq	 		= $this->input->get("sectorSeq");
			$result 			= $this->SectorModel->getSectorByCateSeq($sectorSeq);
			if($result){
				$returnMsg = array(
					"code" => 200,
					"msg" => "불러오기 완료",
					"objects" => $result
				);
			} else {
				$returnMsg = array(
					"code" => 201,
					"msg" => "불러 올 수 없습니다."
				);
			}
			echo json_encode($returnMsg);
		} catch(Exception $e){
			echo json_encode($e);
		}
	}

	public function delSector(){
		try {
			$sectorSeq	 	= $this->input->get("sectorSeq");
			$result 		= $this->SectorModel->deleteSector($sectorSeq);
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
}