<?php
session_start();
$register_btn = $_POST['register_btn'];
if(isset($register_btn)){
    //collect user input
    $name = user_input($_POST['name']);
    $email = user_input($_POST['email']);
    $password = user_input($_POST['password']);
    $password_enc = password_hash($password,PASSWORD_BCRYPT);
    $confirm_password = user_input($_POST['confirm_password']);
    $profile_img = $_FILES['profile_img'];
    $role = $_POST['role'];

    //FILES 
     $target_dir = "images/";
    $target_file = $target_dir.basename($_FILES['profile_img']['name']);
    $image_file_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $new_image_name = uniqid("user_").".".$image_file_type;
   $tmp_path = $_FILES['profile_img']['tmp_name'];


    // var_dump();
    // echo "<pre>";
    // var_dump($profile_img);
    // echo "</pre>";
    // exit();
    //check name input
    if(empty($name)){
        $_SESSION['name_err'] = 'Name field is required';
        header('location:../layouts/signup.php');
    }elseif(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
        $_SESSION['name_err'] = 'Only letter and white space are allowed';
        header('location:../layouts/signup.php');
    }elseif(empty($profile_img ['name'])){
        //insert register data
        $_SESSION['image_err'] = 'Profile image is required';
          header('location:../layouts/signup.php');
    }elseif($image_file_type!= "jpg" && $image_file_type!="png" && $image_file_type!="jpeg" && $image_file_type!="gif" ){
        $_SESSION['image_err'] = 'Profile image must be in jpg,png,jpeg,gif format';
        header('location:../layouts/signup.php');
    }else{
        include '../env.php';

        $stmt = $con->prepare("INSERT INTO register(name, email, password, profile_img, role) VALUES (?,?,?,?,?)");
        $stmt->bind_param('sssss',
            $name,
            $email,
            $password_enc,
            $new_image_name,
            $role
        );
        $stmt->execute();
        move_uploaded_file($tmp_path,($target_dir.$new_image_name));

        header('location:../layouts/signup.php');

    }

}


function user_input($data){
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}
?>