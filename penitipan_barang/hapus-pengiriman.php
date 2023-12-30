<?php

	include 'config.php';

	if (isset($_GET['idpengiriman'])){

		$delete = mysqli_query($conn, "DELETE FROM pengiriman WHERE id = '".$_GET['idpengiriman']."' ");
		echo "<script>window.location = 'pengiriman.php'</script>";

	}
?>