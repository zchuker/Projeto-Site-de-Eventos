<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <div class="wrapper">


        <nav id="nav">
            <div id="nave">
                <div id="logoC">
                    <div id="logoB">
                        <img id="logo" src="img/EventosLogo.png" alt="aaaa">
                    </div>
                </div>

                <div id="selecao">
                    <a class="esc" href="#">Home</a>
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

        <header>
            <div id="bemVindo">
                <h1>Bem-vindo ao maior HUB de eventos do país!</h1>
                <p>Seja para games, cultura pop, tecnologia ou negócios, aqui você encontra os melhores espaços e datas para
                    realizar ou participar dos maiores eventos da cena. Explore nossa galeria, conheça nossos espaços e
                    venha fazer parte de experiências inesquecíveis!</p>
                <a href="">Fale Conosco</a>
            </div>
        </header>

        <main>
            <div id="quemSomos">
                <div id="texto">
                    <h1>Quem somos?</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ipsam amet maiores illum facere ab
                        iusto architecto nihil laudantium corrupti atque inventore, voluptatum nam praesentium sed
                        reiciendis, soluta accusantium fuga. Ipsam ea nostrum aspernatur temporibus odio omnis obcaecati
                        deleniti reiciendis, necessitatibus aut sit hic officia dignissimos cum eligendi fugiat. Pariatur
                        consequuntur modi nihil ducimus ex fugit voluptatem esse nobis, id quisquam doloremque porro hic
                        magni voluptates fugiat molestias inventore corporis consectetur repudiandae repellat totam?
                        Explicabo illum earum et unde labore tenetur molestias aperiam perspiciatis obcaecati quaerat
                        temporibus nam hic optio doloremque, reiciendis odio cum itaque esse voluptatem ut maiores saepe.
                    </p>
                </div>

                <div id="imagem">
                    <img src="img/Empresa.jpg" alt="a">
                </div>
            </div>

            <div id="onde">
                <h1>Onde nós operamos</h1>
                <div id="carouselExampleDark" class="carousel carousel-dark slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                    </div>

                    <div class="carousel-inner">

                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="img/Evento.webp" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Distrito Anhembi</h5>
                                <p>Av. Olavo Fontoura, 1209 - Santana, São Paulo - SP, 02001-900</p>
                            </div>
                        </div>

                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="img/Expo.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>São Paulo Expo</h5>
                                <p>Rodovia dos Imigrantes, km 1,5 – Vila Água Funda, São Paulo – SP</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="img/palacio.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Palácio Tangará</h5>
                                <p>Rua Deputado Laércio Corte, 1501 – Panamby, São Paulo – SP – CEP 05706-290</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="img/allianz.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Allianz Parque</h5>
                                <p>Av. Francisco Matarazzo, 1705 – Água Branca, São Paulo – SP – CEP 05001-200</p>
                            </div>
                        </div>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
            <div id="objetivo">
                <div id="texto1">
                    <h1>Nosso Objetivo</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus suscipit facere tempore et velit
                        similique cum consectetur? Aliquid similique architecto in rerum animi neque dicta dignissimos! Modi
                        sed expedita ipsam, libero officia aliquam quos delectus vel sint consectetur non ullam nesciunt est
                        provident ut quod hic maxime perspiciatis nobis amet molestias! Doloremque, consequuntur expedita
                        sed illum, voluptate provident aperiam ut sit quia porro rerum debitis omnis! Enim architecto eaque
                        quidem nostrum vel quia pariatur laborum, ipsa saepe cumque unde maiores error quod. Aspernatur
                        ratione, labore vitae, voluptatibus doloremque ut tempore, pariatur blanditiis aperiam reiciendis
                        quia sit mollitia provident! Quos, eveniet!</p>
                </div>

                <div id="imagem1">
                    <img src="img/objetivo.jpeg" alt="">
                </div>
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