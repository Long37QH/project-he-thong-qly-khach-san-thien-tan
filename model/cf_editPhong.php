<?php
   $ma_phong = $_POST['ma_phong'];
   $ten_phong = $_POST['ten_phong'];
   $lphong = $_POST['loai_phong'];
   $mota = $_POST['mota_phong'];
   $trangthai = $_POST['trangthai_phong'];
   $Image1 = $_POST['anh1'];
    //$mota = null;

    require_once 'config.php';

    //lenh sql
    $editsql = "UPDATE tblphong SET maloaiphong = '$lphong' , tenphong = '$ten_phong' ,trangthaiphong = '$trangthai', mt_phong = '$mota'  WHERE maphong = '$ma_phong';";
    //thuc hien cau lenh
    mysqli_query($conn,$editsql);

    // Them xong chuyen ve trang danh sach
    header("Location: ../DS_phong.php"); 
?>