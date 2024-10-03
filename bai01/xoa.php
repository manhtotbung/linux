<?php
    include('ketnoi.php');
    $mahs = $_GET['id'];

    $sql = "DELETE from tbl_hang_sua where mahs = '$mahs'";
    $ketqua = mysqli_query($conn, $sql);

    if($ketqua)
    {
        header('location:hienthi.php');
    }
    else {
        echo "xoa that bai";
    }
    
    
    mysqli_close($conn);

?>