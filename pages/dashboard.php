<?php include '../struktur/head.php' ?>
<?php 
  include '../config.php';
  $db = new config();
  $hitung_barang = $db->hitung_barang();
  $hitung_gudang_aktif = $db->hitung_gudang_aktif();
  $hitung_gudang_nonaktif = $db->hitung_gudang_nonaktif();
?>
<div class="container-fluid">
  <div class="form-group row">
    <div class="col-md-12">
      <hr>
      <label class="col-form-label col-md-12"><h2><i class="fas fa-home"></i> Dasboard</h2></label>
      <hr>
    </div>
    <div class="col-md-4">
      <div class="card bg-secondary text-white">
        <div class="card-header">
          <label class="col-form-label col-md-12">Jumlah Barang Yang Masuk</label>
        </div>
        <div class="card-body">
          <label class="col-form-label col-md-12"><h3><?php echo $hitung_barang ?></h3></label>
        </div>
        <div class="card-footer">
          <a href="barang.php" class="btn btn-outline-light btn-sm col-md-12"><i class="fas fa-arrow-right"></i> More Info</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card bg-danger text-white">
        <div class="card-header">
          <label class="col-form-label col-md-12">Jumlah Gudang Yang Non-Aktif</label>
        </div>
        <div class="card-body">
          <label class="col-form-label col-md-12"><h3><?php echo $hitung_gudang_nonaktif ?></h3></label>
        </div>
        <div class="card-footer">
          <a href="gudang.php" class="btn btn-outline-light btn-sm col-md-12"><i class="fas fa-arrow-right"></i> More Info</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card bg-success text-white">
        <div class="card-header">
          <label class="col-form-label col-md-12">Jumlah Gudang Yang Aktif</label>
        </div>
        <div class="card-body">
          <label class="col-form-label col-md-12"><h3><?php echo $hitung_gudang_aktif ?></h3></label>
        </div>
        <div class="card-footer">
          <a href="gudang.php" class="btn btn-outline-light btn-sm col-md-12"><i class="fas fa-arrow-right"></i> More Info</a>
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
<?php include '../struktur/foot.php' ?>



