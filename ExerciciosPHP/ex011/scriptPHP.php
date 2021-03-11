<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 11</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<header>Exercicio 11</header>
<section>
    <?php
    $nsal=$_POST["txtsal"];
    $nhor=$_POST["txthor"];
    $nBRUT=$nsal*$nhor;
    $nIMPR=($nBRUT*11)/100;
    $nINSS=($nBRUT*8)/100;
    $nSIND=($nBRUT*5)/100;
    $nDESC=$nIMPR+$nINSS+$nSIND;
    $nLIQD=$nBRUT-$nDESC;


    if ($nsal=="" || $nsal<0) $nsal=0;
    if ($nhor=="" || $nhor<0) $nhor=0;

    echo"Recebendo <strong>R$ $nsal</strong> por hora e tendo trabalhado <strong>$nhor</strong> horas voce recebeu";
    echo"<br><strong>R$ $nBRUT </strong> Neste mês<br>";
    echo"<br>MAS Levando em conta o Imposto de Renda, o INSS e o sindicato, é listado os descontos:<br>";
    echo
    "
    Salário Bruto    : R$ $nBRUT<br>
    IR (11%)         : R$ $nIMPR<br>
    INSS (8%)        : R$ $nINSS<br>
    Sindicato ( 5%)  : R$ $nSIND<br>
    Descontos Totais : R$ $nDESC<br>
    Salário Liquido  : R$ $nLIQD<br>
    
    ";

    ?>
</section>
<footer>Lucas Adriano Santos</footer>
</html>
