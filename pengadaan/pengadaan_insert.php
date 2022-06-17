<?php 
	
	//koneksi database
	include '../koneksi.php';


	//menangkap data yang dikirim dari form
	$id_gudang = $_POST['id_gudang'];
	$id_produk = $_POST['id_produk'];
	$raw_material = $_POST['raw_material'];
	$qty = $_POST['qty'];
	$qty_md = $_POST['qty_md'];

	
	$sisa = $qty_md + $qty;
	
	$data = mysqli_query($koneksi, "delete from gudang where id_gudang='$id_gudang'");
	$data2 = mysqli_query($koneksi, "UPDATE  masterdata set qty_md = '$sisa' WHERE id_masdata='$id_produk'");

	header("location:home_pengadaan.php");

?>


