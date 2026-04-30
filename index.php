<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cálculo de Salário</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        background-color: #f4f5f7;
        color: #333;
        line-height: 1.6;
        display: flex;
        justify-content: center;
        padding: 50px 20px;
    }

    .container {
        width: 100%;
        max-width: 550px;
    }

    h1 {
        font-size: 2.2rem;
        font-weight: 600;
        margin-bottom: 30px;
        text-align: center;
        color: #1f2937;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 18px;
    }

    label {
        font-weight: 500;
        margin-bottom: 5px;
        color: #4b5563;
        font-size: 1.1rem;
    }

    input[type="text"] {
        padding: 14px 16px;
        border-radius: 8px;
        border: 1px solid #d1d5db;
        font-size: 1.1rem;
        transition: border-color 0.2s ease;
    }

    input[type="text"]:focus {
        border-color: #2563eb;
        outline: none;
    }

    input[type="submit"] {
        padding: 14px;
        border-radius: 8px;
        border: none;
        background-color: #2563eb;
        color: #fff;
        font-weight: 600;
        font-size: 1.15rem;
        cursor: pointer;
        transition: background-color 0.2s ease;
        margin-top: 10px;
    }

    input[type="submit"]:hover {
        background-color: #1e40af;
    }

    .resultado {
        margin-top: 30px;
        padding: 16px 18px;
        font-size: 1.2rem;
        background-color: #e5e7eb;
        color: #1f2937;
        border-radius: 8px;
    }

    @media (max-width: 480px) {
        .container {
            padding: 0 15px;
        }
        h1 {
            font-size: 2rem;
        }
    }
</style>
</head>
<body>
<div class="container">
    <h1>Cálculo de Salário</h1>
    <form method="POST">
        <label for="txthoras">Horas trabalhadas</label>
        <input type="text" id="txthoras" name="txthoras" placeholder="Digite suas horas" required>

        <label for="txtvalor">Valor por hora</label>
        <input type="text" id="txtvalor" name="txtvalor" placeholder="Digite o valor da hora" required>

        <input type="submit" value="Calcular">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $horas = $_POST["txthoras"];
            $valor = $_POST["txtvalor"];
            $salario = $horas * $valor;
            echo "<div class='resultado'>O salário é: R$ " . number_format($salario, 2, ',', '.') . "</div>";
        }
    ?>
</div>
</body>
</html>