<?php
    include 'connect.php';
    include_once 'navbar.php';
    $sql="SELECT * FROM user";
    $result=$con->query($sql);
?>
<div class="container">
    <div class="card">
        <div class="card-header bg-dark text-white">ข้อมูล User</div>
        <div class="card-body">
            <a href="add_user.php" class="btn btn-outline-success">
                <i class="bi bi-person-plus-fill mb-2"></i> เพิ่มข้อมูล</a>
            <table class="table table-striped mt-4">
                <tr>
                    <th class="bg_success text-danger">ID</th>
                    <th class="bg_success text-danger">Username</th>
                    <th class="bg_success text-danger">Password</th>
                    <th class="bg_success text-danger">Email</th>
                    <th class="bg_success text-danger">Action</th>
                </tr>
                <?php
                    $i=1;
                    while ($row=mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $i;$i++ ?></td>
                    <td><?php echo $row['username']?></td>
                    <td><?php echo $row['fullname']?></td>
                    <td><?php echo $row['email']?></td>
                    <td>
                        <a href="edit_user.php?username=<?php echo $row['username']?>" class="text-primary">แก้ไข</a>
                        <a href="del_user.php" class="text-danger">ลบ</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>