<?php

namespace Baestero\PraticandoPhp\Aula005_Encapsulamento;


class PessoaJuridica extends Pessoa
{
  //Conceito DRY = Don't repeat yourself (não se repita).
    public string $cnpj;

  //Implementando método abstrato
  public function getDocument(): string
  {
    return $this->cnpj;
  }
}