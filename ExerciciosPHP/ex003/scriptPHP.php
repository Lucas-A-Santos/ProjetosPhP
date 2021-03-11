<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<header>Exercicio 3</header>
<section>
<?php
$n1=$_POST["txtn1"];
$n2=$_POST["txtn2"];
$n3=$_POST["txtn3"];
if ($n1=="" || $n1<0)$n1=0;
if ($n2=="" || $n2<0)$n2=0;
if ($n3=="" || $n3<0)$n3=0;
if ($n1>10)$n1=10;
if ($n2>10)$n2=10;
if ($n3>10)$n3=10;

echo"A Media de $n1, $n2 e $n3 é ".(($n1+$n2+$n3)/3);
?>
</section>
<footer>Lucas Adriano Santos</footer>
</html>
