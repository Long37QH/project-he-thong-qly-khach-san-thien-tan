<?php
    $MaNhaCC = $_POST['MaNhaCC'];
    $TenNhaCC = $_POST['TenNhaCC'];
    $Phone = $_POST['Phone'];
    $Address = $_POST['Address'];
    $GhiChu = $_POST['GhiChu'];

    //$mota = null;

    require_once 'config.php';

    //lenh sql
    $editsql = "UPDATE tblnhacc SET TenNhaCC = '$TenNhaCC' ,Phone = '$Phone' ,Address = '$Address', GhiChu = '$GhiChu' WHERE MaNhaCC = '$MaNhaCC';";
    
    // echo $editsql;
    // exit();
    //thuc hien cau lenh
    mysqli_query($conn,$editsql);

    // Them xong chuyen ve trang danh sach
    header("Location: ../DS_nhacc.php"); 
?>