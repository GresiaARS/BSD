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

  <div style="width: 50% ;border: 2px solid black;border-radius: 5px; margin:70px 70px 70px 400px; padding: 30px;">
     <form name="formD" class="col-12 text-dark text-center" action="gudang_insert.php" method="post">
            <div>
              <center><h3><b>Request to buy Material</b><h3></center>
            </div>


               <div class="form-group">
                <label style="float:left" class="form-group">Material</label><br>

                <select required style="width:702px;height:40px; border-color: #CFD4D9; border-radius: 3px;"  
                id="raw_material" name="raw_material" onchange="produk()">
                    <option value=" ">Select</option>
                  <option value="4">Corong</option>
                    <option value="1">Bak</option>
                    <option value="3">Tungkai</option>
                    <option value="5">Roda</option>
                    <option value="2">Penyerok</option>
                </select>
            <label style="float:left" class="form-group">ID Product</label><br>

           <input readonly style=" width:702px;height:40px; border-color: #CFD4D9; border-radius: 3px;"type="text" id="id_produk" name="id_produk" >

           <script type="text/javascript">
               function produk() {
                   var data = document.getElementById("raw_material").value;
                   document.getElementById("id_produk").value=data;
               }
           </script>
       </div>

            <div style="margin-top: 25px;" >
              <label style="float:left;"><b>Quantity</b></label>
                <input required class="form-control"required type="number" id="qty" name="qty">
            </div>
            <div>    
                <button style="background-color: #8B2C28; color: white; margin:25px 0px 0px 640px;" class="btn btn" type="submit" value="Submit">Request</button> 
      
            </div>

        </form>
    </div>

 <div style="background-color: #8B2C28; " class="mt-5 p-4 text-white text-center">
        <p>&copy 2022 RYP x Ensyse Laboratory</p>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>