<?php

declare (strict_types=1);

namespace Baestero\PraticandoPhp\Aula003_Heranca;

class PessoaFisica
{
  public string $nome;
  public int $idade;
  public string $genero;

  public function showName():void
  {
  echo $this->nome . PHP_EOL;
  }
}