<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebSite Tuần 3</title>
    
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
            <h1>Danh Sách Sinh Viên</h1>
            <a href="them.html" class="btn btn-success">Thêm Sinh Viên</a>
            <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Mã Sinh Viên</th>
                    <th>Họ Tên</th>
                    <th>Lớp</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'connect.php';

                $dssv_sql = "SELECT * FROM sinhvien ORDER BY lop, hoten";

                $result = mysqli_query($conn, $dssv_sql);

                while ($r = mysqli_fetch_assoc($result))
                {
                    ?>
                    <tr>
                        <td><?php echo $r['masv'];?></td>
                        <td><?php echo $r['hoten'];?></td>
                        <td><?php echo $r['lop'];?></td>
                        <td>
                            <a href="sua.php?id=<?php echo $r['id'];?>" class="btn btn-info">Sửa</a> 
                            <a onclick="return confirm('Bạn có muốn xóa sinh viên này không');" href="xoa.php?id=<?php echo $r['id'];?>" class="btn btn-danger">Xóa</a>
                        </td>
                            
                    </tr>
                <?php
                }
                ?>
            </tbody>
            </table>
        </div>
    </section>
</body>
</html>
