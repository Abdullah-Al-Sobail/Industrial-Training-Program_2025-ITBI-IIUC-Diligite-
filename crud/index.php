<?php
    session_start();
    include_once('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    
</head>
<body>
<div class="card col-md-6 mx-auto">
    <?php
        if(isset($_SESSION['success'])){?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Succsess!!</strong> <?=$_SESSION['success']?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        <?php }
    ?>
    <div class="card-header">
        Form
    </div>
    <div class="card-body">
    <form action="./storeData.php" method="GET">
    <label for="">Name</label>
    <input type="text" class="form-control mb-2" name="name">
    <?php
       if(isset($_SESSION['name_err'])){
         echo "<p class='text-danger'>".$_SESSION['name_err']."</p>";
       }
    ?>
    <label for="">Email</label>
    <input type="email" class="form-control mb-2" name="email">
    <button type="submit"  class="btn btn-success w-100" name="btn">Send</button>
    </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
<?php
// echo 'Hello PHP';
// print_r('Hello PHP');
// print('Hello','PHP');
// var_dump('Hello PHP');

// $items = ['item1','item2',['subitem1','subitem2',['subitem1.1','subitem1.2']]];
// // var_dump($items);
// echo "<pre>";
// echo $items[2][2][1];
// echo "</pre>";
// $name = "PHP";

// echo 'Hello $name';
// echo "<pre>";
// print_r($info);
// echo "</pre>";
// $infos = ['Plang'=>'PHP','version'=>'8.1.2'];
// foreach ($infos as $key=>$info) {
    
//     echo "<h2>value : $info<br></h2>";
//     echo "<h4>Key : $key<br></h4>";
    
// }


session_unset();


?>