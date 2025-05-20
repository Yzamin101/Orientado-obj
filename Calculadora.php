<?php
class Pessoa {
    public $peso;
    public $altura;

    // Método para calcular IMC
    public function calcularIMC() {
        return $this->peso / ($this->altura * $this->altura);
    }

    // Método para classificar o IMC
    public function classificarIMC() {
        $imc = $this->calcularIMC();

        if ($imc < 18.5) {
            return "Abaixo do peso";
        } elseif ($imc < 25) {
            return "Peso normal";
        } elseif ($imc < 30) {
            return "Sobrepeso";
        } else {
            return "Obesidade";
        }
    }
}
?>
