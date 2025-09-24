<?php
session_start();
include '../env.php';
$email = user_input($_POST['email']);
$password = user_input($_POST['password']);
$stmt = $con->prepare("SELECT * FROM register WHERE email=?");

$stmt->bind_param('s',$email);

$stmt->execute();

$search_email = $stmt->get_result();
$fetch = $search_email->fetch_assoc();


$btn = $_POST['loginBtn'];

if(isset($btn)){

    if(empty($email)){
        $_SESSION['email_err'] = 'Email is required';
        header('location:../layouts/backend/login.php');
    }

     if(empty($password)){
        $_SESSION['password_err'] = 'Password is required';
        header('location:../layouts/backend/login.php');
    }

    //Authentication
    if($search_email->num_rows > 0){
        if(password_verify($password,$fetch['password'])){
            $_SESSION['auth_user'] = $fetch;
            $_SESSION['isLogin'] = true;
            header('location:../layouts/backend/dashboard/dashboard.php');
        }else{
        $_SESSION['password_err'] = 'Password did not match';
        header('location:../layouts/backend/login.php');
        }
    }else{
         $_SESSION['email_err'] = 'User Email not found';
        header('location:../layouts/backend/login.php');
    }
    






}


 //user input sanitization
    function user_input($data){
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
        
        return $data;
    }
?>