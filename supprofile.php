<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styleee.css">
    <link rel="stylesheet" href="./bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="./script.js" />
    
    
    <style>
    body{
        background-image: url(./images/red-black-brush-stroke-banner-background-perfect-canva.jpg);
        background-size: cover;
    }
    
    </style>
</head>
<body>
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
              <a class="nav-link" id="active" href="./suppro.php">BACK</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" id="active" href="./admin.html">ADMIN</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
<div class="container mt-2">
    
    <div class="row d-flex justify-content-center">
        
        <div class="col-md-7">
            
            <div class="card p-3 py-4">
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                <div class="text-center">
                    <img src="./blue.png" width="150" class="rounded-circle">
                </div>
                
                <div class="text-center mt-2">
                    <span class="bg-secondary p-1 px-4 rounded text-white">SUPPLIERR</span><br>
                    <?php
                    include 'daba.php';
                    isset($_GET['id']);
                    $id=$_GET['id'];
                    $result = mysqli_query($con,"select * from supreg where id='$id'");?>
        
                    <?php
                     while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                    {
                    ?>
                    
                    <h2 class="card-title mt1 text-capitalize"><?php echo $row['name'];?></h2>
                    <h5 class="card-title mt1 text-capitalize"><?php echo 'product: ' ?><?php echo $row['product'];?></h5>
                    <h5 class="card-title mt1 text-capitalize"><?php echo 'cost: ' ?><?php echo $row['cost'];?></h5>
                    <h5 class="card-title mt1 text-capitalize"><?php echo 'discount: ' ?><?php echo $row['discount'];?></h5>
                    <h5 class="card-title mt1 text-capitalize"><?php echo 'contact: ' ?><?php echo $row['contact'];?></h5>
                    <h5 class="card-title mt1 text-capitalize"><?php echo 'email: ' ?><?php echo $row['email'];?></h5>
                    

                    
                    <span></span>
                    
                    <div class="px-4 mt-2">
                        <p class=pro>HI iam a SUPPLIERR <?php echo $row['name']; ?> I have a experience in this feild you want any thing <?php echo $row['product'];?> and anything come and contact me I will complete you dreams fullfill.  </p>
                    
                    </div>
                    <?php
                    }
                    ?>
                    
                    <div class="buttons">
				              <form action="" method="post">
                      
                        <input type="hidden" name="req" value="hi">
                        <button class="btn btn-outline-primary px-4" name="snd" >Request</button>
                        <!-- <button class="btn btn-primary px-4 ms-3">Contact</button> -->
                        <form>
                    </div>
                </div>
                    
                </div>
                
               
                
                
            </div>
            
        </div>
        
    </div>
    
</div>
</body>
</html>
<?php
include "daba.php";
if(isset($_POST['snd'])){
$result = mysqli_query($con,"select * from supreg where id='$id'");
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
$req=$_POST['req'];
$name=$row['name'];
$password=$row['password'];

$insert=mysqli_query($con,"insert into request(req,name,password) values('$req','$name','$password')");
if($insert)
{ 
  echo '<script>alert("Registration Successfull :)")</script>;';
}else
{
  echo '<script>alert("NOT")</script>;';
}
}}?>


