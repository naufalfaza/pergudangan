<!DOCTYPE html>
<html>
<head>
	<title>GudangKu</title>
</head>
<!-- Bootstrap -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- Leaflet -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
<!-- FontAwesome V5 (KIT BY NAUFAL FAZA FADHILAH) INI NGAMBIL DARI ONLINE-->
<script src="https://kit.fontawesome.com/54dc7623fb.js" crossorigin="anonymous"></script>


<body>
<div class="container-fluid">
	<nav class="navbar navbar-expand-lg bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#"><img src="../img/warehouse.png"> GudangKu</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="dashboard.php"><i class="fas fa-home"></i> Dashboard</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="barang.php"><i class="fas fa-database"></i> Barang</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="gudang.php"><i class="fas fa-boxes"></i> Gudang</a>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            <i class="fas fa-exchange"></i> Transaksi
	          </a>
	          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
	            <li><a class="dropdown-item" href="#">Barang Rusak</a></li>
	          </ul>
	        </li>
	      </ul>
	      <form class="d-flex" role="search" action="../proses.php?aksi=search" method="post">
	        <input class="form-control me-2" name="cari" type="search" placeholder="Search" aria-label="Search" style="text-transform:uppercase">
	        <button class="btn btn-outline-success" type="submit">Search</button>
	      </form>
	    </div>
	  </div>
	</nav>
</div>
<br>