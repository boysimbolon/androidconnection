<?php 
/*
File updateMhs.php memungkinkan Aplikasi untuk dapat memperbarui data dari Mahasiswa yang terpilih.
*/
if($_SERVER['REQUEST_METHOD']=='POST'){
//MEndapatkan Nilai Dari Variable 
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$ipk = $_POST['ipk'];
//import file koneksi database 
require_once('koneksi.php');
//Membuat SQL Query
$sql = "UPDATE tb_mahasiswa SET nama = '$nama', nim = '$nim', ipk = '$ipk' WHERE id = $id;";
//Meng-update Database 
if(mysqli_query($con,$sql)){
echo 'Berhasil Update Data Mahasiswa';
}else{
echo 'Gagal Update Data Mahasiswa';
}
mysqli_close($con);
}
?>