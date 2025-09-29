<?php
    include '../../../env.php';
    $id = $_GET['id'];

    if(isset($id)){
        $postId = intval($id);
        $stmt = $con->prepare("UPDATE heroposts SET status = CASE WHEN id= ? THEN 1 ELSE 0 END");
        $stmt->bind_param('i',$postId);
        $stmt->execute();
        header('location:./allPosts.php');

    }

?>