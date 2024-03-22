<?php

    $hoten = $_POST['hoten'];
    $masv = $_POST['masv'];
    $lop = $_POST['lop'];
    $id = $_POST['id'];

    require_once 'connect.php';

    $capnhat_sql = "UPDATE sinhvien SET masv='$masv', hoten='$hoten', lop = '$lop' WHERE id = $id";
    // echo $capnhat_sql; exit;
    if (mysqli_query($conn, $capnhat_sql)){
        header("Location: dssv.php");
        
    }
?>
