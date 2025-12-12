# Praticando-PHP

Repositório criado para prática de Programação Orientada a Objetos (POO) com PHP.

## 📋 Sobre o Projeto

Este projeto foi desenvolvido para praticar conceitos de Programação Orientada a Objetos em PHP, incluindo classes, propriedades, métodos e encapsulamento.

## 🚀 Estrutura do Projeto

```
praticando-PHP/
├── src/
│   └── 001 - Classes/
│       └── PessoaFisica.php    # Classe exemplo de Pessoa Física
├── app.php                      # Arquivo principal de demonstração
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

## 💻 Uso

Execute o arquivo principal para ver a demonstração:

```bash
php app.php
```

### Exemplo de Uso

O arquivo `app.php` demonstra como utilizar a classe `PessoaFisica`:

```php
$pessoaFisica = new PessoaFisica();
$pessoaFisica->setNome("Baestero");
$pessoaFisica->setEmail("Baestero@email.com");
$pessoaFisica->setCpf("4875874874574");
$pessoaFisica->setTelefone("1195587458");
$pessoaFisica->setIdade(27);
```

## 📚 Conceitos Praticados

- **Classes e Objetos**: Criação de classes e instanciação de objetos
- **Encapsulamento**: Uso de propriedades privadas e métodos públicos
- **Métodos Setters**: Métodos para definir valores das propriedades
- **Tipagem Forte**: Uso de `declare(strict_types=1)` e tipagem de parâmetros
- **PSR-4 Autoloading**: Configuração de autoload com Composer

## 📝 Classes Disponíveis

### PessoaFisica

Classe que representa uma pessoa física com as seguintes propriedades:
- `nome` (string)
- `email` (string)
- `telefone` (string)
- `cpf` (string)
- `idade` (int)

**Métodos disponíveis:**
- `setNome(string $nome): void`
- `setEmail(string $email): void`
- `setTelefone(string $telefone): void`
- `setCpf(string $cpf): void`
- `setIdade(int $idade): void`

## 📖 Anotações

Consulte o arquivo `anotacoes.md` para dicas e comandos úteis sobre PHP.

## 👤 Autor

**baestero**

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo `LICENSE` para mais detalhes.
