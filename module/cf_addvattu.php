<?php 
    //echo "tranh thêm";
    require_once 'config.php';

    $mavt = $_POST['mavt'];
    $tenvattu = $_POST['tenvattu'];
    $soluong = $_POST['soluong'];
    $anhvt = $_POST['anhvt'];
    $hangvt = $_POST['hangvt'];
    $giatri = $_POST['giatri'];
    $tg_nhap = $_POST['tg_nhap'];
    $mancc = $_POST['mancc'];
    $maphong = $_POST['maphong'];


    $themsql = "INSERT INTO tblvattu (mavt, tenvattu, soluong, anhvt, hangvt, giatri , tg_nhap , mancc, maphong ) VALUES ('$mavt','$tenvattu','$soluong' ,'$anhvt','$hangvt','$giatri','$tg_nhap','$mancc','$maphong')";
    //echo $themsql;exit;

    mysqli_query($conn,$themsql);
    
    header("Location: ../DS_vattu.php ") ;
    
    exit;
    //hien thi thông báo
    //echo "<script type='text/javascript'>alert('Lưu thông tin mới thành công');</script>";
?>
<script>
    // Hiển thị thông báo bằng JavaScript sau khi trang đã hoàn tất việc tải
    window.onload = function() {
    alert('Lưu thông tin mới thành công.');
    };
</script>