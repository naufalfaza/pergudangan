<?php include '../struktur/head.php' ?>
<?php 
	$id = $_GET['id'];
	include '../config.php';
	$db = new config;
	foreach ($db->detail_gudang($id) as $data) { 
?>
<div class="container-fluid">
	<div class="form-group row">
        <div class="col-md-5">
			<div class="card">
				<div class="card-header">
					Mapping Area Gudang
				</div>
				<div class="card-body">
					<div class="col-md-12">
         				<div id="detailgudang_maps" style="width:100%;height:300px;"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-7">
			<div class="card">
				<div class="card-header">
					<div class="form-group row">
						<div class="col-md-10">
							Detail Gudang 
							<?php if($data['status'] == "N"){ ?>
								<span class="badge text-bg-danger"><i class="fas fa-times"></i> Non-Aktif</span>
							<?php }else{ ?>
								<span class="badge text-bg-success"><i class="fas fa-check"></i> Aktif</span>
							<?php } ?>
						</div>
						<div class="col-md-2">
							<a href="gudang.php" class="btn btn-outline-danger btn-sm col-md-12"><i class="fas fa-arrow-left"></i> Kembali</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<form action="../proses.php?aksi=update_gudang" method="post">
						<div class="form-group row">
							<div class="col-md-6">
								<div class="form-group row">
									<label class="col-form-label col-md-4">Nama Gudang</label>
									<div class="col-md-8">
										<input type="hidden" name="id" class="form-control" value="<?php echo $data['id'] ?>" required>
										<input type="text" name="nama" class="form-control" value="<?php echo $data['nama'] ?>" required>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label class="col-form-label col-md-4">Kategori Gudang</label>
									<div class="col-md-8">
										<select class="form-control" id="kategori" name="kategori" required>
											<option></option>
                                            <?php
                                            if ($data['kategori'] == "elektronik") {
                                                $el = "selected"; $ba = ""; $ma = ""; $mi = ""; $pa = "";
                                            } elseif ($data['kategori'] == "baju") {
                                                $el = ""; $ba = "selected"; $ma = ""; $mi = ""; $pa = "";
                                            } elseif ($data['kategori'] == "makanan") {
                                                $el = ""; $ba = ""; $ma = "selected"; $mi = ""; $pa = "";
                                            } elseif ($data['kategori'] == "minuman") {
                                                $el = ""; $ba = ""; $ma = ""; $mi = "selected"; $pa = "";
                                            } else {
                                                $el = ""; $ba = ""; $ma = ""; $mi = ""; $pa = "selected";
                                            }
                                            ?>
											<option value="elektronik" <?= $el ?>>Elektronik</option>
											<option value="baju" <?= $ba ?>>Baju</option>
											<option value="makanan" <?= $ma ?>>Makanan</option>
											<option value="minuman" <?= $mi ?>>Minuman</option>
											<option value="sukucadang" <?= $pa ?>>Part /Suku Cadang</option>
										</select>
									</div>
								</div>
							</div>
                            <div class="col-md-6">
                            	<br>
								<div class="form-group row">
									<label class="col-form-label col-md-4">Longitude</label>
									<div class="col-md-8">
										<input type="text" id="longitude" name="longitude" class="form-control" required value="<?php echo $data['longitude'] ?>" readonly>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<br>
								<div class="form-group row">
									<label class="col-form-label col-md-4">Latitude</label>
									<div class="col-md-8">
                                        <input type="text" id="latitude" name="latitude" class="form-control" required value="<?php echo $data['latitude'] ?>" readonly>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<br>
								<button type="submit" class="btn btn-outline-info btn-sm col-md-12"><i class="fas fa-download"></i> Ubah Data</button>
							</div>
						</div>
					</form>
					<form action="../proses.php?aksi=update_status_gudang" method="post">
						<div class="form-group row">
						<?php if ($data['status'] != "N") {?>
							<div class="col-md-12">
								<br>
								<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
								<input type="hidden" name="status" value="N">
								<button type="submit" class="btn btn-outline-danger btn-sm col-md-12"><i class="fas fa-times"></i> Non-Aktifkan Gudang</button>
							</div>
						<?php }else{ ?>
							<div class="col-md-12">
								<br>
								<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
								<input type="hidden" name="status" value="Y">
								<button type="submit" class="btn btn-outline-success btn-sm col-md-12"><i class="fas fa-check"></i> Aktifkan Gudang</button>
							</div>
						<?php } ?>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<br>
			<div class="card">
				<div class="card-header">
					Data Barang Yang Ada Di Gudang <?php echo $data['nama'] ?>
				</div>
				<div class="card-body">
					<div class="col-md-12">
						<table class="table table-striped table-bordered border-dark">
						  <thead>
						    <tr>
						      <th class="text-center">No</th>
						      <th class="text-center">Nama Barang</th>
						      <th class="text-center">QTY</th>
						      <th class="text-center">#</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php 
								$no = 1;
								foreach ($db->detail_barang_gudang($data['id']) as $result) {
						  	?>
						    <tr>
						      <td class="text-center"><?php echo $no++; ?></td>
						      <td class="text-center"><?php echo $result['nama']; ?></td>
						      <td class="text-center"><?php echo $result['qty']; ?></td>
						      <td class="text-center"><a href="detail_barang.php?id=<?=$result['id']?>" class="btn btn-outline-info btn-sm col-md-6"><i class="fas fa-search"></i> Detail</a></td>
						    </tr>
							<?php } ?>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include '../struktur/foot.php' ?>
<script type="text/javascript">
    // Maps Dashboard
    //  Latitude, Longitude
    var map = L.map('detailgudang_maps').setView([<?php echo $data['latitude'] ?>, <?php echo $data['longitude'] ?>], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    
    //  Icon
    var gudangIcon = L.icon({
        iconUrl: '../img/gudang.png',
        iconSize:     [32, 32], // size of the icon
        popupAnchor:  [0, -15] // point from which the popup should open relative to the iconAnchor
    });
    
    L.marker([<?php echo $data['latitude'] ?>, <?php echo $data['longitude'] ?>], {icon: gudangIcon}).addTo(map)
        .bindPopup('<b>Gudang</b>');
     // get coordinate
    map.on('click', function(e){
        var coord = e.latlng.toString().split(',');
        var lat = coord[0].split('(');
        var lng = coord[1].split(')');
        document.getElementById("longitude").value = lng[0];
        document.getElementById("latitude").value = lat[1];
        L.marker([lat[1], lng[0]], {icon: gudangIcon}).addTo(map).bindPopup('<b>Gudang</b>');
    });
</script> 
<?php } ?>