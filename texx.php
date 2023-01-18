<div class="col-md-12">
<br><br>
<hr style="border-bottom:1px solid grey"></hr>
</div>
<style>
  .pro
        {
          text-align: center;
          background-image: url(./red-black-brush-stroke-banner-background-perfect-canva.jpg);
          background-size: cover;
          color: white;
          border-radius: 10px;
        }
  .img
        { 
          height: 300px;
          width: 300px;
        }
</style>
<?php
include 'daba.php';

isset($_GET['id']);
$id=$_GET['id'];
$result = mysqli_query($con,"select * from conreg where id='$id'");?>
        <div class="container">
          <div class="row">
        <?php
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
            ?>
                <div class="col-lg-6">
                <p>RAVI</p>
                </div>
                <div class="col-lg-6">
                <p>RAVI</p>
                </div>
              </div>
            </div>
        <?php
         }
         ?>   










body{
        background-image: url(./red-black-brush-stroke-banner-background-perfect-canva.jpg);
        background-size: cover;
    }