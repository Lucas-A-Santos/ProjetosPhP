<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 15</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<header>Exercicio 15</header>
<section>
<?php
function delta($A,$B,$C){
    $delta=($B**2)-(4*$A*$C);
    if ($delta==0) echo"DELTA iqual a 0";
    else if ($delta<0) echo"DELTA menor que 0";
    else if ($delta>0)
    {
        echo"DELTA maior que 0";
        $x1=(($B*-1)+sqrt($delta))/(2*$A);
        $x2=(($B*-1)-sqrt($delta))/(2*$A);
        echo"<br> X1=$x1 , X2=$x2";
    }
}
$n1=$_POST["txtA"];
$n2=$_POST["txtB"];
$n3=$_POST["txtC"];
delta($n1,$n2,$n3);


?>
</section>
<footer>Lucas Adriano Santos</footer>
</html>
<!--
 delta=b**2-4*a*c

 x1=-b+sqrt(delta)/2a

 x2=-b-sqrt(delta)/2a
-->