<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 14</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<header>Exercicio 14</header>
<section>
<?php
function fib($n)
{
    if ($n==0) return 0;
    else if($n==1) return 1;
    else {
        return (fib($n-1)+fib($n-2));
    }

}
$n1=$_POST["txtn1"];
if ($n1<0 || $n1=="") $n1=0;
for ($c=0; $c<=$n1;$c++) {
    //echo("<br><br>$c<br><br>");
    echo(fib($c)." ");
}
?>
</section>
<footer>Lucas Adriano Santos</footer>
</html>
