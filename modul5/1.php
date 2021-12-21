<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 1</title>
</head>
<body>
    <form action="1.php" method="post">
        <label for="inp"> masukan angka</label>
        <input type="number" name="inp" id="inp" placeholder="1575250">
        <input type="submit" value="check">
    </form>
<?php 
$jumlahUang = @$_POST['inp']; 
$a1= 100000;
$a2= 50000;
$a3= 20000;
$a4= 5000;
$a5= 100;
$a6= 50;

//a
$asisa= $jumlahUang % $a1;
$a= ($jumlahUang-$asisa)/ $a1; 
//b
$bsisa= $asisa % $a2;
$b= ($asisa-$bsisa)/$a2; 
//c
$csisa= $bsisa % $a3;
$c= ($bsisa-$csisa)/$a3;
//d
$dsisa= $csisa % $a4;
$d= ($csisa-$dsisa)/$a4;
//e
$esisa= $dsisa % $a5;
$e= ($dsisa-$esisa)/$a5;
//f
$fsisa= $esisa % $a6;
$f= ($esisa-$fsisa)/$a6;    

echo "jumlah uang awal"." "."$jumlahUang"."<br>";
echo "jumlah Rp.100.000: ".$a." "."<br>";
echo "jumlah Rp.50.000: ".$b." "."<br>";
echo "jumlah Rp.20.000: ".$c." "."<br>";
echo "jumlah Rp.5.000: ".$d." "."<br>";
echo "jumlah Rp.100: ".$e." "."<br>";
echo "jumlah Rp.50: ".$f." "."<br>";
?>
</body>
</html>
