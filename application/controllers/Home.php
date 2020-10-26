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
	        $this->load->helper('date');
	        $this->load->helper('form','url','file','directory');	
	        $valid_login = $this->session->userdata ( 'login' );
    			if ($valid_login == 1) {
        		$level = $this->session->userdata('leveling');
        		
        		if ($level == '1') {
        			redirect(base_url('/Admin/Home/index'),$data);
        		}
        		elseif ($level == '2') {
        			redirect(base_url('/Siswa/Home'),$data);
				}
				elseif ($level == '3') {
					redirect(base_url('/Guru/Home'),$data);
				}elseif($level == '4'){
                    redirect(base_url('/Kepsek/Home'),$data);
				}
        		else{
        			redirect(base_url('Home/index'));
        		}
    		}
    		return true;
		}
		
		public function index()
		{    
			$data['login'] = $this->session->userdata('id',TRUE);
	      	if($data['login']==FALSE)
	       	{
         		$this->load->view('login');
        	}

        	elseif ($data['login']==TRUE) {
        		
        		$level = $this->session->userdata('id_leveling');
        		
        		if ($level == '1') {
        			redirect(base_url('/Admin/Home'),$data);
        		}
        		elseif ($level == '2') {
        			redirect(base_url('/Siswa/Home'),$data);
				}
				elseif ($level == '3') {
					redirect(base_url('/Guru/Home'),$data);
				}elseif($level == '4'){
                    redirect(base_url('/Kepsek/Home'),$data);
				}
        		else{
        			redirect(base_url('Home/login'));
        		}
        	}

			else{
				echo "Something's Wrong";
			}
		}

		public function login()
		{
			$data['data_jurusan'] = $this->Data_model->daftar_jurusan();
			$this->load->view('login',$data);
		}

		function proses()
		{
			$email      =   trim(strip_tags($this->input->post('email')));
	        $password   =   md5($this->input->post('password'));
	        $hasil      =   $this->Data_model->login($email,$password);

	        if($hasil->num_rows() == 1)
	        {
	          foreach ($hasil->result_array() as $data)
	          {
	            $session_id         =   $data['id'];
	            $session_email      =   $data['email'];
				$session_nama       =   $data['nama'];
				$session_level		= 	$data['id_leveling'];
	          }

	          $sess_user = array(
	                  'id'=>$session_id,
	                  'email'=>$session_email,
					  'nama'=>$session_nama,
					  'leveling'=>$session_level,
	          );

	          $this->session->set_userdata($sess_user,TRUE);
	          $this->session->set_userdata('login',TRUE);
	          $level = $this->session->userdata('leveling');
        		
        		if ($level == '1') {
        			redirect(base_url('/Admin/Home'),$data);
        		}
        		elseif ($level == '2') {
        			redirect(base_url('/Siswa/Home'),$data);
				}
				elseif ($level == '3') {
        			redirect(base_url('/Guru/Home'),$data);
        		}
        		elseif($level == '4'){
                    redirect(base_url('/Kepsek/Home'),$data);
				}
        		else{
        			print_r($data);
        		}
	          
	        }
	        else
	        {
	            $message = "Username and/or Password incorrect.\\nTry again.";
	            echo "<script type='text/javascript'>alert('$message');</script>";
	            redirect(base_url('Home/login'),'refresh');
        	}
		}

		public function register()
		{
			$temp = json_decode($_POST['register']);
			$this->load->model("Data_model");
			$res;
			if($temp[4] == 2){
	            $data = [
	                "nama"  => $temp[0],
	                "email" => $temp[2],
	                "username" => $temp[1],
	                "password" => md5($temp[3]),
	                "id_leveling" => $temp[4],
	                "jenis_kelamin" => $temp[5],
	                "kecamatan" => $temp[6],
	                "id_jurusan" => $temp[7],
	                "asal_sekolah" => $temp[8],
	                "ttl" => $temp[9],
	                "alamat" => $temp[10],
	                "no_hp" => $temp[11],
	                "nis" => $temp[12]
				];
				$res = $this->Data_model->register_user($data,"mahasiswa");
			}else{
                $data = [
	                "nama"  => $temp[0],
	                "email" => $temp[2],
	                "username" => $temp[1],
	                "password" => md5($temp[3]),
	                "id_leveling" => $temp[4]
				];
				$res = $this->Data_model->register_user($data,"none");
			}

            if($res == 1){
            	$hasil = $this->Data_model->login($data["nama"],$data["password"]);
	            $this->session->set_flashdata("msg","re-login");
                echo $data["nama"]." berhasil di tambah";
            }else{
            	echo $res;
            }
		}

	}
?>
