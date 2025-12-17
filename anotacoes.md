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

7. Polimorfismo = mesma mensagem, comportamentos diferentes.
8. A visíbilidade public, pode ser acessada tanto pela classe pai e filha.
9. Propriedades protected pode ser acessadas por classes filhas extendidas mas nao por instancias diretamente
10. Propriedades e métodos publicos eu posso acessar a partir de uma instancia com new, protected não é possivel acessar diretamente.
    Perfeito 👍
    Suas anotações estão **conceitualmente corretas**. Vou **refatorar**, **corrigir pequenos termos técnicos** e **padronizar a escrita**, **sem mudar seu estilo**, só deixando **mais precisa e profissional**.

---

# Iniciar Projeto PHP

`composer init` – configura o projeto PHP de forma semelhante ao `package.json` em projetos Node.js.

---

# Declarando Variáveis em PHP

- Utiliza-se o símbolo `$` para declarar variáveis.

---

# Comandos

1. `echo`
   Utilizado para exibir texto ou valores na tela (strings e valores simples).

2. `var_dump()`
   Função PHP usada para inspecionar o conteúdo de uma variável, exibindo:

   - tipo
   - valor
   - estrutura

3. `print_r()`
   Função utilizada para exibir o conteúdo de variáveis complexas, como:

   - arrays
   - objetos

4. `$this`
   Utilizado para acessar atributos e métodos **não estáticos** da própria instância da classe.

5. `self`
   Utilizado para acessar membros **estáticos** da própria classe, como:

   - constantes
   - métodos estáticos

6. `composer dump-autoload -o`
   Comando para atualizar e otimizar o autoload do Composer.

---

# Anotações

1. **Instância**
   É um objeto criado a partir de uma classe, utilizando `new`.
   Ex: `new PessoaFisica()`.

2. **extends**
   Define herança, onde uma classe herda atributos e métodos de outra.

   - **atributo**: característica do objeto.
   - **método**: função definida dentro da classe (comportamento do objeto).

3. **Classe filha**
   É a classe que utiliza `extends`.

4. **Classe pai**
   É a classe que está sendo herdada.

5. **Classes abstratas**
   Quando temos, por exemplo, `PessoaFisica` e `PessoaJuridica`, a ideia é usar uma classe abstrata (`Pessoa`) que contenha as propriedades e comportamentos comuns, e cada classe concreta utilize apenas o que faz sentido para ela.

6. **Classes abstratas não podem ser instanciadas**
   Não é possível criar objetos de uma classe abstrata usando `new`.

---

### Regras importantes de modelagem

- **Se muda só o valor** → construtor

- **Se muda a regra** → polimorfismo

- **Se muda com frequência** → estratégia (interface)

- **Método abstrato** define uma **OBRIGAÇÃO**.

- **Método concreto** define uma **IMPLEMENTAÇÃO**.

Você **não precisa declarar um método como abstrato quando**:

- o método é opcional

- nem todas as subclasses fazem sentido implementá-lo

- não é uma regra do domínio

- **Se TODO filho precisa do método** → abstrato

- **Se SÓ ALGUNS filhos precisam** → método concreto

- **Se o comportamento muda entre filhos** → polimorfismo

---

7. **Polimorfismo**
   Mesma mensagem, comportamentos diferentes.

Claro 👍
Vou **adicionar `private` mantendo exatamente o seu padrão**, só expandindo onde precisa.

---

8. **Visibilidade `public`**
   Propriedades e métodos `public` podem ser acessados:

   - pela própria classe
   - por classes filhas
   - por instâncias

9. **Visibilidade `protected`**
   Propriedades e métodos `protected` podem ser acessados:

   - pela própria classe
   - por classes filhas (`extends`)
     ❌ **Não podem ser acessados diretamente por instâncias**.

10. **Visibilidade `private`**
    Propriedades e métodos `private` podem ser acessados:

    - **somente pela própria classe**
      ❌ **Não podem ser acessados por classes filhas**
      ❌ **Não podem ser acessados por instâncias**.

11. **Acesso por instância**
    Propriedades e métodos `public` podem ser acessados a partir de uma instância criada com `new`.
    Propriedades `protected` e `private` **não podem ser acessadas diretamente**, apenas através de métodos públicos da própria classe.

Perfeito 👍
Vou **reescrever o item 12 no mesmo padrão e linguagem dos anteriores**, mantendo clareza e consistência:

---

12. **Manipulação via métodos públicos**
    Propriedades `private` ou `protected` **não podem ser acessadas diretamente por instâncias**.
    No entanto, **podem ser manipuladas indiretamente** por meio de **métodos `public`** definidos:

- na própria classe (para `private` e `protected`)
- na classe pai (para `protected`)
- na classe filha (apenas para `protected`)

✔ Esse acesso indireto ocorre via **getters, setters ou métodos de comportamento**, respeitando o encapsulamento.

---

Perfeito 👌
Segue o item **logo abaixo do 12**, no **mesmo padrão**, bem **resumido e técnico**:

---

13. **Encapsulamento**
    Encapsulamento é o princípio da POO que **protege o estado e o comportamento interno de uma classe**, permitindo que propriedades e métodos `private` ou `protected` sejam acessados **apenas de forma controlada**, por meio de **métodos `public`**.

✔ Garante controle de acesso
✔ Protege regras internas
✔ Expõe apenas o necessário para uso externo

---
