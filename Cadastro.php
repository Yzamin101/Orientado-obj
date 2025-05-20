<?php
class Usuario {
    public $nome;
    public $email;
    public $senha;

    // Construtor
    public function __construct($nome, $email, $senha) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = password_hash($senha, PASSWORD_DEFAULT); // Hash para segurança
    }

    // Método para exibir os dados do usuário
    public function mostrarDados() {
        echo "Nome: " . $this->nome . "<br>";
    
        echo "E-mail: " . $this->email . "<br>";
    }
}

?>