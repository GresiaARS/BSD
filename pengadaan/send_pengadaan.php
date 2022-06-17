<?php
  include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV BSD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<body>
    <div style="background-color: #8B2C28;" class="p-5  text-white text-center">
        <h1><b>CV BSD</b></h1>
        <p>Production Information System</p>
    </div>


   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 		 <div class="collapse navbar-collapse" id="navbarText">
  		    <ul class="navbar-nav mr-auto">
     		 <li class="nav-item active">
       			 <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
     		 </li>
     		 <li class="nav-item">
       			 <a class="nav-link" href="buy_pengadaan.php">Buy</a>
    	    </li>
    		</ul>
    		<div class="collapse navbar-collapse" id="navbarText" >
    			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
    			<span class="navbar-text">Hello, Pengadaan!</span>
    			<a class="btn btn-danger" href="../logout.php">Logout</a>	
    		</div>
 		 </div>
	</nav>

    <?php 
	
	include '../koneksi.php';
	$id_produk = $_GET['id_produk'];
	//$id_gudang = $_GET['id_gudang'];
	//$id_masterdata = $_POST['id_masterdata'];
	//$data = mysqli_query($koneksi, "select * from gudang where id_gudang = '$id_gudang'");
	$data = mysqli_query($koneksi, "select * from gudang where id_produk = '$id_produk'");
	$data2 = mysqli_query($koneksi, "select * from masterdata where id_masdata = '$id_produk'");
	$da = mysqli_fetch_array($data2);



	while ($d = mysqli_fetch_array($data)) {
		?>
	<div style="width: 50% ;border: 2px solid black;border-radius: 5px; margin:70px 20px 0px 400px; padding: 30px;">
        <p>Apakah anda yakin untuk melakukan pengadaan dengan rincian berikut? </p>
		<form id="formD" name="formD"  method="post" action="pengadaan_insert.php"  class="form-inline"  enctype="multipart/form-data">
			<table class="table table-striped table-bordered table-hover" border="">
		<tr>
			<td>Raw Material</td>
			<td>
            <input type="hidden" name="id_gudang" id="id_gudang" value="<?php echo $d['id_gudang']; ?>" readonly>
			<input type="text" name="raw_material" value="<?php echo $d['raw_material']; ?>" readonly>
					</td>
		</tr>
		<tr>
			<td>ID Produk</td>
			<td>
			<input type="number" name="id_produk" value="<?php echo $d['id_produk']; ?>" readonly>
					</td>
		</tr>
        <tr>
			<td>Quantity</td>
			<td>
				<input type="hidden" name="qty_md" value="<?php echo $da['qty_md']; ?>">
			<input type="number" name="qty" value="<?php echo $d['qty']; ?>" readonly>
					</td>
		</tr>

			</table>
			<div align="center">
				<input type="submit" value="Ya" class="btn btn-success">
				<a href="home_pengadaan.php" class="btn btn-danger">Tidak</a> 
			</div>


		</form>
	</div>
		<?php
	}
?>

 <div style="background-color: #8B2C28; " class="mt-5 p-4 text-white text-center">
        <p>&copy 2022 RYP x Ensyse Laboratory</p>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>