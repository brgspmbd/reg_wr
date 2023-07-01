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
			$this->load->view('layout/header',$data);
			$this->load->view('layout/sidebar',$data);
			$this->load->view('v_user_approved',$data);
			$this->load->view('layout/footer',$data);
		}
	}

	function approve(){
		$id = $this->input->post('id');
		$data = array(
			'status_approved' => 'pending'
		);

		$this->m_user_approved->update($data, $id);

	}
}
