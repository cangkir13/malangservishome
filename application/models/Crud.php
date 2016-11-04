<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Model {

	public function Insertdata($tabelName, $data){
		$res = $this->db->insert($tabelName, $data);
		return $res;
	}

		public function Updatedata($tabelName, $data, $where){
		$res = $this->db->update($tabelName, $data, $where);
		return $res;
	}

		public function Deletedata($tabelName, $where){
		$res = $this->db->delete($tabelName, $where);
		return $res;
	}
}
