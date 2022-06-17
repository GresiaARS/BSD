<?php 
	
	//koneksi database
	include '../koneksi.php';


	//menangkap data id yang dikirim dari url

	$id_material = $_POST['id_material'];
	$id_produk = $_POST['id_produk'];
	$material = $_POST['material'];
	$qty = $_POST['qty'];
	$qty_md = $_POST['qty_md'];

	
	$sisa = $qty_md - $qty;

	//menghapus data dari database
	$data = mysqli_query($koneksi, "delete from produksi where id_material='$id_material'");

	$data2 = mysqli_query($koneksi, "UPDATE  masterdata set qty_md = '$sisa' WHERE id_masdata='$id_produk'");

	echo "<script>alert('Transaksi berhasil'); window.location = 'home_gudang.php'</script>";
	
 ?>

