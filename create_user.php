<?php
include 'connect.php';
if (isset($_POST['submit'])) {//เช็คการกดปุ่ม
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    //เช็คค่าว่าง
    if ($username == '' || $password == '' || $fullname == '' || $email == '') {
        echo "<script>alert('Error : กรุณากรอกข้อมูลให้ครบทุกช่อง');history.back();</script>";
    } else {//เช็ค username ซ้ำ
        $exits_username = mysqli_fetch_array($con->query("SELECT * FROM user"));
        if ($row['username'] = $username) {
            echo "<script>alert('Error : Username นี้มีอยู่แล้ว');history.back();</script>";
        }
        $sql = "INSERT INTO user VALUES('$username','$password','$fullname','$email')";
        $reqult = $con->query($sql);
        if (!$reqult) {
            echo "<script>alert('Error : ไม่สามารถเพิ่มข้อมูลได้');history.back();</script>";
        } else {
            echo "<script>alert('Sucsess : เพิ่มข้อมูลสำเร็จแล้ว');</script>";
            header('location:user.php');
        }//เช็ค username ซ้ำ
    }//เช็คค่าว่าง
}//เช็คการกดปุ่ม
