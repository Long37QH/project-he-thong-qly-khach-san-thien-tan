<?php

                    // nap file ket noi
                    require_once 'config.php';

                    
                        $ma_phong = $_POST['ma_phong'];
                        $ten_phong = $_POST['ten_phong'];
                        $lphong = $_POST['loai_phong'];
                        $mota = $_POST['mota_phong'];
                        $trangthai = 'Phòng Trống';
                        $Image1 = $_POST['anh1'];
                        
                    
                    //echo "$ma_nhanvien" ;
                    
                    $themsql = "INSERT INTO tblphong (maphong, maloaiphong, tenphong, trangthaiphong, anhphong, mt_phong) VALUES ('$ma_phong','$lphong' ,'$ten_phong','$trangthai','$Image1','$mota')";
                    //echo $themsql;exit;
                    
                    mysqli_query($conn,$themsql);

                    header("Location: ../DS_phong.php"); 
?>