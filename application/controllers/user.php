<?php

class user extends CI_Controller
{
	public function form()
	{
		$this->load->view("form_v");
	}
	public function add()
	{
		echo $this->input->post("username");
	}	
}