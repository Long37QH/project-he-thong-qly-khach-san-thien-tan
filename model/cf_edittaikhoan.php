<?php
   $tentk = $_POST['tentk'];
   $pass = $_POST['pass'];
   $doituong = $_POST['doituong'];
   $ma_nhanvien = $_POST['ma_nhanvien'];
    //$mota = null;

    require_once 'config.php';

    //lenh sql
    $editsql = "UPDATE tbltaikhoan SET tentk = '$tentk' , pass = '$pass' ,doituong = '$doituong'  WHERE ma_nhanvien = '$ma_nhanvien';";
    //thuc hien cau lenh
    mysqli_query($conn,$editsql);

    // Them xong chuyen ve trang danh sach
    header("Location: ../DS_taikhoan.php"); 
?>