<?php
  include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
                 <a style="color: white;" class="nav-link" href="home_pengadaan.php">Home <span class="sr-only"></span></a>
             </li>
             <li class="nav-item">
                 <a style="color: white;" class="nav-link" href="#">Buy</a>
            </li>
            </ul>
            <div class="collapse navbar-collapse" id="navbarText" >
                <ul class="navbar-nav ms-auto mb-5 mb-lg-0">
                <span  style="color: white; margin-right:15px;" class="navbar-text">Hello, Pengadaan!</span>
                <a class="btn btn-danger" href="../logout.php">Logout</a>   
            </div>
         </div>
    </nav>



    <div style="width: 50% ;border: 2px solid black;border-radius: 5px; margin:30px 0px 70px 400px; padding: 30px;">
     <form name="formD" class="col-12 text-dark text-center" action="buy_pengadaan.php" method="post">
            <div>
              <h3 style="float:left;">Buy Raw Material<h3><br>
            </div>

           <div class="form-group">
                <label style="float:left" class="form-group">Material</label><br>
                <select required style="width:702px; height:40px; border-color: #CFD4D9; border-radius: 3px;"  id="raw_material" name="raw_material">
                    <option value=" ">Select</option>
                    <option value="Corong">Corong</option>
                    <option value="Bak">Bak</option>
                    <option value="Tungkai">Tungkai</option>
                    <option value="Roda">Roda</option>
                    <option value="Penyerok">Penyerok</option>
                </select>
           </div>
           
            <div class="form-group">
                <label style="float:left" class="form-group">Supplier</label><br>
                <select required style="width:702px;height:40px; border-color: #CFD4D9; border-radius: 3px;"  id="material"onchange="supplier()">
                    <option value=" ">Select</option>
                    <option value="Rp. 13.000">Toko Tani</option>
                    <option value="Rp. 25.000">Toko Bak</option>
                    <option value="Rp. 12.000">Toko Toke</option>
                    <option value="Rp. 27.000">CV Borong</option>
                    <option value="Rp. 12.000">Toko Kita</option>
                </select>
            <label style="float:left" class="form-group">Harga</label><br>
           <input readonly style=" width:702px;height:40px; border-color: #CFD4D9; border-radius: 3px;"type="text" id="harga" name="harga" >

           <script type="text/javascript">
               function supplier() {
                   var data = document.getElementById("material").value;
                   document.getElementById("harga").value=data;
               }
           </script>
       </div>
 
            <div>
                <button class="btn btn" style="background-color: #8B2C28; color: white; margin:25px 0px 0px 617px;" onclick="myalert()">Request</button> 
                <script> 
                  function myalert() { 
                   alert("Request Terkirim "); 
                        } 
                </script> 


           </div>
        </form>
    </div>

 <div style="background-color: #8B2C28; " class="mt-5 p-4 text-white text-center">
        <p>&copy 2022 RYP x Ensyse Laboratory</p>
    </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>