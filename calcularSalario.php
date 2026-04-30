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
            background-color: #f5f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .container {
            background-color: #ffffff;
            padding: 50px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 30px;
            font-weight: 600;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        input[type="text"] {
            padding: 12px 16px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #007BFF;
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.2);
            outline: none;
        }

        input[type="submit"] {
            padding: 12px 16px;
            border-radius: 8px;
            border: none;
            font-size: 1rem;
            cursor: pointer;
            background-color: #007BFF;
            color: #fff;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .resultado {
            margin-top: 25px;
            padding: 15px;
            border-radius: 8px;
            background-color: #f1f3f5;
            border-left: 4px solid #007BFF;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cálculo de Salário</h1>
        <form method="POST">
            <input type="text" name="txthoras" placeholder="Horas trabalhadas" required>
            <input type="text" name="txtvalor" placeholder="Valor por hora" required>
            <input type="submit" value="Calcular">
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $horas = $_POST["txthoras"];
                $valor = $_POST["txtvalor"];
                $salario = $horas * $valor;
                echo "<div class='resultado'>O salário é: R$ " . number_format($salario, 2, ",", ".") . "</div>";
            }
        ?>
    </div>
</body>
</html>