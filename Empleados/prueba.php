<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Navbar y Sidebar</title>
    <style>
        .page-header {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 60px;
            height: var(--header-height);
            z-index: var(--header-zIndex);
            background: #1a2c38;
            background: var(--grey-600);
            box-shadow: rgba(0, 0, 0, 0.2) 0 4px 6px -1px, rgba(0, 0, 0, 0.1215686275) 0 2px 4px -1px;
            touch-action: none;
            padding: 0 3vw;
            z-index: 999;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: auto;
        }

        .page-header__container {
            display: flex;
            align-items: center;
        }

        a {
            color: rgb(232, 230, 227);
            text-decoration-color: initial;
            background-color: rgba(0, 0, 0, 0);
        }

        img {
            border-style: none;
            max-width: 100%;
            display: block;
        }

        .page-header__container-action-buttons {
            margin-left: auto;
        }

        .button.variant-link,
        .button.btn-link,
        .btn.variant-link,
        .btn.btn-link {
            color: var(--darkreader-text--white);
            background-image: initial;
            background-color: initial;
            outline-color: initial;
            box-shadow: none;
        }

        /* Estilos para el navbar */
        .navbar {
            background-color: #212529;
            padding: 10px 20px;
        }

        .navbar-brand img {
            width: 68px;
            height: 34px;
        }

        .navbar-toggler {
            color: white;
            border-color: white;
        }

        .navbar-toggler-icon {
            background-image: url('data:image/svg+xml;charset=utf8,%3Csvg viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath stroke="rgba(255, 255, 255, 0.5)" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/%3E%3C/svg%3E');
        }

        /* Estilos para el sidebar */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            height: 100vh;
            width: 250px;
            background-color: #333;
            padding-top: 60px;
            transition: 0.3s;
        }

        .sidebar ul {
            list-style: none;
            padding-left: 0;
        }

        .sidebar li {
            padding: 10px 20px;
            color: white;
            transition: 0.3s;
        }

        .sidebar li:hover {
            background-color: #555;
        }

        /* Estilos para el contenido principal */
        .main-content {
            margin-left: 250px;
            /* Ancho del sidebar */
            padding: 20px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/assets/images/logo/on-dark.svg" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul>
            <li><a href="#">Enlace 1</a></li>
            <li><a href="#">Enlace 2</a></li>
            <li><a href="#">Enlace 3</a></li>
            <li><a href="#">Enlace 4</a></li>
        </ul>
    </div>

    <!-- Contenido principal -->
    <div class="main-content">
        <h1>Contenido Principal</h1>
        <p>Este es el área principal de tu página.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>