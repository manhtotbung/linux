<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once('ketnoi.php');
        $masach=$_GET['id'];
        $sql="SELECT * from tbl_sach where Masach ='$masach'";
        $ketqua=mysqli_query($conn, $sql);
        $rows=mysqli_fetch_row($ketqua);
    ?>
    <form action="" method="POST">
        Ma sach: <input type="text" name="txtMasach" value="<?php echo $rows[0]; ?>" readonly><br>
        Ten sach: <input type="text" name="txtTensach" value="<?php echo $rows[1]; ?>"><br>
        Tac gia: <input type="text" name="txtTacgia" value="<?php echo $rows[2]; ?>"><br>
        NXB: <input type="text" name="txtNhaxb" value="<?php echo $rows[3]; ?>"><br>
        Nam xb: <input type="text" name="txtNamxb" value="<?php echo $rows[4]; ?>"><br>
        So trang: <input type="text" name="txtSotrang" value="<?php echo $rows[5]; ?>"><br>
        The loai: <input type="text" name="txtTheloai" value="<?php echo $rows[6]; ?>"><br>
        <input type="submit" name="btnSubmit" value="Sua">
    </form>
    <?php

       

        if(isset($_POST['btnSubmit']))
        {
            $masach = $_POST['txtMasach'];
            $tensach = $_POST['txtTensach'];
            $tacgia = $_POST['txtTacgia'];
            $nhaxb = $_POST['txtNhaxb'];
            $namxb = $_POST['txtNamxb'];
            $sotrang = $_POST['txtSotrang'];
            $theloai = $_POST['txtTheloai'];

            $sql="UPDATE tbl_sach set Masach ='$masach',Tensach='$tensach',Tacgia='$tacgia',Nhaxb='$nhaxb',Namxb='$namxb',Sotrang='$sotrang',Theloai='$theloai' where Masach='$masach'";
            $ketqua=mysqli_query($conn, $sql);
            if($ketqua)
            {
                header('location:hienthi.php');
            }
            else
            echo "sua khong thanh cong!";
        }
    ?>
</body>
</html>