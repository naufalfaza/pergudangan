<?php 
include 'config.php';
$db = new config();
 
$aksi = $_GET['aksi'];

 if($aksi == "tambah_barang"){

 	$db->input_barang($_POST['nama'],$_POST['kategori'],$_POST['qty'],$_POST['id_gudang'],$_POST['harga'],'Y');

 	header("location:pages/barang.php");
 }elseif($aksi == "search"){
 	if (strtoupper($_POST['cari']) == "BARANG") {
 		header("location:pages/barang.php");	
 	}elseif (strtoupper($_POST['cari']) == "DASHBOARD") {
 		header("location:pages/dashboard.php");	
 	}elseif (strtoupper($_POST['cari']) == "KATEGORI") {
 		header("location:pages/katgori.php");	
 	}
 }
?>