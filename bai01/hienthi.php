<?php

    echo "<table width = '80%' border = '1px'>";
    echo "<tr>";
    echo "<td> Ma HS </td>";
    echo "<td> Ten HS </td>";
    echo "<td> Dia Chi </td>";
    echo "<td> Dien thoai</td>";
    echo "<td> Email</td>";
    echo "<td> Sua</td>";
    echo "<td> Xoa</td>";
    echo "</tr>";
     
    include_once('ketnoi.php');

    $sql = "SELECT * FROM tbl_hang_sua";
    $ketqua = mysqli_query($conn, $sql);

    while($rows = mysqli_fetch_row($ketqua))
    {
        echo "<tr>";
        echo "<td>".$rows[0]."</td>";
        echo "<td>".$rows[1]."</td>";
        echo "<td>".$rows[2]."</td>";
        echo "<td>".$rows[3]."</td>";
        echo "<td>".$rows[4]."</td>";
        echo "<td><a href ='sua.php'> sua </a></td>"; 
        echo "<td><a href= 'xoa.php'> xoa </a></td>";
        echo "</tr>";
    } 
    echo "</table>";

?>

