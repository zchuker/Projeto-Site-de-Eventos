<?php
include 'conexao.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = trim($_POST['nomeC']);
    $email = $_POST['email1'];
    $tel = $_POST['telefone'];
    $cnpj = $_POST['cnpj'];
    $teste = true;
    $id = $_SESSION['idCadastro'];

    if (empty($nome) || empty($email) || empty($tel) || empty($cnpj)) {
        $mensagem = "Preencha todos os campos.";
        $teste = false;
    } else {
        try {
            $comando = "INSERT INTO tbcontato (nomeContato, cnpjContato, telefoneContato, emailContato, idCadastro) VALUES(?,?,?,?,?)";
            $s = $con->prepare($comando);
            $s->bindParam(1, $nome);
            $s->bindParam(2, $cnpj);
            $s->bindParam(3, $tel);
            $s->bindParam(4, $email);
            $s->bindParam(5, $id);

            if ($s->execute()) {
                $mensagem = "Mensagem de contato enviada!";
            } else {
                $mensagem = "Erro ao contatar: " . $s->errorInfo()[2];
            }

            $s = null;
        } catch (PDOException $e) {
            $mensagem = "Erro ao enviar o contato: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Contato</title>
    <link rel="stylesheet" href="css/mensagem.css">

    <?php if (isset($mensagem) && $teste == false): ?>
        <script>
            setTimeout(function() {
                window.location.href = "contatoT.php";
            }, 3000);
        </script>
    <?php else: ?>
        <script>
            setTimeout(function() {
                window.location.href = "index.php";
            }, 1000);
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