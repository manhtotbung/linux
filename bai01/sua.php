<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sua thong tin </title>
</head>
<body>
    <?php 
        include('ketnoi.php');
    ?>
    <?php
        $mahs = $_GET['id'];
        $sql = "SELECT * FROM tbl_hang_sua where mahs = '$mahs'";
        $ketqua = mysqli_query($conn, $sql);
        $rows = mysqli_fetch_row($ketqua);
    ?>
    <form action="" method = "post">
        Ma hs: <input type="text" name= "txtMahs" value = "<?php echo $rows[0]; ?>" readonly>
        Ten hs: <input type="text" name= "txtTenhs" value = "<?php echo $rows[1]; ?>">
        Dia chi: <input type="text" name= "txtDiachi" value = "<?php echo $rows[2]; ?>">
        Dien thoai: <input type="text" name= "txtDienthoai" value = "<?php echo $rows[3]; ?>">
        Email: <input type="text" name= "txtEmail" value = "<?php echo $rows[4]; ?>">
        <input type="submit" name = "btnSua" value= "luu thong tin">
    </form>

    <?php
    if(isset($_POST['btnSua']))
    {
        $mahs = $_POST['txtMahs'];
        $tenhs = $_POST['txtTenhs'];
        $diachi = $_POST['txtDiachi'];
        $dienthoai = $_POST['txtDienthoai'];
        $email = $_POST['txtEmail'];

        $sql = "UPDATE tbl_hang_sua set tenhs = '$mahs',tenhs = '$tenhs', diachi = '$diachi', sdt ='$dienthoai', email= '$email' where mahs ='$mahs' ";
        $ketqua = mysqli_query($conn, $sql);

        if($ketqua)
        {
            header('location:hienthi.php');
        }
        else
        {
            echo "sua that bai";
        }
        mysqli_close($conn);
    }

    ?>


</body>
</html>