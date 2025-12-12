<?php

require __DIR__ . '/vendor/autoload.php';

use Baestero\PraticandoPhp\Aula002_Construct\PessoaFisica;

//Remoção do metodo set passando as props como argumentos

$baestero = new PessoaFisica(
nome: "Baestero",
email: "Baestero@email.com", 
telefone: "1195587458", 
cpf: "4875874874574", 
idade: 27
);

var_dump(value: $baestero);
print_r($baestero);

var_dump($baestero->getInformation());
//string(21) "Baestero - Ser humano"

//chamando uma constante
//var_dump(PessoaFisica::OBJECT_TYPE);