<?php include 'header.php'?>

<?php
	date_default_timezone_set("Asia/Jakarta");
	$pengiriman = mysqli_query($conn, "SELECT * FROM pengiriman WHERE id = '".$_GET['id']."' ");
	$p        = mysqli_fetch_object($pengiriman);
?>

		<!-- content -->
		<div class="content">
			
			<div class="container">
				
				<div class="box">

					<div class="box-header">
						Edite pengiriman
					</div>

					<div class="box-body">

						<form action="" method="POST">

							<div class="form-group">
								<label>Nama Lengkap</label>
								<input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?= $p->nama?>" required>
							</div>

							<div class="form-group">
								<label>Alamat</label>
								<input type="text" name="alamat" placeholder="Alamat" class="input-control" value="<?= $p->alamat?>" required>
							</div>

							<div class="form-group">
								<label>Metode Pengiriman</label>
								<select name="metode_pengiriman" class="input-control" required>
									<option value="">Pilih</option>
									<option value="J&T" <?= ($p->metode_pengiriman == 'J&T')? 'selected':''; ?>>J&T</option>
									<option value="J&E Expres"<?= ($p->metode_pengiriman == 'J&E Expres')? 'selected':''; ?>>J&E Expres</option>
									<option value="SPX"<?= ($p->metode_pengiriman == 'SPX')? 'selected':''; ?>>SPX</option>
								</select>
							</div>
							<div class="form-group">
								<label>No.Telphone/WA</label>
								<input type="text" name="no_tlp" placeholder="No.Telphone/WA" class="input-control" value="<?= $p->no_tlp?>" required>
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
							$currdate = date('Y-m-d H:i:s');

							$update = mysqli_query($conn, "UPDATE pengiriman SET 
									nama = '".$nama."',
									alamat = '".$alamat."',
									metode_pengiriman = '".$metode_pengiriman."',
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