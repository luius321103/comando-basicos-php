<?php

$quantidade = 10;

//Força o tipo de dado
$total = (float) 10.447585;

$descricao = '<a hre=""></a>';
$nome = "João";

$aceito = true;

//IF Normal
if ($quantidade === "10") {
    
} else if ($nome == "Ranlens") {
    
} else {
    
}

//Switch
switch ($quantidade) {
    case 1:
        echo "É 1";
        break;
    case 10:
        echo "É 10";
        break;
    default:
        echo "Não é nada";
        break;
}

//IF Else dentro de um echo
echo $nome == "João" ? 'É igual a joão' : null;
echo "<br/><br/>";

//Loop While
$contador = 10;
while ($contador < 10) {

    echo $contador;
    echo "<br/>";

    //Incremento
    $contador++;
}

echo "<br/><br/>";

//Loop For
for ($index = 0; $index < 10; $index++) {
    echo $index;
    echo "<br/>";
}

echo "<br/><br/>";

//Loop Do While
do {
    echo $contador;
    echo "<br/>";

    //Incremento
    $contador++;
} while ($contador < 10);

echo "<br/><br/><br/>";

//Arrays
$listaDeAlunos = [];

$listaDeAlunos [] = "Daniel";
$listaDeAlunos [] = "Fernando";
$listaDeAlunos [] = "Milena";
$listaDeAlunos [] = "Lucas";
$listaDeAlunos [] = "Alexandre";

//Remove um elemento do array
unset($listaDeAlunos[0]);

//Loop for para percorrer array
for ($i = 0; $i < count($listaDeAlunos); $i++) {
    echo $listaDeAlunos [$i];
    echo "<br/>";
}

echo "<br/><br/>";

//Loop foreach
foreach ($listaDeAlunos as $index=>$aluno) {
    echo $aluno." | Posição: ".$index;
    echo "<br/>";
}


?>
