<?php

	include 'config.php';

	if (isset($_GET['idpenitipan'])){

		$delete = mysqli_query($conn, "DELETE FROM penitipan WHERE id = '".$_GET['idpenitipan']."' ");
		echo "<script>window.location = 'penitipan.php'</script>";

	}
?>