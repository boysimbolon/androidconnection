<?php
/*
File tampilDetailMhs.php memungkinkan Aplikasi nantinya untuk membaca dan menampilkan detail dari Mahasiswa 
yang dipilih.
*/
//Mendapatkan Nilai Dari Variable ID Mahasiswa yang ingin ditampilkan
$id = $_GET['id'];
//Importing database
require_once('koneksi.php');
//Membuat SQL Query dengan Mahasiswa terpilih yang ditentukan secara spesifik sesuai ID
$sql = "SELECT * FROM tb_mahasiswa WHERE id=$id";
//Mendapatkan Hasil 
$r = mysqli_query($con,$sql);
//Memasukkan Hasil Kedalam Array
$result = array();
$row = mysqli_fetch_array($r);
array_push($result,array(
"id"=>$row['id'],
"nama"=>$row['nama'],
"nim"=>$row['nim'],
"ipk"=>$row['ipk']
));
//Menampilkan dalam format JSON
echo json_encode(array('result'=>$result));
mysqli_close($con);
?>