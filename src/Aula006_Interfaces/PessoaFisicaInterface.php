<?php
declare(strict_types=1);

namespace Baestero\PraticandoPhp\Aula006_Interfaces;

interface PessoaFisicaInterface
{
  //sempre os métodos em uma interface devem ser públicos
  public function getCpf(): string;  //contrato

}