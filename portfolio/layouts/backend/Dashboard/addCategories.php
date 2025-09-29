<?php
    include './header.php';
?>
    <div class="card p-2">
        <form action="../../../controllers/categoriValidate.php" method="GET">
            <label for="">
                Main Category Name
            </label>
            <input type="text" class="form-control my-3" name="name">
            <button type="submit" name="categoriBtn" class="btn btn-primary w-100">Update Category</button>
        </form>
    </div>

<?php
    include './footer.php';
?>
