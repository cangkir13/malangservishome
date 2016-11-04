<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()	{
		$this->load->view('admin_login');
	}

	public function login_proses()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->M_Login->login($username, $password);
		//echo $password;

		if(! is_null($query))
		{
			$data = array(
					'username' => $username,
					'password' => $password
				);
			$this->session->set_userdata($data);
			redirect('C_Crud/index');
		}else{
			redirect('Admin');	
		}
	}

	public function logout(){
		$data = array(
				'username',
				'password'
			);
		$this->session->unset_userdata($data);
		redirect('Admin');
	}
}
