<?php 

	class pharmacyModel extends CI_model
	{
		
		public function getRecords()
		{
			$query = $this->db->get('medicine');
				return $query->result();
		}

		public function saveRecord($data){
			return $this->db->insert('medicine',$data);
		}

		public function getAllRecords($record_Id){
			$query = $this->db->get_where('medicine',array('Id'=>$record_Id));

			if($query->num_rows()>0){
					return $query->row();
			}

		}
		public function updateRecords($record_Id,$data){
			return $this->db->where('Id',$record_Id)
							->update('medicine',$data);
		}

		public function deleteRecords($record_Id){
			return $this->db->delete('medicine',array('Id'=>$record_Id));			
		}
	}
 ?>