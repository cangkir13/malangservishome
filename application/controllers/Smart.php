<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Smart extends CI_Controller {

	private $aturan = array(
			'upload_path' => './assets/img/smart_home/',
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
		$data['data'] = $this->Path->path_smart();
		$this->load->view('smart_homes', $data);
	}

	public function f_add(){
		$this->cek_session();

		$this->load->view('add_smart');
	}

	public function proses_add()
	{	
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$tgl =	date('Y-m-d', time());
		$yt = $_POST['yt'];

		
			$gmb = $_FILES['gmb'];

			$_FILES['a']['name'] = $_FILES['gmb']['name'];
			$_FILES['a']['type'] = $_FILES['gmb']['type'];
			$_FILES['a']['tmp_name'] = $_FILES['gmb']['tmp_name'];
			$_FILES['a']['error'] = $_FILES['gmb']['error'];
			$_FILES['a']['size'] = $_FILES['gmb']['size'];

			$config['upload_path'] = $this->aturan['upload_path'];
			$config['allowed_types'] = $this->aturan['allowed_types'];

			$config['file_name'] = strtolower(uniqid()) . '.png';

			$this->upload->initialize($config);
			$this->upload->do_upload('a');

			$gmb = substr($this->aturan['upload_path'],2) . $config['file_name'];
			
		
			$gmb1 = $_FILES['gmb1'];

			$_FILES['b']['name'] = $_FILES['gmb1']['name'];
			$_FILES['b']['type'] = $_FILES['gmb1']['type'];
			$_FILES['b']['tmp_name'] = $_FILES['gmb1']['tmp_name'];
			$_FILES['b']['error'] = $_FILES['gmb1']['error'];
			$_FILES['b']['size'] = $_FILES['gmb1']['size'];

			$config['upload_path'] = $this->aturan['upload_path'];
			$config['allowed_types'] = $this->aturan['allowed_types'];

			$config['file_name'] = strtolower(uniqid()) . '.png';

			$this->upload->initialize($config);
			$this->upload->do_upload('b');

			$gmb1 = substr($this->aturan['upload_path'],2) . $config['file_name'];
		
			$gmb2 = $_FILES['gmb2'];

			$_FILES['c']['name'] = $_FILES['gmb2']['name'];
			$_FILES['c']['type'] = $_FILES['gmb2']['type'];
			$_FILES['c']['tmp_name'] = $_FILES['gmb2']['tmp_name'];
			$_FILES['c']['error'] = $_FILES['gmb2']['error'];
			$_FILES['c']['size'] = $_FILES['gmb2']['size'];

			$config['upload_path'] = $this->aturan['upload_path'];
			$config['allowed_types'] = $this->aturan['allowed_types'];

			$config['file_name'] = strtolower(uniqid()) . '.png';

			$this->upload->initialize($config);
			$this->upload->do_upload('c');

			$gmb2 = substr($this->aturan['upload_path'],2) . $config['file_name'];
		
	
			$insert_data = array(
				
				'judul' => $judul,
				'isi' => $isi,
				'tgl' => $tgl,
				'gmb' => $gmb,
				'gmb1' => $gmb1,
				'gmb2' => $gmb2,
				'yt' => $yt
			);
		$res = $this->Crud->Insertdata('t_smarthome', $insert_data);
		if($res>=1){
			redirect('C_Crud/index', 'refresh');
		}else{
			echo "Insert data gagal";
		}

		echo json_encode($gmb);
	}

	public function f_edit($id_smart=''){
		$this->cek_session();

		$data['data'] = $this->Path->path_smart("where id = '$id_smart'");


		$this->load->view('add_smart ', $data);
	}

	public function proses_edit()
	{

		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$yt = $_POST['yt'];
		$tgl =	date('Y-m-d', strtotime($_POST['tgl']));

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

		if(isset($_FILES['gmb1'])){
			$gmb1 = $_FILES['gmb1'];

			$_FILES['c']['name'] = $_FILES['gmb1']['name'];
			$_FILES['c']['type'] = $_FILES['gmb1']['type'];
			$_FILES['c']['tmp_name'] = $_FILES['gmb1']['tmp_name'];
			$_FILES['c']['error'] = $_FILES['gmb1']['error'];
			$_FILES['c']['size'] = $_FILES['gmb1']['size'];

			$config['upload_path'] = $this->aturan['upload_path'];
			$config['allowed_types'] = $this->aturan['allowed_types'];
			$config['file_name'] = strtolower($judul) . '.png';

			$this->upload->initialize($config);
			$this->upload->do_upload('c');

			$gmb1 = substr($this->aturan['upload_path'],2) . $config['file_name'];
		}

		if(isset($_FILES['gmb2'])){
			$gmb2 = $_FILES['gmb2'];

			$_FILES['c']['name'] = $_FILES['gmb2']['name'];
			$_FILES['c']['type'] = $_FILES['gmb2']['type'];
			$_FILES['c']['tmp_name'] = $_FILES['gmb2']['tmp_name'];
			$_FILES['c']['error'] = $_FILES['gmb2']['error'];
			$_FILES['c']['size'] = $_FILES['gmb2']['size'];

			$config['upload_path'] = $this->aturan['upload_path'];
			$config['allowed_types'] = $this->aturan['allowed_types'];
			$config['file_name'] = strtolower($judul) . '.png';

			$this->upload->initialize($config);
			$this->upload->do_upload('c');

			$gmb2 = substr($this->aturan['upload_path'],2) . $config['file_name'];
		}
		
	
			$insert_data = array(
				
				'judul' => $judul,
				'isi' => $isi,
				'tgl' => $tgl,
				
			);

		if(isset($_FILES['gmb'])){
			$insert_data['gmb'] = $gmb;
		}	
		 $res = $this->Crud->Updatedata('t_smarthome', $insert_data, array('id' => $_POST['id_jasa']));
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
		$res = $this->Crud->Deletedata('t_smarthome', $where);
		if($res>=1){
			redirect('C_Crud/index', 'refresh');
		}
	}

}