<?php
include ("koneksi.php");
date_default_timezone_set('Asia/Jakarta');

session_start();

$username2 = $_POST['username'];
$password1 = $_POST['password'];
// $password2 = sha1($password1);

$username = mysqli_real_escape_string($koneksi, $username2);
$password = mysqli_real_escape_string($koneksi, $password1);

if (empty($username) && empty($password)) {
    header('location:index.php?error=Username dan Password Kosong!');
} else if (empty($username)) {
    header('location:index.php?error=Username Kosong!');
} else if (empty($password)) {
    header('location:index.php?error=Password Kosong!');
}


$q = mysqli_query($koneksi, "select * from users where username='$username'");
$row = mysqli_fetch_array ($q);

$hash   = mysqli_fetch_assoc($q)['password'];
if (password_verify($password, $hash)) {
    $_SESSION['username'] = $username;
                
    header('Location: index.php');
}

if (mysqli_num_rows($q) == 1) {
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $row['password'];
    $_SESSION['role']    = $row['role'];
    
    if ($_SESSION['role'] == 'produksi'){
        header('location:produksi/home_produksi.php');
    } else if ($_SESSION['role'] == 'gudang'){
        header('location:gudang/home_gudang.php');
    } else if ($_SESSION['role'] == 'marketing'){
        header('location:marketing/home_marketing.php');
    } else if ($_SESSION['role'] == 'pengadaan'){
        header('location:pengadaan/home_pengadaan.php');
    }

    
} else {
    header('location: index.php?error=Anda Belum Terdaftar!');
}
?>