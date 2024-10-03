<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'QL_ban_sua';

    $conn = mysqli_connect($hostname, $username, $password, $database);
    if(!$conn)
    {
        echo "ket noi khong thanh cong";
    }
 

?>