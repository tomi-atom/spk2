<?php
	
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
					redirect(base_url('Admin/Home/'),$data);
				}
        		elseif ($level == '2') {
        			redirect(base_url('Siswa/Home/'),$data);
				}
				elseif ($level == '3') {
        			
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
			$data['tittle']			=	"SPK Seleksi Kelas Unggulan";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['biodata']		=	$this->Data_model->cek_profil($id_pengguna);
			$data['nilaiun']		=	$this->Data_model->cek_nilaiun($id_pengguna);
			$data['sertifikat']		=	$this->Data_model->cek_sertifikat($id_pengguna);
			$data['content']		=	'Guru/home';
			$this->load->view('Guru/template',$data);
		}

		function profil()
		{
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Kelas Unggulan";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['Guru']			=	$this->Data_model->Guru($id_pengguna);
			$data['biodata']		=	$this->Data_model->cek_profil($id_pengguna);
			$data['nilaiun']		=	$this->Data_model->cek_nilaiun($id_pengguna);
			$data['sertifikat']		=	$this->Data_model->cek_sertifikat($id_pengguna);
			$data['content']		=	'Guru/profil';
			$this->load->view('Guru/template',$data);
		}


		function update_profil()
		{
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Kelas Unggulan";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['Guru']			=	$this->Data_model->Guru($id_pengguna);
			$data['biodata']		=	$this->Data_model->cek_profil($id_pengguna);
			$data['nilaiun']		=	$this->Data_model->cek_nilaiun($id_pengguna);
			$data['sertifikat']		=	$this->Data_model->cek_sertifikat($id_pengguna);
			$data['guru']			=	$this->Data_model->daftar_guru();
			$data['kelas']			=	$this->Data_model->daftar_kelas();
			$data['content']		=	'Guru/update_profil';
			$this->load->view('Guru/template',$data);
		}

		function input_profil()
		{
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Kelas Unggulan";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['Guru']			=	$this->Data_model->Guru($id_pengguna);
			$data['biodata']		=	$this->Data_model->cek_profil($id_pengguna);
			$data['nilaiun']		=	$this->Data_model->cek_nilaiun($id_pengguna);
			$data['sertifikat']		=	$this->Data_model->cek_sertifikat($id_pengguna);
			$data['guru']			=	$this->Data_model->daftar_guru();
			$data['kelas']			=	$this->Data_model->daftar_kelas();
			$data['content']		=	'Guru/input_profil';
			$this->load->view('Guru/template',$data);
		}

		function proses_input_siswa()
		{
			$this->checklogin();
					
				$data = array(
					'id' => $this->session->userdata('id'),
					'nama' => $this->input->post('nama'),
					'jenis_kelamin' => $this->input->post('jenis_kelamin'),
					'id_kelas'=> $this->input->post('id_kelas'),
					'kecamatan' => $this->input->post('kecamatan'),			 
				);
				
				$this->form_validation->set_rules("nama","nama","required");
				$this->form_validation->set_rules("id_kelas","id_kelas","required");
				
   			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
            	$this->Data_model->insert_siswa($data);
            	echo "<script> alert('Data SIswa disimpan.');</script>";
            	redirect(base_url('Siswa/Home/profil'), 'refresh');
      		}
		}

	
	
		function input_nilaiakademik()
		{   
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Kelas Unggulan";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['jurusan']        =   "Belum Ada Kelas";
			$data['mata_pelajaran'] =   array();
			$guru = $this->Data_model->gurup($id_pengguna);
			if(sizeof($guru->result_array()) != 0){
              foreach ($guru->result_array() as $key)
				$a = $key['id_kelas'];
            $siswa_memiliki_nilai   =  $this->Data_model->ambil_nilai_akademik_by($id_pengguna); 
   			$siswa                  =	$this->Data_model->daftar_siswa_kelas($a)->result_array();
   			$data['siswa']          = array();
   			foreach ($siswa as $value) {
   				$valid = true;
   				foreach ($siswa_memiliki_nilai as $value_s) {
   					if($value_s["id_siswa"] == $value['id_siswa']){
                       $valid = false;
                       break;
   					}
   				}
   				if($valid == true){
                     array_push($data['siswa'], $value);
   			    }
   			}
   			$data['jurusan'] =  explode(" ", $this->Data_model->get_data_kelas($a)[0]['NamaKelas'])[1];
   			$data['mata_pelajaran'] = $this->Data_model->get_mata_pelajaran($data["jurusan"]);
			}else{
				$data['siswa']      = array();
			}
		
			
			$data['content']		=	'Guru/input_nilaiakademik';
			$this->load->view('Guru/template',$data);
		}

	

         public function nilaiakademik()
        {
            $this->checklogin();
            $data['tittle']         =   "Seleksi Kelas";
            $id_pengguna            =   $this->session->userdata('id');
            $data['siswa']           =  $this->Data_model->ambil_nilai_akademik_by($id_pengguna);        
            $data['pengguna']       =   $this->Data_model->data_pengguna($id_pengguna);
            $data['content']        =   'Guru/nilaiakademik';
            $this->load->view('Guru/template',$data);
        }

		function proses_input_nakademik()
		{
				$this->checklogin();
				$id			=	$this->session->userdata('id');
				$calon	=	$this->Data_model->siswa($id);
				$result = $this->input->post('siswa');
				$result_explode = explode('|', $result);              
                $res = $this->Data_model->tambah_nilai_akademik($result_explode[2],$this->input->post("nilai"));
                $this->nilaiakademik();
		}

		public function logout()
		{
			$this->session->unset_userdata('login');
        	redirect(base_url('Home'),'refresh');
		}

		public function simpan_nakademik(){
			$data = json_decode($_POST['data']);
			$sum = 0;
			foreach ($data as $val) {
				$sum = $sum + $val->nilai;
			}
			$rerata = round($sum / (sizeof($data)));
			echo $this->Data_model->insert_nilai_akademik($data,$rerata);
		}
	}

?>