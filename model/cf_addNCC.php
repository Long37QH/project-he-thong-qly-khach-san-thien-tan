<?php 
    //echo "tranh thêm";
    require_once 'config.php';

    $MaNhaCC = $_POST['MaNhaCC'];
    $TenNhaCC = $_POST['TenNhaCC'];
    $Phone = $_POST['Phone'];
    $Address = $_POST['Address'];
    $GhiChu = $_POST['GhiChu'];

    $themsql = "INSERT INTO tblnhacc (MaNhaCC, TenNhaCC, Phone,Address,GhiChu ) VALUES ('$MaNhaCC','$TenNhaCC','$Phone' ,'$Address','$GhiChu')";
    //echo $themsql;exit;

    mysqli_query($conn,$themsql);

    header("Location: ../DS_nhacc.php");

?>