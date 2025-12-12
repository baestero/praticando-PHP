<?php 

declare (strict_types=1);
// Tipagem forte

class PessoaFisica //Classe
{
  //Proriedades

  const OBJECT_TYPE = 'Ser humano';

  private string $nome;
  private string $email;
  private string $telefone;
  private string $cpf;
  private int $idade; 

  public function __construct(
    string $nome,
    string $email,
    string $telefone,
    string $cpf,
    int $idade
  )
  {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->cpf = $cpf;
        $this->idade = $idade;
  
  }

  public function getInformation():string
  {
   return $this->nome . " - " . self::OBJECT_TYPE;
  }
}