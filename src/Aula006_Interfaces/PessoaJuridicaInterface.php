<?php
declare(strict_types=1);

namespace Baestero\PraticandoPhp\Aula006_Interfaces;

interface PessoaJuridicaInterface
{
  //sempre os métodos em uma interface devem ser públicos
  public function getCnpj(): string;  //contrato
}