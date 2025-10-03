<?php
require_once "Pessoa.php"; // inclui a classe Pessoa

// Classe Crianca herda de Pessoa
class Crianca extends Pessoa {
    private $idade;
    private $sonho; // brinquedo ou pedido da criança

    public function __construct($nome, $email, $idade, $sonho) {
        parent::__construct($nome, $email); 
        $this->idade = $idade;
        $this->sonho = $sonho;
    }

    // Getters e Setters
    public function getIdade() { return $this->idade; }
    public function setIdade($idade) { $this->idade = $idade; }

    public function getSonho() { return $this->sonho; }
    public function setSonho($sonho) { $this->sonho = $sonho; }
}
?>
