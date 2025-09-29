<?php
  include 'header.php'; 

?>

<div class="card p-2">
    <div class="card-header h4">
        Add Hero Item
    </div>
   <div class="card-body">
       <?php
        if(isset( $_SESSION['success'])){ ?>
            <div class="alert alert-success">
                <?= $_SESSION['success']?>
                </div>
<?php
        }
?>
    <form action="../../../controllers/heroPostsValidate.php" method="POST" enctype="multipart/form-data">
        <label for="">Hero Text</label>
        <input type="text" class="form-control my-2" name="title">
        <?php
            if(isset($_SESSION['title_err'] )){?>
            <p class="text-danger"><?= $_SESSION['title_err'] ?></p>

        <?php    }
        
        ?>
        <label for="">Hero Descrition</label>
       <textarea name="description" rows="10" class="form-control"></textarea>
        <label for="">Button text</label>
        <input type="text" class="form-control my-2" name="btn_text">
        <label for="">hero Image</label>
        <input type="file" class="form-control my-2" name="hero_image">
        <button class="btn btn-primary w-100" name="update_btn">update</button>
    </form>
   </div>
</div>
                                
<?php
    include './footer.php';
    unset($_SESSION['title_err']);
?>