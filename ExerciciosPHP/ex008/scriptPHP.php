<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 8</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<header>Exercicio 8</header>
<section>
<?php
$n1=$_POST["txtn1"];
if($n1=="")$n1=0;
if($n1>10)echo"$n1 é maior que 10";
else echo"$n1 é menor ou iqual a 10";
?>
</section>
<footer>Lucas Adriano Santos</footer>
</html>
