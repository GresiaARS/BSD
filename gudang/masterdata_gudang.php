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
                 <a style="color: white;" class="nav-link" href="#">Master Data</a>
            </li>
            </ul>
            <div class="collapse navbar-collapse" id="navbarText" >
                <ul class="navbar-nav ms-auto mb-5 mb-lg-0">
                <span  style="color: white; margin-right:7px;" class="navbar-text">Hello, Gudang!</span>
                <a class="btn btn-danger" href="../logout.php">Logout</a>   
            </div>
         </div>
    </nav>
    
<div style="width: 50% ;border: 2px solid black;border-radius: 5px; margin:10px 20px 0px 400px; padding: 30px;">
       <h5>Master Data
        <a style="float:right; margin-bottom: 10px;" class="btn btn-danger" href="request_gudang.php">REQUEST</a></h5>
      <table class="table table-striped table-bordered table-hover" border="">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Raw Material</th>
                        <th>Quantity Available</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../koneksi.php';
                    $no=1;
                    $data= mysqli_query($koneksi, "select * from masterdata");
                    while ($d=mysqli_fetch_array($data)) {
                        ?>
   
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['raw_materialmd']; ?></td>
                                <td><?php echo $d['qty_md']; ?></td>
                               
                            </tr>
                       <?php  
                        }
                    ?>
                </tbody>
            </table>
</div>

 <div style="background-color: #8B2C28; " class="mt-5 p-4 text-white text-center">
        <p>&copy 2022 RYP x Ensyse Laboratory</p>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>