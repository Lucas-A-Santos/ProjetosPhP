<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<header>Exercicio 2</header>
<section>
<?php
$n1 = $_POST["txtn1"];
$n2 = $_POST["txtn2"];
if ($n1=="") $n1=0;
if ($n2=="") $n2=0;
echo"A Soma de $n1 e $n2 é ".($n1+$n2);
?>
</section>
<footer>Lucas Adriano Santos</footer>
</html>
