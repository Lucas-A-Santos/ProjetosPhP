<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<header>Exercicio 6</header>
<section>
<?php
$nsal=$_POST["txtsal"];
$nhor=$_POST["txthor"];
if ($nsal=="" || $nsal<0) $nsal=0;
if ($nhor=="" || $nhor<0) $nhor=0;

echo"Recebendo <strong>R$ $nsal</strong> por hora e tendo trabalhado <strong>$nhor</strong> horas voce recebeu";
echo"<br><strong>R$ ".($nsal*$nhor)."</strong> Neste mês";
?>
</section>
<footer>Lucas Adriano Santos</footer>
</html>
