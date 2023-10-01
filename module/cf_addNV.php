<?php

                    // nap file ket noi
                    require_once 'config.php';

                    
                        $ma_nhanvien = $_POST['ma_nhanvien'];
                        $TenNV = $_POST['TenNV'];
                        $Cmnd = $_POST['Cmnd'];
                        $SoDT = $_POST['SoDT'];
                        $ChucVu = $_POST['ChucVu'];
                        $Email = $_POST['Email'];
                        $gioitinh = $_POST['gioitinh'];
                        $diachi = $_POST['diachi'];
                        $anhnv = $_POST['anhnv'];
                    
                    //echo "$ma_nhanvien" ;
                    
                    $themsql = "INSERT INTO tblnhanvien (ma_nhanvien, TenNV, Cmnd, SoDT, ChucVu , Email , gioitinh , diachi ,anhnv ) VALUES ('$ma_nhanvien','$TenNV','$Cmnd' ,'$SoDT','$ChucVu','$Email','$gioitinh','$diachi','$anhnv')";
                    //echo $themsql;exit;
                    
                    mysqli_query($conn,$themsql);

                    header("Location: ../DS_Nhanvien.php"); 
?>
