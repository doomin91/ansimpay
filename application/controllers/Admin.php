<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->model("MainModel");
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

	public function home(){
		$this->load->view('admin/manager');
	}

}
