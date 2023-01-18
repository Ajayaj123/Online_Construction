<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin login</title>
  <link rel="stylesheet" href="./admin.css">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&family=Montserrat:wght@400;500;600&display=swap"
    rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="./bootstrap-5.2.2-dist/css/bootstrap.min.css">
</head>

<body>
   <!-- - navbar -->
   <nav class="navbar navbar-expand-lg navigation p-3 bg">
    <div class="container-fluid">
      <a class="navbar-brand" id="active" href="#">VEBBOX CONSTRUCTIONS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" id="active" aria-current="page" href="./index1.html">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="active" href="#">SERVICES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="active" href="#">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="active" href="#">LATEST PROJECTS</a>
          </li>


          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="active" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              LOGINS
            </a>
            <ul class="dropdown-menu" style="background-color: #6d111175;"> -->
              <!-- <li><a class="dropdown-item" id="activee" href="./customer.html">CUSTOMER LOGIN</a></li> -->
              <!-- <li><a class="dropdown-item" id="activee" href="./suppliers.html">SUPLLIERS LOGIN</a></li> -->
              <!-- <li><a class="dropdown-item"id="activee" href="./">CONTRACTOR LOGIN</a></li> -->
            <!-- </ul>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" id="active" href="#">CONTACT</a>
          </li>

          <li class="nav-item">
            <a class="nav-link"id="active" href="./admin.html">ADMIN</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>


  <!-- login form -->
  <form action="admin.php" method="POST">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-lg-12">
        <div data-aos="flip-down">
          <div class="vid-container">
              <div class="box">
                <h1>ADMIN LOGIN</h1>
                <input type="text"style="font-family: 'montserrat';" id="user1" placeholder="Username" name="name"/>
                <input type="password"style="font-family: 'montserrat';" id="user2" placeholder="Password" name="pass"/>
                <button style="font-family: 'montserrat';" type="submit" name="admin"> Login</button>

                

                <form>
              </div>
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
if(isset($_POST['admin']))
{
  echo "hi";
  if(($_POST['name']=="admin")&&($_POST['pass']=="admin123"))
  {
     echo "<script>alert('login successfully');</script>";
    echo '<script>window.location.href="adminview.php";</script>;';

  }
}
?>