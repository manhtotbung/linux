<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="80%" border ="1px">
        <tr>
            <td>Ma sach</td>
            <td>Ten sach</td>
            <td>Tac gia</td>
            <td>Nha xb</td>
            <td>Nam xb</td>
            <td>So trang</td>
            <td>The loai</td>
            <td>Sua</td>
            <td>Xoa</td>
        </tr>

    <?php
        include_once('ketnoi.php');
        $sql="SELECT * from tbl_sach";
        $ketqua=mysqli_query($conn, $sql);
        
        while($rows=mysqli_fetch_row($ketqua))
        {
           
            echo "<tr>";
            echo "<td>".$rows[0]."</td>";
            echo "<td>".$rows[1]."</td>";
            echo "<td>".$rows[2]."</td>";
            echo "<td>".$rows[3]."</td>";
            echo "<td>".$rows[4]."</td>";
            echo "<td>".$rows[5]."</td>";
            echo "<td>".$rows[6]."</td>";
            echo "<td>"."<a href='sua.php?id=".$rows[0]."'>sua</a>"."</td>";
            echo "<td>"."<a href='xoa.php?id=".$rows[0]."'>xoa</a>"."</td>";
            echo "</tr>";
           
        }
        mysqli_close($conn);
    ?>
    </table>
    <a href='them.php'> them thong tin </a>

</body>
</html>