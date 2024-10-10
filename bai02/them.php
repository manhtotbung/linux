<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Ma sach: <input type="text" name="txtMasach"><br>
        Ten sach: <input type="text" name="txtTensach"><br>
        Tac gia: <input type="text" name="txtTacgia"><br>
        NXB: <input type="text" name="txtNhaxb"><br>
        Nam xb: <input type="text" name="txtNamxb"><br>
        So trang: <input type="text" name="txtSotrang"><br>
        The loai: <input type="text" name="txtTheloai"><br>
        <input type="submit" name="btnSubmit" value="Them">
    </form>

    <?php
        include_once('ketnoi.php');
        if(isset($_POST['btnSubmit']))
        {
            $masach = $_POST['txtMasach'];
            $tensach = $_POST['txtTensach'];
            $tacgia = $_POST['txtTacgia'];
            $nhaxb = $_POST['txtNhaxb'];
            $namxb = $_POST['txtNamxb'];
            $sotrang = $_POST['txtSotrang'];
            $theloai = $_POST['txtTheloai'];

            $sql="SELECT * from tbl_sach where Masach='$masach'";
            $ketqua=mysqli_query($conn, $sql);
            if(mysqli_num_rows($ketqua)>0)
            {
                echo "trung, nhap lai";
            }
            else
            {
                $sql="INSERT INTO tbl_sach values('$masach','$tensach','$tacgia','$nhaxb','$namxb','$sotrang','$theloai')";
                $ketqua=mysqli_query($conn, $sql);
                if($ketqua)
                {
                    header('location:hienthi.php');
                }
                else
                echo "them khong thanh cong!";
            }
            }
          
        mysqli_close($conn);
    ?>
</body>
</html>