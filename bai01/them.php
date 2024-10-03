<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them thong tin SV</title>
</head>
<body>
    <form action="" method = "post">
       Ma HS:<input type="text" name ="txtMahs">
       Ten HS:<input type="text" name ="txtTenhs">
       Dia chi:<input type="text" name ="txtDiachi">
       Dien thoai:<input type="text" name ="txtSdt">
       Email:<input type="text" name ="txtEmail">
       <input type="submit" name ="btnThem" value = "luu thong tin">
    </form>

    <?php
        include_once('ketnoi.php');
        if(isset($_POST['btnThem']))
        {
            $mahs = $_POST['txtMahs'];
            $tenhs = $_POST['txtTenhs'];
            $diachi = $_POST['txtDiachi'];
            $Dienthoai = $_POST['txtSdt'];
            $email = $_POST['txtEmail'];

            $sql = "INSERT INTO tbl_hang_sua value('$mahs','$tenhs','$diachi','$Dienthoai','$email') ";

            if(mysqli_query($conn,$sql))
            {
                header('location:hienthi.php');
            }
            else
            echo "ket noi that bai";
        }
        mysqli_close($conn);

    
    ?>
</body>
</html>