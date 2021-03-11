<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 9</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<header>Exercicio 9</header>
<section>
<?php
$n1=$_POST["txtn1"];
$n2=$_POST["txtn2"];
if ($n1=="")$n1=0;
if ($n2=="")$n2=0;
echo "Valor de A:$n1 , Valor de B:$n2 <br>";
if ($n1==$n2) echo"A é igual a B";
else if($n1>$n2) echo"A é maior que B";
else echo"A é menor que B";
?>
</section>
<footer>Lucas Adriano Santos</footer>
</html>
