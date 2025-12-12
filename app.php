<?php

require_once __DIR__ . "/src/001 - Classes/PessoaFisica.php";

$pessoaFisica = new PessoaFisica();
$pessoaFisica->setNome(nome: "Baestero");
$pessoaFisica->setEmail(email: "Baestero@email.com");
$pessoaFisica->setCpf(cpf: "4875874874574");
$pessoaFisica->setTelefone(telefone: "1195587458");
$pessoaFisica->setIdade(idade: 27);

var_dump(value: $pessoaFisica);
print_r($pessoaFisica);