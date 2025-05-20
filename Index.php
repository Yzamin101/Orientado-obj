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
            color: #2E8B57;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
            letter-spacing: 2px;
            margin: 45; /* Remover margens do body */
            background-image: url('teste2.jpg'); /* Adicionando a imagem de fundo */
            background-size: cover; /* Cobrir toda a tela */
            background-position: 10; /* Centralizar a imagem */
            background-repeat: no-repeat; /* Evitar repetição */
        }
    </style>
</head>
<body>

<?php
// Inclui o arquivo da classe (se estiver separado)
require_once 'Cadastro.php';

// Criando um novo usuário
$usuario1 = new Usuario("Yasmin Moreira", "yasmingamer@gmail.com", "yasminlegal");

// Exibindo os dados do usuário
$usuario1->mostrarDados();
?>

</body>
</html>
