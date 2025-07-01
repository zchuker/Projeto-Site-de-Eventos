<?php
session_start();
include 'conexao.php';

$mensagem = '';
$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = trim($_POST['email']);
  $senha = trim($_POST['senha']);


  $sql = "SELECT idCadastro, emailCadastro, senhaCadastro,nomeCadastro FROM tbcadastro WHERE emailCadastro = ?";
  $stmt = $con->prepare($sql);
  $stmt->execute([$email]);
  $user = $stmt->fetch();

  if ($user) {

    if (password_verify($senha, $user['senhaCadastro'])) {

      $_SESSION['emailCadastro'] = $user['emailCadastro'];
      $_SESSION['nomeCadastro'] = $user['nomeCadastro'];
      $_SESSION['idCadastro'] = $user['idCadastro'];
      $_SESSION['Entrar'] = 'ta liberado';
      $_SESSION['idCadastro'] = $user['idCadastro'];


      //só trocar o caminho do redirect q ele vai para a pagina q vc quer 
      $redirect = "index.php";
    } else {
      $erro = "Senha incorreta.";
    }
  } else {
    $erro = "Usuário não encontrado.";
  }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="./css/styleRL.css">
  <title>Login</title>

  <?php if (!empty($redirect)): ?>
    <script>
      setTimeout(() => {
        window.location.href = "<?php echo $redirect; ?>";
      }, 1);
    </script>
  <?php endif; ?>

</head>

<body>
  <div id="container3">


    <div class="login">
      <?php if (!empty($mensagem)): ?>
        <div class="<?php echo $classe; ?>">
          <?php echo $mensagem; ?>
        </div>
      <?php elseif (!empty($erro)): ?>
        <div class="<?php echo $classe; ?>">
          <?php echo $erro; ?>
        </div>
      <?php endif; ?>

      <h1 style="font-size: 70px;">Login</h1><br>
      <form action="" method="post" class=" EDS  ">

        <label for="">Email:</label>
        <input name="email" type="email" placeholder="Digite seu Email" required><br>

        <label for="">Senha:</label>
        <input name="senha" type="password" placeholder="Digite sua senha" required><br>


        <button onclick="localStrg()" id="botao" type="submit">Entrar</button><br>

        Ainda não tem cadastro? <a href="cadastro.html"> Clique aqui</a>
      </form>
    </div>
  </div>
</body>
</html>