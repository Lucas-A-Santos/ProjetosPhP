<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<header>Exercicio 1</header>
<section>
<?php
$n = $_POST["txtnumber"];
if ($n == "") $n="nenhum";
echo"O numero informado foi $n!";
?>
</section>
<footer>Lucas Adriano Santos</footer>
</html>
