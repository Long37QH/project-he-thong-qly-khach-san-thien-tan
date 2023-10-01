<?php

    $maloaidv = $_GET['sid'];

    require_once 'config.php';
    //include_once(__DIR__.'/mudul/config.php');

    $del_sql = "DELETE FROM tblloaidv WHERE maloaidv = '$maloaidv'";

    //echo $del_sql ;exit;
    mysqli_query($conn,$del_sql);

    header("Location: ../DS_loaiDV.php");
    
?>