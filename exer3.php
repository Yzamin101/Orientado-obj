<?php
require_once 'ConversorMoeda.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moeda</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 1.2rem;
            font-weight: 700;
            color: #FF1493;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
            background-image: url('teste3.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .container {
            background-color: rgba(255, 182, 193, 0.9);
            padding: 30px;
            border-radius: 15px;
            width: 50%;
        }
        .btn-custom {
            background-color: #FF69B4;
            border: none;
        }
        .btn-custom:hover {
            background-color: #FF1493;
        }
    </style>
</head>
<body>

<div class="container text-center">
    <h1>Conversor de Moeda</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="text" name="valor" id="valor" class="form-control" placeholder="Digite o valor" required>
        </div>

        <div class="form-group">
            <label for="moeda">Escolha a moeda:</label>
            <select name="moeda" id="moeda" class="form-control" required>
                <option value="brl">De BRL para USD</option>
                <option value="usd">De USD para BRL</option>
            </select>
        </div>

        <button type="submit" class="btn btn-custom btn-block text-white">Converter</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conversor = new ConversorMoeda();
        $resultado = $conversor->converter($_POST['valor'], $_POST['moeda']);

        if ($resultado[0] == "error") {
            echo "<p class='alert alert-danger'>{$resultado[1]}</p>";
        } else {
            echo "<h3>{$resultado[0]} " . number_format($resultado[2], 2, ',', '.') . " = {$resultado[1]} " . number_format($resultado[3], 2, ',', '.') . "</h3>";
        }
    }
    ?>
</div>

</body>
</html>
