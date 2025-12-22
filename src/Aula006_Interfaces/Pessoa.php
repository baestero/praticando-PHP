<?php

declare (strict_types=1);

namespace Baestero\PraticandoPhp\Aula006_Interfaces;


abstract Class Pessoa 
{
  public string $nome;

  public function showName():void
  {
  echo $this->nome . PHP_EOL;
  }
}