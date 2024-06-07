<?php

echo "Bem-vindo(a) ao screen match!" . PHP_EOL;

$nomeFilme = "Top Gun: Maverick";
$nomeFilme = "Thor: Ragnarok";
//$nomeFilme = "Se beber não case";

$anoLancamento = 2022;

$quantidadeNotas = $argc - 1;
$somaDeNotas = 0;

for ($contador = 1; $contador < $argc; $contador += 1) {
    $somaDeNotas += $argv[$contador];
}

$notaFilme = $somaDeNotas / $quantidadeNotas;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do Filme: {$nomeFilme}" . PHP_EOL;
echo "Nota do Filme: {$notaFilme}" . PHP_EOL;
echo "Ano de Lançamento: {$anoLancamento}" . PHP_EOL;

if ($anoLancamento > 2022) {
    echo "Este filme é um lançamento!" . PHP_EOL;
} elseif ($anoLancamento > 2020 && $anoLancamento <= 2022) {
    echo "Esse filme ainda é novo." . PHP_EOL;
} else {
    echo "Esse filme não é um lançamento." . PHP_EOL;
}

$genero = match($nomeFilme) {
    "Top Gun: Maverick" => 'Ação',
    "Thor: Ragnarok" => 'Super-Herói',
    "Se beber não case" => 'Comédia',
    Default => 'Gênero desconhecido',
};

echo "Gênero do Filme: {$genero}";
