<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class partnersCategory extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library("session");
		$this->load->library('CustomClass');
		$this->load->model("PartnerModel");

		if($_SERVER['REQUEST_URI'] != "/admin"){
			$this->customclass->adminSessionCheck();
		}
	}
	

	public function getPartnerCate(){
		$result = $this->PartnerModel->getPartnerCatrgory();
		echo json_encode($result);
	}

	public function inputPartnerCate(){
		$cateSeq = $this->input->post("cateSeq");
		$cateName = $this->input->post("cateName");
		$mode = $this->input->post("mode");

		if($mode == "createMode"){
			$check = $this->PartnerModel->getPartnerCateName($cateName);
			if(!$check){
				$count = $this->PartnerModel->getPartnerCatrgoryCount();
				$data = array(
					"PC_ORDER_NUMBER" => $count + 1,
					"PC_CATEGORY_NAME" => $cateName
				);
				$this->PartnerModel->insPartnerCate($data);

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

		if($mode == "modifyMode"){
			$check = $this->PartnerModel->getPartnerCateName($cateName);
			if(!$check){
				$count = $this->PartnerModel->getPartnerCatrgoryCount();
				$data = array(
					"PC_CATEGORY_NAME" => $cateName
				);
				$this->PartnerModel->uptPartnerCate($cateSeq, $data);

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

	}

	public function delPartnerCate(){
		$pcSeq = $this->input->post("pcSeq");
		$orderNumber = $this->PartnerModel->getPartnerCateBySeq($pcSeq)->PC_ORDER_NUMBER;
		$upCateList = $this->PartnerModel->getUpPartners($orderNumber);
		$result = $this->PartnerModel->delPartnerCate($pcSeq);
		if($result){
			foreach($upCateList as $lt){
				$data = array(
					"PC_ORDER_NUMBER" => $lt->PC_ORDER_NUMBER - 1,
				);
	
				$this->PartnerModel->uptPartnerCate($lt->PC_SEQ, $data);
			}
			$returnMsg = array(
				"code" => 200,
				"msg" => "정상적으로 삭제되었습니다."
			);
		} else {
			$returnMsg = array(
				"code" => 201,
				"msg" => "삭제되지 않았습니다."
			);
		}
		echo json_encode($returnMsg);
	}

	public function moveUp(){
		$orderNumber = $this->input->get("orderNumber");
		$pcSeq = $this->PartnerModel->getPartnersCateOrder($orderNumber)->PC_SEQ;
		$prevSeq = $this->PartnerModel->getPartnersCateOrder($orderNumber-1)->PC_SEQ;

		$data = array(
			"PC_ORDER_NUMBER" => ($orderNumber - 1),
		);
		$result = $this->PartnerModel->uptPartnerCate($pcSeq, $data);
		
		$data = array(
			"PC_ORDER_NUMBER" => $orderNumber,
		);
		$result = $this->PartnerModel->uptPartnerCate($prevSeq, $data);



		echo json_encode($result);
	}

	public function moveDown(){
		$orderNumber = $this->input->get("orderNumber");
		$pcSeq = $this->PartnerModel->getPartnersCateOrder($orderNumber)->PC_SEQ;
		$prevSeq = $this->PartnerModel->getPartnersCateOrder($orderNumber + 1)->PC_SEQ;

		$data = array(
			"PC_ORDER_NUMBER" => ($orderNumber + 1),
		);
		$result = $this->PartnerModel->uptPartnerCate($pcSeq, $data);
		
		$data = array(
			"PC_ORDER_NUMBER" => $orderNumber,
		);
		$result = $this->PartnerModel->uptPartnerCate($prevSeq, $data);



		echo json_encode($result);
	}

}