<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 3rem;
            font-weight: 700;
            color: #DC143C;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
            letter-spacing: 2px;
            margin: 45; /* Remover margens do body */
            background-image: url('doggy.jpg'); /* Adicionando a imagem de fundo */
            background-size: cover; /* Cobrir toda a tela */
            background-position: 10; /* Centralizar a imagem */
            background-repeat: no-repeat; /* Evitar repetição */
        }
    </style>
</head>
<body>





<?php
require_once 'Calculadora.php';

// Criar objeto
$pessoa = new Pessoa();
$pessoa->peso = 70;
$pessoa->altura = 1.75;

// Calcular IMC e exibir resultado
$imc = $pessoa->calcularIMC();
$classificacao = $pessoa->classificarIMC();

echo "IMC: " . number_format($imc, 2) . "<br>";
echo "Classificação: " . $classificacao;
?>
</body>
</html>

