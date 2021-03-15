<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_model extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}

	public function login($email, $password)
	{
		$this->db->select('*');
		$this->db->from('pengguna p');
		$this->db->join('leveling b','b.id_leveling=p.id_leveling');
		$this->db->where('p.email', $email);
		$this->db->where('p.password',$password);
		$q	=	$this->db->get();
		return $q;
	}


    /**
     * 
     * Semua Model Yang Berhubungan Dengan 
     * Pengguna/ User
     * 
     * Last Update xx/xx/xxxx
     * 
     * 
     */
	function data_pengguna($var)
	{
            $this->db->select('*');
		    $this->db->from('pengguna p');
		    $this->db->join('leveling l','l.id_leveling=p.id_leveling');
		    $this->db->where('p.id',$var);
		    $q	=	$this->db->get();
		    return $q;   
    }

    function get_data_mahasiswa_belum_nilai($id){
        $res = array();
        $data_mahasiswa = $this->db->query("SELECT * FROM mahasiswa")->result_array();
        foreach ($data_mahasiswa as $value) {
            $nilai = $this->db->query("SELECT * FROM calon_kriteria WHERE calon_kriteria.calon_id= ".$value['id_mahasiswa']." AND calon_kriteria.id_kriteria=".$id)->result_array();
            if(sizeof($nilai) == 0){
              array_push($res, $value);
            }
        }
        return $res;
    }
    
    function daftar_pengguna()
    {
            $this->db->select('*');
		    $this->db->from('pengguna p');
		    $this->db->join('leveling l','l.id_leveling=p.id_leveling');
		    $q	=	$this->db->get();
		    return $q;
    }
       
    function detail_pengguna($id)
    {
        $this->db->select('*');
        $this->db->from('pengguna p');
        $this->db->join('leveling l','l.id_leveling=p.id_leveling');
        $this->db->where('p.id',$id);
        $q	=	$this->db->get();
        return $q;
    }

    function input_pengguna($data) 
    {
        $q = $this->db->insert('pengguna',$data);
    }

    function cek_profil($id)
    {
        $this->db->select('*');
        $this->db->from('mahasiswa p');
        $this->db->where('p.id',$id);
        $q	=	$this->db->get();
        return $q;
    }

    function cek_nilaiun($id)
    {
        $this->db->select('*');
        $this->db->from('mahasiswa p');
        $this->db->join('nilaiun n','p.id=n.id');
        $this->db->where('p.id',$id);
        $q  =   $this->db->get();
        return $q;
    }

    function cek_nilaik($id)
    {
        $this->db->select('*');
        $this->db->from('mahasiswa p');
        $this->db->join('calon_kriteria c','p.id_mahasiswa=c.calon_id');
        $this->db->where('p.id',$id);
        $q  =   $this->db->get();
        return $q;
    }

    function insert_nilaiun($data) 
    {
        $this->db->insert('nilaiun',$data);
    }

    function update_nilaiun($data,$id) 
    {
        $this->db->where('id',$id);
        $this->db->update('nilaiun',$data);
    }

    function insert_nilaikriteria($datas)
    {
        $this->db->insert('calon_kriteria',$datas);
    }

    function update_nilaikriteria($datas,$id)
    {
        $this->db->where('calon_id',$id);
        $this->db->update('calon_kriteria',$datas);   
    }

    function nilaiun($id)
    {
        $this->db->select('*');
        $this->db->from('mahasiswa p');
        $this->db->join('nilaiun n','p.id=n.id');
        $this->db->where('p.id',$id);
        $q  =   $this->db->get();
        return $q;
    }

    function input_sertifikat($data)
    {
        $this->db->insert('sertifikat',$data);
    }

   // function cek_nilaik($id)
    //{
        
    //}

    function cek_sertifikat($id)
    {
        $this->db->select('*');
        $this->db->from('mahasiswa p');
        $this->db->join('sertifikat n','p.id=n.id');
        $this->db->where('p.id',$id);
        $q  =   $this->db->get();
        return $q;
    }

    function count_sertifikat($id)
    {
        $this->db->select('count(*)');
        $this->db->from('sertifikat s');
        //$this->db->join('mahasiswa p','s.id=p.id');
        $this->db->where('s.id',$id);
        $q  =   $this->db->get();
        return $q;

    }

    function cek_Artikel($id)
    {
        $this->db->select('*');
        $this->db->from('artikel p');
        $this->db->where('p.id',$id);
        $q	=	$this->db->get();
        return $q;
    }

    function data_profil($id)
    {
        $this->db->select('*');
        $this->db->from('pengguna p');
        $this->db->join('biodata l','l.id=p.id');
        $this->db->where('p.id',$id);
        $q	=	$this->db->get();
        return $q;
    }


    function input_profil($data) 
    {
        $q = $this->db->insert('biodata',$data);
    }

    function input_dokumen($data)
    {
        $q = $this->db->insert('artikel',$data);
    }

    function data_artikel($id)
    {
        $this->db->select('*');
        $this->db->from('artikel p');
        $this->db->where('p.id',$id);
        $q  =   $this->db->get();
        return $q;
    }
    function update_pengguna($data,$id) 
    {
        $this->db->where('id',$id);
        $this->db->update('pengguna',$data);
    }
    function update_profil($data,$id) 
    {
        $this->db->where('id',$id);
        $this->db->update('biodata',$data);
    }

    function hapus_pengguna($id)
    {
        $this->db->where('id',$id);
		$this->db->delete('pengguna');
    }


    /**
     * 
     * 
     * Semua Model Yang Berhubungan Dengan Leveling 
     * User
     * 
     * Last Update xx/xx/xxxx
     */
    function data_level()
    {       
        $this->db->select('*');
        $this->db->from('leveling');
        return $q = $this->db->get();
    }

    function input_data_level($data) 
    {
        $q = $this->db->insert('leveling',$data);
    }

    function update_level($data,$id) 
    {
        $this->db->where('id_leveling',$id);
        $this->db->update('leveling',$data);
    }

    function update_mahasiswa($data,$ids) 
    {
        $this->db->where('id_mahasiswa',$ids);
        $this->db->update('mahasiswa',$data);
    }

    function hapus_mahasiswa($id)
    {
        $this->db->where('id_mahasiswa',$id);
        $this->db->delete('mahasiswa');
    }

    function hapus_level($id)
    {
        $this->db->where('id_leveling',$id);
		$this->db->delete('leveling');
    }

    function daftar_mahasiswa()
    {
        $this->db->select('*');

        $this->db->from('mahasiswa l');
        $this->db->join('jurusan k','l.id_jurusan=k.id_jurusan');

        $q  =   $this->db->get();
        return $q;
    }

    function daftar_mahasiswa_jurusan($jurusan)
    {
        $this->db->select('*');

        $this->db->from('mahasiswa l');
        $this->db->join('jurusan k','l.id_jurusan=k.id_jurusan');

        $this->db->where('l.id_jurusan',$jurusan);
        $q  =   $this->db->get();
        return $q;
    }

    function mahasiswa($id) //id di tabel mahasiswa
    {
        $this->db->select('*');
        $this->db->from('mahasiswa l');

        $this->db->join('jurusan','jurusan.id_jurusan=mahasiswa.id_jurusan');
        $this->db->where('mahasiswa.id_mahasiswa',$id);

        $q  =   $this->db->get();
        return $q;
    }

    function get_data_mahasiswa($id){
        $this->db->select('*');
        $this->db->from('mahasiswa');

        $this->db->where('mahasiswa.id_mahasiswa',$id);

        $q  =   $this->db->get()->result_array();
        return $q;
    }

    function get_data_jurusan($id=""){
        $this->db->select('*');
        $this->db->from('jurusan');
        if($id  != ""){
           $this->db->where('id_jurusan',$id);
        }
        $q  =   $this->db->get()->result_array();
        return $q;
    }

    function get_id_mahasiswa_by($id_pengguna){
        $this->db->select('id_mahasiswa');
        $this->db->from('mahasiswa');

        $q  =   $this->db->get()->row()->id_mahasiswa;
        return $q;
    }

    function reset_password($id,$data){
        $this->db->where('id', $id);
        $this->db->update('pengguna', $data);
    }

    function data_mahasiswa()
    {
        $query = $this->db->query("select * from mahasiswa");
        return $query;
    }

    function data_guru()
    {
        $this->db->select('*');
        $this->db->from('pengguna p');
        $this->db->join('leveling l','l.id_leveling=p.id_leveling');
        $this->db->join('guru g','p.id=g.id','left');
        $this->db->join('jurusan k','g.id_jurusan=k.id_jurusan','left');
        $this->db->where('p.id_leveling','3');
        $q  =   $this->db->get();
        return $q;
    }

    function daftar_guru()
    {
        $this->db->select('*');
        $this->db->from('pengguna p');
        $this->db->join('leveling l','l.id_leveling=p.id_leveling');
        $this->db->where('p.id_leveling','3');
        $q  =   $this->db->get();
        return $q;
    }

    function guru($id)
    {
        $this->db->select('*');
        $this->db->from('pengguna p');
        $this->db->join('leveling l','l.id_leveling=p.id_leveling');
        $this->db->join('guru g','p.id=g.id','left');
        $this->db->join('jurusan k','g.id_jurusan=k.id_jurusan','left');
        $this->db->where('p.id_leveling','3');
        $this->db->where('g.id_guru',$id);
        $q  =   $this->db->get();
        return $q;
    }

    function gurup($id)
    {
        $this->db->select('*');
        $this->db->from('pengguna p');
        $this->db->join('leveling l','l.id_leveling=p.id_leveling');
        $this->db->join('guru g','p.id=g.id','left');
        $this->db->where('g.id',$id);
        $q  =   $this->db->get();
        return $q;
    }

    function insert_guru($data)
    {
        $this->db->insert('guru',$data);
    }

    function insert_mahasiswa($data)
    {
        $this->db->insert('mahasiswa',$data);
    }
    function hapus_guru($id)
    {
        $this->db->where('id_guru',$id);
        $this->db->delete('guru');
    }

    function daftar_jurusan()
    {
        $this->db->select('*');
        $this->db->from('jurusan');
        $q  =   $this->db->get();
        return $q;
    }

    function data_jurusan($id)
    {
        $this->db->select('*');
        $this->db->from('jurusan');
         $this->db->where('id_jurusan',$id);
        $q  =   $this->db->get();
        return $q;
    }

    function insert_npsikotes($data)
    {
        $this->db->insert('psikotes',$data);
    }

    function hapus_jurusan($id)
    {
        $this->db->where('id_jurusan',$id);
        $this->db->delete('jurusan');
    }

    function update_jurusan($id,$data)
    {
         $this->db->where('id_jurusan',$id);
        $this->db->update('jurusan',$data);
    }

    function insert_jurusan($data)
    {
        $this->db->insert('jurusan',$data);
    }

    function nilaipsikotes()
    {
        $this->db->select('*');
        $this->db->from('psikotes');
        $q = $this->db->get();
        return $q;
    }

    function nilaiakademik()
    {
        $this->db->select('*');
        $this->db->from('nilaiakademik');
        $q = $this->db->get();
        return $q;
    }

    function daftar_kriteria()
    {
        $this->db->select('*');
        $this->db->from('kriteria k');
        $this->db->order_by('id_kriteria');
        $q = $this->db->get();
        return $q;
    }
    
    function data_kriteria($id)
    {
        $this->db->select('*');
        $this->db->from('kriteria k');
        $this->db->where('id_kriteria',$id);
        $q = $this->db->get();
        return $q;
    }

    function input_kriteria($data) 
    {
        $q = $this->db->insert('kriteria',$data);
    }

    function update_kriteria($id,$data) 
    {
        $this->db->where('id_kriteria',$id);
        $this->db->update('kriteria',$data);
    }

     function update_guru($data,$id) 
    {
        $this->db->where('id_guru',$id);
        $this->db->update('guru',$data);
    }

    function hapus_kriteria($id)
    {
        $this->db->where('id_kriteria',$id);
		$this->db->delete('kriteria');
    }

  
    function data_peserta()
    {
        $this->db->select('*');
        $this->db->from('pengguna p');
        $this->db->join('leveling l','p.id_leveling=l.id_leveling');
        $this->db->where('l.id_leveling','2');
        $q = $this->db->get();
        return $q;

    }

    /**
    *
    *
    *
    *
    *
    *   Proses Prometheeeee
    *
    *
    *
    *
    *
    *
    */


    function load_kriteria()
    {
        $hasil = $this->db->query("SELECT distinct kriteria.* FROM kriteria");
    

        while ($data_row = mysqli_fetch_assoc($hasil->result_id)) {
            $datas['data'][$data_row['nama']] = $data_row;

            $bobot[] = $datas['data'][$data_row['nama']]['bobot'];
       }
       $datas['ekstra']['total_bobot'] = array_sum($bobot);
        
        return $data_kriteria = $datas;

        unset($datas);

        //return $hasil->result_id;
        
    }

    function load_calon()
    {
       $hasil = $this->db->query("SELECT distinct * FROM mahasiswa JOIN calon_kriteria ON (mahasiswa.id_mahasiswa=calon_kriteria.calon_id) JOIN jurusan on mahasiswa.id_jurusan = jurusan.id_jurusan");

        while ($data_row = mysqli_fetch_assoc($hasil->result_id)) {
            $datas['data'][$data_row['id']] = $data_row;

            $hasil2 = $this->db->query("SELECT kriteria.nama, kriteria.id_kriteria AS nama_kriteria, calon_kriteria.value  FROM calon_kriteria join kriteria ON (kriteria.ID_KRITERIA=calon_kriteria.id_kriteria) WHERE calon_kriteria.CALON_ID =".$datas['data'][$data_row['id']]['id_mahasiswa']);

            while ($data_row2 = mysqli_fetch_assoc($hasil2->result_id)) {
                $datas['data'][$data_row['id']]['kriteria'][$data_row2['nama']] = $data_row2;
            }
        }
        // ekstra
        // $datas['ekstra']['total_bobot'] = array_sum($bobot);

        return $data_calon = $datas;

        unset($datas);

    }


    function tresholdP($kriteria)
    {
        //$nilai = $this->db->query("select * from calon_kriteria where id_kriteria='$kriteria'");
        $max   = $this->db->query("select max(value) as max from calon_kriteria where id_kriteria='$kriteria' ");
        $min   = $this->db->query("select min(value) as min from calon_kriteria where id_kriteria='$kriteria' ");
        $min2  = $this->db->query("select value from (select value from calon_kriteria where id_kriteria='$kriteria' order by value asc limit 2)tes order by value desc limit 1");
        $peserta = $this->db->query("select count(calon_id) as peserta from calon_kriteria group by id_kriteria limit 1");

        $max = $max->result();
        $min = $min->result();
        $min2 = $min2->result();
        $peserta = $peserta->result();

        foreach ($min as $min)
        foreach ($min2 as $min2)
        foreach ($max as $max)
        foreach ($peserta as $peserta)
        

        $K1 = $max->max-$min->min;
        $K2 = $min2->value-$min->min;
        $v = $K1-$K2;
        $q = $v/$peserta->peserta;
        $p = $v-$q;

        //$data['q']=$q;
        //$data['p']=$p;

        return $p;
        
    }

    function tresholdQ($kriteria)
    {
        //$nilai = $this->db->query("select * from calon_kriteria where id_kriteria='$kriteria'");
        $max   = $this->db->query("select max(value) as max from calon_kriteria where id_kriteria='$kriteria' ");
        $min   = $this->db->query("select min(value) as min from calon_kriteria where id_kriteria='$kriteria' ");
        $min2  = $this->db->query("select value from (select value from calon_kriteria where id_kriteria='$kriteria' order by value asc limit 2)tes order by value desc limit 1");
        $peserta = $this->db->query("select count(calon_id) as peserta from calon_kriteria group by id_kriteria limit 1");

        $max = $max->result();
        $min = $min->result();
        $min2 = $min2->result();
        $peserta = $peserta->result();

        foreach ($min as $min)
        foreach ($min2 as $min2)
        foreach ($max as $max)
        foreach ($peserta as $peserta)
        

        $K1 = $max->max-$min->min;
        $K2 = $min2->value-$min->min;
        $v = $K1-$K2;
        $q = $v/$peserta->peserta;
        $p = $v-$q;

        //$data['q']=$q;
        //$data['p']=$p;

        return $q;
        
    }

     public function SumKriteria()
    {
        $this->db->select_sum('Bobot', 'BobotSeluruh');
        $this->db->from('kriteria k');
        $q = $this->db->get();
        return $q;
    }


    public function nilai_peserta()
    {
        $this->db->select('*');
        $this->db->from('calon_kriteria');
        $this->db->order_by('id_kriteria');
        $q = $this->db->get();
        return $q; 
    }

    public function read_mahamahasiswa_by($id_mahasiswa=""){
        $this->db->select('*');
        $this->db->from('mahasiswa a');

         $this->db->join('jurusan c','a.id_jurusan=c.id_jurusan');
         if($id_mahasiswa != ""){
           $this->db->where('a.id_mahasiswa = '.$id_mahasiswa); 
         }
        $res = $this->db->get();
        return $res->result_array();
    }

    public function read_kriteria_by_id_mahasiswa($id){
       $this->db->select('*');
       $this->db->from('calon_kriteria a');
       $this->db->where('a.calon_id = '.$id);
       $res = $this->db->get();
       return $res->result_array();
    }

    public function read_nilai_psikotest(){
        $this->db->select('*');        
        $this->db->from('calon_kriteria');
        $this->db->join('mahasiswa','calon_kriteria.calon_id=id_mahasiswa','inner');
        $this->db->where('calon_kriteria.id_kriteria = 4');
        $res = $this->db->get();
        return $res->result_array();
    }

    public function register_user($data,$tipe){
          $res;
          if($tipe == "mahasiswa"){
            $p_data = [
                 "nama"  => $data["nama"],
                 "email" => $data["email"],
                 "username" => $data["username"],
                 "password" => $data["password"],
                 "id_leveling" => $data["id_leveling"]
            ];
            $res = $this->db->insert("pengguna",$p_data);
            $s_data = [
                "id" => $this->db->insert_id(),
                "nama" => $data["nama"],
                "jenis_kelamin" => $data["jenis_kelamin"],
                "kecamatan" => $data["kecamatan"],
                "id_jurusan" => $data["id_jurusan"],
                "asal_sekolah" => $data["asal_sekolah"],
                "ttl" => $data["ttl"],
                "alamat" => $data["alamat"],
                "no_hp" => $data["no_hp"],
                "nis" => $data["nis"],
                "submit_by" => NULL
            ];
             if($res == 1){
                 $res = $this->db->insert("mahasiswa",$s_data);
             }
          }else{
             $res = $this->db->insert("pengguna",$data);
          }
          return $res;
    }

    public function tambah_nilai_psikotest($id,$nilai){
        $data = [
             "calon_id" => $id,
             "id_kriteria" => '4', // statis nih ?
             "value" => $nilai
        ];

        $res = $this->db->insert("calon_kriteria",$data);
        return $res;
    }

     public function tambah_nilai_akademik($id,$nilai){
        $data = [
             "calon_id" => $id,
             "id_kriteria" => '3', // statis nih ?
             "value" => $nilai
        ];

        $res = $this->db->insert("calon_kriteria",$data);
        return $res;
    }

    public function ambil_nilai_akademik_by($id_guru){
        $this->db->select('id_jurusan');        
        $this->db->from('guru');
        $this->db->join('pengguna','pengguna.id=guru.id');
        $this->db->where('pengguna.id=',$id_guru);
        $res = $this->db->get()->result_array();
        if(sizeof($res) > 0){
            $id_jurusan = $res[0]["id_jurusan"];
            $res = $this->db->query("SELECT * FROM calon_kriteria INNER JOIN mahasiswa on mahasiswa.id_mahasiswa = calon_kriteria.calon_id WHERE mahasiswa.id_jurusan=".$id_jurusan." AND calon_kriteria.id_kriteria = 3")->result_array();
        }else{
           $res = array();
        }
        return $res;
    }

    public function simpan_hasil($hasil){
        $this->db->query("delete from rangking");
        foreach ($hasil as $value) {
            $data = array();
            $data = [
                 "Nama" => $value["nama"],
                 "Id_mahasiswa" => $value["id_mahasiswa"],
                 "Leaving_flow" => $value["leaving"],
                 "Entering_flow" => $value["entering"],
                 "Net_Flow" => $value["net_flow"]
            ];
            $this->db->insert("rangking",$data);
        }
    }

    public function get_rangking(){
        $this->db->select("*");
        $this->db->from("rangking");
        $this->db->order_by("Net_Flow","DESC");
        $res = $this->db->get()->result_array();
        return $res;
    }

    public function get_mata_pelajaran($jurusan){
       $this->db->select("*");
       $this->db->from("mata_pelajaran");
       $this->db->where("jurusan_mp",$jurusan);
       $res = $this->db->get()->result_array();
       return $res;  
    }

    public function insert_nilai_akademik($data,$rerata){
       $id_kriteria = 3;
       foreach ($data as $value) {
           $this->db->insert("nilaiakademik",$value);
       }
       $data_nilai = [
           "calon_id" => $data[0]->id_mahasiswa,
           "Id_kriteria" => $id_kriteria,
           "value" => $rerata
       ];
       $this->db->insert("calon_kriteria",$data_nilai);
    }

    public function get_nilai_akademik_by($id_mahasiswa){
      $res = $this->db->query('SELECT nama_mp,nilai FROM nilaiakademik INNER JOIN mata_pelajaran ON nilaiakademik.id_mp = mata_pelajaran.id_mp INNER JOIN mahasiswa ON mahasiswa.id_mahasiswa = nilaiakademik.id_mahasiswa WHERE mahasiswa.id_mahasiswa = '.$id_mahasiswa)->result_array();
      return $res;
    }

    public function get_rerata_nilai_by($id_mahasiswa){
       $res = $this->db->query('SELECT kriteria.nama,calon_kriteria.value FROM calon_kriteria INNER JOIN kriteria ON calon_kriteria.id_kriteria = kriteria.id_kriteria INNER JOIN mahasiswa ON mahasiswa.id_mahasiswa = calon_kriteria.calon_id WHERE mahasiswa.id_mahasiswa = '.$id_mahasiswa)->result_array();
      return $res;
    }


}
