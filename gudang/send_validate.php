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
         <div style="margin-left: 30px; margin-right: 30px;" class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
                 <a style="color: white;" class="nav-link" href="home_gudang.php">Home <span class="sr-only"></span></a>
             </li>
             <li class="nav-item">
                 <a style="color: white;" class="nav-link" href="masterdata_gudang.php">Master Data</a>
            </li>
            </ul>
            <div class="collapse navbar-collapse" id="navbarText" >
                <ul class="navbar-nav ms-auto mb-5 mb-lg-0">
                <span  style="color: white; margin-right:7px;" class="navbar-text">Hello, Gudang!</span>
                <a class="btn btn-danger" href="../logout.php">Logout</a>   
            </div>
         </div>
    </nav>

    <?php 
	
	include '../koneksi.php';
	$id_produk = $_GET['id_produk'];
	//$id_material = $_GET['id_material'];
	//$id_masterdata = $_POST['id_masterdata'];
	$data = mysqli_query($koneksi, "select * from produksi where id_produk = '$id_produk'");
	$data2 = mysqli_query($koneksi, "select * from masterdata where id_masdata = '$id_produk'");
	$da = mysqli_fetch_array($data2);


	while ($d = mysqli_fetch_array($data)) {
		?>
	<div style="width: 50% ;border: 2px solid black;border-radius: 5px; margin:70px 20px 0px 400px; padding: 30px;">
        <p>Apakah anda yakin untuk memenuhi material request dengan rincian berikut? </p>
		<form id="formD" name="formD"  method="post" action="send_gudang.php"  class="form-inline"  enctype="multipart/form-data">
			<table class="table table-striped table-bordered table-hover" border="">

			<td>Raw Material</td>
			<td>
            <input type="hidden" name="id_material" id="id_material" value="<?php echo $d['id_material']; ?>" readonly>
			<input type="text" name="material" value="<?php echo $d['material']; ?>" readonly>
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
				<a href="home_gudang.php" class="btn btn-danger">Tidak</a> 
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