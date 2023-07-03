<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mst_user extends CI_Controller {
    function __construct(){
		parent::__construct();		
		$this->load->model('m_mst_user');
                $this->load->helper('url');
	}
 
	function index(){
		if($this->session->logged_in == FALSE){
            $this->load->view('/auth/v_login');
        }else{
			$data['user'] = $this->m_mst_user->tampil_data()->result();
			$this->load->view('layout/header',$data);
			$this->load->view('layout/sidebar',$data);
			$this->load->view('v_mst_user',$data);
			$this->load->view('layout/footer',$data);
		}
	}
	function list_user() {
		$search_header= empty($_GET['search_header']) ? "" : $_GET['search_header'];
		$page			= $_GET['page']; // get the requested page 
		$limit		= $_GET['rows']; // get how many rows we want to have into the grid 
		$sidx			= $_GET['sidx']; // get index row - i.e. user click to sort 
		$sord			= $_GET['sord']; // get the direction
		if (!$sidx) $sidx = 1;
		$data			= $this->m_mst_user->record_list_user_count($search_header);
		$a				= $data->row();
		$count		= $a->a;
		$count > 0 ? $total_pages = ceil($count / $limit) : $total_pages = 0;
			if ($page > $total_pages) $page = $total_pages;
				$start = $limit * $page - $limit;
			if ($start < 0) $start = 0;
			$select				= $this->m_mst_user->record_list_user_data($start, $limit, $sidx, $sord, $search_header);
		$responce			= new stdClass();
		$responce->page	= $page;
		$responce->total	= $total_pages;
		$responce->records= $count;
		$i = 0;
		foreach ($select as $line) {
			$responce->rows[$i]['id'] = $line->id;
			$responce->rows[$i]['cell'] = array(
				$line->id,
				$line->email,
				$line->title,
				$line->full_name,
				$line->phone_number,
				$line->country,
				$line->type_of_attendance,
				$line->status_approved,
				$line->organization,
				$line->workunit,
			);
			$i++;
		}
		echo json_encode($responce);
	}

	function edit_user(){
		$id = $this->input->post('id');
		$email = $this->input->post('email');
		$full_name = $this->input->post('full_name');
		$phone_number = $this->input->post('phone_number');
		$type_of_attendance = $this->input->post('type_of_attendance');
		$data = array(
			'email' => $email,
			'full_name' => $full_name,
			'phone_number' => $phone_number,
			'type_of_attendance' => $type_of_attendance,
		);
		$this->m_mst_user->update($data, $id);
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
			$this->m_mst_user->update($data, $id);
		} else {
			// echo 'Error! email tidak dapat dikirim.';
		}

	}
}
