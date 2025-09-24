<?php
session_start();
    include_once "./navbar.php";
    include "./env.php";
    $querry = "SELECT * FROM posts";
    $show = mysqli_query($con,$querry );
    
    $posts = mysqli_fetch_all($show,1);
   

    ?>
    <div class="card col-md-6 mx-auto">
        <?php
        if(isset($_SESSION['success'])){?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Succsess!!</strong> <?=$_SESSION['success']?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        <?php }
    ?>

    <?php
        if(isset($_SESSION['delete_success'])){?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Succsess!!</strong> <?=$_SESSION['delete_success']?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        <?php }
    ?>
        <div class="crad-header h3 mx-auto">
            All Post
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                    <tbody>
                        <?php
                            foreach($posts as $key=>$post){?>
                            <tr>
                            <td><?=++$key?></td>
                            <td><?=$post['name']?></td>
                            <td><?=$post['email']?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="./showInfo.php?id=<?=$post['id']?>"class="btn btn-primary btn-sm">Show</a>
                                    <a href="./editPost.php?id=<?=$post['id']?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="./deletePost.php?id=<?=$post['id']?>" class="btn btn-danger btn-sm">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <?php }
                        
                        ?>
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
<?php
    session_unset();

?>