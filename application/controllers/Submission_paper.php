<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submission_paper extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_submission_paper');
        $this->load->model('m_user');
            $this->load->helper('url');
    }
	
    public function index()
	{
		if($this->session->logged_in == FALSE){
            $this->load->view('/auth/v_login');
        }else{
            $data['user'] = $this->m_submission_paper->tampil_data()->result();
		    $this->load->view('layout/header',$data);
		    $this->load->view('layout/sidebar',$data);
		    $this->load->view('v_submission_paper',$data);
		    $this->load->view('layout/footer',$data);
        }
	}

   
}
