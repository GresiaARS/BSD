<?php
  include '../koneksi.php';

  $id_produk = $_POST['id_produk'];
  $material = $_POST['material'];
  $qty = $_POST['qty'];
  $query = mysqli_query($koneksi,'Select raw_materialmd from masterdata where id_masdata =  '.'"'.$material.'"');
  $data= mysqli_fetch_array($query);

$name = $data['raw_materialmd'];
$data = mysqli_query($koneksi, "insert into produksi values ('', '$id_produk','$name', '$qty')");

echo "<script>alert('Request berhasil dilakukan!'); window.location = 'request_produksi.php'</script>";

?>

