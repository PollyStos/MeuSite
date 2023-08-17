<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Bebas+Neue&display=swap" rel="stylesheet">

    <!--Style-->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- favicon -->
    <link rel="shortcut icon" href="/img/favicon_io/favicon.ico" type="image/x-icon">



    <title>@yield('title')</title>

</head>

<body class="bg-base-light m-0">
    <div class="nav bg-dark ">
        <nav id="menu" class="navbar navbar-expand-lg bg-body-tertiary fixed-top p-3 bg-opacity-10" style="">
            <div class="container-fluid ">
                <a class="navbar-brand" href="/">
                    <img src="/img/favicon_io/android-chrome-192x192.png" width="30" height="30" alt="">
                </a>
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/learn">Aprender</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/projects">Projetos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/about">Sobre</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- <div class="m-3">
            <button id="btn-outline-game" class="btn dropdown-toggle" data-toggle="dropdown">Jogos Online</button>
            <div class="dropdown-menu p-3">
                <ul class="navbar-nav dropdown-header text-dark">Jogos
                    <li><a href="/game" class=" dropdown-item text-secondary">Recentes</a></li>
                    <li><a href="/game" class=" dropdown-item text-secondary">Populares</a></li>
                    <li><a href="/game" class="dropdown-item text-secondary">Todos</a></li>
                </ul>
                <div class="dropdown-divider"></div>
                <a href="/login" class="dropdown-item text-dark">Login</a>


            </div> -->
    </div>
    </div>

    @yield('content')
    <!-- script.js -->
    <script src="/js/index.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
<footer class="footer_info bg-dark">
    <div class="d-flex flex-row justify-content-between mw-75">
        <section class="nav">
            <ul class="navbar-nav title"><strong>Mapa do Site</strong>
                <li><a href="/">Início</a></li>
                <li><a href="/learn">Aprender</a></li>
                <li><a href="blog">Blog</a></li>
                <li><a href="/projects">Projetos</a></li>
                <li><a href="/about">Sobre</a></li>
                <li><a href="/game">Jogos Online</a></li>
            </ul>
        </section>
        <section class="title">
            <ul class="navbar-nav"><strong>Contato</strong>
                <li>polly_stos@yahoo.com.br </li>
            </ul>
        </section>
        <section class="nav">
            <ul class="navbar-nav title"><strong>Redes Socias</strong>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="https://github.com/PollyStos">GitHub</a></li>
                <li><a href="https://www.youtube.com/channel/UCYatEr5U_tFcDzNWlZFksTQ">YouTube</a></li>
            </ul>
        </section>
    </div>
</footer>

</html>