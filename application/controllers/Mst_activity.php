<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mst_activity extends CI_Controller {
    function __construct(){
		parent::__construct();		
		$this->load->model('m_mst_activity');
                $this->load->helper('url');
	}
 
	function index(){
		if($this->session->logged_in == FALSE){
            $this->load->view('/auth/v_login');
        }else{
			$this->load->view('layout/header');
			$this->load->view('layout/sidebar');
			$this->load->view('v_mst_activity');
			$this->load->view('layout/footer');
		}
	}
	function list_activity() {
		$search_header= empty($_GET['search_header']) ? "" : $_GET['search_header'];
		$page			= $_GET['page']; // get the requested page 
		$limit		= $_GET['rows']; // get how many rows we want to have into the grid 
		$sidx			= $_GET['sidx']; // get index row - i.e. user click to sort 
		$sord			= $_GET['sord']; // get the direction
		if (!$sidx) $sidx = 1;
		$data			= $this->m_mst_activity->record_list_activity_count($search_header);
		$a				= $data->row();
		$count		= $a->a;
		$count > 0 ? $total_pages = ceil($count / $limit) : $total_pages = 0;
			if ($page > $total_pages) $page = $total_pages;
				$start = $limit * $page - $limit;
			if ($start < 0) $start = 0;
			$select				= $this->m_mst_activity->record_list_activity_data($start, $limit, $sidx, $sord, $search_header);
		$responce			= new stdClass();
		$responce->page	= $page;
		$responce->total	= $total_pages;
		$responce->records= $count;
		$i = 0;
		foreach ($select as $line) {
			$responce->rows[$i]['id'] = $line->id;
			$responce->rows[$i]['cell'] = array(
				$line->id,
				$line->activity_code,
				$line->activity_name,
				$line->location,
				$line->kapasitas,
			);
			$i++;
		}
		echo json_encode($responce);
	}

	function edit_activity(){
		$id = $this->input->post('id');
		$activity_name = $this->input->post('activity_name');
		$location = $this->input->post('location');
		$kapasitas = $this->input->post('kapasitas');
		$type_of_attendance = $this->input->post('type_of_attendance');
		$activity_code = $this->input->post('activity_code');
		$oper = $this->input->post('oper');
		if($oper =="edit"){
			$data = array(
				'activity_name' => $activity_name,
				'location' => $location,
				'kapasitas' => $kapasitas,
			);
			$this->m_mst_activity->update($data, $id);
		}else if($oper =="add"){
			$data = array(
				'activity_code' => $activity_code,
				'activity_name' => $activity_name,
				'location' => $location,
				'kapasitas' => $kapasitas,
			);
			$this->m_mst_activity->add($data);
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
			$this->m_mst_activity->update($data, $id);
		} else {
			// echo 'Error! email tidak dapat dikirim.';
		}

	}
}
