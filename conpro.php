<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
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
    <style>
      .card-text
      {
        font-size: larger;
      }
        body
        {
            /* background-image: url("./images/set-tools-with-copy-space.jpg"); */
            background-size: cover;
        }
        .img1
        {
          height: 300px;
          width: 300px;
        }
        .pro
        {
          text-align: center;
          background-image: url(./red-black-brush-stroke-banner-background-perfect-canva.jpg);
          background-size: cover;
          color: white;
          border-radius: 10px;
        }
        .inp
        {
          border: none;
          outline: none;
        }
        #nul
        {
          background-color:red;
        }
        a
        {
          text-decoration: none;
          color: white;
        }
        a:hover{
          color: black;
        }
    </style>
</head>
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
            <!-- <li class="nav-item">
              <a
                class="nav-link active"
                id="active"
                aria-current="page"
                href="./index1.php"
                >HOME</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" id="active" href="#">SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="active" href="#">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="active" href="#">LATEST PROJECTS</a>
            </li> -->

            <!-- <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="active"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                RECORDS
              </a>
              <ul class="dropdown-menu" style="background-color: #6d111175">
                <li>
                  <button class="dropdown-item" id="activee" type="submit" name="ownview"
                    >CUSTOMERS RECORDS</button>
                </li>
                <li>
                  <button class="dropdown-item" id="activee" type="submit" name="supview"
                    >SUPLLIERS RECORDS</button>
                </li>


                <li>
                  <button class="dropdown-item" id="activee" type="submit" name="conview"
                    >CONTRACTORS RECORDS</button>
                </li>
              </ul>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" id="active" href="#">CONTACT</a>
            </li> -->

            <li class="nav-item">
              <a class="nav-link" id="active" href="./ownhome.php">BACK</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" id="active" href="./admin.html">ADMIN</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
<body>
    <!-- - navbar -->
          
    <!-- //records// -->
</body>
<script src="./bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
</html>
<?php
include "daba.php"?>
<div class="container">
     <div class="row"><?php
       $result = mysqli_query($con,"select * from conreg");
         while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
         {

         ?>
         <div class="col-md-3 mt-2">
         <div data-aos="fade-up" data-aos-anchor-placement="center-bottom"><div class="card pro">
            <div class="card-body">
             <h4 class="card-text">CONTRACTOR</h4>
               <img src="./red.png" class="card-img-top"alt="">
                 <h5 class="card-title mt1 text-capitalize"><?php echo $row['name'];?></h5>
                <button class='btn btn-success'><a href="conprofile.php?id=<?php echo $row['id']?>">Profile</a></button>
              </div>
             </div> 
           </div>
         </div>
           <?php
         }
         ?>
     </div>
   </div>
   
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script>
 AOS.init();
</script> 
