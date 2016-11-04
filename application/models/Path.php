<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Path extends CI_Model {


	public function path_inf($where="")
	{
		$data = $this->db->get('t_perumahan ' .$where);
		return $data->result_array();
	}

	public function path_jasa($where="")
	{
		$data = $this->db->get('t_jasa ' .$where);
		return $data->result_array();
	}

	public function path_smart($where="")
	{
		$data = $this->db->get('t_smarthome ' .$where);
		return $data->result_array();
	}
}
