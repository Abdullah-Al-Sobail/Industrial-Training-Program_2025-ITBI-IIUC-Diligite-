<?php
session_start();
// echo 'Done';
// print_r($_GET);
$btn = $_GET['btn'];
    if(isset($btn)){
        $name = userInput($_GET['name']);
        $email = userInput($_GET['email']);
        // echo "user name : $name <br>";
        // echo "user name : $email <br>";
        if(empty($name)){
            $_SESSION['name_err'] = 'Name Filed is Required';
            header('location:./index.php');
        }elseif(strlen($name)>10){
           $_SESSION['name_err'] = "Name Filed Can't be 10Char";
           header('location:./index.php');
        }else{
            include "./env.php";
            $stmt = $con->prepare("INSERT INTO posts(name, email) VALUES (?,?)");
            // $querry = "INSERT INTO posts(name, email) VALUES ('$name','$email')";
            $stmt->bind_param('ss',$name,$email);
            // $insert = mysqli_query($con,$querry);
            $insert = $stmt->execute();
            if($insert){
                $_SESSION['success'] = 'Your post has been recorded successfully!';
                header('location:./index.php');
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