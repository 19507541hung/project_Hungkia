<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
</style>
<body>
<?php
            if ($_SESSION["dn"]==False) {
                include("View/dangnhap.php");
            } elseif
                (isset($_SESSION["dn"])&& $_SESSION["dn"]==True){
                ?>
                    <div class="container1">
                    <div>
                        <?php
                           if(($_SESSION["dn"])==True){
                                //echo "123";
                            }
                        ?>
                <div class="container1">
        
                <header style="background-image:url(images/background-top.png)">
               
                <img src="images/logo.jpg" width="120" height="100">
               
                <div id="head1">
                    <P>
                    BAN CHỈ ĐẠO QUỐC GIA <br />
                    PHÒNG CHỐNG DỊCH BỆNH COVID-19<br />
                    HỆ THỐNG TIẾP NHẬN, ĐIỀU TRỊ
                    </P>
                    
                    <?php
                    echo '<div  style="margin-left:750px;margin-top:-70px;font-size:17px">';
                        if($_SESSION['phanquyen']==1){
                            include_once("View/vnhanvienbenhvien.php");
                        }
                        elseif($_SESSION['phanquyen']==2){
                            include_once("View/vnhanvienphuong.php");
                        }elseif($_SESSION['phanquyen']==3){
                            include_once("View/vdangnhapbenhnhan.php");
                        }else{
                            include('View/vadmin.php');
                        }
                    echo '</div>';
                        //echo 123;
                        //include_once("View/vnhanvienytephuong.php");
                        //include_once("View/vnhanvienytebenhvien.php");
                        if(isset($_SESSION["dn"]) && $_SESSION["dn"] == True){
                            echo '<div  style="margin-left:800px;margin-top:-1px;font-size:17px">';
                            echo "<a href='View/vdangxuat.php' style='color:white;margin-left:px;text-decoration:none'>Đăng Xuất</a>";
                            echo '</div>';
                        }
                    ?>                                       
                </div>                               
            </header>
            <div class="menu">
                    <!-- <a href="Admin/index.php">Bệnh Nhân</a> -->
                    <!-- <a href="index_Dangnhap.php">Đăng nhập</a> -->
                    <!-- <a href="">Đăng ký</a> -->
                    <div>
            <table>
                <tr>
                    <!-- <td width="600px" style="font-size:50px;font-family:forte;">
                        <font color="#428bca"> UK </font>
                        <font color="#000"> Hospital</font>
                    </td> -->
                    <td>
                    <?php
                        include_once("Controller/cDexuat.php");
                        $p = new controldexuat();
                        if(isset($_REQUEST["getbenhvien"])){
                            $cty = $_REQUEST["getbenhvien"];
                            $tblProduct = $p->getAllProductBybenhvien($cty);
                           //echo "Khong co gia tri";
                        }
                        if($_SESSION['phanquyen']==1){
                            echo '<div>';
                                
                            echo '</div>';
                                echo "<a  style='color:white; text-decoration: none' href='HeThongHoTro_COVID19.php?getbenhvien=".$_SESSION["mabv"]."'>"."ĐỀ XUẤT CHUYỂN VIỆN"."</a>".'&nbsp';
                                echo "<a  style='color:white; text-decoration: none' href='HeThongHoTro_COVID19.php?benhvien=".$_SESSION["mabv"]."'>"."XÁC NHẬN CHUYỂN VIỆN"."</a>".'&nbsp';
                                echo '<a href="index_Thongke.php" style="text-decoration:none; color:white">THỐNG KÊ</a>';
                                //echo '<a href="index_CapNhatTrangThai.php" style="text-decoration:none; color:white">CẬP NHẬT TRẠNG THÁI</a>';
                                //echo '<a href="index_lienHe.php" style="text-decoration:none; color:white">LIÊN HỆ HỖ TRỢ</a>';
                                echo '<a href="KieuLinh/nhanvien/index.php" style="text-decoration:none; color:white">QUẢN LÝ THÔNG TIN BỆNH NHÂN</a>';
                                echo '<a href="HeThongHoTro_COVID19.php" style="text-decoration:none; color:white; ">Trang chủ</a>';

                        }
                        elseif($_SESSION['phanquyen']==2){
                            echo '<div>';

                            echo '</div>';

                            echo "<a  style='color:white; text-decoration: none' href='index_CapNhatTrangthai.php'>"."XÁC NHẬN TRẠNG THÁI"."</a>".'&nbsp';
                                echo '<a href="index_LienHeHoTro.php" style="text-decoration:none; color:white">LIÊN HỆ HỖ TRỢ</a>';
                                echo '<a href="index_Thongke.php" style="text-decoration:none; color:white ">THỐNG KÊ</a>';
                                //echo '<a href="index_CapNhatTrangThai.php" style="text-decoration:none; color:white">DỀ XUẤT KHỎI BỆNH</a>';
                                //echo '<a href="index_lienHe.php" style="text-decoration:none;">LIÊN HỆ HỖ TRỢ</a>';
                                echo '<a href="onglinh/danhsachbn.php" style="text-decoration:none; color:white;">QUẢN LÝ</a>';
                        }
                        elseif($_SESSION['phanquyen']==0){
                           

                            echo "<a  style='color:white; text-decoration: none' href='Admin/index.php?qlbv'>"."QUẢN LÝ THÔNG TIN BỆNH VIỆN"."</a>".'&nbsp';
                                echo '<a href="onglinh/dsttytp.php" style="text-decoration:none; color:white">QUẢN LÝ THÔNG TIN PHƯỜNG</a>';
                                echo '<a href="index_Thongke.php" style="text-decoration:none; color:white ">THỐNG KÊ</a>';
                                echo '<a href="Admin/index.php?ctk" style="text-decoration:none; color:white">CẤP TÀI KHOẢN</a>';
                                //echo '<a href="index_lienHe.php" style="text-decoration:none;">LIÊN HỆ HỖ TRỢ</a>';
                                //echo '<a href="doctor.php" style="text-decoration:none;">QUẢN LÝ</a>';
                        }
                        elseif($_SESSION['phanquyen']==3){
                            echo "<a  style='color:white; text-decoration: none' href='Khuong/Tokhaiyte.php'>"."KHAI BÁO Y TẾ"."</a>".'&nbsp';
                                echo '<a href="contact1.php" style="text-decoration:none; color:white">LIÊN HỆ HỖ TRỢ</a>';
                                //echo '<a href="index_Thongke.php" style="text-decoration:none; color:white ">DỀ XUẤT NHẬP VIỆN</a>';
                                echo '<a href="tst.php" style="text-decoration:none; color:white">GIẤY XÁC NHẬN KHỎI BỆNH</a>';
                                echo '<a href="KieuLinh/benhnhan/ycdt.php" style="text-decoration:none; color:white">GỞI YÊU CẦU ĐIỀU TRỊ</a>';

                                //echo '<a href="index_lienHe.php" style="text-decoration:none;">XUẤT GIẤY XÁC NHẬN</a>';
                                //echo '<a href="doctor.php" style="text-decoration:none;">QUẢN LÝ</a>';
                        }
                        ?>
                        
                    </td>
                </tr>
            </table>
        </div>
                    
            </div>
        
        
        <div class="content">
                <?php
					if(isset($_REQUEST["getbenhvien"])){
						include("View/vDexuat.php");
						include("View/vPhieu.php");
					}elseif(isset($_REQUEST["benhvien"])){
						include("View/vXacnhanchuyenvien.php");
					}elseif(isset($_REQUEST["getbenhnhan"]) || isset($_REQUEST["Comp"])){
						include("View/vPhieuyeucau.php") ;
					}elseif(isset($_REQUEST["thongke"])){
						include("View/vThongke_index.php");
					}elseif(isset($_REQUEST["nam"])){
						include("View/vThongke.php");
                    }elseif($_SESSION['phanquyen']==0){
						echo '<div id="left">';
                            //echo '<img src="images/234310508-329287035543551-3935-3325-9373-1628923505.png" width="100%" height="100%">';
                            echo "<br>";
                            echo '<div>';
                            
                            echo'<marquee direction="right" style="color: green;"> Tuân thủ nguyên tắc 5k để bản vệ sức khỏe cộng đồng</marquee>';
                                echo '<h4 style="text-align:center; background-color:pink; background-clip:content-box;;font-size: 25px;text-shadow: 1px 0 0 #00C, -1px 0 0 #00C, 0 1px 0 #00C, 0 -1px 0 #00C, 1px 1px #00C, -1px -1px 0 #00C, 1px -1px 0 #00C, -1px 1px 0 #00C; color:#FFF">ĐÂY LÀ TRANG ADMIN</h4>';
                            echo '</div>';
                            echo '<br>';
                            echo '<div  style="margin-left:50px;font-size:18px; color: black;">';
                                echo "THÔNG TIN ADMIN".'<br>';
                                echo "Mã nhân viên: ".$_SESSION["id_chucvu"].'<br>';
                                echo "Tên nhân viên: ".$_SESSION["tennhanvien"].'<br>';
                                echo "Số điện thoại: ".$_SESSION["sdt"].'<br>';
                                echo "Email: ".$_SESSION["email"].'<br>';
                                echo "Ngày sinh: ".$_SESSION["ngaysinh"].'<br>';
                            echo "</div>";
                          
                        echo '</div>';
                        echo '<div id="right">';
                            echo '<img src="images/b-hcdc.png" width="100%" height="32%"></br>';
                            echo '<img src="images/b-1022.png" width="100%" height="32%"></br>';
                            echo '<img src="images/b-mapcovid.png" width="100%" height="32%">';
                    echo '</div>';
					}elseif($_SESSION['phanquyen']==1){
						echo '<div id="left">';
                            //echo '<img src="images/234310508-329287035543551-3935-3325-9373-1628923505.png" width="100%" height="100%">';
                            echo "<br>";
                            echo '<div>';
                            
                            echo'<marquee direction="right" style="color: green;"> Tuân thủ nguyên tắc 5k để bản vệ sức khỏe cộng đồng</marquee>';
                                echo '<h4 style="text-align:center; background-color:pink; background-clip:content-box;;font-size: 25px;text-shadow: 1px 0 0 #00C, -1px 0 0 #00C, 0 1px 0 #00C, 0 -1px 0 #00C, 1px 1px #00C, -1px -1px 0 #00C, 1px -1px 0 #00C, -1px 1px 0 #00C; color:#FFF">'.$_SESSION['tenbv'].'</h4>';
                            echo '</div>';
                            echo '<br>';
                            echo '<div  style="margin-left:50px;font-size:18px; color: black;">';
                                echo "THÔNG TIN NHÂN VIÊN".'<br>';
                                echo "Mã nhân viên: ".$_SESSION["id_chucvu"].'<br>';
                                echo "Tên nhân viên: ".$_SESSION["tennhanvien"].'<br>';
                                echo "Số điện thoại: ".$_SESSION["sdt"].'<br>';
                                echo "Email: ".$_SESSION["email"].'<br>';
                                echo "Quê quán: ".$_SESSION["quequan"].'<br>';
                            echo "</div>";
                          
                        echo '</div>';
                        echo '<div id="right">';
                            echo '<img src="images/b-hcdc.png" width="100%" height="32%"></br>';
                            echo '<img src="images/b-1022.png" width="100%" height="32%"></br>';
                            echo '<img src="images/b-mapcovid.png" width="100%" height="32%">';
                    echo '</div>';
					
                    }elseif($_SESSION['phanquyen']==2){
						echo '<div id="left">';
                            //echo '<img src="images/234310508-329287035543551-3935-3325-9373-1628923505.png" width="100%" height="100%">';
                            echo "<br>";
                            echo '<div>';
                            
                            echo'<marquee direction="right" style="color: green;"> Tuân thủ nguyên tắc 5k để bản vệ sức khỏe cộng đồng</marquee>';
                                echo '<h4 style="text-align:center; font-size: 25px; background-color:pink;;text-shadow: 1px 0 0 #00C, -1px 0 0 #00C, 0 1px 0 #00C, 0 -1px 0 #00C, 1px 1px #00C, -1px -1px 0 #00C, 1px -1px 0 #00C, -1px 1px 0 #00C; color:#FFF">'.$_SESSION['tenphuong'].'</h4>';
                            echo '</div>';
                            echo '<br>';
                            echo '<div  style="margin-left:50px;font-size:18px; color: black;">';
                                echo "THÔNG TIN NHÂN VIÊN".'<br>';
                                echo "Mã nhân viên: ".$_SESSION["id_chucvu"].'<br>';
                                echo "Tên nhân viên: ".$_SESSION["tennhanvien"].'<br>';
                                echo "Số điện thoại: ".$_SESSION["sdt"].'<br>';
                                echo "Email: ".$_SESSION["email"].'<br>';
                                echo "Quê quán: ".$_SESSION["quequan"].'<br>';
                            echo "</div>";
                          
                        echo '</div>';
                        echo '<div id="right">';
                            echo '<img src="images/b-hcdc.png" width="100%" height="32%"></br>';
                            echo '<img src="images/b-1022.png" width="100%" height="32%"></br>';
                            echo '<img src="images/b-mapcovid.png" width="100%" height="32%">';
                    echo '</div>';
					}elseif($_SESSION['phanquyen']==3){
						echo '<div id="left">';
                            //echo '<img src="images/234310508-329287035543551-3935-3325-9373-1628923505.png" width="100%" height="100%">';
                            echo "<br>";
                            echo '<div>';
                            
                            echo'<marquee direction="right" style="color: green;"> Tuân thủ nguyên tắc 5k để bản vệ sức khỏe cộng đồng</marquee>';
                                echo '<h4 style="text-align:center; font-size: 25px;text-shadow: 1px 0 0 #00C, -1px 0 0 #00C, 0 1px 0 #00C, 0 -1px 0 #00C, 1px 1px #00C, -1px -1px 0 #00C, 1px -1px 0 #00C, -1px 1px 0 #00C; color:#FFF">'.$_SESSION['tenbv'].'</h4>';
                            echo '</div>';
                            echo '<br>';
                            echo '<div  style="margin-left:50px;font-size:18px; color: black;">';
                                echo "THÔNG TIN BỆNH NHÂN".'<br>';
                                echo "Mã bệnh nhân: ".$_SESSION["id_chucvu"].'<br>';
                                echo "Tên bệnh nhân: ".$_SESSION["tenbn"].'<br>';
                                echo "Số điện thoại: ".$_SESSION["sdt"].'<br>';
                                echo "Email: ".$_SESSION["email"].'<br>';
                                echo "Quê quán: ".$_SESSION["quequan"].'<br>';
                            echo "</div>";
    
                        echo '</div>';
                        echo '<div id="right">';
                            echo '<img src="images/b-hcdc.png" width="100%" height="32%"></br>';
                            echo '<img src="images/b-1022.png" width="100%" height="32%"></br>';
                            echo '<img src="images/b-mapcovid.png" width="100%" height="32%">';
                    echo '</div>';
					}
                ?>
            
        </div>
        <div class="clear"> </div>
		  
		   <div class="footer" style="background-image:url(images/background-top.png)"> 
		   		<div id="fo1">
                	<p>
                    Hỗ trợ điều trị COVID19_3761<br />
                    Số điện thoại:0900672345 <br />
                    Email:hotrotrilieu3761@gmail.com<br />
                    Địa chỉ: 12 Nguyễn Văn Bảo, phường 4, Quận Gò Vấp, TP.HCM  
                	</p>
           		 </div>
            	<div id="fo2">
                	<p >
                    Đường dây nóng thành phố: 1022<br />
                    Trung tâm cấp cứu: 115<br />
                    
                	</p>
            	</div>
		   </div>
		</div>

    </div>
     <?php
                }
                ?>
</body>
</html>