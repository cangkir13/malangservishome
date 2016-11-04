<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model{

	public function login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('admin');

		if($query->num_rows()>0)
		{
			foreach ($query->result_array() as $list) {
				$sess = array(
						'username' => $list['username'],
						'password' => $list['password']
					);
			}
			$this->session->set_userdata($sess);
			return 1;
		}else{
			return Null;
		}
	}
}