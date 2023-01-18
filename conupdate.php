<?php
include 'daba.php';
extract($_REQUEST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./signup.css">
    <link rel="stylesheet" href="./signup.js">
	<link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="./script.js" />
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
            <li class="nav-item">
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
            <!-- <li class="nav-item">
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
                LOGINS
              </a>
              <ul class="dropdown-menu" style="background-color: #6d111175">
                <li>
                  <a class="dropdown-item" id="activee" href="./customer.html"
                    >CUSTOMERS LOGIN</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" id="activee" href="./suppliers.html"
                    >SUPLLIERS LOGIN</a
                  >
                </li> -->

                <!-- <li>
                  <a class="dropdown-item" id="activee" href="./"
                    >CONTRACTORS LOGIN</a
                  >
                </li>
              </ul>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" id="active" href="#">CONTACT</a>
            </li>

            <!-- <li class="nav-item">
              <a class="nav-link" id="active" href="./admin.html">ADMIN</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
<div class="main-w3layouts wrapper bg">
		<h1>CONTRACTOR REGISTRATION</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="" method="post">
					<input class="text email" type="text" name="name" placeholder="Name" required="" value="<?=$row['name']?>" >
					<input class="text email" type="text" name="contact" placeholder="Contact" required="" >
					<input class="text email" type="email" name="email" placeholder="Email" required="" >
					<input class="text email" type="password" name="password" placeholder="Password" required="" >
					<input class="text email" type="text" name="buildings" placeholder="Types of Bulidings" required="" >
					<input class="text email" type="text" name="experience" placeholder="Experiance" required="" >
					<input class="text email" type="text" name="complete" placeholder="Complete Buildings" required="" >
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
          <!-- <input type="submit" name="bt1"> -->
					<input type="submit" value="SIGNUP" name="own2">
				</form>
			</div>
		</div>
    <!-- //OWNER// -->
    <?php
include "daba.php";
$query="select * fom conreg id=$id";
$result=mysqli_query($con,$query);
if(mysqli_num_row($result)>0){
  while($row=mysqli_fetch_assoc($result))


if(isset($_POST['own2']))
{
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $buildings=$_POST['buildings'];
    $experience=$_POST['experience'];
    $complete=$_POST['complete'];

$insert= mysqli_query($con,"insert into conreg(name,contact,email,password,buildings,experience,complete) values ('$name','$contact','$email','$password','$buildings','$experience','$complete')");
if($insert){
    echo '<script>alert("Registration Successfull :)")</script>;';
    echo '<script>window.location.href="contractor.php";</script>;';
    
}
else{
    echo '<script>alert("Something Went Wrong :(")</script>;';
}
}}
?>

<!-- //END// -->

</body>
</html>
