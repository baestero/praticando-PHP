<?php

require dirname(__DIR__, 2) . '/vendor/autoload.php';

use Baestero\PraticandoPhp\Aula003_Heranca\PessoaFisica;
use Baestero\PraticandoPhp\Aula003_Heranca\PessoaJuridica;

// Classe "pai"
$pessoaFisica = new PessoaFisica();
$pessoaFisica->nome = 'Fulano de Tal';
$pessoaFisica->idade = 30;
$pessoaFisica->genero = 'masculino';

// Classe "filha" (herda tudo de PessoaFisica)
$pessoaJuridica = new PessoaJuridica();
$pessoaJuridica->nome = 'Empresa Exemplo LTDA';
$pessoaJuridica->idade = 10; // aqui é só um valor demonstrativo para reaproveitar a propriedade herdada
$pessoaJuridica->genero = 'N/A';

dump($pessoaFisica);
dump($pessoaJuridica);

echo PHP_EOL . '--- Herança: método herdado ---' . PHP_EOL;
$pessoaFisica->showName();
$pessoaJuridica->showName(); // método showName() foi herdado

echo PHP_EOL . '--- instanceof ---' . PHP_EOL;
dump($pessoaJuridica instanceof PessoaJuridica); // true
dump($pessoaJuridica instanceof PessoaFisica);   // true (porque PessoaJuridica extends PessoaFisica)


