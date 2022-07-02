<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px solid" style="margin: auto; text-align: center; width: 960px">
        <tr>
            <td colspan="2" style=" text-align: left">Your Banner...</td>
        </tr>
        <tr>
            <td colspan="2">
                 <a href="index.php">Trang chu</a>&ensp;
                <a href="insert.php">Quản lý sản phẩm</a>
                
            </td>
        </tr>
        <tr>
            <td colspan="2">
                Tìm theo tên sản phẩm <input type="text" name="tiemkiem">
                <input type="button" value="Tìm">
            </td>
        </tr>
        <tr>
            
            <td>
                <?php
                        include("View/vProduct.php");
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">26_19507541_Nguyễn Tấn Hùng_Thi cuối kỳ PHP</td>
        </tr>
    </table>
</body>
</html>