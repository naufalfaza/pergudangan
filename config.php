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
 
	function data_barang(){
		$data = mysql_query("select * from barang");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function detail_barang($id){
		$data = mysql_query("select * from barang where id = '$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function input_barang($nama,$kategori,$qty,$id_gudang,$harga,$status){
		mysql_query("insert into barang  (nama,kategori,qty,id_gudang,harga,status) values('$nama','$kategori','$qty','$id_gudang','$harga','$status')");

	}	
}

?>