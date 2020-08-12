<?php

//strtolower = deixa a string com letra minuscula
//strtoupper = deixa tudo maisculo
//ucfirst = deixa a primeira letra maiscula
//strlen - conta quantas a string
//str_replace = ela troca um determinado item ex troca o " . " por " , "
//substr = ele substitui

//$texto ="Curso Completo de PHP";
//echo strtolower($texto);


$cpf = isset($_POST['cpf']) ? $_POST['cpf']: '';
$total_string_cpf = strlen($cpf);
if($total_string_cpf != 11 && $cpf != ''){
    echo "CPF invalido<br>";
}

$texto = "456.980.328-82";
$cpf = str_replace(".", "", $texto);
$cpf = str_replace("-", "", $cpf);
echo $cpf;

$noticia = "Entenda porque seu smartphone esquenta tanto, se voce tem um smartphone.";
$noticia = substr($texto, 0, 44);
echo $noticia." ...";


?>

<form method="post" action=""> <!-- Não definimos o action pq quero que ele mande para a mesma pagina-->

    <label>
    CPF*:
    <input type="text" name="cpf">
    </label>

    <input type="submit" value="cadastrar">

</form>