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
<div class="container-fluid">
  <div class="form-group row">
    <div class="col-md-12">
      <hr>
      <label class="col-form-label col-md-12"><h2><i class="fas fa-home"></i> Dasboard</h2></label>
      <hr>
    </div>
    <div class="col-md-3">
      <div class="card bg-secondary text-white">
        <div class="card-header">
          <label class="col-form-label col-md-12">Jumlah Barang Yang Masuk</label>
        </div>
        <div class="card-body">
          <label class="col-form-label col-md-12"><h3>30</h3></label>
        </div>
        <div class="card-footer">
          <a class="btn btn-outline-light btn-sm col-md-12"><i class="fas fa-arrow-right"></i> More Info</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-danger text-white">
        <div class="card-header">
          <label class="col-form-label col-md-12">Jumlah Barang Yang Di Kembalikan</label>
        </div>
        <div class="card-body">
          <label class="col-form-label col-md-12"><h3>30</h3></label>
        </div>
        <div class="card-footer">
          <a class="btn btn-outline-light btn-sm col-md-12"><i class="fas fa-arrow-right"></i> More Info</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-warning">
        <div class="card-header">
          <label class="col-form-label col-md-12">Jumlah Barang Dalam Pengiriman</label>
        </div>
        <div class="card-body">
          <label class="col-form-label col-md-12"><h3>30</h3></label>
        </div>
        <div class="card-footer">
          <a class="btn btn-outline-light btn-sm col-md-12"><i class="fas fa-arrow-right"></i> More Info</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-success text-white">
        <div class="card-header">
          <label class="col-form-label col-md-12">Jumlah Barang Dalam Pengiriman</label>
        </div>
        <div class="card-body">
          <label class="col-form-label col-md-12"><h3>30</h3></label>
        </div>
        <div class="card-footer">
          <a class="btn btn-outline-light btn-sm col-md-12"><i class="fas fa-arrow-right"></i> More Info</a>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <br>
      <div class="card">
        <div class="card-header text-left">
          <i class="fas fa-map-marker-alt"></i> Peta Sebaran GudangKu
        </div>
        <div class="card-body">
         <div id="gudang_maps" style="width:100%;height:500px;"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<!-- Leaflet -->
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
<script type="text/javascript">
    
//  Latitude, Longitude
    var map = L.map('gudang_maps').setView([-6.8980319, 107.6352862], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    
//  Icon
    var gudangIcon = L.icon({
        iconUrl: 'img/gudang.png',
        iconSize:     [32, 32], // size of the icon
        popupAnchor:  [0, -15] // point from which the popup should open relative to the iconAnchor
    });
    
    L.marker([-6.8980319, 107.6352862], {icon: gudangIcon}).addTo(map)
        .bindPopup('<b>Gudang</b>');
</script>
</body>
</html>