<?php 
	
	//koneksi database
	include '../koneksi.php';


	//menangkap data id yang dikirim dari url
	$id_penjualan = $_GET['id_penjualan'];

	//menghapus data dari database
	mysqli_query($koneksi, "delete from penjualan where id_penjualan='$id_penjualan'");

	//mengalihkan halaman kembali ke index.php
	header("location:penjualan_marketing.php");
 ?>