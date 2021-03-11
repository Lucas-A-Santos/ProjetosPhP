<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<header>Exercicio 5</header>
<section>
<?php
$n1=$_POST["txtn1"];
if ($n1=="")$n1=0;
if ($n1<0)$n1*=-1;
echo"A Area de um Quadrado de lado $n1 é ".$n1**2;
?>
</section>
<footer>Lucas Adriano Santos</footer>
</html>
