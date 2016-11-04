<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Crud extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		if(! isset($_SESSION['username'])){
			redirect('Admin/index');
		}

		$this->load->model(array('M_Login', 'Path'));
	}

	public function index(){
		$data['data'] = $this->Path->path_jasa();
		$data['data1'] = $this->Path->path_smart();
		$this->load->view('admin', $data);
	}
}