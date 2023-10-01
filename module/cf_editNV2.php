<?php
    $ma_nhanvien = $_POST ['ma_nhanvien'];
    $TenNV = $_POST['TenNV'];
    $Cmnd = $_POST['Cmnd'];
    $SoDT = $_POST['SoDT'];
    $ChucVu = $_POST['ChucVu'];
    $Email = $_POST['Email'];
    $gioitinh = $_POST['gioitinh'];
    $diachi = $_POST['diachi'];
    //$mota = null;

    require_once 'config.php';

    //lenh sql
    $editsql = "UPDATE tblnhanvien SET  TenNV = '$TenNV' , Cmnd = '$Cmnd' ,SoDT = '$SoDT' ,ChucVu = '$ChucVu', Email = '$Email' , gioitinh = '$gioitinh' ,diachi = '$diachi' WHERE ma_nhanvien = '$ma_nhanvien';";
    
    //echo $editsql;exit;
    //thuc hien cau lenh
    mysqli_query($conn,$editsql);

    // Them xong chuyen ve trang danh sach
    header("Location: ../index2.php"); 
?>