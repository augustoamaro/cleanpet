<?php

require_once './biblioteca.php';
startSession();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pet Clean</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="./bower_components/normalize-css/normalize.css" />
    <link rel="stylesheet" href="./bower_components/rgs/rgs-10.css">
    <link rel="stylesheet" href="./static/css/scaffolding.css" />
    <link rel="stylesheet" href="./static/css/typography.css" />
    <link rel="stylesheet" href="./static/css/helpers.css">
    <link rel="stylesheet" href="./static/css/image-list.css">
    <link rel="stylesheet" href="./static/css/section.css">
    <link rel="stylesheet" href="./static/css/buttons.css">
</head>

<body>
    <header id="site-header">
        <div class="container">
            <a href="/" class="brand">
                   
                </a>
            <nav class="main-menu">
                <ul>
                    <li>
                        <a href="##">Home</a>
                    </li>
                    <li>
                        <a href="registrar.php">Cadastre-se</a>
                    </li>
                    <li>
                        <a class="btn-action" href="./login.php">Entrar</a>
                    </li>

                     <?php 
                    
                    if(isset($_SESSION[SESSION_LOGIN])) {
                ?>
                    <li class="scroll"><form action="logoff.php" method="POST"></li>
                        <button type="submit" class="btn-logoff">Logoff</button>
                    </form>
                    
                <?php } ?>

                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="jumbotron push-header text-center">
            <header>
                <h2>Pet Clean</h2>
                <h3>Banho e Tosa para seu Pet</h3>
            </header>
            
        </section>
        <section>
            <header>
                <h2>Portifólio</h2>
                <h3>Veja nossos principais trabalhos</h3>
            </header>
            <div class="section-content container">
                <ul class="image-list">
                    <li>
                        <h4>Banho</h4>
                        <img src="./static/images/work1.jpg" alt="Banho" width="240" height="290">
                    </li>
                    <li>
                        <h4>Tosa</h4>
                        <img src="./static/images/work2.jpg" alt="Tosa" width="240" height="290">
                    </li>
                    <li>
                        <h4>Crechê</h4>
                        <img src="./static/images/work3.jpg" alt="Crechê" width="240" height="290">
                    </li>
                    <li>
                        <h4>Hotel</h4>
                        <img src="./static/images/work4.jpg" alt="Hotel" width="240" height="290">
                    </li>
                </ul>
            </div>
        </section>
        <section>

        </section>

    </main>
    <footer id="site-footer">
        <div class="container">
            <div class="nav-list">
                <nav>
                    <h4>Endereço</h4>
                    <ul>
                        <li>
                           <a>Rua Uruguai</a> 
                        </li>
                    </ul>
                </nav>
                <nav>
                    <h4>Sobre</h4>
                    <ul>
                        <li>
                            <a href="##">Carreira</a>
                        </li>
                        <li>
                            <a href="##">Novidades</a>
                        </li>
                        <li>
                            <a href="##">Parceiros</a>
                        </li>
                        <li>
                            <a href="##">Politica de Privacidade</a>
                        </li>
                        <li>
                            <a href="##">Termos de Servico</a>
                        </li>
                    </ul>
                </nav>
                <nav>
                    <h4>Rede Sociais</h4>
                    <ul>
                        <li>
                            <a href="##">Twitter</a>
                        </li>
                        <li>
                            <a href="##">Facebook</a>
                        </li>
                        <li>
                            <a href="##">Linkedin</a>
                        </li>
                        <li>
                            <a href="##">Instagram</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
</body>

</html>