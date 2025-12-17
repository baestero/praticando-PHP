<?php
require dirname(__DIR__, 2) . '/vendor/autoload.php';

use Baestero\PraticandoPhp\Aula005_Encapsulamento\PessoaFisica;
use Baestero\PraticandoPhp\Aula005_Encapsulamento\PessoaJuridica;
use Baestero\PraticandoPhp\Aula005_Encapsulamento\PessoaEstrangeira;

$baestero = new PessoaFisica;
$baestero->nome = "Leonardo Baestero";
$baestero->idade = 27;
$baestero->genero = "masculino";

$pessoaEstrangeira = new PessoaEstrangeira;
$pessoaEstrangeira->nome = "Fulano de Tal";
$pessoaEstrangeira->idade = 42;
$pessoaEstrangeira->genero = "masculino";
// foi possivel acessar a propriedade cpf pois o metodo setCPF é public
$pessoaEstrangeira->setCpf("1234567");

$mob2you = new PessoaJuridica;
$mob2you->nome = "Mob2you Tecnologia LTDA";
$mob2you->cnpj = "48584785475";

//é possivel pois dessa forma pois returnDocument é public e dentro dela chama getCpf que é protected na classe pai.
dump($pessoaEstrangeira);

//não é possivel fazer o dump diretamente de getCpf()
// dump($pessoaEstrangeira->returnDocument());