<?php
include 'db.php';

if (isset($_POST['salvar'])) {
    $username = $_POST['username'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO times (username, senha) VALUES ('$username', '$senha')";

    if ($conn->query($sql)) {
        header("Location: read.php");
        exit;
    } else {
        echo "<div class='alert alert-danger mt-3'>Erro: " . $conn->error . "</div>";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc</title>
    <link rel="stylesheet" href="../style/style.css">

</head>
<body>
    <div class="container mt-4">
        <h2>Cadastrar usuários</h2>

        <form method = "POST" action="create.php">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Senha:</label>
                <input type="text" class="form-control" name="email" id="email" required>
            </div>


            <div class="col-12">
                <button type="submit" name="salvar" class="btn btn-success">Salvar</button>
                <a href="read.php" class="btn btn-secondary">Cancelar</a>
            </div>

            <a href="login.php">Clique aqui se você tenha cadastro!</a>
        </form>
    </div>    
</body>
</html>