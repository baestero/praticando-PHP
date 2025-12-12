<?php 

declare (strict_types=1);
// Tipagem forte

namespace Baestero\PraticandoPhp\Aula001_Classe;

class PessoaFisica //Classe
{
  //Proriedades
  private string $nome;
  private string $email;
  private string $telefone;
  private string $cpf;
  private int $idade; 

  //Métodos
  public function setNome(string $nome): void
  {
    $this->nome = $nome;
  }
  public function setEmail(string $email): void
  {
    $this->email = $email;
  }
  public function setTelefone(string $telefone): void
  {
    $this->telefone = $telefone;
  }
  public function setCpf(string $cpf): void
  {
    $this->cpf = $cpf;
  }
  public function setIdade(int $idade): void
  {
    $this->idade = $idade;
  }
}