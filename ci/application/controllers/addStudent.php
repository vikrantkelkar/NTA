<?php

class addStudent extends CI_Controller {
	
	function index() {
		$data["myValue"] = "Some thing";
		$data["anotherValue"] = "Another thing";
		$this->load->view("addStudentForm", $data);
	}
}
