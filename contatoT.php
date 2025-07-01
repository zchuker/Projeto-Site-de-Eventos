<?php
session_start();
?>

<?php if (empty($_SESSION['Entrar'])) {  ?>
  <!DOCTYPE html>
  <html lang="pt-BR">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleRL.css">
    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <title>Contato</title>
  </head>

  <body>
    <div class="wrapper">


      <nav id="nav">
        <div id="nave">
          <div id="logoC">
            <div id="logoB">
              <img id="logo" src="img/EventosLogo.png" alt="">
            </div>
          </div>

          <div id="selecao">
            <a class="esc" href="index.php">Home</a>
            <a class="esc" href="galeria.php">Galeria</a>
            <a class="esc" href="contatoT.php">Contato</a>



            <?php if (empty($_SESSION['Entrar'])) {
              echo '<a id="botao2" href="cadastro.html">Registro</a>';
              echo '<a id="botao" href="login.php">Entrar</a>';
            } else {
              echo '<div id="menuA">
                    <a id="nome">' . $_SESSION['nomeCadastro'] . '<img src="img/seta baixo.png" id="seta"></a> 
                    
                    <div id="menu">
                        <a href="#">Perfil</a>
                        <a href="aniquilar.php">Sair</a>
                    </div>
                    
                    </div>';
            }
            ?>
          </div>
        </div>
      </nav>

      <main id="container" style="padding: 100px;">
        <div class="contato" style="background-color: white;">
          <form class="form">

            <h1 style="color: black; text-align: center; margin-bottom: 100px;">
              Voce precisa logar para acessar esta area!!
            </h1>

            <Style>
              #botao1 {
                text-decoration: none;
                color: white;
                font-size: 100%;
                width: 40%;
                font-weight: 700;
                height: 40px;
                border-radius: 10px;
                background-color: rgb(42, 66, 110);
                box-shadow: 0px 3px 9px black;
                display: flex;
                align-items: center;
                justify-content: center;
                border: none;
                cursor: pointer;
              }

              #botao1:hover {
                transition: 300ms;
                transform: translateY(2px);
                background-color: rgb(28, 41, 66);
                box-shadow: 0px 1px 9px black;
              }
            </Style>
            <a href="login.php" id="botao1">Entrar</a><br>

          </form>
        </div>

      </main>


      <footer>
        <div id="contato">
          <h1>Contato</h1>

          <div id="tel">
            <img src="img/whatsapp.png" alt="a">
            <p>(11) 95125-5721</p>
          </div>

          <div id="ins">
            <img src="img/logotipo-do-instagram.png" alt="a">
            <p>@StageZoneOficial</p>
          </div>

          <div id="sup">
            <img src="img/midia-social.png" alt="a">
            <p>@StageZone0f1cial</p>
          </div>
        </div>

        <div id="sobre">
          <h1>Sobre nós</h1>
          <a href="">Duvidas</a>
          <a target="_blank" href="https://maps.app.goo.gl/34zBWFYCWxkdYTuj7">Local</a>
        </div>

        <div id="suporte">
          <div id="supA">
            <h1>Suporte</h1>
            <p>FAQ</p>
            <a href="">Contato</a>
          </div>
        </div>

        <div id="copyright">
          <img id="copy" src="img/direito-autoral.png" alt="">
          <span>2025 Copyright - Jhonny Souza & Ricardo Faustino</span>
        </div>
      </footer>

      <script src="js/script.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js"
        integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+"
        crossorigin="anonymous"></script>
    </div>
  </body>

  </html>

<?php } else { ?>

  <!DOCTYPE html>
  <html lang="pt-BR">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleRL.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Contato</title>
  </head>

  <body class="fundoC">
    <div class="wrapper">


      <nav id="nav">
        <div id="nave">
          <div id="logoC">
            <div id="logoB">
              <img id="logo" src="img/EventosLogo.png" alt="">
            </div>
          </div>

          <div id="selecao">
            <a class="esc" href="index.php">Home</a>
            <a class="esc" href="galeria.php">Galeria</a>
            <a class="esc" href="contatoT.php">Contato</a>
            <?php if (empty($_SESSION['Entrar'])) {
              echo '<a id="botao2" href="cadastro.html">Registro</a>';
              echo '<a id="botao" href="login.php">Entrar</a>';
            } else {
              echo '<div id="menuA">
                    <a id="nome">' . $_SESSION['nomeCadastro'] . '<img src="img/seta baixo.png" id="seta"></a> 
                    
                    <div id="menu">
                        <a href="#">Perfil</a>
                        <a href="aniquilar.php">Sair</a>
                    </div>
                    
                    </div>';
            }
            ?>
          </div>
        </div>
      </nav>

      <div id="container" style="padding: 100px; ">
        <div class="contato "style=" background-color: rgb(255, 255, 255);">
          <h1>Contato</h1><br>

          <form action="contato.php" method="post" class="elementosForm">

            <label for="">Nome</label>
            <input name="nomeC" type="text" placeholder="Digite seu Nome" required><br>

            <label for="">CNPJ</label>
            <input name="cnpj" type="text" placeholder="Digite seu CNPJ" required><br>

            <label for="">Telefone</label>
            <input name="telefone" type="text" placeholder="Digite seu Telefone" required><br>


            <label for="">Email</label>
            <input name="email1" type="email" placeholder="Digite seu Email" required><br>


            <Style>
              #botao1 {
                text-decoration: none;
                color: white;
                font-size: 100%;
                width: 40%;
                font-weight: 700;
                height: 40px;
                border-radius: 10px;
                background-color: rgb(42, 66, 110);
                box-shadow: 0px 3px 9px black;
                display: flex;
                align-items: center;
                justify-content: center;
                border: none;
                cursor: pointer;
              }

              #botao1:hover {
                transition: 300ms;
                transform: translateY(2px);
                background-color: rgb(28, 41, 66);
                box-shadow: 0px 1px 9px black;
              }
            </Style>
            <button id="botao1">Enviar</button>
          </form>
        </div>
      </div>


      <footer>
        <div id="contato">
          <h1>Contato</h1>

          <div id="tel">
            <img src="img/whatsapp.png" alt="a">
            <p>(11) 95125-5721</p>
          </div>

          <div id="ins">
            <img src="img/logotipo-do-instagram.png" alt="a">
            <p>@StageZoneOficial</p>
          </div>

          <div id="sup">
            <img src="img/midia-social.png" alt="a">
            <p>@StageZone0f1cial</p>
          </div>
        </div>

        <div id="sobre">
          <h1>Sobre nós</h1>
          <a href="">Duvidas</a>
          <a target="_blank" href="https://maps.app.goo.gl/34zBWFYCWxkdYTuj7">Local</a>
        </div>

        <div id="suporte">
          <div id="supA">
            <h1>Suporte</h1>
            <p>FAQ</p>
            <a href="">Contato</a>
          </div>
        </div>

        <div id="copyright">
          <img id="copy" src="img/direito-autoral.png" alt="">
          <span>2025 Copyright - Jhonny Souza & Ricardo Faustino</span>
        </div>
      </footer>

      <script src="js/script.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js"
        integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+"
        crossorigin="anonymous"></script>
    </div>
  </body>

  </html>
<?php } ?>