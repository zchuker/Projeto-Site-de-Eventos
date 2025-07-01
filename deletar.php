<?php  
include 'conexao.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
     try {
            $comando = "Delete from tbinfoevento where idInfoEvento=?";
            $s = $con->prepare($comando);
            $s->bindParam(1, $id);
        

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

    else{ 

}
?>