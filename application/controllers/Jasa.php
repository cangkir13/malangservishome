<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jasa extends CI_Controller {

	private $aturan = array(
			'upload_path' => './assets/img/kontruksi/',
			'allowed_types' => 'gif|jpg|png'
		);

	private function cek_session()
    {
        #bukan admin
        if(! $this->session->has_userdata('username'))
        {
            redirect('Admin', 'refresh');
        }
    }

	public function index(){
		$data['data'] = $this->Path->path_jasa();
		$this->load->view('jasa', $data);
	}

	public function f_add(){
		$this->cek_session();

		$this->load->view('add_jasa');
	}

	public function proses_add()
	{
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$tgl =	date('Y-m-d', time());
		$gmb = $_FILES['gmb'];

		$_FILES['c']['name'] = $_FILES['gmb']['name'];
		$_FILES['c']['type'] = $_FILES['gmb']['type'];
		$_FILES['c']['tmp_name'] = $_FILES['gmb']['tmp_name'];
		$_FILES['c']['error'] = $_FILES['gmb']['error'];
		$_FILES['c']['size'] = $_FILES['gmb']['size'];

		$config['upload_path'] = $this->aturan['upload_path'];
		$config['allowed_types'] = $this->aturan['allowed_types'];
		$config['file_name'] = strtolower($judul) . '.png';

		$this->upload->initialize($config);
		$this->upload->do_upload('c');

		$gmb = substr($this->aturan['upload_path'],2) . $config['file_name'];
	
			$insert_data = array(
				
				'judul' => $judul,
				'isi' => $isi,
				'tgl' => $tgl,
				'gmb' => $gmb,
			);
		 $res = $this->Crud->Insertdata('t_jasa', $insert_data);
		if($res>=1){
			redirect('C_Crud/index', 'refresh');
		}else{
			echo "Insert data gagal";
		}

		echo json_encode($gmb);
	}

	public function f_edit($id_jasa=''){
		$this->cek_session();

		$data['data'] = $this->Path->path_jasa("where id = '$id_jasa'");


		$this->load->view('add_jasa', $data);
	}

	public function proses_edit()
	{
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$tgl =	date('Y-m-d', time());

		if(isset($_FILES['gmb'])){
			$gmb = $_FILES['gmb'];

			$_FILES['c']['name'] = $_FILES['gmb']['name'];
			$_FILES['c']['type'] = $_FILES['gmb']['type'];
			$_FILES['c']['tmp_name'] = $_FILES['gmb']['tmp_name'];
			$_FILES['c']['error'] = $_FILES['gmb']['error'];
			$_FILES['c']['size'] = $_FILES['gmb']['size'];

			$config['upload_path'] = $this->aturan['upload_path'];
			$config['allowed_types'] = $this->aturan['allowed_types'];
			$config['file_name'] = strtolower($judul) . '.png';

			$this->upload->initialize($config);
			$this->upload->do_upload('c');

			$gmb = substr($this->aturan['upload_path'],2) . $config['file_name'];
		}
		
	
			$insert_data = array(
				
				'judul' => $judul,
				'isi' => $isi,
				'tgl' => $tgl,
				
			);

		if(isset($_FILES['gmb'])){
			$insert_data['gmb'] = $gmb;
		}	
		 $res = $this->Crud->Updatedata('t_jasa', $insert_data, array('id' => $_POST['id_jasa']));
		if($res>=1){
			redirect('C_Crud/index', 'refresh');
		}else{
			echo "Insert data gagal";
		}

		echo json_encode($gmb);
	}

	public function proses_delete($id)
	{
		$where = array('id' => $id);
		$res = $this->Crud->Deletedata('t_jasa', $where);
		if($res>=1){
			redirect('C_Crud/index', 'refresh');
		}
	}

}