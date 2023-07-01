<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('m_user');
            $this->load->helper('url');
    }
	
    public function index()
	{
		if($this->session->logged_in == FALSE){
            $this->load->view('/auth/v_login');
        }else{
            redirect('Dashboard');
        }
	}

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $status = $this->m_login->getDetail($username,md5($password));
        if($status){
            $session = array(
                'nama'          => $username,
                'logged_in'     => TRUE
                );
            $this->session->set_userdata($session);
            $this->session->unset_userdata('gagal');
            redirect('Login');
        }else{
            $session = array('gagal' => 1);
            $this->session->set_userdata($session);
            redirect('Login');
        }
    }

    public function Logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }
}
