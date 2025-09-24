<?php
include './index.php';?>
<div class="card col-md-6 mx-auto">
    <div class="card-header">
        Login
    </div>
    <div class="card-body">
        <form action="../controller/validLogin.php" method="POST">
            <label for="">Email</label>
            <input type="email" class="form-control mb-2" name="email">
            <label for="">Password</label>
            <input type="password" class="form-control mb-2" name="password">
            <button type="submit" class="btn btn-primary w-100" name="loginbtn">Login</button>
        </form>
    </div>
</div>
<?php


?>