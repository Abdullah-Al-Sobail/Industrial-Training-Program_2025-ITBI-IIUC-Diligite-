<?php
    include 'navbar.php';
    include 'env.php';
    $id = $_GET['id'];
    $querry = "SELECT name,email FROM posts WHERE id='$id'";
    $edit = mysqli_query($con,$querry);
    $fetch = mysqli_fetch_assoc($edit);
?>

<div class="card col-md-6 mx-auto">
    <?php
        if(isset($_SESSION['success'])){?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Succsess!!</strong> <?=$_SESSION['success']?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        <?php }
    ?>
    <div class="card-header">
        Form
    </div>
    <div class="card-body">
    <form action="./updatePost.php" method="GET">
    <label for="">Name</label>
    <input type="text" class="form-control mb-2" name="name" value="<?=$fetch['name']?>">
    <?php
       if(isset($_SESSION['name_err'])){
         echo "<p class='text-danger'>".$_SESSION['name_err']."</p>";
       }
    ?>
    <label for="">Email</label>
    <input type="email" class="form-control mb-2" name="email" value="<?=$fetch['email']?>">
    <input type="hidden" value="<?=$id?>" name="id">
    <button type="submit"  class="btn btn-success w-100" name="updatebtn">Update</button>
    </form>
    </div>
</div>