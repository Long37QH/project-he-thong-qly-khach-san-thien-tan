<?php 
    //echo "tranh thêm";
    require_once 'config.php';

    $macabt = $_POST['macabt'];
    $maphong = $_POST['maphong'];
    $mavt = $_POST['mavt'];
    $mt_tinhtrang = $_POST['mt_tinhtrang'];
    $tg_dkbaotri = $_POST['tg_dkbaotri'];
    $trangthaica = 'cho xu ly';
    
    


    $themsql = "INSERT INTO tblbaotrivt (macabt, maphong, mavt, mt_tinhtrang ,trangthaica ,tg_dkbaotri ) VALUES ('$macabt','$maphong','$mavt' ,'$mt_tinhtrang','$trangthaica','$tg_dkbaotri')";
    //echo $themsql;exit;

    mysqli_query($conn,$themsql);
    
    header("Location: ../DS_dkbaotri.php ") ;
    
    exit;
    //hien thi thông báo
    //echo "<script type='text/javascript'>alert('Lưu thông tin mới thành công');</script>";
?>