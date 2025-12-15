<?php

declare (strict_types=1);

namespace Baestero\PraticandoPhp\Aula004_ClasseAbstrata;


abstract Class Pessoa 
{
  public string $nome;

  public function showName():void
  {
  echo $this->nome . PHP_EOL;
  }

  //método abstrato
  // as proprias classes vão definir esse método da sua forma
  abstract public function getDocument(): string;
}