<?php include '../struktur/head.php' ?>
<div class="container-fluid">
	<div class="form-group row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="form-group row">
						<div class="col-md-10">
							Data Barang
						</div>
						<div class="col-md-2">
							<a href="tambah_barang.php" class="btn btn-outline-success btn-sm col-md-12"><i class="fas fa-plus"></i> Tambah</a>
						</div>
					</div>
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
								include '../config.php';
								$db = new config();
								$no = 1;
								foreach ($db->data_barang() as $result) {
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