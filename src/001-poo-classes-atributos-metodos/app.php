<?php

$AULA = "001-poo-classes-atributos-metodos";

require_once __DIR__ . "/src/$AULA/PessoaFisica.php";


$baestero = new PessoaFisica();
$baestero->setNome(nome: "Baestero");
$baestero->setEmail(email: "Baestero@email.com");
$baestero->setCpf(cpf: "4875874874574");
$baestero->setTelefone(telefone: "1195587458");
$baestero->setIdade(idade: 27);

var_dump(value: $baestero);
print_r($baestero);