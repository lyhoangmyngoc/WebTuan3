<?php 
    $id = $_GET['id'];

    require_once 'connect.php';

    $sua_sql = "SELECT * FROM sinhvien WHERE id=$id";
    $result = mysqli_query($conn, $sua_sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Sinh Viên</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 3</a>
                </li>
            </ul>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <!-- Header-->
    <header style="background-color: lightblue;">
        <div class="container-sm">
            <div style="padding-bottom: 50px">
                <div class="text-center">
                    <h2 style="color: black; font-size: 50px">Hello My WebSite</h2>
                    <h5 style="color: black; font-size: 30px">Lý Hoàng Mỹ Ngọc</h5>
                </div>
            </div>
        </div>
    </header>

    <section id="scroll">
        <div class="container">
            <h1>Sửa Sinh Viên</h1>
            <form action="capnhat.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id;?>" id="">
                <div class="form-group">
                    <label for="hoten">Họ Tên</label>
                    <input type="text" id="hoten" class="form-control" name="hoten" value="<?php echo $row['hoten']?>">
                </div>
                <div class="form-group">
                    <label for="masv">Mã Sinh Viên</label>
                    <input type="text" name="masv" id="masv" class="form-control" value="<?php echo $row['masv']?>">
                </div>
                <div class="form-group">
                    <label for="lop">Lớp</label>
                    <input type="text" id="lop" name="lop" class="form-control" value="<?php echo $row['lop']?>">
                </div>
                <button class="btn btn-info">Cập Nhật Sinh Viên</button>
            </form>
        </div>
    </section>
</body>
</html>