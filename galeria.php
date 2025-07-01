<?php
include 'conexao.php';
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

        <title>Galeria</title>
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

<?php } else {
    $idU = $_SESSION['idCadastro'];
    $sql = "SELECT idInfoEvento, imagemInfoEvento, tituloInfoEvento, dataInfoEvento, localInfoEvento, descInfoEvento, idCadastro FROM tbinfoevento WHERE idCadastro = ?";
    $stmt = $con->prepare($sql);
    $stmt->execute([$idU]);
    $eventos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

    <!DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        <title>Galeria</title>
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

            <main id="galeCard" style="padding: 100px;">
                <?php if (count($eventos) > 0): ?>
                    <div id="localC">
                        <?php foreach ($eventos as $evento): ?>
                            <div class="cards">
                                <div class="img">
                                    <img src="uploads/<?= htmlspecialchars($evento['imagemInfoEvento']) ?>" alt="">
                                </div>

                                <span class="tilCompleto">
                                </span>
                                <div class="til">
                                    <h1 class="titulo"><?= htmlspecialchars($evento['tituloInfoEvento']) ?></h1>
                                </div>

                                <div class="desc">
                                    <span class="textoCompleto"></span>
                                    <p class="textoCard"><?= htmlspecialchars($evento['descInfoEvento']) ?>
                                    </p>
                                </div>
                                <div class="botoes">
                                    <button onclick="abrirModal1(<?= $evento['idInfoEvento'] ?>)" type="button"
                                        class="vis">Ver Mais</button>
                                    <button onclick="abrirModal2(<?= $evento['idInfoEvento'] ?>)" type="button" class="edit">Editar</button>
                                </div>
                            </div>

                        <?php endforeach; ?>
                        <div class="meio">
                            <a onclick="abrirModal()"><img class="bola" src="img/Circulo.png"></a>
                        </div>
                    <?php else: ?>
                        <div class="meio">
                            <a onclick="abrirModal()"><img class="bola" src="img/Circulo.png"></a>
                        </div>
                    <?php endif; ?>
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

            <!-- Modals -->

            <div class="modal modalC">
                <div class="modal1">
                    <form class="form" action="galeriaS.php" method="post" enctype="multipart/form-data" onsubmit="return validarFormulario()">
                        <h1>Adicionar Evento</h1>

                        <label>Selecione a foto do evento</label>
                        <label for="inputImagem">
                            <img src="img/CirculoP.png" alt="Clique para selecionar imagem" class="botao-upload uploadTrigger">
                        </label>
                        <input id="inputImagem" onchange="previewImagem()" class="inputImagem" name="inputImagem" type="file" accept="image/*" style="display: none;">

                        <label>Titulo do Evento</label>
                        <input maxlength="100" class="titulo" name="titulo" required placeholder="Digite o titulo do evento" type="text">

                        <label>Local do Evento</label>
                        <input maxlength="100" class="local" name="local" required placeholder="Digite o local do evento" type="text">

                        <label>Data do Evento</label>
                        <input class="data" name="data" required style="cursor: pointer;" type="date">

                        <label>Descrição do Evento</label>
                        <textarea maxlength="255" class="texto" name="texto" required style="resize: none;"></textarea>

                        <span class="aviso"></span>
                        <div class="botoes">
                            <button onclick="fecharModal()" type="button" class="voltar">Voltar</button>
                            <button type="submit" class="criar">Criar</button>

                        </div>

                    </form>
                </div>
            </div>

            <?php if (count($eventos) > 0):
                foreach ($eventos as $evento):
            ?>
                    <div class="modal modalV<?= $evento['idInfoEvento'] ?>">
                        <?php $data = $evento['dataInfoEvento'];
                        $parte1 = substr($data, 0, 4);
                        $parte2 = substr($data, 5, 2);
                        $parte3 = substr($data, 8, 2);
                        $dataF = $parte3 . "/" . $parte2 . "/" . $parte1

                        ?>

                        <div class="modal1 modal1V">
                            <form action="galeriaS.php" class="form">
                                <div class="img">
                                    <img src="uploads/<?= htmlspecialchars($evento['imagemInfoEvento']) ?>" alt="aaaaaaa">
                                </div>

                                <div class="titulo">
                                    <h1><?= htmlspecialchars($evento['tituloInfoEvento']) ?><h1>
                                </div>

                                <div class="local">
                                    <h2>Local</h2>
                                    <p><?= htmlspecialchars($evento['localInfoEvento']) ?></p>
                                </div>

                                <div class="data">
                                    <h2>Data</h2>
                                    <p><?= $dataF ?></p>
                                </div>

                                <div class="desc">
                                    <h1>Descrição</h1>
                                    <p><?= htmlspecialchars($evento['descInfoEvento']) ?></p>
                                </div>

                                <div class="volt">
                                    <button onclick="fecharModal1(<?= $evento['idInfoEvento'] ?>)" type="button">Voltar</button>
                                </div>
                            </form>
                        </div>
                    </div>

            <?php endforeach;
            endif;
            ?>

            <?php if (count($eventos) > 0):
                foreach ($eventos as $evento):
            ?>
                    <div class="modal modalB<?= $evento['idInfoEvento'] ?>">
                        <div class="modal1 modal1B">
                            <form action="atualizar.php" method="post" enctype="multipart/form-data" class="form">
                                <h1>Editar Evento</h1>

                                <label>Selecione a foto do evento (opcional)</label>
                                <label for="inputImagemE<?= $evento['idInfoEvento'] ?>">
                                    <img src="uploads/<?= $evento['imagemInfoEvento'] ?>" alt="Clique para selecionar imagem" class="botao-upload uploadTriggerE<?= $evento['idInfoEvento'] ?>">
                                </label>
                                <input id="inputImagemE<?= $evento['idInfoEvento'] ?>" onchange="previewImagemE(<?= $evento['idInfoEvento'] ?>)" class="inputImagemE" name="inputImagemE" type="file" accept="image/*" style="display: none;">

                                <label>Titulo do Evento</label>
                                <input maxlength="100" value="<?= htmlspecialchars($evento['tituloInfoEvento']) ?>" id="tituloE<?=$evento['idInfoEvento'] ?>" class="titulo" name="tituloE" required placeholder="Digite o titulo do evento" type="text">

                                <input style="display: none;" name="idEvento" value="<?= htmlspecialchars($evento['idInfoEvento']) ?>" type="text">

                                <label>Local do Evento</label>
                                <input maxlength="100" value="<?= htmlspecialchars($evento['localInfoEvento']) ?>" id="localE<?= $evento['idInfoEvento'] ?>" class="local" name="localE" required placeholder="Digite o local do evento" type="text">

                                <label>Data do Evento</label>
                                <input class="data" value="<?= htmlspecialchars($evento['dataInfoEvento']) ?>" id="dataE<?= $evento['idInfoEvento'] ?>" name="dataE" required style="cursor: pointer;" type="date">

                                <label>Descrição do Evento</label>
                                <textarea maxlength="255" id="textoE<?= $evento['idInfoEvento'] ?>" class="texto" name="textoE" required style="resize: none;"><?= htmlspecialchars($evento['descInfoEvento']) ?></textarea>

                                <span style="color: greenyellow;" id="aviso1"></span>
                                <div class="botoes">
                                    <button onclick="fecharModal2(<?= $evento['idInfoEvento'] ?>)" type="button" class="voltar voltar1">Voltar</button>
                                    <button onclick="abrirModalEx(<?= $evento['idInfoEvento'] ?>)" class="deletar" type="button">Deletar</button>
                                    <button type="submit" class="criar">Editar</button>
                                </div>

                            </form>
                        </div>
                    </div>
        </div>
<?php endforeach;
            endif;
?>
 <?php if (count($eventos) > 0):
                foreach ($eventos as $evento):
            ?>
                    <div class="modal modalEX<?= $evento['idInfoEvento'] ?>">
                        <div class="modal2 modal1B">
                            <form action="atualizar.php" method="post" enctype="multipart/form-data" class="form2">
                                <h1>Tem certeza que deseja excluir esse evento?</h1>

                                <div class="botoes2">
                                    <button onclick="fecharModalEx(<?= $evento['idInfoEvento'] ?>)" type="button" class="voltar voltar1">Voltar</button>
                                    <button onclick="escumungar(<?= $evento['idInfoEvento'] ?>)" class="deletar" type="button">Deletar</button>
                                   
                                </div>

                            </form>
                        </div>
                    </div>
        </div>
<?php endforeach;
            endif;
?>
<?php if (count($eventos) > 0):
                foreach ($eventos as $evento):
            ?>
                    <div class="modal modalMenE<?= $evento['idInfoEvento'] ?>">
                        <div class="modal2 modal1B">
                            <form action="atualizar.php" method="post" enctype="multipart/form-data" class="form2">
                                <h1>Evento excluido com sucesso</h1>

                            </form>
                        </div>
                    </div>
        </div>
<?php endforeach;
            endif;
            ?>


<script src="js/script.js" defer></script>
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