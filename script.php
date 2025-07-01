<?php
include 'conexao.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = trim($_POST['nome']);
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmaEmail = $_POST['confirmaEmail'];
    $confirmaSenha = $_POST['confirmeSenha'];
    $teste = true;

    if (empty($nome) || empty($senha) || empty($email)) {
        $mensagem = "Preencha todos os campos.";
        $teste = false;
    } else if ($confirmaEmail != $email) {

        $mensagem = "Email esta diferende da sua confirmação";
        $teste = false;
    } else if ($senha != $confirmaSenha) {

        $mensagem = "Senha esta diferende da sua confirmação";
        $teste = false;
    } else {
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        try {

            $comando = "INSERT INTO tbcadastro (nomeCadastro, emailCadastro, senhaCadastro) VALUES (?,?,?)";
            $s = $con->prepare($comando);
            $s->bindParam(1, $nome);
            $s->bindParam(2, $email);
            $s->bindParam(3, $senha_hash);

            if ($s->execute()) {
                $mensagem = "Cadastro realizado com sucesso!";
            } else {
                $mensagem = "Erro ao cadastrar: " . $s->errorInfo()[2];
            }

            $s = null;
        } catch (PDOException $e) {
            $mensagem = "Erro ao cadastrar: " . $e->getMessage();
        }
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/mensagem.css">

    <?php if (isset($mensagem) && $teste == false): ?>
        <script>
            setTimeout(function() {
                window.location.href = "cadastro.html";
            }, 3000);
        </script>
    <?php else: ?>
        <script>
            setTimeout(function() {
                window.location.href = "login.php";
            }, 3000);
        </script>
    <?php endif; ?>
</head>

<body>

    <?php

    if (isset($mensagem)) {
        $classe = (str_contains($mensagem, 'Erro') || str_contains($mensagem, 'erro')) ? 'mensagem erro' : 'mensagem';
        echo "<div id='container' >";
        echo "<div class=\"$classe\">$mensagem<br>Você será redirecionado  em instantes...</div>";
        echo "</div>";
    }
    ?>

</body>

</html>