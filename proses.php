<?php 
include 'config.php';
$db = new config();
 
$aksi = $_GET['aksi'];

 // PROSES TAMBAH BARANG
 if($aksi == "tambah_barang"){

 	// PROSES INSERT
 	$db->input_barang($_POST['nama'],$_POST['kategori'],$_POST['qty'],$_POST['id_gudang'],$_POST['harga'],'Y');
 	
 	// REDIRECT
 	header("location:pages/barang.php");

 // PROSES TAMBAH GUDANG
 }elseif ($aksi == "tambah_gudang"){

     $db->input_gudang($_POST['nama'], $_POST['kategori'], $_POST['longitude'], $_POST['latitude'], "Y");
     
     header("location:pages/gudang.php");

 // PROSES UPDATE BARANG
 }elseif($aksi == "update_barang"){

 	// PROSES UPDATE
 	$db->update_barang($_POST['id'],$_POST['nama'],$_POST['kategori'],$_POST['qty'],$_POST['id_gudang'],$_POST['harga']);
 	
 	// REDIRECT
 	header("location:pages/detail_barang.php?id=".$_POST['id']);

 // PROSES UPDATE GUDANG
 }elseif($aksi == "update_gudang"){

 	// PROSES UPDATE
    $db->update_gudang($_POST['id'],$_POST['nama'], $_POST['kategori'], $_POST['longitude'], $_POST['latitude']);
 	
 	// REDIRECT
 	header("location:pages/detail_gudang.php?id=".$_POST['id']);

 // PROSES UPDATE STATUS GUDANG
 }elseif($aksi == "update_status_gudang"){

 	// PROSES UPDATE
    $db->update_sts_gudang($_POST['id'],$_POST['status']);
 	
 	// REDIRECT
 	header("location:pages/detail_gudang.php?id=".$_POST['id']);

 // PROSES SEARCH PAGE
 }elseif($aksi == "search"){
 	if (strtoupper($_POST['cari']) == "BARANG") {
 		header("location:pages/barang.php");	
 	}elseif (strtoupper($_POST['cari']) == "DASHBOARD") {
 		header("location:pages/dashboard.php");	
 	}elseif (strtoupper($_POST['cari']) == "TAMBAH BARANG") {
 		header("location:pages/tambah_barang.php");	
 	}elseif (strtoupper($_POST['cari']) == "TAMBAH GUDANG") {
 		header("location:pages/tambah_gudang.php");	
 	}elseif (strtoupper($_POST['cari']) == "GUDANG") {
 		header("location:pages/gudang.php");	
 	}else{
 		$message = "Page Tidak Ditemukan";
		echo "<script type='text/javascript'>alert('$message');</script>";
 	}
 }
?>