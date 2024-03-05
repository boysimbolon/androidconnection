<?php
/*
Catatan: nama databse yang dibuat dalam praktikum adalah “db_praktikum”,
Teman-teman mungkin akan menggantinya nanti dengan nama database yang teman-teman ingin bangun pada aplikasi 
yang lainnya.
*/
//Mendefinisikan Konstanta
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','db_praktikum');
//membuat koneksi dengan database
$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
?>