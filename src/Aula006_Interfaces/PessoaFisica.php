<?php
declare (strict_types=1);

namespace Baestero\PraticandoPhp\Aula006_Interfaces;
//não precisa dar "use" na classe "Pessoa" pois estamos no mesmo namespace

class PessoaFisica extends Pessoa implements PessoaFisicaInterface
{
  public string $nome;
  public int $idade;
  public string $genero;
  public string $cpf;


  public function getCpf(): string
  {
   return $this->cpf;
  }
}