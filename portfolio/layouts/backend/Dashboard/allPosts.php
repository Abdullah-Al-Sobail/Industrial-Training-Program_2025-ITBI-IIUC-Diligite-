<?php
    include './header.php';
    include '../../../env.php';
    $stmt = $con->prepare("SELECT * FROM heroposts");
    $stmt->execute();
    $posts = $stmt->get_result()->fetch_all(1);

?>
    <div class="card">
        <div class="card-header h4">
            All Post
        </div>
        <table class="table">
            <thead>
                <th>SL</th>
                <th>Title</th>
                <th>Description</th>
                <th>Button</th>
                <th>Status</th>
                <th>Actiopns</th>
                <tbody>
                    <?php
                        foreach($posts as $key=>$post){ ?>
                            <tr>
                        <td><?=++$key?></td>
                        <td><?=$post['title']?></td>
                        <td><?=$post['description']?></td>
                        <td><?=$post['btn_text']?></td>
                        <td class="badge <?=$post['status'] == 1 ?'badge-success':'badge-danger'?> "><?= $post['status'] == 1 ? 'Active':'Deactive'?></td>
                        <td>
                        <div class="btn-group">
                            <a href="" class="btn btn-info btn-sm">Show</a>
                            <a href="" class="btn btn-primary btn-sm">Edit</a>
                            <a href="./status.php?id=<?=$post['id']?>" class="btn btn-warning btn-sm">Status</a>
                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                        </div>
                    </td>
                    </tr>
                   <?php     }

                    ?>
                </tbody>
            </thead>
        </table>
    </div>


<?php
    include './footer.php';

?>