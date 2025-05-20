<?php
class ConversorMoeda {
    private $taxaBrlParaUsd;
    private $taxaUsdParaBrl;

    public function __construct() {
        $this->taxaBrlParaUsd = 5.70; // 1 USD = 5.70 BRL
        $this->taxaUsdParaBrl = 1 / $this->taxaBrlParaUsd; // 1 BRL = 0.1754 USD
    }

    public function converter($valor, $moeda) {
        $valor = str_replace(',', '.', $valor);

        if (is_numeric($valor) && $valor > 0) {
            $valor = floatval($valor);
            if ($moeda == 'brl') {
                return ["BRL", "USD", $valor, $valor / $this->taxaBrlParaUsd];
            } elseif ($moeda == 'usd') {
                return ["USD", "BRL", $valor, $valor * $this->taxaBrlParaUsd];
            } else {
                return ["error", "Moeda inválida. Escolha 'brl' ou 'usd'."];
            }
        } else {
            return ["error", "Por favor, insira um valor válido."];
        }
    }
}
?>
