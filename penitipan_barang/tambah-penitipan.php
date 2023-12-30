<?php include 'header.php'?>

		<!-- content -->
		<div class="content">
			
			<div class="container">
				
				<div class="box">

					<div class="box-header">
						Tambah Pengguna
					</div>

					<div class="box-body">

						<form action="" method="POST">

							<div class="form-group">
								<label>Nama Pemilik</label>
								<input type="text" name="nama" placeholder="Nama Pemilik" class="input-control" required pattern="[A-Za-z\s]+" title="Hanya huruf yang diperbolehkan">
							</div>
							<div class="form-group">
								<label>Nama Barang</label>
								<input type="text" name="nama_barang" placeholder="Nama Barang" class="input-control" required >
							</div>
							<div class="form-group">
								<label>Harga</label>
								<select name="harga" class="input-control" required>
									<option value="">Pilih</option>
									<option value="1 hari 15000">1 hari 15000</option>
									<option value="2 hari 30000">2 hari 30000</option>
									<option value="3 hari 45000">3 hari 45000</option>
									<option value="4 hari 60000">4 hari 60000</option>
									<option value="5 hari 75000">5 hari 75000</option>
									<option value="6 hari 90000">6 hari 90000</option>
									<option value="7 hari 105000">7 hari 105000</option>
								</select>
							</div>
							<div class="form-group">
								<label>No.Telphone/WA</label>
								<input type="text" name="no_tlp" placeholder="No.Telphone/WA" class="input-control" required pattern="\d*" title="Hanya angka yang diperbolehkan" maxlength="13">
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

							$simpan = mysqli_query($conn,"INSERT INTO penitipan VALUES (
								null,
								'".$nama."',
								'".$nama_barang."',
								'".$harga."',
								'".$no_tlp."',
								null,
								null
						)");

							if($simpan){
								echo '<div class = "alert alert-success">Simpan Berhasil</div>';
							}else{
								echo 'gagal simpan'.mysqli_eror($conn);
							}

						}

						?>
	
					</div>
			
				</div>

			</div>

		</div>

<?php include 'footer.php'?>