<?php
require_once "Pessoa.php"; // inclui a classe Pessoa

// Classe Doador herda de Pessoa
class Doador extends Pessoa {
    private $telefone;
    private $presente; // presente/brinquedo que o doador vai doar

    public function __construct($nome, $email, $telefone, $presente) {
        parent::__construct($nome, $email); 
        $this->telefone = $telefone;
        $this->presente = $presente;
    }

    // Getters e Setters
    public function getTelefone() { return $this->telefone; }
    public function setTelefone($telefone) { $this->telefone = $telefone; }

    public function getPresente() { return $this->presente; }
    public function setPresente($presente) { $this->presente = $presente; }
}
?>
