<?php
require __DIR__ . '/vendor/autoload.php';

use Baestero\PraticandoPhp\Aula003_Heranca\PessoaFisica;
use Baestero\PraticandoPhp\Aula003_Heranca\PessoaJuridica;

$baestero = new PessoaFisica;
$baestero->nome = "Leonardo Baestero";
$baestero->idade = 27;
$baestero->genero = "masculino";

$mob2you = new PessoaJuridica;
$mob2you->nome = "Mob2you Tecnologia LTDA";
$mob2you->idade = 20;
$mob2you->genero = "N/A";

dump($baestero);
dump($mob2you);
dump($mob2you->showName());

if($mob2you instanceof PessoaFisica)
{
  dump("É pessoa fisica também");
} else 
{
  dump('Não é pessoa fisica');
  
}

//Se Pessoa Juridica é um extend de Pessoa Fisica, logo mob2you é uma instancia tanto de Pessoa Fisica, como Juridica