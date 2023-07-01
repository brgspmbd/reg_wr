<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Business_forum extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_business_forum');
        $this->load->model('m_user');
            $this->load->helper('url');
    }
	
    public function index()
	{
		if($this->session->logged_in == FALSE){
            $this->load->view('/auth/v_login');
        }else{
            $data['user'] = $this->m_business_forum->tampil_data()->result();
		    $this->load->view('layout/header',$data);
		    $this->load->view('layout/sidebar',$data);
		    $this->load->view('v_business_forum',$data);
		    $this->load->view('layout/footer',$data);
        }
	}

   
}
