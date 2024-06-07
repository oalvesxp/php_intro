<?php

function exibeMensagemLancamento(int $ano): void {
    if ($ano > 2022) {
        echo "Esse filme é um lançamento" . PHP_EOL;
    } elseif($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda é novo" . PHP_EOL;
    } else {
        echo "Esse filme não é um lançamento" . PHP_EOL;
    }
}

function incluidoNoPlano(bool $prime, int $ano): bool {
    return $prime || $ano < 2020;
}

function criaFilme(string $nome, int $ano, float $nota, string $genero): array
{
    return [
        'nome' => $nome,
        'ano' => $ano,
        'nota' => $nota,
        'genero' => $genero
    ];
}
