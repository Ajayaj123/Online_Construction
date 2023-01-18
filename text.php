<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""  method="POST">
        <label>NAME</label><br><br>
        <input type="text">
        <input type="submit">
        <form>
</body>
</html>
<?php
 include "daba.php";
 $result = mysqli_query($con,"select * from conreg");
 if(isset($_GET['id']))
      {
        echo $_GET['id'];
        $id= $_GET['id'];
        $delete=mysqli_query($con,"DELETE FROM `conreg` WHERE `id`='$id'");
        
        }?>