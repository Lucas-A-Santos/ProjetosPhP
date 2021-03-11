<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 12</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<header>Exercicio 12</header>
<section>
<?php
function calc($n1,$n2,$n3,$n4){
    $nmedia=($n1+$n2+$n3+$n4)/4;
    echo"A Media de $n1, $n2, $n3 e $n4 é $nmedia<br>";
    if($nmedia>=5) return 1;
    else return 0;
}
$n1=$_POST["txtn1"];
$n2=$_POST["txtn2"];
$n3=$_POST["txtn3"];
$n4=$_POST["txtn4"];
$res=0;
if ($n1=="" || $n1<0)$n1=0;
if ($n2=="" || $n2<0)$n2=0;
if ($n3=="" || $n3<0)$n3=0;
if ($n4=="" || $n4<0)$n4=0;
if ($n1>10)$n1=10;
if ($n2>10)$n2=10;
if ($n3>10)$n3=10;
if ($n4>10)$n4=10;

if(calc($n1,$n2,$n3,$n4)==1) echo"Aluno Aprovado";
else echo"Aluno Reprovado";
?>
</section>
<footer>Lucas Adriano Santos</footer>
</html>
