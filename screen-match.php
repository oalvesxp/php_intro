<?php

echo "Bem-vindo(a) ao screen match!" . PHP_EOL;

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = $argv[1] ?? 2022;

$somaDeNotas = 9;
$somaDeNotas += 6;
$somaDeNotas += 8;
$somaDeNotas += 7.5;
$somaDeNotas += 5;

$notaFilme = $somaDeNotas / 5;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do Filme: {$nomeFilme}" . PHP_EOL;
echo "Nota do Filme: {$notaFilme}" . PHP_EOL;
echo "Ano de Lançamento: {$anoLancamento}" . PHP_EOL;

if ($anoLancamento > 2022) {
    echo "Este filme é um lançamento!";
} elseif ($anoLancamento > 2020 && $anoLancamento <= 2022) {
    echo "Esse filme ainda é novo.";
} else {
    echo "Esse filme não é um lançamento.";
}
