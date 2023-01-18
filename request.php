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
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="./script.js" />
    <script src="./req.js"></script>
</head>


<style>
body{
  margin:0;
  padding:0;
   background-image: url("https://images.unsplash.com/photo-1643656192335-70aaa985d287?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
background-size: cover;
}


.accept, .deny{
  height: 35px;
  width: 80px;
  margin: 10px;
  color: white;
  border:0;
  border-radius: 10px;
  font-size: small;
  font-family: 'Courier New', Courier, monospace;

}
.card-title,.card-text
{
  text-align: center;
  
}
.card-body
{
  background-image: url(./red-black-brush-stroke-banner-background-perfect-canva.jpg);
  background-size: cover;
  border-radius: 10px;
}
a
{
text-decoration: none;
color: white;
}
a:hover{
color: black;
}
.card-pro{
  border-radius: 10px;

}
</style>

<body>
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
              <a class="nav-link" id="active" href="./conhome.php">BACK</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" id="active" href="./admin.html">ADMIN</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
    
</body>
</html>
<div class="container">
<div class="row">
  <?php
  
   if(($_SESSION['name']==$_SESSION['nam1'])and($_SESSION['id1']==$_SESSION['pas1']))
   {
    include 'daba.php';
  $result=mysqli_query($con,"select * from ownreg");
  while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
if(($_SESSION['logg']===$row['password'])and($_SESSION['log']===$row['name'])){
  $_SESSION['idii']=$row['id'];

}}

?>
    <div class="col-md-3 mt-2">
    <div data-aos="fade-up" data-aos-anchor-placement="center-bottom"><div class="card pro">
       <div class="card-body">
        <h4 class="card-text" style="color: white">OWNER</h4>
          <img src="./blue.png" class="card-img-top"alt="">
            <h5 class="card-title mt1 text-capitalize mt-2" style="color: white"><?php echo $_SESSION['log'];?></h5>
            <div id="button-wrapper">
    <form action="" method="POST">
                <!-- <button style="font-family: 'montserrat';" type="submit" name="approved" value="Approved" onclick='dis(this)'> Accept</button> -->
     <button class='btn btn-success accept' input type="submit" name="approved" value="Approve">Accept</button>
     <button class='btn btn-success deny' input type="submit" name="rejected" value="Reject">Deny</button>
  <input type="hidden" value=<?php echo $_SESSION['idii']; ?> name="id" /> 
  
  </form>
  </div>
         </div>
        </div> 
      </div>
    </div>
      <?php
   }else{
    echo 'NO RECORD';
   }
    ?>
</div>
</div>
<?php
include 'daba.php';
if(isset($_POST['approved']))
{
    $idd=$_POST['id'];
    $sql2 = mysqli_query($con,"update ownreg set status='Approved' where id='$idd'");
    $query22= "INSERT into status (id,status) values ('".$_SESSION['idii']."','Approved')";
    $sql3 = mysqli_query($con,$query22);

}
if(isset($_POST['rejected']))
{
    $idd=$_POST['id'];
    $sql41 = mysqli_query($con,"update ownreg set status='Rejected' where id='$idd'");
    $query5= "INSERT into status (id,status) values ('".$_SESSION['idii']."','Rejected')";
    $sql51 = mysqli_query($con,$query5);
   
}
?>
<script>
  function dis(x){
    x.style.display='none';
  }
  </script>