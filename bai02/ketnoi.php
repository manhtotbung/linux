<?php
    $hostname="localhost";
    $username="root";
    $pass="";
    $database="ql_thuvien";

    $conn= mysqli_connect($hostname,$username,$pass,$database);
    if(!$conn)
    {
        echo "ket noi khong thanh cong";
    }
?>