<?php include '../struktur/head.php' ?>
<?php 
	$id = $_GET['id'];
	include '../config.php';
	$db = new config;
	foreach ($db->detail_barang($id) as $data) {

?>
<div class="container-fluid">
	<div class="form-group row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<div class="form-group row">
						<div class="col-md-10">
							Detail Barang
						</div>
						<div class="col-md-2">
							<a href="barang.php" class="btn btn-outline-danger btn-sm col-md-12"><i class="fas fa-arrow-left"></i> Kembali</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<form action="../proses.php?aksi=update_barang" method="post">
						<div class="form-group row">
							<div class="col-md-5">
								<div class="form-group row">
									<label class="col-form-label col-md-4">Nama Barang</label>
									<div class="col-md-8">
										<input type="hidden" name="id" class="form-control" value="<?php echo $data['id']?>" required>
										<input type="text" name="nama" class="form-control" value="<?php echo $data['nama']?>" required>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group row">
									<label class="col-form-label col-md-4">Kategori Barang</label>
									<div class="col-md-8">
										<select class="form-control" id="kategori" name="kategori" required>
											<option></option>
											<option value="elektronik">Eletronik</option>
											<option value="baju">Baju</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group row">
									<label class="col-form-label col-md-4">QTY</label>
									<div class="col-md-8">
										<input type="text" name="qty" class="form-control" value="<?php echo $data['qty']?>" required>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<br>
								<div class="form-group row">
									<label class="col-form-label col-md-4">Gudang</label>
									<div class="col-md-8">
										<select class="form-control" name="id_gudang">
											<option></option>
											<?php 
											foreach ($db->detail_gudang($data['id_gudang']) as $result) { 
											?>
												<option value="<?php echo $result['id'];?>" selected><?php echo $result['nama'];?></option>
											<?php } ?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-7">
								<br>
								<div class="form-group row">
									<label class="col-form-label col-md-2">Harga</label>
									<div class="col-md-10">
										<input type="text" name="harga" class="form-control" value="<?php echo $data['harga']?>" required>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<br>
								<button type="submit" class="btn btn-outline-info btn-sm col-md-12"><i class="fas fa-download"></i> Ubah Data</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<?php include '../struktur/foot.php' ?>