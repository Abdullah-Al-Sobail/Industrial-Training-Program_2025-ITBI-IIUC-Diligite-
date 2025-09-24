<?php
   include 'navbar.php';
   include 'env.php';
    $id = $_GET['id'];
    // echo $id;
    $querry = "SELECT name, email FROM posts WHERE id='$id'";
    $info = mysqli_query($con,$querry);
    $fetchInfo = mysqli_fetch_assoc($info);
    // var_dump($fetchInfo); 
    
   ?>

   <div class="card col-md-6 mx-auto">
    <div class="card-header">
        User Info
    </div>
    <div class="card-body">
        User  Name : <span class="badge bg-danger"><?=$fetchInfo['name']?> </span><br>
        User  Email : <span class="text-success"><?=$fetchInfo['email']?></span>
    </div>
   </div>
