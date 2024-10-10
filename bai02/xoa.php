<?php
    include_once('ketnoi.php');
    $masach=$_GET['id'];
    $sql="DELETE from tbl_sach where Masach ='$masach'";
    $thucthi= mysqli_query($conn,$sql);
    if($thucthi)
    {
        echo "xoa thanh cong";
        header('location:hienthi.php');
    }
    else 
    echo "xoa khong thanh cong";
    mysqli_close($conn);
?>