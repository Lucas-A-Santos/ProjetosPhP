<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<header>Exercicio 10</header>
<section>
<?php
$alt=$_POST["txtalt"];
$sex=$_POST["radsex"];
if($alt=="" || $alt<0)$alt=0;
echo"O Peso Idea para a altura $alt com o sexo ";
if($sex=="M")
{
    echo"Masculino é ".((72.7*$alt) - 58);
}
else
{
    echo"Feminino é ".((62.1*$alt) - 44.7);
}
?>
</section>
<footer>Lucas Adriano Santos</footer>
</html>

