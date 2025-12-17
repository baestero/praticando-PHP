<?php
declare (strict_types=1);

namespace Baestero\PraticandoPhp\Aula005_Encapsulamento;
//não precisa dar "use" na classe "Pessoa" pois estamos no mesmo namespace

class PessoaFisica extends Pessoa
{
  public string $nome;
  public int $idade;
  public string $genero;
  private string $cpf;

 //Pode ser acessado por qualquer lugar
  public function getDocument(): string
  {
    return $this->cpf;
  }

 //Uma classe filha pode acessar de uma classe pai desde que dentro da modelagem da classe
  protected function getCpf(): string 
 {
  return $this->cpf;
 }

 
 //Só é acessivel pela propria classe que o método foi criado
  private function getCpf2(): string 
 {
  return $this->cpf;
 }
}