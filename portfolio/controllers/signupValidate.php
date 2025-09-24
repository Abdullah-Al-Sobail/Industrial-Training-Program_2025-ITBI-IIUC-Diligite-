<?php
    session_start();
    $btn = $_POST['registerBtn'];

    if(isset($btn)){

        //user input
        $name = user_input($_POST['name']);
        $email = user_input($_POST['email']);
        $password = user_input($_POST['password']);
        $confirm_password = user_input($_POST['confirm_password']);
        $profile_image = $_FILES['profile_image'];
        $role = $_POST['role'];
        $enc_password = password_hash($password,PASSWORD_BCRYPT);

        // var_dump($enc_password);
        // exit();
        //check name input
        if(empty($name)){
            $_SESSION['name_err'] = 'Name field is required';
            header('location:../layouts/backend/signup.php');
        }elseif(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
            $_SESSION['name_err'] = 'Only letters and white space are allowed';
            header('location:../layouts/backend/signup.php');
        }


        //check email input
        if(empty($email)){
            $_SESSION['email_err'] = 'Email field is required';
            header('location:../layouts/backend/signup.php');
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $_SESSION['email_err'] = 'Invalid Email';
            header('location:../layouts/backend/signup.php');
        }


        //check password input
        if(empty($password)){
            $_SESSION['password_err'] = 'password field is required';
            header('location:../layouts/backend/signup.php');
        }
        if($password !== $confirm_password){
             $_SESSION['confirm_password_err'] = 'Password did not match';
            header('location:../layouts/backend/signup.php');
        }
        //check role input
        if(empty($role)){
            $_SESSION['role_err'] = 'Role field is required';
            header('location:../layouts/backend/signup.php');
        }
        
        //check image
        $target_dir = "../layouts/backend/assets/images/";
        $target_file = $target_dir.basename($profile_image['name']);
        $extension = strtolower(pathinfo($profile_image['name'],PATHINFO_EXTENSION));
        $new_iamge_name = uniqid("ueser_").".".$extension;

       if($extension != "jpg" && $extension != "png" && $extension != "jpeg" && $extension != "gif"){
            $_SESSION['image_err'] ='Image file format must be in jpg,png,jpeg,gif format';
            header('location:../layouts/backend/signup.php');
        }else{
            include '../env.php';
            $stmt = $con->prepare("INSERT INTO register(name, email, password, profile_img, role) VALUES (?,?,?,?,?)");
          $stmt->bind_param('sssss',
            $name,
            $email,
            $enc_password,
            $new_iamge_name,
            $role
        );
           $insert = $stmt->execute();
            move_uploaded_file($profile_image['tmp_name'],$target_dir.$new_iamge_name);
            header('location:../layouts/backend/signup.php');
        if($insert){
            $_SESSION['success'] = 'Register Successfully!';
            header('location:../layouts/backend/login.php');

        }
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