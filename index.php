<?php
include ("koneksi.php");
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

    <div style="width: 50% ;border: 2px solid black;border-radius: 5px; margin:70px 70px 70px 400px; padding: 30px;">
     <form class="col-12 text-black" action="ceklogin.php" method="post">
    <h2><b>LOGIN</b></h2>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required="" id="username" autocomplete="off" />
            </div>
            <div style="margin-top: 25px;" class="form-group">
              <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="" id="password" autocomplete="off" />
            </div>
            <div>
                <button style="background-color: #8B2C28; color: white; margin:25px 0px 0px 640px;" class="btn" type="submit" value="Log in" />Login</button> 
            </div>
        </form>
    </div>
 
    <div style="background-color: #8B2C28; " class="mt-5 p-4 text-white text-center">
        <p>&copy 2022 RYP x Ensyse Laboratory</p>
    </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>


