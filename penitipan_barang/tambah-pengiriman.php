<?php include 'header.php'?>

		<!-- content -->
		<div class="content">
			
			<div class="container">
				
				<div class="box">

					<div class="box-header">
						Tambah Pengiriman
					</div>

					<div class="box-body">

						<form action="" method="POST">

							<div class="form-group">
								<label>Nama Lengkap</label>
								<input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" required pattern="[A-Za-z\s]+" title="Hanya huruf yang diperbolehkan">
							</div>
							<div class="form-group">
								<label>Alamat Lengkap</label>
								<input type="text" name="alamat" placeholder="Alamat Lengkap" class="input-control" required >
							</div>
							<div class="form-group">
								<label>Metode Pengiriman</label>
								<select name="metode_pengiriman" class="input-control" required>
									<option value="">Pilih</option>
									<option value="J&T">J&T</option>
									<option value="J&E Expres">J&E Expres</option>
									<option value="SPX">SPX</option>
								</select>
							</div>
							<div class="form-group">
								<label>No.Telphone/WA</label>
								<input type="text" name="no_tlp" placeholder="No.Telphone/WA" class="input-control" required pattern="\d*" title="Hanya angka yang diperbolehkan" maxlength="13">
							</div>

							<button type="button" class="btn" onclick="window.location = 'pengiriman.php'">Kembali</button>
							<input type="submit" name="submit" value="Simpan" class="btn btn-blue">

						</form>

						<?php 

						if(isset($_POST['submit'])){

							$nama = ucwords($_POST['nama']);
							$alamat = ucwords($_POST['alamat']);
							$metode_pengiriman = $_POST['metode_pengiriman'];
							$no_tlp = $_POST['no_tlp'];

							$simpan = mysqli_query($conn,"INSERT INTO pengiriman VALUES (
								null,
								'".$nama."',
								'".$alamat."',
								'".$metode_pengiriman."',
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