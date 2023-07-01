<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    function __construct(){
		parent::__construct();		
		$this->load->model('m_user');
                $this->load->helper('url');
	}
 
	function index(){
		if($this->session->logged_in == FALSE){
            $this->load->view('/auth/v_login');
        }else{
			$data['user'] = $this->m_user->tampil_data()->result();
			$this->load->view('layout/header',$data);
			$this->load->view('layout/sidebar',$data);
			$this->load->view('v_user',$data);
			$this->load->view('layout/footer',$data);
		}
	}

	function approve(){
		$id = $this->input->post('id');
		$email = $this->input->post('email');
		$data = array(
			'status_approved' => 'approved'
		);

		// Konfigurasi email
		$config = [
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'protocol'  => 'smtp',
			'smtp_host' => 'smtp.hostinger.com',
			'smtp_user' => 'bergas@munasinkindo2022.com',  // Email gmail
			'smtp_pass'   => 'B3rg4s!@#',  // Password gmail
			'smtp_crypto' => 'ssl',
			'smtp_port'   => 465,
			'crlf'    => "\r\n",
			'newline' => "\r\n"
		];

		// Load library email dan konfigurasinya
		$this->load->library('email', $config);

		// Email dan nama pengirim
		$this->email->from('bergas@munasinkindo2022.com', 'aarc2023.com');

		// Email penerima
		$this->email->to($email); // Ganti dengan email tujuan

		// Lampiran email, isi dengan url/path file
		// $this->email->attach('https://images.pexels.com/photos/169573/pexels-photo-169573.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');

		// Subject email
		$this->email->subject('Infrmation AARC 2023');

		// Isi email
		$this->email->message("Yor acount has apprved. Click https://sembadha.my.id/aarc2023/ for complete input ");

		// Tampilkan pesan sukses atau error
		if ($this->email->send()) {
			// echo 'Sukses! email berhasil dikirim.';
			$this->m_user->update($data, $id);
		} else {
			// echo 'Error! email tidak dapat dikirim.';
		}

	}
}
