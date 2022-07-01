<?php session_start(); ?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    <link rel="stylesheet" type="text/css" href="myfile.css" />
</head>

<body>
    <div class=" container">
        <header style="background-image:url(img/background-top.png)"><img src="img/logo.jpg" width="120" height="100" />
            <div id="he1">
                <p>
                    BAN CHỈ ĐẠO QUỐC GIA <br />
                    PHÒNG CHỐNG DỊCH BỆNH COVID-19<br />
                    HỆ THỐNG TIẾP NHẬN, ĐIỀU TRỊ</p>
            </div>
        </header>
        <div class="menu">
            <a href="dangnhap.php">Đăng nhập</a>|
            <a href="#">Đăng ký</a>
            <a href="benhnhan/ycdt.php">Gửi yêu cầu điều trị</a>
        </div>
        <div class="conten">
            <div id="left"></div>
            <div id="center">
                <form id="dangnhap" name="dangnhap" method="post" action="">
                    <p>&nbsp;</p>
                    <table width="440" height="177" border="1" align="center">
                        <tr>
                            <td colspan="2" align="center">ĐĂNG NHẬP</td>
                        </tr>
                        <tr>
                            <td width="178" height="34" align="center">User name:</td>
                            <td width="300"><label for="label"></label>
                                <input name="user" type="text" id="user" required />
                            </td>
                        </tr>
                        <tr>
                            <td height="45" align="center">Password:</td>
                            <td><label for="textpass"></label>
                                <input type="password" name="pass" id="pass" required />
                            </td>
                        </tr>
                        <tr>
                            <td height="55" colspan="2" align="center"><input type="submit" name="nut" id="nut"
                                    value="Đăng nhập" /></td>
                        </tr>
                    </table>
                </form>
                <?php 
			include_once('./class/claslogin.php');
			$login =  new login();
				if(isset($_REQUEST['nut'])){
					$check = $login->mylogin($_REQUEST['user'],$_REQUEST['pass']);
					if($check == true){
						echo "<script>alert('Đăng nhập thành công')</script>";
					header ('location:nhanvien/qly.php');
				}else{
					echo "<script>alert('nhapsai')</script>";
				}
				}
				
			?>

            </div>
            <div id="right">
                <img src="img/b-1022.png" width="458px" height="160" />
                <img src="img/b-hcdc.png" width="458x" height="160" />
                <img src="img/b-mapcovid.png" width="458px" height="180" />
            </div>
        </div>

    </div>
    <div class="footer" style="background-image:url(img/background-top.png)">
        <div id="fo1">
            <p>
                Hỗ trợ điều trị COVID19_3761<br />
                Số điện thoại:0900672345 <br />
                Email:hotrotrilieu3761@gmail.com<br />
                Địa chỉ: 12 Nguyễn Văn Bảo, phường 4, Quận Gò Vấp, TP.HCM
            </p>
        </div>
        <div id="fo2">
            <p>
                Đường dây nóng thành phố: 1022<br />
                Trung tâm cấp cứu: 115<br />
                Trung tâm kiểm soát bệnh tật:(08)69 577 113
            </p>
        </div>
    </div>
    </div>
</body>

</html>