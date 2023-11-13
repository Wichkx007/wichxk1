<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ตรวบสอบสถานะแจ้งซ่อม</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    .nav-link:hover {
        background-color: blue;
        border-radius: 10%;
        
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">
                <h3>ระบบแจ้งซ่อมออนไลน์</h3>
            </a>
            <form class="d-flex">
                <a href="" class="nav-link text-white"><i class="bi bi-list mx-1"></i>ข้อมูลแจ้งปัญหา / งานซ่อม</a>
                <form action="">
                    <a href="" class="nav-link text-white mx-3"><i class="bi bi-person-circle mx-1"></i>ข้อมูลผู้ใข้งาน</a>
                </form>
            </form>
        </div>
    </nav>
    <div class="mt-2 mx-2">
    <i class="bi bi-list mx-1"></i><a class="icon-link icon-link-hover" style="--bs-link-hover-color-rgb: 15, 15, 15;text-decoration: none;" href="#">
    ข้อมูลแจ้งปัญหา / งานซ่อม
    </a>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary mx-4" type="button"><i class="bi bi-plus-lg mx-2"></i>เพิ่มข้อมูล</button>
    </div>



    <table class="table text-center mt-3">
        <thead class="table-dark">
            <tr>
                <th scope="col">วันที่แจ้งซ่อม</th>
                <th scope="col">ชื่อผู้แจ้ง</th>
                <th scope="col">ประเภทงานซ่อม</th>
                <th scope="col">ปัญหา/งานซ่อม</th>
                <th scope="col">สาเหตุ/วิธีแก้ไข</th>
                <th scope="col">ผู้ดำเนินการ</th>
                <th scope="col">สถานะ</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>
                    <p>ชื่อ</p>
                </td>
                <td>ประเภทงานซ่อม : </td>
                <td>ปัญหา/งานซ่อม :</td>
                <td>สาเหตุ/วิธีแก้ไข :</td>
                <td>ผู้ดำเนินการ :</td>
                <td>สถานะ :</td>
                <td><a href="#" class="btn btn-sm" style="background-color: gainsboro;"><i class="bi bi-file-earmark-text mx-1"></i>รายระเอียด</a></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>

</html>