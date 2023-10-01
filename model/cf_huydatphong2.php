<?php

    $makh = $_GET['sid'];

    require_once 'config.php';
    //include_once(__DIR__.'/mudul/config.php');

    $layma = "SELECT * FROM ttdatphong WHERE makh = '$makh'";

    $result = mysqli_query($conn,$layma);

    $row = mysqli_fetch_assoc($result);

    $maphong = $row['maphong'] ;
    $trangthaiphong = 'Phòng Trống';

    //cap nhat trang thái phòng
    $editsql = "UPDATE tblphong SET   trangthaiphong  = '$trangthaiphong' WHERE maphong = '$maphong';";

    mysqli_query($conn,$editsql);

    //xoa thông tin đăng ký
    $del_sql = "DELETE FROM tbldkphong WHERE makh = '$makh'";
    //echo $del_sql ;exit;
    mysqli_query($conn,$del_sql);

    

    header("Location: ../DS_KTphong2.php");
    
?>