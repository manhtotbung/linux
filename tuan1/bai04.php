<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhap email</title>
</head>
<body>
    
    <form action="" method="post">
       nhap dia chi email: <input type = "text" name = "email">

       <input type = "submit" name = "submitbtn">

    </form>
    <?php
        if(isset($_POST['email']))
        {
            $string = $_POST['email'];
            $explode = explode("@",$string)[0];
            echo $explode;
        }
        else
        echo "try again!";
      
     ?>

</body>
</html>