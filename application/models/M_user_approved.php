<?php 
 
class M_user_approved extends CI_Model{
	function tampil_data(){
		return $this->db->get_where('user', array('status_approved'=>'approved'));
	}

	function update($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('user', $data);
		redirect('user_approved');
	}
}