<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 17</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<header>Exercicio 17</header>
<section>
<?php

$text = " Essa e uma frase muito comum ";
echo"<strong>";
echo"printf() - Mostra uma string formatada";
echo"</strong>";
echo"<br><br>";

echo $text;
echo"<br><br>";
$newtext = printf($text);
echo $newtext;

echo"<br><br>";
echo"<strong>";
echo"print_r() - Imprime informação sobre uma variável de forma legível";
echo"</strong>";
echo"<br><br>";

echo $text;
echo"<br><br>";
$newtext = print_r($text);
echo $newtext;

echo"<br><br>";
echo"<strong>";
echo"wordwrap - Quebra uma string em um dado número de caracteres";
echo"</strong>";
echo"<br><br>";

echo $text;
echo"<br><br>";
$newtext = wordwrap($text, 1, " QUEBRA ");
echo $newtext;

echo"<br><br>";
echo"<strong>";
echo"strlen() - Retorna o tamanho de uma string";
echo"</strong>";
echo"<br><br>";

echo $text;
echo"<br><br>";
$newtext = strlen($text);
echo $newtext;

echo"<br><br>";
echo"<strong>";
echo"trim() - Retira espaço no ínicio e final de uma string";
echo"</strong>";
echo"<br><br>";

echo "|$text|";
echo"<br><br>";
$newtext = trim($text);
echo "|$newtext|";

echo"<br><br>";
echo"<strong>";
echo"ltrim() - Retira espaços em branco (ou outros caracteres) do início da string";
echo"</strong>";
echo"<br><br>";

echo "|$text|";
echo"<br><br>";
$newtext = ltrim($text);
echo "|$newtext|";

echo"<br><br>";
echo"<strong>";
echo"rtrim() -  Retira espaço em branco (ou outros caracteres) do final da string";
echo"</strong>";
echo"<br><br>";

echo "|$text|";
echo"<br><br>";
$newtext = ltrim($text);
echo "|$newtext|";

echo"<br><br>";
echo"<strong>";
echo"str_word_count() - Retorna informação sobre as palavras usadas em uma string";
echo"</strong>";
echo"<br><br>";

echo $text;
echo"<br><br>";
$newtext = str_word_count($text);
echo $newtext;

echo"<br><br>";
echo"<strong>";
echo"explode() - Divide uma string em strings dentro de um array";
echo"</strong>";
echo"<br><br>";

echo $text;
echo"<br><br>";
$newtext = explode(" ",$text);
for ($c=0;$c<sizeof($newtext);$c++){
    echo"[$c]=$newtext[$c] , ";
}

echo"<br><br>";
echo"<strong>";
echo"str_split() - Converte uma string para um array";
echo"</strong>";
echo"<br><br>";

echo $text;
echo"<br><br>";
$newtext = str_split($text);
for ($c=0;$c<sizeof($newtext);$c++){
    echo"[$c]=$newtext[$c] , ";
}

echo"<br><br>";
echo"<strong>";
echo"implode() - Junta elementos de uma matriz em uma string";
echo"</strong>";
echo"<br><br>";

for ($c=0;$c<sizeof($newtext);$c++){
    echo"[$c]=$newtext[$c] , ";
}
$newtext = implode($newtext);
echo"<br><br>";
echo $newtext;

echo"<br><br>";
echo"<strong>";
echo"chr() - Retorna uma string de um único caractere contendo o caracter especificado pelo ascii.";
echo"</strong>";
echo"<br><br>";

echo"ASCII 36";
echo"<br><br>";
$newtext=chr(36);
echo $newtext;

echo"<br><br>";
echo"<strong>";
echo"ord() - Retorna o valor ASCII do caracter";
echo"</strong>";
echo"<br><br>";

echo"Caracter ¢";
echo"<br><br>";
$newtext=ord('¢');
echo $newtext;

echo"<br><br>";
echo"<strong>";
echo"strtoupper() - Converte uma string para maiúsculas";
echo"</strong>";
echo"<br><br>";

echo $text;
echo"<br><br>";
$newtext=strtoupper($text);
echo $newtext;

echo"<br><br>";
echo"<strong>";
echo"strtolower() - Converte uma string para minusculas";
echo"</strong>";
echo"<br><br>";

echo $text;
echo"<br><br>";
$newtext=strtolower($text);
echo $newtext;

echo"<br><br>";
echo"<strong>";
echo"md5() - Calcula o ".chr(34)."hash MD5".chr(34)." de uma string";
echo"</strong>";
echo"<br><br>";

echo $text;
echo"<br><br>";
$newtext=md5($text);
echo $newtext;

echo"<br><br>";
echo"<strong>";
echo"crypt() - Encriptação unidirecional de string (hashing)";
echo"</strong>";
echo"<br><br>";

echo $text;
echo"<br><br>";
$newtext=crypt($text,532234);
echo $newtext;

echo"<br><br>";
echo"<strong>";
echo"hash() - Gera um valor hash";
echo"</strong>";
echo"<br><br>";

echo $text;
echo"<br><br>";
$newtext=hash('ripemd160',$text);
echo $newtext;

echo"<br><br>";
echo"<strong>";
echo"str_replace() - Substitui todas as ocorrências da string de procura com a string de substituição";
echo"</strong>";
echo"<br><br>";

echo $text;
echo"<br><br>";
$newtext=str_replace("frase","SUBSTITUIDO",$text);
echo $newtext;

echo"<br><br>";
echo"<strong>";
echo"isset() - Informa se a variável foi iniciada";
echo"</strong>";
echo"<br><br>";

echo "a variavel newtext foi iniciada?-".isset($newtext);
echo"<br><br>";
echo "a variavel oldtext foi iniciada?-".isset($oldtext);



?>
</section>
<footer>Lucas Adriano Santos</footer>
</html>