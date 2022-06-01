<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LASTHIT | League Of Legends</title>
    <link rel="icon" href="https://i.ibb.co/wMhkCJL/facebook-cover-photo-1.png">
    <!-- CSS bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JS Bootstrap 5 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <!-- CSS bootstrap 5 iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <!-- CSS estilos personalizados -->
    <link rel="stylesheet" href="http://localhost/lasthit/css/plantilla/plantilla-personalizada.css">
    <!-- JS jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- CSS datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
    <!-- JS datatables -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js"></script>
    <!-- CSS AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand"><img src="http://localhost/lasthit/img/plantilla/logo.png" class="img-fluid imagen-navbar" alt="img-logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <form action="http://localhost/lasthit/controladorInicio" method="post">
                        <li class="nav-item">
                            <button class="nav-link btn-navbar" name="btnInicio" value="inicio">Inicio</button>
                        </li>
                    </form>
                    <form action="http://localhost/lasthit/controladorInvocador" method="post">
                        <li class="nav-item">
                            <button class="nav-link btn-navbar" name="btnBuscarInvocador" value="buscarInvocador">Invocador</button>
                        </li>
                    </form>
                    <form action="http://localhost/lasthit/controladorCampeones" method="post">
                        <li class="nav-item">
                            <button class="nav-link btn-navbar" name="btnBuscarPersonaje" value="buscarPersonaje">Personajes</button>
                        </li>
                    </form>
                    <form action="http://localhost/lasthit/controladorObjetos" method="post">
                        <li class="nav-item">
                            <button class="nav-link btn-navbar" name="btnBuscarObjeto" value="buscarObjeto">Objetos</button>
                        </li>
                    </form>
                    <form action="http://localhost/lasthit/controladorRanking" method="post">
                        <li class="nav-item">
                            <button class="nav-link btn-navbar" name="btnRanking" value="ranking">Ranking</button>
                        </li>
                    </form>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cuenta</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                            <li><a class="dropdown-item" href="http://localhost/lasthit/login">Iniciar sesión</a></li>
                            <li><a class="dropdown-item" href="http://localhost/lasthit/registro">Registro</a></li>
                            <li><a class="dropdown-item" href="http://localhost/lasthit/perfil">Perfil</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>