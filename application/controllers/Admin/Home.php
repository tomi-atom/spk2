<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* 
	*/
	class Home extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('Data_model');
	        $this->load->library('form_validation');
	        $this->load->library('session');
	        $this->load->library('upload');
	        $this->load->library('pagination');
	        $this->load->helper('date','tes');
	        $this->load->helper('form','url','file','directory');	
		}

		/**
		*
		*	Mengecek Login
		*
		*
		*/
		public function checklogin()
		{
			$data['login']			=	$this->session->userdata('login',TRUE);
	       
	       	if($data['login']==FALSE)
	       	{
          		redirect(base_url('/Home/login'));
        	}

        	elseif ($data['login']==TRUE) {
        		
        		$level = $this->session->userdata('leveling');
        		
        		if ($level == '1') {
					
				}
        		elseif ($level == '2') {
        			redirect(base_url('Siswa/Home/'),$data);
				}
				elseif ($level == '3') {
        			redirect(base_url('Guru/Home/'),$data);
        		}
        		else{
        			print_r($data);
        		}
        	}

			else{
				echo "Something's Wrong";
			}
		}


		/**
		*
		*	Halaman Utama
		*
		*
		*/
		public function index()
		{
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Beasiswa";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['content']		=	'Admin/home';
			$this->load->view('Admin/template',$data);
		}


		/**
		*
		*	Tentang Pengguna
		*
		*
		*/
		public function daftar_pengguna()
		{
			$this->checklogin();
			$data['tittle']		= "Daftar Pengguna || SPK Promethee";
			$id_pengguna		= $this->session->userdata('id');
			$data['pengguna']	= $this->Data_model->data_pengguna($id_pengguna);
			$data['user']		= $this->Data_model->daftar_pengguna();
			$data['content']	= 'Admin/daftar_pengguna';
			$this->load->view('Admin/template',$data);

		}


		public function edit_pengguna($id)
		{
			$this->checklogin();
			$data['tittle']		= "Edit Pengguna || SPK Promethee";
			$id_pengguna		= $this->session->userdata('id');
			$data['pengguna']	= $this->Data_model->data_pengguna($id_pengguna);
			$data['user']		= $this->Data_model->detail_pengguna($id);
			$data['level']      = $this->Data_model->data_level();
			$data['content']    = 'Admin/edit_pengguna';
        	$this->load->view('Admin/template',$data);					
		}

		public function proses_update_pengguna($id)
		{
			$this->checklogin();

			$data = array(
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'id_leveling' => $this->input->post('id_leveling'),
			);
				$this->form_validation->set_rules("nama","nama","required");
				$this->form_validation->set_rules("id_leveling","id_leveling","required");
				$this->form_validation->set_rules("username","username","required");
				$this->form_validation->set_rules("email","email","required");
				
   		
   			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
            	$this->Data_model->update_pengguna($data,$id);
            	echo "<script> alert('Data Pengguna disimpan.');</script>";
            	redirect(base_url('Admin/Home/daftar_pengguna'), 'refresh');
      		}
		}

		public function hapus_pengguna($id)
		{
			$this->checklogin();
			$this->Data_model->hapus_pengguna($id);
        	redirect(base_url('Admin/Home/daftar_pengguna'), 'refresh');
		}

		public function tambah_pengguna()
		{
			$this->checklogin();
			$data['tittle']		= "Tambah Pengguna || SPK Promethee";
			$id_pengguna		= $this->session->userdata('id');
			$data['pengguna']	= $this->Data_model->data_pengguna($id_pengguna);
			$data['level']      = $this->Data_model->data_level();
			$data['content']    = 'Admin/tambah_pengguna';
        	$this->load->view('Admin/template',$data);
		}

		public function proses_tambah_pengguna()
		{
			$this->checklogin();

			$data = array(
            	'password' => md5($this->input->post('password')),
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'id_leveling' => $this->input->post('id_leveling'),
			);
				$this->form_validation->set_rules("nama","nama","required");
				$this->form_validation->set_rules("password","password","required");
				$this->form_validation->set_rules("id_leveling","id_leveling","required");
				$this->form_validation->set_rules("username","username","required");
				$this->form_validation->set_rules("email","email","required");

   			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
            	$this->Data_model->input_pengguna($data);
            	echo "<script> alert('Data Pengguna disimpan.');</script>";
            	redirect(base_url('Admin/Home/daftar_pengguna'), 'refresh');
      		}
		}
		
		function reset($idp)
		{
			$this->checklogin();
			$id_pengguna			= 	$this->session->userdata('id');
	      $pengguna				= 	$this->Data_model->data_pengguna($id_pengguna);
	      foreach($pengguna->result_array() as $p){
	        $data['password']	= 	md5($p['email']);
	      }
	     
	      $this->Data_model->reset_password($idp,$data);
	      echo "<script> alert('Password Telah Berhasil Direset');</script>";
	      redirect(base_url('Admin/Home/daftar_pengguna'), 'refresh');
		}

		public function aktivasi_pengguna()
		{
			$this->checklogin();
		}



		/**
		*
		*	Tentang Guru
		*
		*
		*/
		public function daftar_guru()
		{
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Beasiswa";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['guru']			=	$this->Data_model->data_guru();
			$data['content']		=	'Admin/daftar_guru';
			$this->load->view('Admin/template',$data);
		}

		public function tambah_guru()
		{	
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Beasiswa";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['guru']			=	$this->Data_model->daftar_guru();
			$data['jurusan']			=	$this->Data_model->daftar_jurusan();
			$data['content']		=	'Admin/tambah_guru';
			$this->load->view('Admin/template',$data);
		}

		public function hapus_guru($id)
		{
			$this->checklogin();
			$this->Data_model->hapus_guru($id);
        	redirect(base_url('Admin/Home/daftar_guru'), 'refresh');
		}


		public function edit_guru($id)
		{	
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Beasiswa";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['user']			= $this->Data_model->guru($id);
			$data['guru']			=	$this->Data_model->daftar_guru();
			$data['jurusan']			=	$this->Data_model->daftar_jurusan();
			$data['content']		=	'Admin/edit_guru';
			$this->load->view('Admin/template',$data);
		}

		public function proses_update_guru($id)
		{
			$this->checklogin();

			$data = array(
				'id_jurusan' => $this->input->post('id_jurusan'),
			);
				//$this->form_validation->set_rules("id","id","required");
				$this->form_validation->set_rules("id_jurusan","id_jurusan","required");
				
   			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
            	$this->Data_model->update_guru($data,$id);
            	echo "<script> alert('Data Guru disimpan.');</script>";
            	redirect(base_url('Admin/Home/daftar_guru'), 'refresh');
      		}
		}

		public function proses_tambah_guru()
		{
			$this->checklogin();

				$data = array(
					'id'  => $this->input->post('id'),
					'id_jurusan'=> $this->input->post('id_jurusan'),				
				);
				
				$this->form_validation->set_rules("id","id","required");
				$this->form_validation->set_rules("id_jurusan","id_jurusan","required");
				
   			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
            	$this->Data_model->insert_guru($data);
            	echo "<script> alert('Data Guru disimpan.');</script>";
            	redirect(base_url('Admin/Home/daftar_guru'), 'refresh');
      		}
		}


		public function edit_mahasiswa($id)
		{	
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Beasiswa";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['mahasiswa']			= 	$this->Data_model->mahasiswa($id);
			$data['guru']			=	$this->Data_model->daftar_guru();
			$data['jurusan']			=	$this->Data_model->daftar_jurusan();
			$data['content']		=	'Admin/edit_mahasiswa';
			$this->load->view('Admin/template',$data);
		}

		public function proses_tambah_mahasiswa()
		{
			$this->checklogin();
				$result = $this->input->post('id');
				$result_explode = explode('|', $result);
            		
				$data = array(
					'id'  => $result_explode[0],
					'nama' => $result_explode[1],
					'jenis_kelamin' => $this->input->post('jenis_kelamin'),
					'id_jurusan'=> $this->input->post('id_jurusan'),
					'kecamatan' => $this->input->post('kecamatan'),			 
				);
				
				$this->form_validation->set_rules("id","id","required");
				$this->form_validation->set_rules("id_jurusan","id_jurusan","required");
				
   			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
            	$this->Data_model->insert_mahasiswa($data);
            	echo "<script> alert('Data SIswa disimpan.');</script>";
            	redirect(base_url('Admin/Home/daftar_mahasiswa'), 'refresh');
      		}
		}

		public function proses_update_mahasiswa($ids)
		{
			$this->checklogin();
				$result = $this->input->post('id');
				$result_explode = explode('|', $result);
            		
				$data = array(
					'id'  => $result_explode[0],
					'nama' => $result_explode[1],
					'jenis_kelamin' => $this->input->post('jenis_kelamin'),
					'id_jurusan'=> $this->input->post('id_jurusan'),
					'kecamatan' => $this->input->post('kecamatan'),			 
				);
				
				$this->form_validation->set_rules("id","id","required");
				$this->form_validation->set_rules("id_jurusan","id_jurusan","required");
				
   			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
            	$this->Data_model->update_mahasiswa($data,$ids);
            	echo "<script> alert('Data SIswa disimpan.');</script>";
            	redirect(base_url('Admin/Home/daftar_mahasiswa'), 'refresh');
      		}
		}


		public function daftar_jurusan()
		{
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Beasiswa";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['jurusan']			=	$this->Data_model->daftar_jurusan();
			$data['content']		=	'Admin/daftar_jurusan';
			$this->load->view('Admin/template',$data);
		}

		public function tambah_jurusan()
		{	
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Beasiswa";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['content']		=	'Admin/tambah_jurusan';
			$this->load->view('Admin/template',$data);
		}

		public function edit_jurusan($id)
		{	
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Beasiswa";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['jurusan']			= 	$this->Data_model->data_jurusan($id);
			$data['content']		=	'Admin/edit_jurusan';
			$this->load->view('Admin/template',$data);
		}

		public function proses_tambah_jurusan()
		{
			$this->checklogin();

			
				$tingkat     = $this->input->post('tingkat');
				$konsentrasi = $this->input->post('konsentrasi');
				$jurusan 		 = $this->input->post('jurusan');

				$namajurusan = $tingkat." ".$konsentrasi." ".$jurusan;

				$data = array(
					'NamaJurusan' => $namajurusan
				);
				
				$this->form_validation->set_rules("tingkat","tingkat","required");
				$this->form_validation->set_rules("konsentrasi","konsentrasi","required");
				$this->form_validation->set_rules("jurusan","jurusan","required");
				
   		
   			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
            	$this->Data_model->insert_jurusan($data);
            	echo "<script> alert('Data Jurusan disimpan.');</script>";
            	redirect(base_url('Admin/Home/daftar_jurusan'), 'refresh');
      		}
		}

		public function proses_update_jurusan($id)
		{
			$this->checklogin();

			
				$tingkat     = $this->input->post('tingkat');
				$konsentrasi = $this->input->post('konsentrasi');
				$jurusan 		 = $this->input->post('jurusan');

				$namajurusan = $tingkat." ".$konsentrasi." ".$jurusan;

				$data = array(
					'NamaJurusan' => $namajurusan
				);
				
				$this->form_validation->set_rules("tingkat","tingkat","required");
				$this->form_validation->set_rules("konsentrasi","konsentrasi","required");
				$this->form_validation->set_rules("jurusan","jurusan","required");
				
   		
   			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
            	$this->Data_model->update_jurusan($id,$data);
            	echo "<script> alert('Data Jurusan disimpan.');</script>";
            	redirect(base_url('Admin/Home/daftar_jurusan'), 'refresh');
      		}
		}

		public function hapus_jurusan($id)
		{
			$this->checklogin();
			$this->Data_model->hapus_jurusan($id);
        	redirect(base_url('Admin/Home/daftar_jurusan'), 'refresh');
		}

		public function daftar_mahasiswa()
		{
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Beasiswa";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['mahasiswa']			=	$this->Data_model->daftar_mahasiswa();
			$data['content']		=	'Admin/daftar_mahasiswa';
			$data['kriteria']       =   $this->Data_model->daftar_kriteria();
			$this->load->view('Admin/template',$data);
		}

		public function tambah_mahasiswa()
		{	
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Beasiswa";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['mahasiswa']			=	$this->Data_model->data_mahasiswa();
			$data['jurusan']			=	$this->Data_model->daftar_jurusan();
			$data['content']		=	'Admin/tambah_mahasiswa';
			$this->load->view('Admin/template',$data);
		}

		
		public function daftar_kriteria()
		{
			$this->checklogin();
			$data['tittle']		= "Daftar Kriteria || SPK Promethee";
			$id_pengguna		= $this->session->userdata('id');
			$data['pengguna']	= $this->Data_model->data_pengguna($id_pengguna);
			$data['kriteria']   = $this->Data_model->daftar_kriteria();
			$data['content']    = 'Admin/daftar_kriteria';
        	$this->load->view('Admin/template',$data);
		}

		public function tambah_kriteria()
		{
			$this->checklogin();
			$data['tittle']		= "Tambah Kriteria || SPK Promethee";
			$id_pengguna		= $this->session->userdata('id');
			$data['pengguna']	= $this->Data_model->data_pengguna($id_pengguna);
			$data['kriteria']      = $this->Data_model->daftar_kriteria();
			$data['content']    = 'Admin/tambah_kriteria';
        	$this->load->view('Admin/template',$data);
		}

		public function proses_tambah_kriteria()
		{   
			$this->checklogin();
			$data = array(
				'nama' => $this->input->post('nama'),
				'bobot' => $this->input->post('bobot'),
				'jenis' => $this->input->post('jenis'),
				'tipe'=> $this->input->post('tipe')
			);
			$this->form_validation->set_rules('nama','nama','required');
			$this->form_validation->set_rules('bobot','bobot','required');
			$this->form_validation->set_rules('jenis','jenis','required');
			$this->form_validation->set_rules('tipe','tipe','required');

			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
            	$this->Data_model->input_kriteria($data);
            	echo "<script> alert('Data Kriteria disimpan.');</script>";
            	redirect(base_url('Admin/Home/daftar_kriteria'), 'refresh');
      		}
		}  

		public function edit_kriteria($id)
		{
			$this->checklogin();
			$data['tittle']		= "Daftar Kriteria || SPK Promethee";
			$id_pengguna		= $this->session->userdata('id');
			$data['pengguna']	= $this->Data_model->data_pengguna($id_pengguna);
			$data['kriteria']   = $this->Data_model->data_kriteria($id);
			$data['content']    = 'Admin/edit_kriteria';
        	$this->load->view('Admin/template',$data);
		}

		public function proses_update_subkriteria($id)
		{   
			$this->checklogin();
			$data = array(
				'NamaKriteria' => $this->input->post('NamaKriteria'),
				'Bobot' => $this->input->post('Bobot'),
			);
			$this->form_validation->set_rules('NamaKriteria','NamaKriteria','required');
			$this->form_validation->set_rules('Bobot','Bobot','required');

			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
            	$this->Data_model->update_kriteria($data,$id);
            	echo "<script> alert('Data Kriteria disimpan.');</script>";
            	redirect(base_url('Admin/Home/daftar_kriteria'), 'refresh');
      		}
		}  

		public function hapus_kriteria($id)
		{
			$this->checklogin();
			$this->Data_model->hapus_kriteria($id);
        	redirect(base_url('Admin/Home/daftar_kriteria'), 'refresh');
		}

		public function hapus_mahasiswa($id)
		{
			$this->checklogin();
			$this->Data_model->hapus_mahasiswa($id);
        	redirect(base_url('Admin/Home/daftar_mahasiswa'), 'refresh');
		}
		public function daftar_subkriteria()
		{
			$this->checklogin();
			$data['tittle']		= "Daftar Sub Kriteria || SPK Promethee";
			$id_pengguna		= $this->session->userdata('id');
			$data['pengguna']	= $this->Data_model->data_pengguna($id_pengguna);
			$data['kriteria']   = $this->Data_model->daftar_kriteria();
			$data['subkriteria']   = $this->Data_model->daftar_subkriteria();
			$data['content']    = 'Admin/daftar_subkriteria';
        	$this->load->view('Admin/template',$data);
		}

		public function edit_subkriteria($id)
		{
			$this->checklogin();
			$data['tittle']		= "Edit SUb Kriteria || SPK Promethee";
			$id_pengguna		= $this->session->userdata('id');
			$data['pengguna']	= $this->Data_model->data_pengguna($id_pengguna);
			$data['subkriteria']      = $this->Data_model->data_subkriteria($id);
			$data['content']    = 'Admin/edit_subkriteria';
        	$this->load->view('Admin/template',$data);
		}

		public function proses_update_kriteria($id)
		{
			$this->checklogin();
			$data = array(
				'nama' => $this->input->post('nama'),
				'jenis' => $this->input->post('jenis'),
				'bobot' => $this->input->post('bobot'),
				'tipe' => $this->input->post('tipe')
            );
			$this->form_validation->set_rules('nama','nama','required');
			$this->form_validation->set_rules('jenis','jenis','required');
			$this->form_validation->set_rules('bobot','bobot','required');
			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
            	$this->Data_model->update_kriteria($id,$data);
            	echo "<script> alert('Data Kriteria disimpan.');</script>";
            	redirect(base_url('Admin/Home/daftar_kriteria'), 'refresh');
      		}
		}

		public function tambah_subkriteria()
		{
			$this->checklogin();
			$data['tittle']		= "Tambah Kriteria || SPK Promethee";
			$id_pengguna		= $this->session->userdata('id');
			$data['pengguna']	= $this->Data_model->data_pengguna($id_pengguna);
			$data['kriteria']   = $this->Data_model->daftar_kriteria();
			$data['content']    = 'Admin/tambah_subkriteria';
        	$this->load->view('Admin/template',$data);
		}

		public function upload(){
			$fileName = $this->input->post('file', TRUE);

			$config['upload_path'] = './upload/';
			$config['file_name'] = $fileName;
			$config['allowed_types'] = 'xls|xlsx|csv|ods|ots';
			$config['max_size'] = 10000;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('file')) {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('msg','Ada kesalah dalam upload');
				redirect('Welcome');
			} else {
				$media = $this->upload->data();
				$inputFileName = 'upload/'.$media['file_name'];

				try {
					$inputFileType = IOFactory::identify($inputFileName);
					$objReader = IOFactory::createReader($inputFileType);
					$objPHPExcel = $objReader->load($inputFileName);
				} catch(Exception $e) {
					die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
				}

				$sheet = $objPHPExcel->getSheet(0);
				$highestRow = $sheet->getHighestRow();
				$highestColumn = $sheet->getHighestColumn();

				for ($row = 2; $row <= $highestRow; $row++){
					$rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
						NULL,
						TRUE,
						FALSE);
					$data = array(
						"No"=> $rowData[0][0],
						"NamaKaryawan"=> $rowData[0][1],
						"Alamat"=> $rowData[0][2],
						"Posisi"=> $rowData[0][3],
						"Status"=> $rowData[0][4]
					);
					$this->db->insert("tbimport",$data);
				}
				$this->session->set_flashdata('msg','Berhasil upload ...!!');
				redirect('Import');
			}
		}


		public function proses_tambah_subkriteria()
		{
			$this->checklogin();
			$params = array(
				'id_kriteria' => $this->input->post('id_kriteria'),
				'subkriteria' => $this->input->post('subkriteria'),
            );
			$this->form_validation->set_rules('id_kriteria','id_kriteria','required');
			$this->form_validation->set_rules('subkriteria','subkriteria','required');

			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
            	$this->Data_model->input_subkriteria($data);
            	echo "<script> alert('Data Kriteria disimpan.');</script>";
            	redirect(base_url('Admin/Home/daftar_kriteria'), 'refresh');
      		}
		}

		public function hapus_subkriteria($id)
		{
			$this->checklogin();
			$this->Data_model->hapus_kriteria($id);
        	redirect(base_url('Admin/Home/daftar_kriteria'), 'refresh');
		}

		public function daftar_juri()
		{
			$this->checklogin();
			$data['tittle']		= "Daftar Juri || SPK Promethee";
			$id_pengguna		= $this->session->userdata('id');
			$data['pengguna']	= $this->Data_model->data_pengguna($id_pengguna);
			$data['juri']		= $this->Data_model->daftar_juri();
			$data['content']	= 'Admin/daftar_juri';
			$this->load->view('Admin/template',$data);

		}

		public function daftar_nilai()
        {
            $this->checklogin();
            $data['tittle']         =   "Seleksi Beasiswa";
            $id_pengguna            =   $this->session->userdata('id');
            $data['pengguna']       =   $this->Data_model->data_pengguna($id_pengguna);
            $data['peserta']        =   $this->Data_model->daftar_mahasiswa();
            $data['nilai_peserta']  =   $this->Data_model->nilai_peserta();
            $data['kriteria']       =   $this->Data_model->daftar_kriteria();
            //$data['nilai_bobot']    =   $this->Data_model->SumKriteria();
            $data['content']        =   'Admin/daftar_nilai_kriteria';
            $this->load->view('Admin/template',$data);
        }

        function NilaiPreferensi($tp='', $f_jka, $f_q, $f_p='', $f_bobot)
		{
			$negatif = -1*abs($f_p);

			if ($tp == '1') {
				
			}

			elseif ($tp == '2') {
				# code...
			}

			elseif ($tp == '3') {
				if(($negatif <= $f_jka) AND ($f_jka <= $f_p))
				{
					return $f_jka/$f_p;
				}
				elseif(($f_jka < $negatif) AND ($f_jka > $f_p))
				{
					
				}
				else
				{return 1;}
			}
		}

		function tresholdP($kriteria)
		{
			return $data = $this->Data_model->tresholdP($kriteria);
		}

		function tresholdQ($kriteria)
		{
			return $data = $this->Data_model->tresholdQ($kriteria);
		}

		public function perhitungan_seleksi()
		{
			$this->checklogin();
			$data['tittle']			=	"SPK Promethee";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['peserta']		=	$this->Data_model->daftar_mahasiswa();
			$data['nilai_peserta']  =   $this->Data_model->nilai_peserta();
			$data['kriteria']		= 	$this->Data_model->daftar_kriteria();
			$data['nilai_bobot']	=   $this->Data_model->SumKriteria();
			$data['content']		=	'Admin/perhitungan_seleksi';
			$this->load->view('Admin/template',$data);
		}

		public function proses_seleksi()
		{
			$this->checklogin();
			$data['tittle']			=	"SPK Promethee";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['data_kriteria'] = $this->Data_model->load_kriteria();
			$data['data_calon']	   = $this->Data_model->load_calon();
			$data['content']		=	'Admin/hasil_seleksi';
			$this->load->view('Admin/template',$data);
			
		}

		public function logout()
		{
			$this->session->unset_userdata('login');
        	redirect(base_url('Home'),'refresh');
		}

		function tes()
		{
			$data['UN']	= $this->Data_model->load_calon();
			$this->load->view('Admin/tes',$data);
		}

		public function read_detail_mahasiswa(){
			 $id = $_POST["id"];
			 $data = array();
			 $data["data_mahasiswa"] = $this->Data_model->read_mahasiswa_by($id);
			 $data["data_kriteria"] = $this->Data_model->read_kriteria_by_id_mahasiswa($id);

			 echo json_encode($data);
		}


		function input_nilaipsikotes()
		{		
			$data['tittle']			=	"SPK Seleksi Beasiswa";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['mahasiswa']			=	$this->Data_model->get_data_mahasiswa_belum_nilai(4);
			$data['content']		=	'Admin/input_nilaipsikotes';
			$this->load->view('Admin/template',$data);
		}

		function proses_input_npsikotes()
		{
				$id			=	$this->session->userdata('id');
				$calon	    =	$this->Data_model->mahasiswa($id);
				$result = $this->input->post('mahasiswa');
				$result_explode = explode('|', $result);
                $res = $this->Data_model->tambah_nilai_psikotest($result_explode[2],$this->input->post("nilai"));
                $this->nilaipsikotes();
		}

		public function nilaipsikotes()
        {
            $data['tittle']         =   "Seleksi Beasiswa";
            $id_pengguna            =   $this->session->userdata('id');
            $data['pengguna']       =   $this->Data_model->data_pengguna($id_pengguna);
			$data['mahasiswa']			=	$this->Data_model->read_nilai_psikotest();
            $data['content']        =   'Admin/nilaipsikotes';
            $this->load->view('Admin/template',$data);
        }

        public function hasil($aksi){
        	$hasil;
        	if($aksi == "simpan" || $aksi == "umumkan" || $aksi=="cetak"){
               $hasil = $_POST["rangking"];
        	   $d_mahasiswa = $this->Data_model->daftar_mahasiswa()->result_array();
	        	$i = 1;
	        	foreach ($hasil as  $value) {
	        		foreach ($d_mahasiswa as $value_s) {
	        			if($value["nama"] == $value_s["nama"]){
	        			  $hasil["A".$i]["id_mahasiswa"] = $value_s["id_mahasiswa"];
	                      break;
	        			}
	        		}
	        		$i++;
	        	}
        	}
        	
        	if($aksi == "simpan"){
	        	$this->Data_model->simpan_hasil($hasil);
	        	echo "Rangking Berhasil Di Simpan";
        	}else if($aksi == "umumkan"){
                foreach ($hasil as $value) {
                   $data = array();
                   $data["status"] =  $value['status'];
                   $this->Data_model->update_mahasiswa($data,$value["id_mahasiswa"]);
                }
                echo "Pengunguman Berhasil disampaikan ke mahasiswa";
        	}else if($aksi == "tarik"){
        		$d_mahasiswa = $this->Data_model->daftar_mahasiswa()->result_array();
        		foreach ($d_mahasiswa as $value) {
        			$data = array();
        		  	$data["status"] = "Belom";
                    $this->Data_model->update_mahasiswa($data,$value["id_mahasiswa"]);
        		}
        		echo "Pengunguman Di tarik dari mahasiswa";
        	}else if($aksi == "cetak"){
                
        	}
        }




	}
?>
