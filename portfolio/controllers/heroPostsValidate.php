<?php
    session_start();
   $btn = $_POST['update_btn'];
   if(isset($btn)){
    $title = user_input($_POST['title']);
    $description = user_input($_POST['description']);
    $btn_text = user_input($_POST['btn_text']);
    $image = $_FILES['hero_image'];

    //check title
    if(empty($title)){
        $_SESSION['title_err'] = 'Title is required';
        header('location:../layouts/backend/dashboard/addHeroItem.php');
    }

     //check image
        $target_dir = "../layouts/backend/assets/images/";
        $target_file = $target_dir.basename($image['name']);
        $extension = strtolower(pathinfo($image['name'],PATHINFO_EXTENSION));
        $new_image_name = uniqid("hero_").".".$extension;

       if($extension != "jpg" && $extension != "png" && $extension != "jpeg" && $extension != "gif"){
            $_SESSION['image_err'] ='Image file format must be in jpg,png,jpeg,gif format';
            header('location:../layouts/backend/dashboard/addHeroitem.php');
        }else{
            include '../env.php';
            $stmt = $con->prepare("INSERT INTO heroposts(title, description, btn_text, heroImg) VALUES (?,?,?,?)");
            $stmt->bind_param('ssss',
            $title,
            $description,
            $btn_text,
            $new_image_name
        );
        $insert = $stmt->execute();
        if($insert){
            $_SESSION['success'] = 'Post Added Successfully';
        }
            move_uploaded_file($image['tmp_name'],$target_dir.$new_image_name);
            header('location:../layouts/backend/dashboard/addHeroitem.php');
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