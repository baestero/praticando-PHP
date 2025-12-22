<?php
declare(strict_types=1);
namespace Baestero\PraticandoPhp\Aula006_Interfaces;

class PessoaEstrangeira extends PessoaFisica
{
  //método publico, posso acessar a partir de uma instancia, mesmo que a propriedade seja  protected
 public function setCpf(string $cpf):void
 {
  $this->cpf = $cpf;
 } 

 //poderia acessar método protegido caso ele fosse da Classe pai PessoaFisica que é da onde essa Classe se estende e colocaria dentro de um método publico publica;

 public function returnDocument():string
 {
  return $this->getCpf();
 }
 
}