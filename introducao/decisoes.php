<?php

$idade = 14;
$trabalho = 1;

echo "Só é homem quem é maior de 14 anos ou de 12 anos quem trabalha." . PHP_EOL;

if ($idade >= 14) {
    echo "Você tem $idade anos. Você é Homem!";
} else if ($idade >= 12 && $trabalho == 1) {
    echo "Você tem $idade anos e Trabalha. Você é Homem!";
} else {
    echo "Você tem $idade. Ainda não é Homem!";
}