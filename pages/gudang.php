<?php include '../struktur/head.php' ?>
<div class="container-fluid">
	<div class="form-group row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="form-group row">
						<div class="col-md-10">
							Data Gudang
						</div>
						<div class="col-md-2">
							<a href="tambah_gudang.php" class="btn btn-outline-success btn-sm col-md-12"><i class="fas fa-plus"></i> Tambah</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="col-md-12">
						<table class="table table-striped table-bordered border-dark" width="100%">
						  <thead>
						    <tr>
						      <th class="text-center" width="5%">No</th>
						      <th class="text-center" width="40%">Nama Gudang</th>
                              <th class="text-center" width="30%">Kategori</th>
						      <th class="text-center" width="10%">Status Gudang</th>
						      <th class="text-center" width="25%">#</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php 
								include '../config.php';
								$db = new config();
								$no = 1;
								foreach ($db->data_gudang() as $result) {
						  	?>
						    <tr>
						      <td class="text-center"><?php echo $no++; ?></td>
						      <td class="text-center"><?php echo $result['nama']; ?></td>
                              <td class="text-center"><?php echo $result['kategori']; ?></td>
						      <td class="text-center">
						      	<?php if ($result['status'] == "Y") { ?>
						      		<span class="badge text-bg-success"><i class="fas fa-check"></i> Aktif</span>
						      	<?php }else{ ?>
						      		<span class="badge text-bg-success"><i class="fas fa-times"></i> Non - Aktif</span>
						      	<?php } ?>
						      </td>
						      <td class="text-center"><a href="detail_gudang.php?id=<?=$result['id']?>" class="btn btn-outline-info btn-sm col-md-6"><i class="fas fa-search"></i> Detail</a></td>
						    </tr>
							<?php }?>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include '../struktur/foot.php' ?>