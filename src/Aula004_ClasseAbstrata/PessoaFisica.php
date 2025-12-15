<?php
declare (strict_types=1);

namespace Baestero\PraticandoPhp\Aula004_ClasseAbstrata;
//não precisa dar "use" na classe "Pessoa" pois estamos no mesmo namespace

class PessoaFisica extends Pessoa
{
  public string $nome;
  public int $idade;
  public string $genero;
  public string $cpf;

  //Implementando método abstrato
  public function getDocument(): string
  {
    return $this->cpf;
  }
}