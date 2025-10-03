<?php
// Classe base Pessoa - contém atributos comuns a todos (nome e email)
class Pessoa {
    protected $nome;    
    protected $email;   

    // Construtor inicializa os atributos
    public function __construct($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
    }

    // Getters e Setters (encapsulamento)
    public function getNome() { return $this->nome; }
    public function setNome($nome) { $this->nome = $nome; }

    public function getEmail() { return $this->email; }
    public function setEmail($email) { $this->email = $email; }
}
?>
