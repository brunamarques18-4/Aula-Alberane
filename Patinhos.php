<?php

// Solicitar ao usuário quantos patinhos foram passear
echo "Quantos patinhos foram passear? ";
$patinhos = (int) trim(fgets(STDIN));

// Gerar a letra da música
while ($patinhos > 0) {
    echo "{$patinhos} patinho(s) foi/foram passear\n";
    echo "Além das montanhas para brincar\n";
    echo "A mamãe gritou: Quá, quá, quá, quá\n";
    $patinhos--;
    echo "Mas só {$patinhos} patinho(s) voltaram de lá.\n\n";
}

// Mamãe Patinha encontra todos os patinhos
echo "A mamãe patinha foi procurar\n";
echo "Além das montanhas na beira do mar\n";
echo "A mamãe gritou: Quá, quá, quá, quá\n";
echo "E todos os patinhos voltaram de lá!\n";