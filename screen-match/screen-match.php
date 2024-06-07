<?php

include_once __DIR__ . '/funcoes.php';

echo "Bem-vindo(a) ao screen match!" . PHP_EOL;

$nomeFilme = "Top Gun: Maverick";
$nomeFilme = "Thor: Ragnarok";
//$nomeFilme = "Se beber não case";

$anoLancamento = 2022;

$quantidadeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador += 1) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeNotas;
$planoPrime = true;
$premium = incluidoNoPlano($planoPrime, $anoLancamento);

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do Filme: {$nomeFilme}" . PHP_EOL;
echo "Nota do Filme: {$notaFilme}" . PHP_EOL;
echo "Ano de Lançamento: {$anoLancamento}" . PHP_EOL;
echo exibeMensagemLancamento($anoLancamento);
echo "Plano prime? [1 = Sim]: {$premium}" . PHP_EOL;

$genero = match($nomeFilme) {
    "Top Gun: Maverick" => 'Acao',
    "Thor: Ragnarok" => 'Super-Heroi',
    "Se beber não case" => 'Comedia',
    Default => 'Genero desconhecido',
};

echo "Gênero do Filme: {$genero}" . PHP_EOL;
echo PHP_EOL;

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "Super-Heroi",
];

$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);
