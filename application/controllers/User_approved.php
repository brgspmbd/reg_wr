<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_approved extends CI_Controller {
    function __construct(){
		parent::__construct();		
		$this->load->model('m_user_approved');
                $this->load->helper('url');
	}
 
	function index(){
		if($this->session->logged_in == FALSE){
            $this->load->view('/auth/v_login');
        }else{
			$data['user'] = $this->m_user_approved->tampil_data()->result();
			$this->load->view('v_user_approved',$data);
		}
	}

	function approve(){
		$this->load->view('v_user_approved2');

	}
	function approve3(){
		$this->load->view('v_user_approved3');

	}
}
