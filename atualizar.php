<?php
include 'conexao.php';
session_start();

$idC = $_SESSION['idCadastro'];
$idE = $_POST['idEvento'];


$stmt = $con->prepare("SELECT * FROM tbinfoevento WHERE idInfoEvento = ? AND idCadastro = ?");
$stmt->execute([$idE, $idC]);
$evento = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$evento) {
    echo "Evento não encontrado";
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['tituloE'];
    $local = $_POST['localE'];
    $data = $_POST['dataE'];
    $texto = $_POST['textoE'];
    $imagem_atual = $evento['imagemInfoEvento'];
    $imagem_final = $imagem_atual;

   
    if (isset($_FILES['inputImagemE']) && $_FILES['inputImagemE']['error'] === 0) {
        $extensoes_permitidas = ['jpg', 'jpeg', 'png', 'gif'];
        $extensao = strtolower(pathinfo($_FILES['inputImagemE']['name'], PATHINFO_EXTENSION));

        if (!in_array($extensao, $extensoes_permitidas)) {
            echo "Tipo de arquivo inválido";
            exit;
        }

        $novo_nome = uniqid('img_') . '.' . $extensao;
        $caminho = 'uploads/' . $novo_nome;

        if (move_uploaded_file($_FILES['inputImagemE']['tmp_name'], $caminho)) {
            if (!empty($imagem_atual) && file_exists('uploads/' . $imagem_atual)) {
                unlink('uploads/' . $imagem_atual);
            }
            $imagem_final = $novo_nome;
        }
    }

    $stmt = $con->prepare("UPDATE tbinfoevento SET tituloInfoEvento = ?, dataInfoEvento = ?, descInfoEvento = ?, imagemInfoEvento = ? WHERE idInfoEvento = ? AND idCadastro = ?");
    $stmt->execute([$titulo, $data, $texto, $imagem_final, $idE, $idC]);
}

header('Location: galeria.php');
exit;
?>
