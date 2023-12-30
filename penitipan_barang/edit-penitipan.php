<?php include 'header.php'?>

<?php
	date_default_timezone_set("Asia/Jakarta");
	$penitipan = mysqli_query($conn, "SELECT * FROM penitipan WHERE id = '".$_GET['id']."' ");
	$p        = mysqli_fetch_object($penitipan);
?>

		<!-- content -->
		<div class="content">
			
			<div class="container">
				
				<div class="box">

					<div class="box-header">
						Edite Pengguna
					</div>

					<div class="box-body">

						<form action="" method="POST">

							<div class="form-group">
								<label>Nama Pemilik</label>
								<input type="text" name="nama" placeholder="Nama Pemilik" class="input-control" value="<?= $p->nama?>" required>
							</div>

							<div class="form-group">
								<label>Nama Barang</label>
								<input type="text" name="nama_barang" placeholder="Nama Barang" class="input-control" value="<?= $p->nama_barang?>" required>
							</div>

							<div class="form-group">
								<label>harga</label>
								<select name="harga" class="input-control" required>
									<option value="">Pilih</option>
									<option value="1 hari 15000" <?= ($p->harga == '1 hari 15000')? 'selected':''; ?>>1 hari 15000</option>
									<option value="2 hari 30000"<?= ($p->harga == '2 hari 30000')? 'selected':''; ?>>2 hari 30000</option>
									<option value="3 hari 45000"<?= ($p->harga == '3 hari 45000')? 'selected':''; ?>>3 hari 45000</option>
									<option value="4 hari 60000"<?= ($p->harga == '4 hari 60000')? 'selected':''; ?>>4 hari 60000</option>
									<option value="5 hari 75000"<?= ($p->harga == '5 hari 75000')? 'selected':''; ?>>5 hari 75000</option>
									<option value="6 hari 90000"<?= ($p->harga == '6 hari 90000')? 'selected':''; ?>>6 hari 90000</option>
									<option value="7 hari 105000"<?= ($p->harga == '7 hari 105000')? 'selected':''; ?>>7 hari 105000</option>
								</select>
							</div>
							<div class="form-group">
								<label>No.Telphone/WA</label>
								<input type="text" name="no_tlp" placeholder="No.Telphone/WA" class="input-control" value="<?= $p->no_tlp?>" required>
							</div>

							<button type="button" class="btn" onclick="window.location = 'penitipan.php'">Kembali</button>
							<input type="submit" name="submit" value="Simpan" class="btn btn-blue">

						</form>

						<?php 

						if(isset($_POST['submit'])){

							$nama = ucwords($_POST['nama']);
							$nama_barang = ucwords($_POST['nama_barang']);
							$harga = $_POST['harga'];
							$no_tlp = $_POST['no_tlp'];
							$currdate = date('Y-m-d H:i:s');

							$update = mysqli_query($conn, "UPDATE penitipan SET 
									nama = '".$nama."',
									nama_barang = '".$nama_barang."',
									harga = '".$harga."',
									no_tlp = '".$no_tlp."',
									updated_at = '".$currdate."'
									WHERE id = '".$_GET['id']."'

								");


							if($update){
								echo '<div class = "alert alert-success">Edit Data Berhasil</div>';
							}else{
								echo 'gagal edit'.mysqli_eror($conn);
							}

						}

						?>
	
					</div>
			
				</div>

			</div>

		</div>

<?php include 'footer.php'?>