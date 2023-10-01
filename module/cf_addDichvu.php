<?php 
    //echo "tranh thêm";
    require_once 'config.php';

    $madv = $_POST['madv'];
    $tendichvu = $_POST['tendichvu'];
    $anhdv = $_POST['anhdv'];
    $mota = $_POST['mota'];
    $maloaidv = $_POST['maloaidv'];

    $themsql = "INSERT INTO tbldichvu (madv, tendichvu, anhdv, mota ,maloaidv ) VALUES ('$madv','$tendichvu','$anhdv' ,'$mota','$maloaidv')";
    //echo $themsql;exit;

    mysqli_query($conn,$themsql);

    header("Location: ../DS_dichvu.php");

?>