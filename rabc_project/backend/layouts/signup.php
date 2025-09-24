

<?php
include './index.php';
session_start();

?>
<div class="card col-md-6 mx-auto">
    <div class="card-header">
        Sign Up Form
    </div>
    <div class="card-body">
        <form action="../controller/validateRegistration.php" method="POST" enctype="multipart/form-data">
            <label for="">Name</label><span class="text-danger">*</span>
            <input type="text" class="form-control mb-2" name="name">
            <?php
                if(isset($_SESSION['name_err'])){?>
                <p class="text-danger"><?=$_SESSION['name_err']?></p>
                <?php }
            
            ?>
            <label for="" >Email</label>
            <input type="email" class="form-control mb-2" name="email">
            <label for="">Password</label>
            <input type="password" class="form-control mb-2" name="password">
            <label for="">Confirm Password</label>
            <input type="password" class="form-control mb-2" name="confirm_password">
            <label for="">Profile Image</label>
            <input type="file" class="form-control" name="profile_img">
              <?php
                if(isset($_SESSION['image_err'])){?>
                <p class="text-danger"><?=$_SESSION['image_err']?></p>
                <?php }
            
            ?>
           
            <input type="radio" name="role" class="form-check-input" value="Admin">
            <label for="" class="text-success">Admin</label>
            <input type="radio" name="role" class="form-check-input" value="Editor" >
            <label for="" class="text-primary">Editor</label>
            <input type="radio" name="role" class="form-check-input" value="User">
            <label for="" class="text-danger">User</label>
            <input type="radio" name="role" class="form-check-input" value="Contributor" >
            <label for="" class="text-info">contributor</label>
            <button type="submit" class="btn btn-primary w-100 my-2" name="register_btn">Register</button>
            <a href="" class="btn btn-success w-100">Back To Login</a>
        </form>
    </div>
</div>
<?php
session_unset();
?>