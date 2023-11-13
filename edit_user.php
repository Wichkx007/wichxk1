<?php
    include 'navbar.php';
    include 'connect.php';

    $_GET['username'];
    $username=$_GET['username'];
    $sql = "SELECT * FROM user WHERE username='username'";
    
?>

<div class="container w-50 mt-5">
    <div class="card" style="background-color: #333;">
        <div class="card-title bg-dark text-white text-center"><h3>ฟอร์มแก้ไขข้อมูล</h3></div>
        <div class="body text-white">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <form action="create_user.php" method="POST">
                <div class="mb-3">
                    <label class="form-labal">Username</label>
                    <input type="text" class="form-control" name="username" require>
                </div>
                <div class="mb-3">
                    <label class="form-labal">Password</label>
                    <input type="text" class="form-control" name="password" require>
                </div>
                <div class="mb-3">
                    <label class="form-labal">Fullname</label>
                    <input type="text" class="form-control" name="fullname" require>
                </div>
                <div class="mb-3">
                    <label class="form-labal">Email</label>
                    <input type="text" class="form-control" name="email" require>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                </div>
            </form>
            </div>
            <div class="col-sm-2"></div>
            </div>
        </div>
    </div>
</div>