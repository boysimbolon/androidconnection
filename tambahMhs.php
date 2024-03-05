<?php
/*
File tambahMhs.php ini berfungsi untuk menambahkan Mahasiswa ke dalam tabel tb_mahasiswa yang ada dalam 
MySQL.
*/
if($_SERVER['REQUEST_METHOD']=='POST'){
//Mendapatkan Nilai Variable
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$ipk = $_POST['ipk'];
//Pembuatan Syntax SQL
$sql = "INSERT INTO tb_mahasiswa (nama,nim,ipk) VALUES ('$nama','$nim','$ipk')";
//Import File Koneksi database
require_once('koneksi.php');
//Eksekusi Query database
if(mysqli_query($con,$sql)){
echo 'Berhasil Menambahkan Mahasiswa';
}else{
echo 'Gagal Menambahkan Mahasiswa';
}
mysqli_close($con);
}
?>