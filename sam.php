<link rel="stylesheet" href="./styleee.css">
<link rel="stylesheet" href="./bootstrap-5.2.2-dist/css/bootstrap.min.css">
<style>
    body{
        background-image: url(./red-black-brush-stroke-banner-background-perfect-canva.jpg);
        background-size: cover;
    }
    </style>
<div class="container mt-5">
    
    <div class="row d-flex justify-content-center">
        
        <div class="col-md-7">
            
            <div class="card p-3 py-4">
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                <div class="text-center">
                    <img src="./red.png" width="150" class="rounded-circle">
                </div>
                
                <div class="text-center mt-3">
                    <span class="bg-secondary p-1 px-4 rounded text-white">CONTRACTOR</span><br>
                    <?php
                    include 'daba.php';

                    isset($_GET['id']);
                    $id=$_GET['id'];
                    $result = mysqli_query($con,"select * from conreg where id='$id'");?>
        
                    <?php
                     while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                    {
                    ?>
                    
                    <h2 class="card-title mt1 text-capitalize"><?php echo $row['name'];?></h2><br>
                    <h5 class="card-title mt1 text-capitalize"><?php echo 'buildings: ' ?><?php echo $row['buildings'];?></h5>
                    <h5 class="card-title mt1 text-capitalize"><?php echo 'experience: ' ?><?php echo $row['experience'];?></h5>
                    <h5 class="card-title mt1 text-capitalize"><?php echo 'complete: ' ?><?php echo $row['complete'];?></h5>
                    <h5 class="card-title mt1 text-capitalize"><?php echo 'contact: ' ?><?php echo $row['contact'];?></h5>
                    <h5 class="card-title mt1 text-capitalize"><?php echo 'email: ' ?><?php echo $row['email'];?></h5>
                    

                    
                    <span></span>
                    
                    <div class="px-4 mt-2">
                        <p class=pro>HI iam a CONTRACTOR <?php echo $row['name']; ?> I have a experience in this feild <?php echo $row['experience'];?>years more come and contact me I will complete you dreams fullfill.  </p>
                    
                    </div>
                    <?php
                    }
                    ?>
                     <ul class="social-list">
                        <li><i class="fa fa-facebook"></i></li>
                        <li><i class="fa fa-dribbble"></i></li>
                        <li><i class="fa fa-instagram"></i></li>
                        <li><i class="fa fa-linkedin"></i></li>
                        <li><i class="fa fa-google"></i></li>
                    </ul>
                    
                    <div class="buttons">
                        
                        <button class="btn btn-outline-primary px-4">Message</button>
                        <!-- <button class="btn btn-primary px-4 ms-3">Contact</button> -->
                    </div>
                </div>
                    
                </div>
                
               
                
                
            </div>
            
        </div>
        
    </div>
    
</div>