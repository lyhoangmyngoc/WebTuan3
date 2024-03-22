<?php
    $svid=$_GET['id'];
    require_once 'connect.php';
    // echo $id;
    $xoa_sql = "DELETE FROM sinhvien WHERE id=$svid";
    mysqli_query($conn, $xoa_sql);
    header("Location: dssv.php");
?>