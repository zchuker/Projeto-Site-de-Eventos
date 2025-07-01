<?php
session_start();
include 'conexao.php';
$id = $_SESSION['idCadastro'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['inputImagem']) && $_FILES['inputImagem']['error'] == 0) {
    $texto = trim($_POST['texto']);
    $data = trim($_POST['data']);
    $titulo = trim($_POST['titulo']);
    $local = trim($_POST['local']);

    $imagem = $_FILES['inputImagem'];
    $imagem_nome = $imagem['name'];
    $imagem_temp = $imagem['tmp_name'];
    $imagem_tamanho = $imagem['size'];
    $imagem_erro = $imagem['error'];



    $extensao = pathinfo($imagem_nome, PATHINFO_EXTENSION);
    $extensao = strtolower($extensao);

    $extensao_permitidas = ['jpg', 'jpeg', 'png', 'gif'];

    if (!in_array($extensao, $extensao_permitidas)) {
        echo "Erro: Tipo de arquivo inválido. Apenas imagens JPG, JPEG, PNG e GIF são permitidas.";
        exit;
    }

    $pasta_upload = 'uploads/';
    $contador = 1;

    while (file_exists($pasta_upload . "imagem" . $contador . "." . $extensao)) {
        $contador++;
    }

    $novo_nome_imagem = "imagem" . $contador . '.' . $extensao;

    $caminho_imagem = $pasta_upload . $novo_nome_imagem;

    if (move_uploaded_file($imagem_temp, $caminho_imagem))
        try {
            $comando = "INSERT INTO tbinfoevento (imagemInfoEvento, tituloInfoEvento, dataInfoEvento, localInfoEvento, descInfoEvento, idCadastro) VALUES (?, ?, ?, ?, ?, ?)";

            $stmt = $con->prepare($comando);
            $stmt->bindParam(1, $novo_nome_imagem);
            $stmt->bindParam(2, $titulo);
            $stmt->bindParam(3, $data);
            $stmt->bindParam(4, $local);
            $stmt->bindParam(5, $texto);
            $stmt->bindParam(6, $id);

            $stmt->execute();
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    else {
        echo "Erro ao fazer o upload da foto.";
    }
} else {
    echo "Nenhuma foto foi selecionada ou houve erro no upload.";
}

header('Location: galeria.php')
?>