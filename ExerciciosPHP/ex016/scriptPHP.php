<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 16</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<header>Exercicio 16</header>
<section>
<?php

function cresc($n1,$n2,$n3){
    if($n1>$n2 && $n1>$n3) $maior=$n1;
    else if($n1<$n2 && $n1<$n3) $menor=$n1;
    else $meio=$n1;

    if($n2>$n1 && $n2>$n3) $maior=$n2;
    else if($n2<$n1 && $n2<$n3) $menor=$n2;
    else $meio=$n2;

    if($n3>$n2 && $n3>$n1) $maior=$n3;
    else if($n3<$n2 && $n3<$n1) $menor=$n3;
    else $meio=$n3;
    return "$menor, $meio, $maior";
}

$n1=$_POST["txtn1"];
$n2=$_POST["txtn2"];
$n3=$_POST["txtn3"];

if ($n1==$n2 || $n1==$n3 || $n2==$n3)
{
    echo"1 ou mais valores iguais";
}
else
{
    echo cresc($n1,$n2,$n3);
}
?>
</section>
<footer>Lucas Adriano Santos</footer>
</html>
