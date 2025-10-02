# 🐘 Programação Orientada a Objetos (POO) em PHP  

Este documento apresenta um resumo detalhado dos principais conceitos de **POO em PHP**, abordando **classes, objetos, encapsulamento e herança**.  
A Programação Orientada a Objetos ajuda a estruturar o código de forma **organizada, reutilizável e de fácil manutenção**.  

---

## ✨ 1. Introdução à POO em PHP
A POO organiza o sistema em **objetos**, que representam coisas do mundo real ou conceitos abstratos.  

- 🏗️ **Classe** → o molde que define atributos e métodos  
- 🎭 **Objeto** → instância criada a partir da classe  
- 🔑 **Atributos** → variáveis internas da classe  
- ⚙️ **Métodos** → funções que representam ações da classe  

👉 PHP adotou a POO a partir da versão 5, e hoje ela é a base de frameworks como **Laravel**, **Symfony** e **CodeIgniter**, além do padrão arquitetural **MVC (Model-View-Controller)**.  

---

## 🛠️ 2. Criando Classes e Objetos
📌 Declaramos uma classe com `class`.  
📌 Criamos um objeto usando `new`.  
📌 Acessamos atributos e métodos com `->`.  

```php
class Pessoa {
    public $nome;
    public $idade;

    public function apresentar() {
        return "Olá, meu nome é $this->nome e tenho $this->idade anos.";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Ana";
$pessoa->idade = 25;

echo $pessoa->apresentar();
```

### ➕ Inclusão de Arquivos
- **include →** gera *Warning* se o arquivo não for encontrado  
- **require →** gera *Fatal Error*  
- **include_once / require_once →** garantem que o arquivo será incluído apenas uma vez  

---

## 🔐 3. Encapsulamento
O encapsulamento protege atributos e métodos da classe, controlando o acesso a eles.  

- 🟢 **public** → acesso livre em qualquer parte do código  
- 🔴 **private** → acesso restrito apenas dentro da própria classe  
- 🟡 **protected** → acesso dentro da classe e de suas subclasses  

👉 **Getters e Setters** – usados para manipular atributos privados de forma segura:  

```php
class Conta {
    private $saldo;

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($valor) {
        if ($valor >= 0) {
            $this->saldo = $valor;
        }
    }
}
```

---

## 🌳 4. Herança
A herança permite que uma classe filha reaproveite atributos e métodos de uma classe pai.  

📌 Palavra-chave: **extends**  

```php
class Pessoa {
    protected $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
}

class Funcionario extends Pessoa {
    private $cargo;

    public function __construct($nome, $cargo) {
        parent::__construct($nome);
        $this->cargo = $cargo;
    }

    public function apresentar() {
        return "Sou $this->nome e trabalho como $this->cargo.";
    }
}

$f = new Funcionario("Carlos", "Desenvolvedor");
echo $f->apresentar();
```

---

## 🎯 Conclusão
Nesta agenda aprendemos:  
✔️ Como criar classes e objetos em PHP  
✔️ O uso do encapsulamento para proteger atributos  
✔️ O papel da herança na reutilização e organização do código  
