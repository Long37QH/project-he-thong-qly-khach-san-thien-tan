<?php

    $ma_nhanvien = $_GET['sid'];

    require_once 'config.php';
    //include_once(__DIR__.'/mudul/config.php');

    $del_sql = "DELETE FROM tblnhanvien WHERE ma_nhanvien = '$ma_nhanvien'";

    //echo $del_sql ;exit;
    mysqli_query($conn,$del_sql);

    header("Location: ../DS_Nhanvien.php"); 
    
?>