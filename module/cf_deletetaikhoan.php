<?php

    $tentk = $_GET['sid'];

    require_once 'config.php';
    //include_once(__DIR__.'/mudul/config.php');

    $del_sql = "DELETE FROM tbltaikhoan WHERE tentk = '$tentk'";

    //echo $del_sql ;exit;
    mysqli_query($conn,$del_sql);

    header("Location: ../DS_taikhoan.php");
    
?>