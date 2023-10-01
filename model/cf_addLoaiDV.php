<?php 
    //echo "tranh thêm";
    require_once 'config.php';

    $maloaidv = $_POST['maloaidv'];
    $tenloai = $_POST['tenloai'];
    $giadv = $_POST['giadv'];
    $trangthaidv = $_POST['trangthaidv'];

    $themsql = "INSERT INTO tblloaidv (maloaidv, tenloai, giadv, trangthaidv ) VALUES ('$maloaidv','$tenloai','$giadv' ,'$trangthaidv')";
    //echo $themsql;exit;

    mysqli_query($conn,$themsql);

    header("Location: ../DS_loaiDV.php");

?>