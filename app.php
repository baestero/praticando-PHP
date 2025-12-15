<?php
require __DIR__ . '/vendor/autoload.php';

use Baestero\PraticandoPhp\Aula004_ClasseAbstrata\PessoaFisica;
use Baestero\PraticandoPhp\Aula004_ClasseAbstrata\PessoaJuridica;
use Baestero\PraticandoPhp\Aula004_ClasseAbstrata\Pessoa;

$baestero = new PessoaFisica;
$baestero->nome = "Leonardo Baestero";
$baestero->idade = 27;
$baestero->genero = "masculino";
$baestero->cpf = "48598785487";

$mob2you = new PessoaJuridica;
$mob2you->nome = "Mob2you Tecnologia LTDA";
$mob2you->cnpj = "48584785475";


dump($baestero);
dump($mob2you);


//propriedades também herdadas
// dump($baestero->showName());
// dump($mob2you->showName());



// if($mob2you instanceof Pessoa)
// {
//   dump("É Pessoa também");
// } else 
// {
//   dump('Não é Pessoa');
// }


function getName(Pessoa $class): void
{
  $class->showName();
  echo $class->getDocument();
}

getName($baestero);
getName($mob2you);

//Se Pessoa Juridica é um extend de Pessoa, $mob2you é uma instancia tanto de Pessoa como de Pessoa Juridica, porém de Pessoa fisica não.

// Use type hint para garantir contrato
// Use instanceof só para lógica condicional


//Exemplo:

// function gerarDocumento(Pessoa $pessoa): string
// {
//     if ($pessoa instanceof PessoaFisica) {
//         return "CPF: {$pessoa->cpf}";
//     }

//     if ($pessoa instanceof PessoaJuridica) {
//         return "CNPJ: {$pessoa->cnpj}";
//     }

//     throw new Exception("Tipo de pessoa não suportado");
// }