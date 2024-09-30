<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KET QUA HOC TAP</title>
<style>
    

</style>

</head>
<body>
    <h1><center>KET QUA HOC TAP<center></h1>
 
    <?php 
        
    if(isset($_POST['btnXemkq'])){
            $diemHK1 =  $_POST['diemHK1'];
            $diemHK2 =  $_POST['diemHK2'];

            $DTB = ($diemHK1 + $diemHK2 *2 ) / 3;
            if($DTB >= 5)
            {
                $xemDTB ="duoc len lop";

            }
            elseif($DTB < 5 ){
                $xemDTB ="o lai lop";

            }

            if($DTB >= 8){
                $xepHang ="Gioi";

            }
            elseif($DTB < 8 && $DTB > 6.5 ){
                $xepHang ="Kha";

            }
            elseif($DTB >= 5 && $DTB < 6.5 ){
                $xepHang ="Trung binh";

            }
            elseif($DTB <5 ){
                $xepHang = "Yeu";
            }

 
    }
  ?>

    <form action="bai01.php" method="POST">
       Diem HK1:<input type="text" name="diemHK1" value = "<?php if(isset($diemHK1)) echo $diemHK1; else echo ""; ?>"> <br>
       Diem HK2:<input type="text" name="diemHK2" value = "<?php if(isset($diemHK2)) echo $diemHK2; else echo ""; ?> "><br>
       Diem trung binh:<input type="text" readonly="readonly" name="diemTB" value = "<?php if (isset($DTB)) echo $DTB; else echo ""; ?>"><br>
       Ket qua:<input type="text" readonly="readonly" name="ketqua" value = "<?php if (isset($xemDTB)) echo $xemDTB; else echo ""; ?>"><br>
       Xep loai hoc luc:<input type="text" readonly="readonly" name="xeploaihocluc" value = "<?php if (isset($xepHang)) echo $xepHang; else echo ""; ?>"><br>
       <input type="submit" value="Xem ket qua" name="btnXemkq">
    </form>

</body>
</html>