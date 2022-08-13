<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuestionModel extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getQuestionInfo(){
        return $this->db->get('tbl_question_info')->row();
    }
    
    public function saveQuestionInfo($data){
        return $this->db->update('tbl_question_info', $data);
    }
}
