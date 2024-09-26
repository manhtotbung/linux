<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tinh giai thua</title>
</head>
<body>
    
    <form action="" method= "post" >
        nhâp vào giá trị cần tìm: <input type="text" name = "giatriGT">

        <input type="submit" name = "tinhbtn"><br>
    <?php
            if(isset($_POST['giatriGT']))
            {
                if(is_numeric($_POST['giatriGT']))
                {
                $gt= 1;
                for($i=1; $i<=$_POST['giatriGT']; $i++)
                {
                    $gt = $gt * $i;
                }
                echo "$gt";
                } 
                else echo "day khong phai la so, try again!!";
            }
            
        ?>


    </form>
     
    
</body>
</html>