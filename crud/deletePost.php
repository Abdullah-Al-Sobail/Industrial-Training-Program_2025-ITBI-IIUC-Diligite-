<?php
session_start();
    include 'env.php';
    $id = $_GET['id'];
    $stmt = $con->prepare("DELETE FROM posts WHERE id=?");
    $stmt->bind_param('i',$id);
    $delete = $stmt->execute();
    if($delete){
        $_SESSION['delete_success'] = "Post has been deleted successfully!";
        header('location:./allPost.php');
    }
?>