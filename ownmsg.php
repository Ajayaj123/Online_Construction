<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./chatbox.css" />
    <link
      rel="stylesheet"
      href="./bootstrap-5.2.2-dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="./script.js" />
  </head>
  <style>
    body
    {
      background-image: url(./images/electrician-g95bd8c7ed_1920.jpg);
      background-size: cover;
    }
    .sup{
      margin-left: 180px;
      margin-top: 1px;
      font-family: 'Courier New', Courier, monospace;
      font-size: 16px;
      
    }
    .msg{
      margin-top: -30px;
      font-family: 'Courier New', Courier, monospace;
      font-size: 16px;
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
              <a class="nav-link" id="active" href="./conhome.php">BACK</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-9">

        </div>
        <div class="col-sm-3">
          <div class="div-bg">
            <p class="display-6 text-center text-white pt-3" >Group Chat</p>
            <div class="content-bg">
                <div class="mx-2 py-2 space">
                    <div class="scroller text-capitalize msg">
                  <?php
                 include 'daba.php';
            $result = mysqli_query($con,"select * from supmsg");
            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
              if($row['sender']=='supllier'){
                echo "<br>";
                echo 'supllier:-';
                echo "<br>";
                echo $row['message'];
              }
              ?><div class="sup"><?php
              if($row['sender']=='contractor'){
                echo "<br>";
                echo 'contractor:-';
                echo "<br>";
                echo $row['message'];}
              ?></div><?php
              if($row['sender']=='owner'){
                echo "<br>";
                echo 'owner:-';
                echo "<br>";
                echo $row['message'];
              }
              

                }?>
                
              
                </div>
                </div>
            </div>
            <form action="" method="POST">
              <div class="input-box mb-5">
              <input type="hidden" name="sender" value="owner">
                <input type="text" name="message" class="chat-input" autocomplete="off" required="" />
                <button type="sumbit" class="message-btn bg-success" name="send" place>Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<?php
include "daba.php";
if(isset($_POST['send']))
{
    $message=$_POST['message'];
    $sender=$_POST['sender'];

$insert= mysqli_query($con,"insert into supmsg(message,sender) values ('$message','$sender')");
if($insert){
    echo '<script>window.location.href="ownmsg.php";</script>;';
	
}
else{
    echo '<script>alert("Something Went Wrong :(")</script>;';
}
}?>
