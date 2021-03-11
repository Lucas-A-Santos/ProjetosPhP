<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 13</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<header>Exercicio 13</header>
<section>
<?php
function pot($base,$pot){
    return $base**$pot;
}
$n1=$_POST["txtn1"];
$n2=$_POST["txtn2"];
echo"Valor1=$n1,Valor2=$n2, $n1^$n2= ".pot($n1,$n2);
?>
</section>
<footer>Lucas Adriano Santos</footer>
</html>
