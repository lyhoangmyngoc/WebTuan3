<?php

    $hoten = $_POST['hoten'];
    $masv = $_POST['masv'];
    $lop = $_POST['lop'];

    require_once 'connect.php';

    $themsql = "INSERT INTO sinhvien (masv, hoten, lop) VALUE ('$masv', '$hoten', '$lop')";
    
    if (mysqli_query($conn, $themsql)){
        header("Location: dssv.php");
        
    }
?>
