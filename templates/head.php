<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/Proyecto-final-web/assets/css/custom/Main.css">
    <link rel="stylesheet" href="http://localhost/Proyecto-final-web/assets/css/Bootstrap-css/bootstrap.css">
    
    <title>Document</title>
</head>

<body>
<header class="body-header">

<!-- Home of menu -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="container-fluid">

        <!-- icon or name -->
        <a class="navbar-brand" href="http://localhost/Proyecto-final-web/index.php">
            <i class="bi bi-flower1"></i>
            <span class="text-warning">Librería</span>
        </a>

        <!-- button menu -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- collapsable menu elements -->
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost/Proyecto-final-web/index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/Proyecto-final-web/views/books/books.php">Libros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/Proyecto-final-web/views/autors/autors.php">Autores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/Proyecto-final-web/views/contact/create.php">Contacto</a>
                </li>
                <li class="nav-item dropdown" data-bs-theme="dark">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Practices
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Practice 1</a></li>
                        <!-- <li><a class="dropdown-item" href="#">Practice 2</a></li>
                        <li><a class="dropdown-item" href="#">Practice 3</a></li>
                        <li><a class="dropdown-item" href="#">Practice 4</a></li>
                        <li><a class="dropdown-item" href="#">Practice 5</a></li>
                        <li><a class="dropdown-item" href="#">Practice 6</a></li> -->
                    </ul>
                </li>
            </ul>

            <hr class="d-md-none text-white-50">
            

            <!-- Social media links -->
            <p class="d-md-none text-light">Buscador</p>
            <form class="d-flex" role="search">
                    <input class="form-control me-2 my-1" type="search" placeholder="Buscar libro / autor..." aria-label="Search">
                    <button class="btn btn-outline-success my-1" type="submit">Buscar</button>
            </form>
</header>