<?php

                    // nap file ket noi
                    require_once 'config.php';

                    
                        $tentk = $_POST['tentk'];
                        $pass = $_POST['pass'];
                        $ma_nhanvien = $_POST['ma_nhanvien'];
                        $doituong = $_POST['doituong'];
                        
                    
                    //echo "$ma_nhanvien" ;
                    
                    $themsql = "INSERT INTO tbltaikhoan(tentk,pass,ma_nhanvien,doituong) VALUES ('$tentk','$pass','$ma_nhanvien','$doituong')";
                    //echo $themsql;exit;
                    
                    mysqli_query($conn,$themsql);

                    header("Location: ../DS_taikhoan.php"); 
?>