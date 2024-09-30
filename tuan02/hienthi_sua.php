<?php
    include_once('ketnoi.php');

    $sql = "SELECT * FROM tbl_hang_sua";
    $ketqua = mysqli_query($conn, $sql);

    echo "<table border = '1' width ='80%'>";
    echo "<tr>";
    echo "<td>Mã hãng sữa </td>";
    echo "<td>Tên hãng sữa </td>";
    echo "<td>Địa chỉ</td>";
    echo "<td>Điện thoại</td>";
    echo "<td>Email</td>";
    echo "<tr>";


    while($rows = mysqli_fetch_row($ketqua))
    {
        // echo "$rows[0] - $rows[1] - $rows[2] - $rows[3] - $rows[4] ";
        // echo "<br>";
        echo "<tr>";
        echo "<td>".$rows[0]."</td>";
        echo "<td>".$rows[1]."</td>";
        echo "<td>".$rows[2]."</td>";
        echo "<td>".$rows[3]."</td>";
        echo "<td>".$rows[4]."</td>";
        echo "<tr>";

    }

    echo "</table>";
    mysqli_close($conn);
?>