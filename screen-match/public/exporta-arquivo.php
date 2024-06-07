<?php

$filme = [
    'nome' => $_POST['nome'],
    'lancamento' => $_POST['ano'],
    'avaliacao' => $_POST['nota'],
    'genero' => $_POST['genero'],
];

file_put_contents(__DIR__ . '/filme.json', json_encode($filme));

header('Location: /sucesso.php?filme=' . $filme['nome']);
