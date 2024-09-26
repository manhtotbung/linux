<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cong tru nhan chia </title>
</head>
<body>
    <form action="" method = "post">

        nhap gia tri thu nhat: <input type="text" name= "number01"><br>
        nhap gia tri thu hai: <input type="text" name= "number02"><br>
        <input type="submit" name = "cong" value="+">
        <input type="submit" name = "tru" value="-">
        <input type="submit" name = "nhan" value="*">
        <input type="submit" name = "chia" value="/">

    </form>

    

    <?php

        if(isset($_POST['number01'], $_POST['number02'] ))
        {
          $number01 = $_POST['number01'];
          $number02 = $_POST['number02'];
         
        }

        if(is_numeric($number01) && is_numeric($number02))
        {
            if(isset($_POST['cong']))
            {
                $tong = $number01 + $number02;
                echo $tong;
            }

            if(isset($_POST['tru']))
            {
                $tong = $number01 - $number02;
                echo $tong;
            }

            if(isset($_POST['nhan']))
            {
                $tong = $number01 * $number02;
                echo $tong;
            }

            if(isset($_POST['chia']))
            {
                $tong = $number01 / $number02;
                echo $tong;
            }


        }
        else 
        echo "this is not number plz try again!!";

    ?>


</body>
</html>