<?php
    $macabt = $_GET['sid'];
    $trangthaica = 'Hoàn Thành';
    require_once 'config.php';
    //lenh sql
    $editsql = "UPDATE tblbaotrivt SET   trangthaica  = '$trangthaica' WHERE macabt = '$macabt';";
    
    //echo $editsql;exit;
    //thuc hien cau lenh
    mysqli_query($conn,$editsql);

    // Them xong chuyen ve trang danh sach
    header("Location: ../DS_hoanthanhBT.php"); 