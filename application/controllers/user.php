<?php

class user extends CI_Controller{
	//function auto run
	function __construct(){
		parent::__construct();
		//load model
		$this->load->model("user_m")
	}
	public function form(){
		$this->load->view("form_v")
	}
	
	public function add(){
		//create data array
		$data = array(
			"username" => $this->input->post("username"),
			"password" => $this->input->post("password"),
			"fullname" => $this->input->post("fullname"),
			"level" => $this->input->post("level") 
		);

		//check data before save
		var_dump($data);
		//save data to database
		$this->user_m->add($data);
	}
}