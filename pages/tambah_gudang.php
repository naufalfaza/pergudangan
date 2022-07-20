<?php include '../struktur/head.php' ?>
<div class="container-fluid">
	<div class="form-group row">
        <div class="col-md-5">
			<div class="card">
				<div class="card-header">
					Mapping Area Gudang
				</div>
				<div class="card-body">
					<div class="col-md-12">
         				<div id="tambahgudang_maps" style="width:100%;height:300px;"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-7">
			<div class="card">
				<div class="card-header">
					<div class="form-group row">
						<div class="col-md-10">
							Tambah Gudang
						</div>
						<div class="col-md-2">
							<a href="gudang.php" class="btn btn-outline-danger btn-sm col-md-12"><i class="fas fa-arrow-left"></i> Kembali</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<form action="../proses.php?aksi=tambah_gudang" method="post">
						<div class="form-group row">
							<div class="col-md-6">
								<div class="form-group row">
									<label class="col-form-label col-md-4">Nama Gudang</label>
									<div class="col-md-8">
										<input type="text" name="nama" class="form-control" required>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label class="col-form-label col-md-4">Kategori Gudang</label>
									<div class="col-md-8">
										<select class="form-control" id="kategori" name="kategori" required>
											<option></option>
											<option value="elektronik">Eletronik</option>
											<option value="baju">Baju</option>
											<option value="makanan">Makanan</option>
											<option value="minuman">Minuman</option>
											<option value="sukucadang">Part /Suku Cadang</option>
										</select>
									</div>
								</div>
							</div>
                            <div class="col-md-6">
                            	<br>
								<div class="form-group row">
									<label class="col-form-label col-md-4">Longitude</label>
									<div class="col-md-8">
										<input type="text" id="longitude" name="longitude" class="form-control" required readonly>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<br>
								<div class="form-group row">
									<label class="col-form-label col-md-4">Latitude</label>
									<div class="col-md-8">
                                        <input type="text" id="latitude" name="latitude" class="form-control" required readonly>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<br>
								<button type="submit" class="btn btn-outline-info btn-sm col-md-12"><i class="fas fa-download"></i> Simpan Data</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include '../struktur/foot.php' ?>