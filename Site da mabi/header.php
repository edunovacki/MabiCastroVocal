<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MabiCastroVocal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    <link rel="shortcut icon" href="imagens/icone.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Explora&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Explora&family=Italianno&family=Quintessential&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MonteCarlo&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d19d7294ad.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar bg-transparent position-absolute w-100">
            <div class="container-fluid justify-content-start">
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start custom-width" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel" data-bs-backdrop="false" data-bs-scroll="true">
                    <div class="offcanvas-header">
                        <h4 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item fs-5"><a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : '' ?>" href="index.php">Home</a></li>
                            <li class="nav-item fs-5"><a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'sobre.php') ? 'active' : '' ?>" href="sobre.php">Sobre</a></li>
                            <li class="nav-item fs-5"><a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'eventos.php') ? 'active' : '' ?>" href="eventos.php">Eventos</a></li>
                            <li class="nav-item fs-5"><a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'repertorio.php') ? 'active' : '' ?>" href="repertorio.php">Repertório</a></li>
                            <li class="nav-item fs-5"><a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'orcamento.php') ? 'active' : '' ?>" href="orcamento.php">Orçamento</a></li>
                            <li class="nav-item fs-5"><a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'contato.php') ? 'active' : '' ?>" href="contato.php">Contato</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>