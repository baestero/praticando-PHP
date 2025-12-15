# Iniciar Projeto PHP

composer init - configurar projeto como um package.json em projetos NODE

# Declarando Variaveis PHP

é usado $ para declarar variaveis

# Comandos

1. echo, é utilizado para exibir texto ou valores na tela, (somente strings)
2. var_dump(), função PHP para inspecionar o conteudo de uma variável
3. print_r(), função utilizada para exibir o conteudo de variáveis complexas, como:

- arrays
- objetos

4. $this, é utilizado em conceito onde não são estático
5. $self, é utlizado em constantes e conceitos estáticos, ex: constantes
6. composer dumpautoload -o (comando para atualizar o autoload)

# Anotações

1. Instancia é um objeto criado apartir de uma classe, ex: new Instancia.
2. Extend é uma Heranca classe que herda atributos e metodos da outra.

- atributo: é uma caracteristica do objeto.
- metodo: é uma função dentro da classe, algo que o objeto faz.

3. Classe filha, é a que usa o extends.
4. Classe pai é a que é herdada.

5. No conceito de classe abstrata, como temos uma classe PessoaFisica e PessoaJuridica, a idéia é usar uma Classe Abstrata que tenham ambas propriedades e cada uma utilize somente a sua. No caso seria a Classe "Pessoa".

6. Classes abstratas não podem ser instanciadas com "new".

Se muda só o valor → construtor
Se muda a regra → polimorfismo
Se muda com frequência → estratégia (interface)

Método abstrato define OBRIGAÇÃO.
Método concreto define IMPLEMENTAÇÃO.

Você não precisa declarar como abstrato quando:

- o método é opcional
- nem todas as subclasses fazem sentido
- não é regra do domínio

Se TODO filho precisa do método → abstrato

- Se SÓ ALGUNS filhos precisam → não abstrato
- Se o comportamento muda → polimorfismo

7. Polimorfismo = mesma mensagem, comportamentos diferentes
