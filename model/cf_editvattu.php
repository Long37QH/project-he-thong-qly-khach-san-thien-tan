<?php
    $mavt = $_POST ['mavt'];
    $tenvattu = $_POST['tenvattu'];
    $soluong = $_POST['soluong'];
    $anhvt = $_POST['anhvt'];
    $hangvt = $_POST['hangvt'];
    $giatri = $_POST['giatri'];
    $tg_nhap = $_POST['tg_nhap'];
    $mancc = $_POST['mancc'];
    $maphong = $_POST['maphong'];

    require_once 'config.php';

    //lenh sql
    $editsql = "UPDATE tblvattu SET   tenvattu = '$tenvattu' ,soluong = '$soluong' ,anhvt = '$anhvt', hangvt = '$hangvt' , giatri = '$giatri' ,tg_nhap = '$tg_nhap',mancc = '$mancc',maphong = '$maphong' WHERE mavt = '$mavt';";
    
    //echo $editsql;exit;
    //thuc hien cau lenh
    mysqli_query($conn,$editsql);

    // Them xong chuyen ve trang danh sach
    header("Location: ../DS_vattu.php"); 
?>