<?php
session_start();
if (isset($_SESSION['id'])) {
  header('Location:halaman_menu_utama.php');
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>login</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/bootstrap.min.css"> 

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Poppins', sans-serif;
        }
        .row{
            
            background: white ;
            border-radius: 30px;
            box-shadow: 12px 12px 22px gray;
            padding: 10;
        }
        img{
            border-radius: 30px;
        }
        .btn1{
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: black;
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }
        .btn1:hover{
            background-color: white;
            border: 1px solid;
            color: black;
        }
    </style>
</head>

<body background="images/studio copy.jpg">
    <section class = "form my-5 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="images/model.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-3 px-3">
                    <h1 class="font-weight-bold py-4">AnovA <span style="color: rgb(43, 135, 255);">.studio</span></h1>
                    <h4>Sign into your account</h4>
                    <form name="loginForm">
                        <!-- masukin email -->
                        <div class="from-row">
                            <div class="col-lg-7">
                                <label for="email">Email address</label>
                                <input type="text" class="form-control" id="email" placeholder="Email address" name="email">
                            </div>
                        </div>
                        <!-- masukin password -->
                        <div class="from-row">
                            <div class="col-lg-7">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                        </div>
                        </div>
                        <!-- button log in -->
                        <div class="from-row">
                            <div class="col-lg-7">
                                <button type="button" class="btn1" id="btn_login">Login</button>
                            </div>
                        </div>
                        <!-- masuk register -->
                        <p>Don't have an account? 
                            <a href="halaman_register.php">register here</a></p>     
                    </form>
                </div>
            </div>
        </div>
    </section>    
    <div class="row2">
        <div class="col-md-12 text-center ">
           <p class="font-weight-bold text-white my-2">@Copyright by 18111023_AriqNovriansaAbrori_TIFRP18CIDB</p>
        </div>
</body>
<script language="javascript" src="js/bootstrap.bundle.min.js"></script>

</html>