<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer login</title>
    <link rel="stylesheet" href="./customer.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&family=Montserrat:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Noto+Sans+Mende+Kikakui&family=Ubuntu&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="./script.js" />
    <link
      rel="stylesheet"
      href="./bootstrap-5.2.2-dist/css/bootstrap.min.css"
    />
</head>

<body>
<form action="" method="POST">
    <!-- - navbar -->
    <nav class="navbar navbar-expand-lg navigation p-3 bg">
      <div class="container-fluid">
        <a class="navbar-brand" id="active" href="#">VEBBOX CONSTRUCTIONS</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNavDropdown"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a
                class="nav-link active"
                id="active"
                aria-current="page"
                href="./index1.php"
                >HOME</a
              >
            </li>
            <<li class="nav-item">
              <a class="nav-link" id="active" href="#">SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="active" href="#">ABOUT</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" id="active" href="#">LATEST PROJECTS</a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" id="active" href="#">CUSTOMER LOGIN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="active" href="#">SUPPLIER LOGIN</a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" id="active" href="#">CONTRACTOR LOGIN</a>
            </li> -->
            
            <li class="nav-item">
              <a class="nav-link" id="active" href="#">CONTACT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- - navbar -->
  

<!-- login form -->
    <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-lg-12">
            <div data-aos="flip-down">
                <div class="vid-container">
                    <video class="bgvid" autoplay="autoplay" muted="muted" preload="auto" loop>
                        <!-- <source src="https://mazwai.com/videvo_files/video/free/2015-09/small_watermarked/postcard_from_big_sur_preview.webm" type="video/webm"> -->
                    </video>
                    <div class="inner-container">
                        <video class="bgvid inner" autoplay="autoplay" muted="muted" preload="auto" loop>
                            <!-- <source src="https://mazwai.com/videvo_files/video/free/2015-09/small_watermarked/postcard_from_big_sur_preview.webm?random=1" type="video/webm"> -->
                        </video>
                    <form action="" method="POST">

                        <div class="box">
                            <h1> CUSTOMER LOGIN</h1>
                            <input type="text"style="font-family: 'montserrat';"class="text-capitalize" id="user1" placeholder="Username" name="bt1"/>
                            <input type="password"style="font-family: 'montserrat';" id="user2" placeholder="Password" name="bt2"/>
                            <!-- <input type="submit" value="Login" name="bt3" style="font-family: 'montserrat'"/> -->
                <button style="font-family: 'montserrat';" type="submit" name="bt3"> Login</button>

                            <p>Not a member? <span><a style="color: rgb(236, 146, 12);" href="./index.php">SIGNUP</a></span>  </p>
                        </div>
                    </form>
                    </div>
                </div>
            </div>

            </div>
          </div> 
    </div>
</body>
<script src="./bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
</html>
<?php
    if(isset($_POST['bt3']))
    {
    include "daba.php";
    $sel=mysqli_query($con,"select * from ownreg where name='$_POST[bt1]' and password='$_POST[bt2]'");
    $row =mysqli_num_rows($sel);
    if($row==1)
    {
      $_SESSION['log']=$_POST['bt1'];
      $_SESSION['logg']=$_POST['bt2'];

        echo '<script>alert("LOGIN SUCCESSFULLY")</script>';
        echo '<script>window.location.href="ownhome.php";</script>;';
    }
    else
    {
        echo '<script>alert("PLEASE REGISTER")</script>';
    }
    }

    ?>