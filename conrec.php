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
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&family=Montserrat:wght@400;500;600&display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Noto+Sans+Mende+Kikakui&family=Ubuntu&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="./script.js" />
  <link rel="stylesheet" href="./bootstrap-5.2.2-dist/css/bootstrap.min.css" />
  <style>
    a {
      color: white;
      text-decoration: none;
    }

    a:hover {
      color: black;
    }

    .pr {
      border: 1px solid black;
      height: 550px;
      background-image: url(./red-black-brush-stroke-banner-background-perfect-canva.jpg);
      background-size: cover;
      border-radius: 5px;
    }

    .par {
      color: white;
      font-size: small;
    }

    .scroller {
      width: 1124px;
      height: 545px;
      overflow-y: scroll;
    }

    .scroller::-webkit-scrollbar {
      display: none;
    }
  </style>
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
            </li>
  <form action="" method="POST">

            <li class="nav-item dropdown">
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
                <a class="nav-link" id="activee" href="./ownrec.php">CUSTOMER RECORDS</a>
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
      </form>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="active" href="#">CONTACT</a>
            </li> -->

          <li class="nav-item">
            <a class="nav-link" id="active" href="./adminview.php">BACK</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- //records// -->
</body>
<script src="./bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>

</html>
<?php
 include "daba.php";?>
<div class="container-fluid">
  <div class="row py-2">
    <div class="col-lg-2 pr">
      <div data-aos="fade-right">
        <div class="py-2">
          <img src="./blue.png" alt="" class="img-fluid">
        </div>
        <p class="par">“If you have trusted contractors or trusted builders that you partner with on a regular basis or
          that your salesperson has a really good relationship with, just ask them to get our phone and talk about what
          it's like to have your product on the job site,” says Beth. “That is something that's going to resonate,
          frankly sometimes even better than a highly produced video, because your audience is going to see, okay this
          is the exact same experience that.”</p>
      </div>
    </div>
    <div class="col-lg-10 scroller">
      <?php
      $result = mysqli_query($con,"select * from conreg");
      echo'<table border="1" class="table table-stripped"><tr>
                      <th>ID</th>
                      <th>NAME</th>
                      <th>CONTACT</th>
                      <th>EMAIL</th>
                      <th>BUILDINGS</th>
                      <th>EXPERIENCE</th>
                      <th>COMPLETE</th>
                      <th>DELETE</th>';
      while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
      {
        echo"<tr>
        <td>".$row['id']."</td>
        <td>".$row['name']."</td>
        <td>".$row['contact']."</td>
        <td>".$row['email']."</td>
        <td>".$row['buildings']."</td>
        <td>".$row['experience']."</td>
        <td>".$row['complete']."</td>
        <td><button class='btn btn-success' onclick='btn()'><a href='conrec.php?id=".$row['id']."'>Delete</a></button></td>";
      }
      
      echo'</tr>';
      echo'</table>';?>
      <?php
      
      if(isset($_GET['id']))
      {
        $id= $_GET['id'];
        $delete=mysqli_query($con,"DELETE FROM `conreg` WHERE `id`='$id'");
        echo '<script>window.location.href="conrec.php";</script>;';
        
        }?>
      <script>
        function btn() {
          var result = confirm('Are you sure?');
          if (result == false) {
            event.preventDefault();
          }
        }
      </script>
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>