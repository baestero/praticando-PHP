# Praticando-PHP

Repositório criado para prática de Programação Orientada a Objetos (POO) com PHP.

## 📋 Sobre o Projeto

Este projeto foi desenvolvido para praticar conceitos de Programação Orientada a Objetos em PHP. Cada pasta dentro de `src/` representa uma aula diferente, contendo exemplos práticos e exercícios relacionados ao tópico estudado.

## 🚀 Estrutura do Projeto

```
praticando-PHP/
├── src/
│   ├── Aula001_Classe/
│   │   ├── app.php              # Exemplo da aula 001
│   │   └── PessoaFisica.php     # Classe da aula 001
│   ├── Aula002_Construct/
│   │   ├── app.php              # Exemplo da aula 002
│   │   └── PessoaFisica.php     # Classe da aula 002
│   ├── Aula003_Heranca/
│   │   ├── PessoaFisica.php     # Classe base da aula 003
│   │   └── PessoaJuridica.php   # Classe que estende PessoaFisica
│   ├── Aula004_ClasseAbstrata/
│   │   ├── Pessoa.php           # Classe abstrata base
│   │   ├── PessoaFisica.php     # Implementa método abstrato para CPF
│   │   └── PessoaJuridica.php   # Implementa método abstrato para CNPJ
│   └── ...
├── app.php                      # Arquivo para executar as aulas
├── composer.json                # Configuração do Composer
├── anotacoes.md                 # Anotações e dicas sobre PHP
└── vendor/                      # Dependências do Composer
```

## 📦 Requisitos

- PHP 7.4 ou superior
- Composer (para gerenciamento de dependências)

## 🔧 Instalação

1. Clone o repositório:
```bash
git clone <url-do-repositorio>
cd praticando-PHP
```

2. Instale as dependências (se houver):
```bash
composer install
```

## 💻 Como Executar as Aulas

Cada aula possui seu próprio arquivo `app.php` dentro da pasta correspondente. Para executar uma aula específica, você tem duas opções:

### Opção 1: Copiar o conteúdo do app.php da aula para o app.php da raiz

1. Abra o arquivo `app.php` da pasta da aula que deseja executar (ex: `src/Aula001_Classe/app.php`)
2. Copie todo o conteúdo desse arquivo
3. Cole o conteúdo no arquivo `app.php` da raiz do projeto (substituindo o conteúdo anterior)
4. Execute o arquivo:
```bash
php app.php
```

### Opção 2: Executar diretamente o app.php da pasta da aula

Execute diretamente o arquivo `app.php` da pasta da aula desejada:

```bash
php src/Aula001_Classe/app.php
```

ou

```bash
php src/Aula002_Construct/app.php
```

## 📚 Aulas Disponíveis

### Aula 001 - POO: Classes, Atributos e Métodos

**Localização:** `src/Aula001_Classe/`

**Conceitos abordados:**
- Criação de classes
- Propriedades (atributos) privadas
- Métodos setters
- Tipagem forte com `declare(strict_types=1)`
- Instanciação de objetos

**Para executar:**
```bash
# Opção 1: Copie o conteúdo de src/Aula001_Classe/app.php para app.php na raiz
php app.php

# Opção 2: Execute diretamente
php src/Aula001_Classe/app.php
```

### Aula 002 - $this, self e __construct

**Localização:** `src/Aula002_Construct/`

**Conceitos abordados:**
- Método construtor `__construct()`
- Uso de `$this` para acessar propriedades e métodos da instância
- Uso de `self` para acessar constantes da classe
- Definição de constantes de classe
- Passagem de parâmetros no construtor

**Para executar:**
```bash
# Opção 1: Copie o conteúdo de src/Aula002_Construct/app.php para app.php na raiz
php app.php

# Opção 2: Execute diretamente
php src/Aula002_Construct/app.php
```

### Aula 003 - Herança

**Localização:** `src/Aula003_Heranca/`

**Conceitos abordados:**
- Herança de classes usando `extends`
- Reutilização de código (princípio DRY - Don't Repeat Yourself)
- Classe base (parent) e classe derivada (child)
- Herança de propriedades e métodos públicos
- Estrutura de classes relacionadas (PessoaFisica e PessoaJuridica)

**Arquivos:**
- `PessoaFisica.php` - Classe base com propriedades e métodos
- `PessoaJuridica.php` - Classe que estende PessoaFisica

**Para executar:**
```bash
# Crie um arquivo app.php na pasta Aula003_Heranca ou execute via arquivo da raiz
# Exemplo de uso:
# - Instanciar PessoaJuridica que herda de PessoaFisica
# - Acessar propriedades e métodos herdados
```

### Aula 004 - Classe Abstrata e Polimorfismo

**Localização:** `src/Aula004_ClasseAbstrata/`

**Conceitos abordados:**
- Classe abstrata como modelo base (`Pessoa`)
- Métodos abstratos (`getDocument()`) que obrigam implementação nas classes filhas
- Implementação específica em cada classe concreta (`PessoaFisica` e `PessoaJuridica`)
- Polimorfismo: mesma interface (`getDocument()`) com comportamentos diferentes (CPF/CNPJ)
- Reutilização de código com herança e respeito ao princípio DRY

**Arquivos:**
- `Pessoa.php` - Classe abstrata com propriedade `nome` e método abstrato `getDocument()`
- `PessoaFisica.php` - Implementa `getDocument()` retornando o `cpf`
- `PessoaJuridica.php` - Implementa `getDocument()` retornando o `cnpj`

**Para executar (exemplo de uso):**
```bash
# Você pode criar um app.php que receba um array de Pessoas (PessoaFisica e PessoaJuridica)
# e chame o método getDocument() para cada uma, demonstrando o polimorfismo.
```

## 📖 Anotações

Consulte o arquivo `anotacoes.md` para dicas e comandos úteis sobre PHP, incluindo:
- Como iniciar um projeto PHP com Composer
- Declaração de variáveis
- Comandos úteis: `echo`, `var_dump()`, `print_r()`

## 👤 Autor

**baestero**

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo `LICENSE` para mais detalhes.
