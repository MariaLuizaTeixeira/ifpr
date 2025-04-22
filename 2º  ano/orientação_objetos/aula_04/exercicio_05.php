<?php

// ler os dados de 4 pessoas armazenando em uma matriz

$pessoas = array();
for ($i = 1; $i <= 4; $i++) {
    print("\n Pessoa " . $i . "º\n");
    $pessoa["nome"] = readline("Informe o nome: ");
    $pessoa["idade"] = readline("Informe a idade: ");
    $pessoa["cidade"] = readline("Informe a cidade: ");
    $pessoa["profissao"] = readline("Informe a profissao: ");

    array_push($pessoas, $pessoa);
}

// percorrer a matriz para encontrar a pessoa mais velha

$mais_velha = $pessoas[0];

foreach ($pessoas as $chave) {
    if ($chave["idade"] > $mais_velha["idade"]) {
        $mais_velha = $chave;
    }
}

print("\nDados da pessoa mais velha: ");
print("Nome - " . $mais_velha["nome"] . "\n");
print("Idade - " . $mais_velha["idade"] . "\n");
print("Cidade - " . $mais_velha["cidade"] . "\n");
print("Profissão - " . $mais_velha["profissao"] . "\n");
