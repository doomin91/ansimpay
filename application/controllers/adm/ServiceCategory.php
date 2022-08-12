<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class serviceCategory extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library("session");
		$this->load->library('CustomClass');
		$this->load->model("ServiceModel");

		if($_SERVER['REQUEST_URI'] != "/admin"){
			$this->customclass->adminSessionCheck();
		}
	}
	

	public function getServiceCate(){
		$result = $this->ServiceModel->getServiceCategory();
		echo json_encode($result);
	}

	public function inputServiceCate(){
		$cateSeq = $this->input->post("cateSeq");
		$cateName = $this->input->post("cateName");
		$mode = $this->input->post("mode");

		if($mode == "createMode"){
			$check = $this->ServiceModel->getServiceCateName($cateName);
			if(!$check){
				$count = $this->ServiceModel->getServiceCategoryCount();
				$data = array(
					"SC_ORDER_NUMBER" => $count + 1,
					"SC_CATEGORY_NAME" => $cateName
				);
				$this->ServiceModel->insServiceCate($data);

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
			$check = $this->ServiceModel->getServiceCateName($cateName);
			if(!$check){
				$count = $this->ServiceModel->getServiceCategoryCount();
				$data = array(
					"SC_CATEGORY_NAME" => $cateName
				);
				$this->ServiceModel->uptServiceCate($cateSeq, $data);

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

	public function delServiceCate(){
		$scSeq = $this->input->post("scSeq");
		$orderNumber = $this->ServiceModel->getServiceCateBySeq($scSeq)->SC_ORDER_NUMBER;
		$upCateList = $this->ServiceModel->getUpService($orderNumber);
		$result = $this->ServiceModel->delServiceCate($scSeq);
		if($result){
			foreach($upCateList as $lt){
				$data = array(
					"SC_ORDER_NUMBER" => $lt->SC_ORDER_NUMBER - 1,
				);
	
				$this->ServiceModel->uptServiceCate($lt->SC_SEQ, $data);
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
		$scSeq = $this->ServiceModel->getServiceCateOrder($orderNumber)->SC_SEQ;
		$prevSeq = $this->ServiceModel->getServiceCateOrder($orderNumber-1)->SC_SEQ;

		$data = array(
			"SC_ORDER_NUMBER" => ($orderNumber - 1),
		);
		$result = $this->ServiceModel->uptServiceCate($scSeq, $data);
		
		$data = array(
			"SC_ORDER_NUMBER" => $orderNumber,
		);
		$result = $this->ServiceModel->uptServiceCate($prevSeq, $data);



		echo json_encode($result);
	}

	public function moveDown(){
		$orderNumber = $this->input->get("orderNumber");
		$scSeq = $this->ServiceModel->getServiceCateOrder($orderNumber)->SC_SEQ;
		$prevSeq = $this->ServiceModel->getServiceCateOrder($orderNumber + 1)->SC_SEQ;

		$data = array(
			"SC_ORDER_NUMBER" => ($orderNumber + 1),
		);
		$result = $this->ServiceModel->uptServiceCate($scSeq, $data);
		
		$data = array(
			"SC_ORDER_NUMBER" => $orderNumber,
		);
		$result = $this->ServiceModel->uptServiceCate($prevSeq, $data);



		echo json_encode($result);
	}

}