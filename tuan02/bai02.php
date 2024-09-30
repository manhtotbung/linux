<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
        if(isset($_POST['btnTim']))
        {   
            
            $soA = $_POST['txtSoa'];
            $soB = $_POST['txtSob'];
            if(is_numeric($soA) && is_numeric($soB))
            {
                if($soA > $soB)
                {
                    $solonhon = $soA;
                }
                else
                {
                    $solonhon = $soB;
                }
            } else 
            {
                echo "khong phai la so vui long nhap lai";
            }
        }
    ?>

    <h1>Tìm số lớn hơn</h1> 

    <form action="" method = "post">

        Số A: <input type="text" name="txtSoa" value= "<?php if(isset($soA)) echo $soA; else echo ""; ?>" ><br>
        Số B: <input type="text" name="txtSob" value= "<?php if(isset($soB)) echo $soB; else echo ""; ?>" ><br>
        Số lớn hơn: <input type="text" name="txtLonhon" value= " <?php if(isset($solonhon)) echo $solonhon; else echo ""; ?>" ><br>
        <input type="submit" name="btnTim" value="Tìm">
    </form>


</body>
</html>