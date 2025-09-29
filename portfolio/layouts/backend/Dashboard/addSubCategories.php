<?php
    include '../../../env.php';
    include 'header.php';
    $stmt = $con->query("SELECT * FROM categories WHERE parent_id IS NULL");
    $results = $stmt->fetch_all(1);
    // $categories = [];
    // while($row = $stmt->fetch_assoc()){
    //     $categories[]
    // }
    // var_dump($result);

?>
    <div class="card p-2">
        <form action="../../../controllers/subCategories.php" method="post">
           <select class="form-select my-2" name="parent_id">
            <option  disabled selected>Slect a main category</option>
            <?php
            foreach($results as $result){?>
            <option value="<?=$result['id']?>"><?=$result['name']?></option>

        <?Php   }
            ?>
            
           </select><br>
            <label for="">Add Sub Category</label>
            <input type="text" class="form-control my-2" name="subcategory">
            <button name="subCategoryBtn" class="btn btn-primary w-100">Update Sub Category</button>
        </form>
    </div>

<?php
    include 'footer.php';
?>