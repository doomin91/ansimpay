<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
}
