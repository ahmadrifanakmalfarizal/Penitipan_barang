<?php include 'header.php'?>

		<!-- content -->
		<div class="content">
			
			<div class="container">
				
				<div class="box">

					<div class="box-header">
						Penitipan
					</div>

					<div class="box-body">

						<a href="tambah-penitipan.php" class="text-green"><i class="fa fa-plus"></i> Tambah</a>

						<form action="">
							<div class="input-group">
								<input type="text" name="key" placeholder="Pencarian">
								<button type="submit"><i class="fa fa-search"></i></button>	
							</div>
						</form>


						
							<table class="tabel">
							<thead>
								<tr>
									<th>NO</th>
									<th>Nama Pemilik</th>
									<th>Nama Barang</th>
									<th>Harga</th>
									<th>No.Telphone/WA</th>
									<th>Waktu</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no =1;

									$where = " WHERE 1=1 ";
									if(isset($_GET['key'])){
										$where .= " AND nama LIKE '%".$_GET['key']."%' ";
									}


									$penitipan = mysqli_query($conn, "SELECT * FROM penitipan $where ORDER BY id DESC");
									if(mysqli_num_rows($penitipan) > 0){
										while ($p = mysqli_fetch_array($penitipan)) {
								 ?>


								<tr>
									<td><?= $no++?></td>
									<td><?=$p['nama']?></td>
									<td><?=$p['nama_barang']?></td>
									<td><?=$p['harga']?></td>
									<td><?=$p['no_tlp']?></td>
									<td><?=$p['created_at']?></td>
									<td>
										<a href="edit-penitipan.php?id=<?= $p['id'] ?>" title="Edite Data" class="text-orange"><i class="fa fa-edit"></i></a> 
										<a href="hapus-penitipan.php?idpenitipan=<?= $p['id'] ?>" onclick="return confirm('Yakin ingin hapus ?')" title="Hapus Data" class="text-red"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
							<?php }}else{ ?>
								<tr>
									<td colspan="7">Data tidak ada</td>
								</tr>	
							<?php } ?>
								</tr>
							</tbody>
						</table>
					</div>
			
				</div>

			</div>

		</div>

<?php include 'footer.php'?>