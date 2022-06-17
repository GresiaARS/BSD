<?php 
	
	//koneksi database
	include '../koneksi.php';


	//menangkap data id yang dikirim dari url
	$id_mitra = $_GET['id_mitra'];

	//menghapus data dari database
	mysqli_query($koneksi, "delete from kemitraan where id_mitra='$id_mitra'");

	//mengalihkan halaman kembali ke index.php
	header("location:kemitraan_marketing.php");
 ?>