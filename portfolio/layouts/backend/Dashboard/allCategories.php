<?php include '../../../env.php';
include './header.php';

$stmt = $con->query("SELECT * FROM categories");
$categories = $stmt->fetch_all(MYSQLI_ASSOC);

$grouped = [];
foreach($categories as $cat){
    $grouped[$cat['parent_id']][] = $cat;
}
?>
<div class="card">
    <table class="table">
        <thead>
            <th>SL</th>
            <th>Categories</th>
            <th>Sub Categories</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
           
            foreach($grouped[NULL] as $key=>$main){
                if(isset($grouped[$main['id']])) {
                    // loop subcategories
                    foreach($grouped[$main['id']] as $sub){ ?>
                        <tr>
                            <td><?= ++$key ?></td>
                            <td><?= $main['name'] ?></td>
                            <td><?= $sub['name'] ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="" class="btn btn-warning">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                    <?php }
                } else { 
                    // only if no subcategories
                    ?>
                    <tr>
                        <td><?= ++$key ?></td>
                        <td><?= $main['name'] ?></td>
                        <td>No Sub Category</td>
                        <td>
                            <div class="btn-group">
                                <a href="" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                <?php }
            } ?>
        </tbody>
    </table>
</div>

<?php include './footer.php' ?>
