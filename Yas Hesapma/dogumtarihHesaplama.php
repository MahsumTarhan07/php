<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarih Zaman</title>
</head>
<body>

<form action="" method="post">
    Dogum Tarihiniz <input type="text" name="dtarih">
    <input type="submit" value="Yas Hesapla" name="yasHesap">
</form>

<?php
    if(isset($_POST["yasHesap"])){
        $gecenZaman = time()-strtotime($_POST["dtarih"]);
        echo "GECEN Yıl .. :" . floor($gecenZaman/(60*60*24*365));
        echo "<br>";
        echo "Gecen Ay .. :"  . floor($gecenZaman/(60*60*24*30));
        echo "<br>";
        echo "Gecen Gün sayısı : " . floor($gecenZaman/(60*60*24));
        echo "<br>";
        
    }
?>
    
</body>
</html>