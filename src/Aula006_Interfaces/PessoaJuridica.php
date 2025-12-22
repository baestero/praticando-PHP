<?php

namespace Baestero\PraticandoPhp\Aula006_Interfaces;


class PessoaJuridica extends Pessoa implements PessoaJuridicaInterface
{
  //Conceito DRY = Don't repeat yourself (não se repita).
    public string $cnpj;

    public function getCnpj(): string
    {
      return $this->cnpj;
    }

}