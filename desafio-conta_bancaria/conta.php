<?php

$saldo = 382.55;
$titular = 'Osvaldo Alves'; 

echo '****************' . PHP_EOL;
echo "Titular: {$titular} " . PHP_EOL . "Saldo: R$ {$saldo}" . PHP_EOL;
echo '****************';

do {
    echo "\nSelecione uma opção do menu: 
    1. Consultar Saldo
    2. Sacar Valor
    3. Depositar Valor
    4. Sair
    \nOpção: ";

    $opcao = (int) fgets(STDIN);


    switch ($opcao) {
        case 1:
            echo '****************' . PHP_EOL;
            echo "Titular: {$titular} " . PHP_EOL . "Saldo: R$ {$saldo}" . PHP_EOL;
            echo '****************';
            break;
        
        case 2:
            echo "\nQual valor deseja sacar?: R$ ";
            $saque = (float) fgets(STDIN);
            if($saque > $saldo){
                echo "\nSaldo insuficiente para realizar a operação!";
            } else {
                $saldo -= $saque;
                echo "\nSaque realizado com sucesso!";
                echo "\nSeu saldo atual é: R$ {$saldo}";
            }
            break;
        
        case 3:
            echo "\nQual o valor do depósito?: R$ ";
            $deposito = (float) fgets(STDIN);
            $saldo += $deposito;
            echo "\nDepósito realizado com sucesso!";
            echo "\nSeu saldo atual é: R$ {$saldo}";
            break;
        
        case 4:
            echo "Até mais, Obrigado!\n";
            break;

        default:
            echo "Opção inválida, tente novamente.\n";
            break;
    }

} while($opcao != 4);
