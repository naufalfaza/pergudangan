<?php 
class config{
 
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "gudangku";
 
	function __construct(){
		mysql_connect($this->host, $this->uname, $this->pass);
		mysql_select_db($this->db);
	}

	// MENGHITUNG DATA BARANG SECARA KESELURUHAN 
	function hitung_barang(){
		$result =  mysql_query("select sum(qty) as total from barang");
		$data = mysql_fetch_assoc($result);
		return $data['total'];
	}

	// MENGHITUNG DATA GUDANG YANG AKTIF 
	function hitung_gudang_aktif(){
		$result =  mysql_query("select count(*) as total from gudang where status='Y'");
		$data = mysql_fetch_assoc($result);
		return $data['total'];
	}

	// MENGHITUNG DATA GUDANG YANG AKTIF 
	function hitung_gudang_nonaktif(){
		$result =  mysql_query("select count(*) as total from gudang where status='N'");
		$data = mysql_fetch_assoc($result);
		return $data['total'];
	}

 	// MENAPILKAN DATA BARANG SECARA KESELURUHAN 
	function data_barang(){
		$data = mysql_query("select * from barang");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	// MENAPILKAN DATA GUDANG SECARA KESELURUHAN 
	function data_gudang(){
		$data = mysql_query("select * from gudang");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	// MENAPILKAN DATA GUDANG AKTIF SECARA KESELURUHAN 
	function data_gudang_aktif(){
		$data = mysql_query("select * from gudang where status='Y'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	// MENAMPILKAN DETAIL BARANG
	function detail_barang($id){
		$data = mysql_query("select * from barang where id = '$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	// MENAMPILKAN DETAIL GUDANG
	function detail_gudang($id){
		$data = mysql_query("select * from gudang where id = '$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	// MENAMPILKAN DETAIL BARANG YANG ADA DIGUDANG
	function detail_barang_gudang($id){
		$data = mysql_query("select * from barang where id_gudang = '$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	// PROSES PENGINPUTAN BARANG
	function input_barang($nama,$kategori,$qty,$id_gudang,$harga,$status){
		mysql_query("insert into barang  (nama,kategori,qty,id_gudang,harga,status) values('$nama','$kategori','$qty','$id_gudang','$harga','$status')");
	}

	function input_gudang($nama, $ktgr, $long, $lat, $status){
		mysql_query("insert into gudang (nama,kategori,longitude,latitude,status) values('$nama','$ktgr','$long','$lat','$status')");
	}	

	// PROSES UPDATE BARANG
	function update_barang($id,$nama,$kategori,$qty,$id_gudang,$harga){
		mysql_query("update barang set  nama = '$nama',kategori = '$kategori', qty = '$qty',id_gudang = '$id_gudang',harga = '$harga' where id = '$id'");
	}

	// PROSES UPDATE GUDANG
	function update_gudang($id,$nama, $ktgr, $long, $lat){
		mysql_query("update gudang set nama = '$nama',kategori = '$ktgr', longitude = '$long',latitude = '$lat' where id = '$id'");
	}

	// PROSES UPDATE STATUS GUDANG
	function update_sts_gudang($id,$status){
		mysql_query("update gudang set status = '$status' where id = '$id'");
	}	

	
    
    
}

?>