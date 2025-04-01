<?php

// Simulação de um banco de dados com várias contas de um cliente
$contas = [
    ["numero" => "12345-6", "cpf" => "111.222.333-44", "saldo" => 2500.75],
    ["numero" => "23456-7", "cpf" => "111.222.333-44", "saldo" => 1850.50],
    ["numero" => "34567-8", "cpf" => "111.222.333-44", "saldo" => 320.00],
    ["numero" => "45678-9", "cpf" => "111.222.333-44", "saldo" => 5600.90],
    ["numero" => "56789-0", "cpf" => "111.222.333-44", "saldo" => 780.30]
];

// Solicitar ao usuário o número da conta para consulta
echo "Digite o número da conta que deseja consultar: ";
$numeroConta = trim(fgets(STDIN));

// Buscar a conta informada
$encontrado = false;
foreach ($contas as $conta) {
    if ($conta['numero'] === $numeroConta) {
        echo "\n=== Dados da Conta ===\n";
        echo "Número da Conta: {$conta['numero']}\n";
        echo "CPF do Proprietário: {$conta['cpf']}\n";
        echo "Saldo: R$ " . number_format($conta['saldo'], 2, ',', '.') . "\n";
        $encontrado = true;
        break;
    }
}

if (!$encontrado) {
    echo "Conta não encontrada.\n";
}
