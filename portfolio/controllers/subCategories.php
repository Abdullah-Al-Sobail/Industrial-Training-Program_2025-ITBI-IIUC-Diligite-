<?php
include '../env.php';
    $btn = $_POST['subCategoryBtn'];

    if(isset($btn)){
        $sub_name = $_POST['subcategory'];
        $parent_id = $_POST['parent_id'];


        $stmt = $con->prepare("INSERT INTO categories(name,parent_id) VALUES(?,?)");
        $stmt->bind_param("si",$sub_name,$parent_id);
        $stmt->execute();
        $stmt->close();

    }
?>