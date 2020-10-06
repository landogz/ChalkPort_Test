<?php 

/**
 * 
 */
class queries extends CI_Model
{
	public function get_records(){
		$query = $this->db->get_where('table_users',array('Status' => 'Active'));

		if($query->num_rows() >0)
		{
			return $query->result();
		}

	}

	public function get_deletedrecords(){
		$query = $this->db->get_where('table_users',array('Status' => 'Inactive'));

		if($query->num_rows() >0)
		{
			return $query->result();
		}

	}

	public function get_logsrecords(){
		$query = $this->db->get_where('table_users',array('Status' => 'Inactive'));

		$this->db->select('*');
		$this->db->from('table_logs');
		$this->db->join('table_users', 'table_users.ID = table_logs.Name');
		$this->db->order_by('table_logs.ID', 'ASC');
		$query = $this->db->get();


		if($query->num_rows() >0)
		{
			return $query->result();
		}

	}

	public function get_singlerecords($id){
		$query = $this->db->get_where('table_users',array('id' => $id));
		if($query->num_rows() >0)
		{
			return $query->row();
		}

	}

	public function addContact($data){
	
		return $this->db->insert('table_users',$data);


	}
	public function UpdateContact($data,$id){

		$data_logs = array(
				        'Name' => $id,
				        'Logs' => 'Successfully Updated'
				);
		$this->db->insert('table_logs',$data_logs);


		return $this->db->where('ID',$id)
						->update('table_users',$data);

	}

	public function deleteContact($id){
		$data_logs = array(
				        'Name' => $id,
				        'Logs' => 'Successfully Deleted'
				);
		$this->db->insert('table_logs',$data_logs);

		$data = array(
				        'Status' => 'Inactive'
				);
		return $this->db->where('ID',$id)
						->update('table_users',$data);


	}

	public function restoreContact($id){

		$data_logs = array(
				        'Name' => $id,
				        'Logs' => 'Successfully Restored'
				);
		$this->db->insert('table_logs',$data_logs);


		$data = array(
				        'Status' => 'Active'
				);
		return $this->db->where('ID',$id)
						->update('table_users',$data);




	}
}

?>