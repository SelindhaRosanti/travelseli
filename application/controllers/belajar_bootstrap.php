<?php
class User extends CI_controller{
	public function form()
	{
		$this->load->view('v_user.php');
	}
}