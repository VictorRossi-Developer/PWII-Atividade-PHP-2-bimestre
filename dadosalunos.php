<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Dados do Aluno</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Inter', sans-serif;
    }

    body {
        background-color: #f4f5f7;
        display: flex;
        justify-content: center;
        padding: 50px 20px;
        color: #1f2937;
    }

    .container {
        background-color: #ffffff;
        padding: 35px 40px;
        border-radius: 12px;
        width: 100%;
        max-width: 550px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    }

    h1 {
        font-size: 2rem;
        font-weight: 600;
        margin-bottom: 25px;
        text-align: center;
        color: #2563eb;
    }

    .info {
        margin-bottom: 15px;
        font-size: 1.1rem;
        line-height: 1.6;
        padding: 10px 14px;
        background-color: #f1f3f5;
        border-radius: 8px;
        border-left: 4px solid #2563eb;
        color: #1f2937;
    }

    @media (max-width: 600px) {
        .container {
            padding: 25px 20px;
        }
        h1 {
            font-size: 1.8rem;
        }
        .info {
            font-size: 1rem;
        }
    }
</style>
</head>
<body>
<div class="container">
    <h1>Dados do Aluno</h1>
    <?php
        echo "<div class='info'><strong>Nome:</strong> " . htmlspecialchars($_POST['txtnome']) . "</div>";
        echo "<div class='info'><strong>Telefone:</strong> " . htmlspecialchars($_POST['txttelefone']) . "</div>";
        echo "<div class='info'><strong>Curso:</strong> " . htmlspecialchars($_POST['cbocursos']) . "</div>";
        echo "<div class='info'><strong>RG:</strong> " . htmlspecialchars($_POST['txtRG']) . "</div>";
        echo "<div class='info'><strong>Módulo:</strong> " . htmlspecialchars($_POST['txtmodulo']) . "</div>";
    ?>
</div>
</body>
</html>