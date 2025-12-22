<?php
require dirname(__DIR__, 2) . '/vendor/autoload.php';

use Baestero\PraticandoPhp\Aula006_Interfaces\PessoaFisica;
use Baestero\PraticandoPhp\Aula006_Interfaces\PessoaJuridica;
use Baestero\PraticandoPhp\Aula006_Interfaces\PessoaEstrangeira;

$baestero = new PessoaFisica;
$baestero->nome = "Leonardo Baestero";
$baestero->idade = 27;
$baestero->genero = "masculino";
$baestero->cpf = "123456";


$pessoaEstrangeira = new PessoaEstrangeira;
$pessoaEstrangeira->nome = "Fulano de Tal";
$pessoaEstrangeira->idade = 42;
$pessoaEstrangeira->genero = "masculino";
// foi possivel acessar a propriedade cpf pois o metodo setCPF é public
$pessoaEstrangeira->setCpf("1234567");

$mob2you = new PessoaJuridica;
$mob2you->nome = "Mob2you Tecnologia LTDA";
$mob2you->cnpj = "48584785475";

dump($baestero->getCpf());
dump($mob2you->getCnpj());