<?php 
	$host = 'localhost';
	$uname = 'root';
	$pass = '';
	$db = 'spk_pro';
	$conn = mysqli_connect($host,$uname,$pass,$db);

	if(!$conn){
	die ("koneksi ke database Gagal..");
}


	$hasil = mysqli_query($conn, "SELECT distinct KRITERIA.* FROM KRITERIA");

	while ($data_row = mysqli_fetch_assoc($hasil)) {
	$datas['data'][$data_row['nama']] = $data_row;

	$bobot[] = $datas['data'][$data_row['nama']]['bobot'];
}
$datas['ekstra']['total_bobot'] = array_sum($bobot);
$data_kriteria = $datas;

unset($datas);

print_r($data_kriteria);

	echo "---------------------------------------------------------------------------------------------------------------------------";

	print_r($UN)
?>