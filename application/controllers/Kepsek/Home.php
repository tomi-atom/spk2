<?php
	
	/**
	* 
	*/
	class Home extends MY_Controller
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
			$data['tittle']			=	"Kepala Sekolah | SPK Seleksi Kelas Unggulan";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['content']		=	'Kepsek/home';
			$this->load->view('Kepsek/template',$data);
		}

		public function rangking(){
		   $this->checklogin();
			$data['tittle']			=	"Kepala Sekolah | SPK Seleksi Kelas Unggulan";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['kriteria']       =   $this->Data_model->daftar_kriteria();
			$data['rangking']       =   $this->Data_model->get_rangking();
			$data['content']		=	'Kepsek/rangking';
			$this->load->view('Kepsek/template',$data);	
		}
		
		public function logout()
		{
			$this->session->unset_userdata('login');
        	redirect(base_url('Home'),'refresh');
		}

		public function detail_siswa($id_siswa){
	      $id_pengguna		 = $this->session->userdata('id');
	      $data['pengguna']	 =	$this->Data_model->data_pengguna($id_pengguna);
	      $data['tittle']	 =	"Kepala Sekolah | SPK Seleksi Kelas Unggulan";
		  $data['biodata']   = $this->Data_model->siswa($id_siswa)->result_array();
		  $id_pengguna_siswa = $data['biodata'][0]["id"];
		  $data['nilaiun']   = $this->Data_model->cek_nilaiun($id_pengguna_siswa)->result_array();
		  $data['nilaiakademik'] = $this->Data_model->get_nilai_akademik_by($id_siswa);
		  $data['reratanilai']   = $this->Data_model->get_rerata_nilai_by($id_siswa);
		  $data['sertifikat']    = $this->Data_model->cek_sertifikat($id_pengguna_siswa)->result_array();
		  $data['content']		 =	'Kepsek/detail_siswa';
		  $this->load->view('Kepsek/template',$data);	
		}

		public function batas(){
			$this->load->model('batas_nilai_m');
			$id_pengguna		 = $this->session->userdata('id');
			$data['pengguna']	 = $this->Data_model->data_pengguna($id_pengguna);
			$data['batas']		 = $this->batas_nilai_m->get_row('id_batas = 1');
			$data['tittle']	 	 =	"Kepala Sekolah | SPK Seleksi Kelas Unggulan";
			$data['content']	 =	'Kepsek/batas';
			print_r($_POST);
			if($this->POST('submit'))
			{
				
				$data=
				[
					'batas'=>$this->POST('batas')
				];
				$this->batas_nilai_m->update(1,$data);
				redirect(site_url('Kepsek/Home/batas'));
			}
			
		  	$this->load->view('Kepsek/template',$data);
		}
	}

?>