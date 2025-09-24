<?php
    include '../env.php';
    $stmt=$con->prepare("SELECT * FROM register WHERE email = ?");
    $email = $_POST['email'];
    $password = $_POST['password'];
    $stmt->bind_param('s',$email);
    // $result = $stmt->get_result();
    
    // var_dump($stmt->get_result()->num_rows);
    $fetch = $stmt->get_result()->fetch_all(1);
    $stmt->execute();
   
   if($stmt->get_result()->num_rows > 0){
    echo "Valid";

   }else{
    echo "invalid";
   }
?>