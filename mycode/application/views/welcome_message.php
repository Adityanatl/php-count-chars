<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
</head>
<body>
<form method="post" action="main" >

<h1><center>Silahkan ketik kalimat yang ingin anda hitung<center></h1>

<p><center>Kalimat : <input type="text" name="kalimat" placeholder="kalimat" ><center></p>

<p><center><input type="submit" name="submit" value="submit"><center></p>

</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
    $kalimat=$_POST['kalimat'];

    echo("<br/><h2>Jumlah tiap Karakter pada kalimat '$kalimat' sebagai berikut </h2>");
    $a=count_chars($kalimat, 1);
    foreach($a as $key => $kalimat){
        if($key==32)echo("Spasi : ".$kalimat);
        else echo(chr($key)." : ".$kalimat);
        echo("<BR />");
    }
}
?>

</body>
</html>