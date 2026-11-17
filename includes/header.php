<?php

require_once __DIR__ . '/../config.php';

if (!isset($tituloPagina)) {
    $tituloPagina = "Inicio";
}

if (!isset($paginaActiva)) {
    $paginaActiva = "inicio";
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Estudio fotográfico profesional. Capturamos tus mejores momentos.">

    <title>
        <?= htmlspecialchars($tituloPagina) ?> |
        <?= htmlspecialchars($nombreEstudio) ?>
    </title>

    <link rel="stylesheet" href="css/style.css">


    <!-- ===================================
         ESTILOS DEL SUBMENÚ
    =================================== -->

    <style>

        /* CONTENEDOR DEL MENÚ */

        .menu-desplegable {
            position: relative;
        }

        /* FLECHA */

        .flecha-submenu {
            display: inline-block;
            margin-left: 5px;
            font-size: 13px;
            transition: transform 0.3s;
        }

        .menu-desplegable:hover .flecha-submenu {
            transform: rotate(180deg);
        }

        /* LISTA DESPLEGABLE */

        .submenu-paquetes {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%) translateY(10px);

            width: 260px;
            max-height: 500px;
            overflow-y: auto;

            background: #171313;

            padding: 10px 0;
            margin: 0;

            list-style: none;
            text-align: center;

            opacity: 0;
            visibility: hidden;

            transition: all 0.3s ease;

            z-index: 99999;
        }

        /* MOSTRAR AL PASAR EL CURSOR */

        .menu-desplegable:hover .submenu-paquetes,
        .menu-desplegable:focus-within .submenu-paquetes {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0);
        }

        /* OPCIONES */

        .submenu-paquetes li {
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .submenu-paquetes li a {
            display: block;
            padding: 12px 10px;

            color: #ffffff;
            font-size: 16px;
            font-weight: 400;

            text-decoration: none;

            transition: all 0.25s ease;
        }

        /* EFECTO AL PASAR EL CURSOR */

        .submenu-paquetes li a:hover {
            color: #c9a36b;
            background: rgba(255,255,255,0.08);
        }

        /* BARRA DE DESPLAZAMIENTO */

        .submenu-paquetes::-webkit-scrollbar {
            width: 5px;
        }

        .submenu-paquetes::-webkit-scrollbar-thumb {
            background: #a98a62;
            border-radius: 10px;
        }

        /* MENÚ EN CELULARES */

        @media (max-width: 768px) {

            .submenu-paquetes {
                position: static;
                display: none;

                width: 100%;
                max-height: 350px;

                transform: none;
                opacity: 1;
                visibility: visible;

                background: #171313;
                box-shadow: none;
            }

            .menu-desplegable:hover .submenu-paquetes,
            .menu-desplegable:focus-within .submenu-paquetes {
                display: block;
                transform: none;
            }

        }

    </style>

</head>

<body>

<!-- ===================================
     ENCABEZADO Y MENÚ PRINCIPAL
=================================== -->

<header class="encabezado">

    <div class="contenedor-encabezado">

        <!-- LOGO -->

        <div class="zona-logo">

            <a href="index.php">

                <img
                    src="image/logo.png"
                    alt="Logo del estudio fotográfico"
                    class="logo"
                >

            </a>

        </div>


        <!-- BOTÓN MENÚ CELULAR -->

        <input
            type="checkbox"
            id="menu-toggle"
            class="menu-toggle"
        >

        <label for="menu-toggle" class="boton-menu">

            <span></span>
            <span></span>
            <span></span>

        </label>


        <!-- OPCIONES DEL MENÚ -->

        <nav class="menu-principal">

            <a
                href="index.php"
                class="<?= $paginaActiva == 'inicio' ? 'activo' : '' ?>"
            >
                ¡Bienvenido!
            </a>


            <a
                href="fotos_impresas.php"
                class="<?= $paginaActiva == 'impresas' ? 'activo' : '' ?>"
            >
                Fotos impresas
            </a>


            <!-- ===================================
                 PAQUETES Y PRECIOS
                 MENÚ DESPLEGABLE
            =================================== -->

            <div class="menu-desplegable">

                <a
                    href="paquetes_precios.php"
                    class="<?= $paginaActiva == 'paquetes' ? 'activo' : '' ?>"
                >
                    Paquetes y Precios

                    <span class="flecha-submenu">⌄</span>

                </a>


                <ul class="submenu-paquetes">

                    <li>
                        <a href="paquetes_precios.php?tipo=quinceanos">Quinceaños</a>
                    </li>

                    <li>
                        <a href="paquetes_precios.php?tipo=bautizos">Bautizos</a>
                    </li>

                    <li>
                        <a href="paquetes_precios.php?tipo=matrimonios">Matrimonios</a>
                    </li>

                    <li>
                        <a href="paquetes_precios.php?tipo=empresariales">Empresariales</a>
                    </li>

                    <li>
                        <a href="paquetes_precios.php?tipo=eventos">Eventos</a>
                    </li>

                    <li>
                        <a href="paquetes_precios.php?tipo=familiar">Familiar</a>
                    </li>

                    <li>
                        <a href="paquetes_precios.php?tipo=graduados">Graduados</a>
                    </li>

                    <li>
                        <a href="paquetes_precios.php?tipo=maternidad">Maternidad</a>
                    </li>

                </ul>

            </div>


            <a
                href="portfolio.php"
                class="<?= $paginaActiva == 'portfolio' ? 'activo' : '' ?>"
            >
                Portafolio
            </a>


            <a
                href="conocenos.php"
                class="<?= $paginaActiva == 'conocenos' ? 'activo' : '' ?>"
            >
                Conóceme
            </a>

        </nav>

    </div>

</header>

<!-- CONTENIDO DE CADA PÁGINA -->

<main>