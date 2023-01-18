<div class="container-py-5">
    <div class="row mt-4">
        <?php
        include "daba.php";
        $result = mysqli_query($con,"select * from ownreg");
        while ($row= $result->fetch_array());
        ?>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <img src="./IMG_20221115_223523.png" class="card-img-top" alt="fac">
                <h2 class="card-title">dummy</h2>
                <p class="card-text">
                    dummydata
                </P>
            </div>
        </div>
    </div>
    </div>
</div>