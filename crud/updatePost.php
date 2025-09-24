<?php
session_start();
$id = (int)$_GET['id'];
$btn = $_GET['updatebtn'];
    if(isset($btn)){
        $name = userInput($_GET['name']);
        $email = userInput($_GET['email']);
        // echo "user name : $name <br>";
        // echo "user name : $email <br>";
        if(empty($name)){
            $_SESSION['name_err'] = 'Name Filed is Required';
            header("location:./editPost.php?id=$id");
            exit();
        }elseif(strlen($name)>10){
           $_SESSION['name_err'] = "Name Filed Can't be 10Char";
           header("location:./editPost.php?id=$id");
            exit();
        }else{
            include "./env.php";
            $stmt = $con->prepare("UPDATE posts SET name=?,email=? WHERE id=?");
            $stmt->bind_param('ssi',$name,$email,$id);
             $update = $stmt->execute();
            // $querry="UPDATE posts SET name='$name',email='$email' WHERE id='$id'";
            // $update = mysqli_query($con,$querry);
            if($update){
                $_SESSION['success'] = 'Your post has been updated successfully!';
                header("location:./allPost.php");
                exit();
            }
        }
    }else{
        echo "Not clicked";
    }

    //Data Sanitization
    function userInput($data){
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }


?>