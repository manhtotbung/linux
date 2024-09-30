<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'ql_ban_sua';

    $conn = mysqli_connect($hostname, $username, $password, $database);

    if(!$conn)
    {
        echo "ket noi that bai!";
    }


?>