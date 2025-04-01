<?php

// Definição da "base de dados" de usuários e senhas
$usuarios = [
    "admin" => "1234",
    "usuario1" => "senha123",
    "guest" => "guestpass",
    "Bruna" => "1234"
];

// Loop para solicitar login até que seja bem-sucedido
do {
    echo "Usuário: ";
    $usuario = trim(fgets(STDIN));

    echo "Senha: ";
    if (PHP_OS_FAMILY == 'Linux' || PHP_OS_FAMILY == 'Darwin') {
        system('stty -echo');
        $senha = trim(fgets(STDIN));
        system('stty echo');
        echo "\n";
    } else {
        $senha = trim(fgets(STDIN));
    }

    if (isset($usuarios[$usuario])) {
        if ($usuarios[$usuario] === $senha) {
            echo "Login bem-sucedido! Bem-vindo, $usuario.\n";
            break;
        } else {
            echo "Erro: Senha incorreta.\n";
        }
    } else {
        echo "Erro: Usuário não encontrado.\n";
    }
}while(true);