 <?php
 session_start();
    include '../header.php'
 ?>
   <div class="col-md-4 mx-auto my-2">
    <img src="../images/loginimage.jpg" alt="" class="img-fluid ">
   </div>
    <div class="card col-md-5 mx-auto">
           <?php
            if(isset($_SESSION['success'])){ ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Successful!</strong> <?=$_SESSION['success']?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
         <?php   }
        ?>
        <div class="card-header">
            Login
        </div>
        <div class="card-body">
            <form action="../../controllers/loginValidate.php" method="POST">
              
                <label for="">Email</label>
                <input type="email" class="form-control my-2" name="email">
                <?php
            if(isset($_SESSION['email_err'])){ ?>
                <p class="text-danger"><?=$_SESSION['email_err']?></p>
            <?php } ?>
                <label for="">Password</label>
                <input type="password" class="form-control my-2" name="password">
            <?php
             if(isset($_SESSION['password_err'])){ ?>
                <p class="text-danger"><?=$_SESSION['password_err']?></p>
            <?php } ?>
                <button class="btn btn-primary w-100 my-2" name="loginBtn">Login</button>
                <a href="./signup.php" class="btn btn-success w-100">Register</a>
            </form>
        </div>
    </div>
    

<?php

            session_unset();

?>


