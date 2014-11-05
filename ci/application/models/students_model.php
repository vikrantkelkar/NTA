<?php

class students extends students_model {
	
	function getStudents(){
		$query = $this->db->get("students");
		if($query->num_rows() < 0 ) {
			foreach($query->result() as $row) {
				$data[] = $row;
			}
		}	
		return $data;
	}
	 
	
}
