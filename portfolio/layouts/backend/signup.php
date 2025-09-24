<?php
session_start();
include '../header.php';

?>

<div class="row">
    <div class="card col-md-6 mx-auto m-0">
     
        <div class="card-header h2">
            Sign Up
        </div>
    <div class="row">
          <div class="col-md-5">
        <img src="../images/loginimage.jpg" alt="" class="img-fluid">
    </div>
    <div class="col-md-7">
        <form action="../../controllers/signupValidate.php" method="POST" enctype="multipart/form-data">
            <label for="">Name</label><span class="text-danger fw-bold">*</span>
            <input type="text" class="form-control my-2" name="name">
            <?php
                if(isset($_SESSION['name_err'])){?>
                    <p class="text-danger"><?=$_SESSION['name_err']?></p>
                <?php }
            ?>
            <label for="">Email</label><span class="text-danger fw-bold">*</span>
            <input type="email" class="form-control my-2 " name="email">
              <?php
                if(isset($_SESSION['email_err'])){?>
                    <p class="text-danger"><?=$_SESSION['email_err']?></p>
                <?php }
            ?>
            <label for="">Password</label><span class="text-danger fw-bold">*</span>
            <input type="password" class="form-control my-2" name="password">
              <?php
                if(isset($_SESSION['password_err'])){?>
                    <p class="text-danger"><?=$_SESSION['password_err']?></p>
                <?php }
            ?>
            <label for="">Confirm Password</label><span class="text-danger fw-bold">*</span>
            <input type="password" class="form-control my-2 " name="confirm_password">

             <?php
                if(isset($_SESSION['confirm_password_err'])){?>
                    <p class="text-danger"><?=$_SESSION['confirm_password_err']?></p>
                <?php }
            ?>

            <label for="">Profile Image</label>
            <input type="file" class="form-control my-2 " name="profile_image">
              <?php
                if(isset($_SESSION['image_err'])){?>
                    <p class="text-danger"><?=$_SESSION['image_err']?></p>
                <?php }
            ?>
            <label for="">Select role</label><span class="text-danger fw-bold">*</span>
            <input type="radio" class="form-check-input" name="role" value="Admin">
            <label for="">Admin</label>
            <input type="radio" class="form-check-input" name="role" value="Editor">
            <label for="">Editor</label>
            <input type="radio" class="form-check-input" name="role" value="User">
             
            <label for="">User</label>
            <?php
                if(isset($_SESSION['role_err'])){?>
                    <p class="text-danger"><?=$_SESSION['role_err']?></p>
                <?php }
            ?>
            <button class="btn btn-primary w-100 my-2" name="registerBtn">Register</button>
            <a href="" class="btn btn-secondary w-100 my-2">Back to login</a>
        </form>
    </div>
    </div>
  
    
</div>
</div>
<?php
    session_unset();
?>