<?php

require __DIR__ . '/vendor/autoload.php';

use Baestero\PraticandoPhp\Aula001_Classe\PessoaFisica;


$baestero = new PessoaFisica();
$baestero->setNome(nome: "Baestero");
$baestero->setEmail(email: "Baestero@email.com");
$baestero->setCpf(cpf: "4875874874574");
$baestero->setTelefone(telefone: "1195587458");
$baestero->setIdade(idade: 27);

var_dump(value: $baestero);
print_r($baestero);