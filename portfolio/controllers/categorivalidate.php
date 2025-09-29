<?php
    $btn = $_GET['categoriBtn'];
    if(isset($btn)){
        $name = $_GET['name'];
        $subCategory =$_GET['subCategory'];
        if(empty($name)){
            $_SESSION['name_err'] ='Categiry is required';
            header('location:../layouts/backend/dashboard/categories.php');
        }else{
            include '../env.php';
            $stmt = $con->prepare("INSERT INTO categories(name) VALUES (?)");
            $stmt->bind_param('s',$name);
            $stmt->execute();
            // $parent_id = $stmt->insert_id;
            // $stmt2 = $con->prepare("INSERT INTO categories(name, parent_id) VALUES(?,?)");
            // $stmt2->bind_param('si',$subCategory,$parent_id);
            // $stmt2->execute();
            header('location:../layouts/backend/dashboard/addCategories.php');
        }
    }
?>