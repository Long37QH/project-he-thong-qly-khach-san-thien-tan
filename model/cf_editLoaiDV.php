<?php
    require_once 'config.php';

        $maloaidv = $_POST['maloaidv'];
        $tenloai = $_POST['tenloai'];
        $giadv = $_POST['giadv'];
        $trangthaidv = $_POST['trangthaidv'];

        $editsql = "UPDATE tblloaidv SET  tenloai = '$tenloai' , giadv = '$giadv' ,trangthaidv = '$trangthaidv' WHERE maloaidv = '$maloaidv';";
        //echo $editsql;exit;
        //thuc hien cau lenh
        mysqli_query($conn,$editsql);

        // Them xong chuyen ve trang danh sach
        header("Location: ../DS_loaiDV.php"); 
?>