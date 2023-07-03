<?php 
 
class M_user extends CI_Model{
	function tampil_data(){
		return $this->db->get_where('user', array('status_approved'=>'pending'));
	}

	function update($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('user', $data);
		redirect('user');
	}
	function record_list_user_count($search)
	{
		$result = $this->db->query("SELECT count(*) as a 
		FROM user
			where (full_name like '%$search%' OR email like '%$search%')");
		return $result;
	}
	function record_list_user_data($start, $limit, $sidx, $sord, $search)
	{
		$result = $this->db->query("SELECT
		a.*,sum(total_menit) as akumulasi
			FROM user a
			left join akumulasi_time b on a.id=b.id_user
			where (a.full_name like '%$search%' OR a.email like '%$search%')
			group by a.id
			ORDER BY $sidx $sord LIMIT $start,$limit ")->result();
		return $result;
	}
	function record_list_subuser_count($id)
	{
		$result = $this->db->query("SELECT count(*) as a 
		FROM akumulasi_time a
			left join mst_activity b on a.activity=b.activity_code
			where (a.id_user = '$id' )");
		return $result;
	}
	function record_list_subuser_data($start, $limit, $sidx, $sord, $id)
	{
		$result = $this->db->query("SELECT
		a.*,b.activity_name
			FROM akumulasi_time a
			left join mst_activity b on a.activity=b.activity_code
			where (a.id_user = '$id' )
			ORDER BY $sidx $sord LIMIT $start,$limit ")->result();
		return $result;
	}
}