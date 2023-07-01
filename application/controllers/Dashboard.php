<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_dashboard');
        $this->load->model('m_user');
            $this->load->helper('url');
    }
	
    public function index()
	{
		if($this->session->logged_in == FALSE){
            $this->load->view('/auth/v_login');
        }else{
            $data['user'] = $this->m_dashboard->tampil_data_user()->result();
            $data['approved'] = $this->m_dashboard->tampil_data_approved()->result();
            $data['bf'] = $this->m_dashboard->tampil_data_bf()->result();
            $data['sp'] = $this->m_dashboard->tampil_data_sp()->result();
            $data['latest'] = $this->m_dashboard->tampil_data_latest()->result();
		    $this->load->view('layout/header',$data);
		    $this->load->view('layout/sidebar',$data);
		    $this->load->view('v_dashboard',$data);
		    $this->load->view('layout/footer',$data);
        }
	}

   
}
