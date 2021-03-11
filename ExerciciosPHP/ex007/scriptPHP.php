<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<header>Exercicio 7</header>
<section>
<?php
$ntemp=$_POST["txttemp"];
if($ntemp=="")$ntemp=0;
echo"$ntemp"."°C iguala a ".(($ntemp*1.8)+32)."°F";
?>
</section>
<footer>Lucas Adriano Santos</footer>
</html>
