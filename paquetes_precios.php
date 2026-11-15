<?php

$tituloPagina = "Paquetes y Precios";
$paginaActiva = "paquetes";

/* ===================================
   CATEGORÍAS: paquetes y fotos
   Cambia aquí los nombres de tus imágenes
=================================== */

$categorias = [

    "quinceanos" => [
        "titulo" => "Quinceaños",
        "texto"  => "Un día único merece recuerdos inolvidables.",
        "paquetes" => [
            ["imagen" => "Quinceañera.jpg", "nombre" => "Paquete Básico",  "descripcion" => "Sesión de fotos para tu gran día.",  "precio" => "Consultar precio"],
            ["imagen" => "quinceaños 0.jpg", "nombre" => "Paquete Premium", "descripcion" => "Sesión completa con fotos y álbum.", "precio" => "Consultar precio"]
        ],
        "fotos" => ["quinceaños 1.jpg", "quinceaños 2.jpg", "quinceaños 3.jpg", "quinceaños 4.jpg", "quinceaños 5.jpg", "quinceaños 6.jpg"]
    ],

    "bautizos" => [
        "titulo" => "Bautizos",
        "texto"  => "Momentos tiernos y especiales para recordar siempre.",
        "paquetes" => [
            ["imagen" => "bautizo.jpg", "nombre" => "Paquete Básico",  "descripcion" => "Cobertura de la ceremonia.",      "precio" => "Consultar precio"],
            ["imagen" => "bautizo 0.jpg", "nombre" => "Paquete Premium", "descripcion" => "Ceremonia, celebración y álbum.", "precio" => "Consultar precio"]
        ],
        "fotos" => ["bautizo 1.jpg", "bautiso 2.jpg", "bautizo 3.jpg", "bautizo 4.jpg", "bautizo 5.jpg", "bautizo 6.jpg"]
    ],

    "matrimonios" => [
        "titulo" => "Matrimonios",
        "texto"  => "Capturamos cada instante de tu gran día.",
        "paquetes" => [
            ["imagen" => "matrimonio.jpg", "nombre" => "Paquete Básico",  "descripcion" => "Cobertura de la ceremonia.",   "precio" => "Consultar precio"],
            ["imagen" => "matrimonio 0.jpg", "nombre" => "Paquete Premium", "descripcion" => "Cobertura completa y álbum.",  "precio" => "Consultar precio"]
        ],
        "fotos" => ["matrimonio 1.jpg", "matrimonio 2.jpg", "matrimonio 3.jpg", "matrimonio 4.jpg", "matrimonio 5.jpg", "matrimonio 6.jpg"]
    ],

    "empresariales" => [
        "titulo" => "Empresariales",
        "texto"  => "Imagen profesional para tu empresa o marca.",
        "paquetes" => [
            ["imagen" => "empresariales.jpg", "nombre" => "Paquete Básico",  "descripcion" => "Fotos corporativas del equipo.",         "precio" => "Consultar precio"],
            ["imagen" => "empresariales 0.jpg", "nombre" => "Paquete Premium", "descripcion" => "Fotos de equipo, producto y espacios.",  "precio" => "Consultar precio"]
        ],
        "fotos" => ["empresariales 1.jpg", "empresariales 2.jpg", "empresariales 3.jpg", "empresariales 4.jpg", "empresariales 5.jpg", "empresariales 6.jpg"]
    ],

    "eventos" => [
        "titulo" => "Eventos",
        "texto"  => "Cobertura fotográfica para todo tipo de celebración.",
        "paquetes" => [
            ["imagen" => "eventos.jpg", "nombre" => "Paquete Básico",  "descripcion" => "Cobertura de hasta 2 horas.",    "precio" => "Consultar precio"],
            ["imagen" => "evento 0.jpg", "nombre" => "Paquete Premium", "descripcion" => "Cobertura completa del evento.", "precio" => "Consultar precio"]
        ],
        "fotos" => ["evento 1.jpg", "evento 2.jpg", "evento 3.jpg", "evento 4.jpg", "evento 5.jpg", "evento 6.jpg"]
    ],

    "familiar" => [
        "titulo" => "Familiar",
        "texto"  => "Recuerdos llenos de amor para toda la familia.",
        "paquetes" => [
            ["imagen" => "familiares.jpg", "nombre" => "Paquete Básico",  "descripcion" => "Sesión familiar en estudio.",             "precio" => "Consultar precio"],
            ["imagen" => "familiares 0.jpg", "nombre" => "Paquete Premium", "descripcion" => "Sesión en exteriores y fotos impresas.",  "precio" => "Consultar precio"]
        ],
        "fotos" => ["familiares 1.jpg", "familiares 2.jpg", "familiares 3.jpg", "familiar 4.jpg", "familiar 5.jpg", "familiar 6.jpg"]
    ],

    "graduados" => [
        "titulo" => "Graduados",
        "texto"  => "Celebra tu logro con fotografías únicas.",
        "paquetes" => [
            ["imagen" => "graduados.jpg", "nombre" => "Paquete Básico",  "descripcion" => "Sesión individual con toga y birrete.", "precio" => "Consultar precio"],
            ["imagen" => "graduados 0.jpg", "nombre" => "Paquete Premium", "descripcion" => "Sesión individual y con familia.",       "precio" => "Consultar precio"]
        ],
        "fotos" => ["graduados 1.jpg", "graduados 2.jpg", "graduados 3.jpg", "graduados 4.jpg", "graduados 5.jpg", "graduados 6.jpg"]
    ],

    "maternidad" => [
        "titulo" => "Maternidad",
        "texto"  => "La dulce espera, guardada para siempre.",
        "paquetes" => [
            ["imagen" => "maternidad.jpg", "nombre" => "Paquete Básico",  "descripcion" => "Sesión de maternidad en estudio.",       "precio" => "Consultar precio"],
            ["imagen" => "maternidad  0.jpg", "nombre" => "Paquete Premium", "descripcion" => "Sesión completa con pareja y álbum.",    "precio" => "Consultar precio"]
        ],
        "fotos" => ["maternidad 1.jpg", "maternidad 2.jpg", "maternidad 3.jpg", "maternidad 4.jpg", "maternidad 5.jpg", "maternidad 6.jpg"]
    ]

];


/* ===================================
   ¿Eligió una categoría?
=================================== */

$tipo = $_GET['tipo'] ?? '';

$hayCategoria = isset($categorias[$tipo]);

if ($hayCategoria) {

    $categoria = $categorias[$tipo];

    $tituloPagina  = $categoria['titulo'];
    $tituloPortada = $categoria['titulo'];
    $textoPortada  = $categoria['texto'];
    $tituloLista   = "Paquetes de " . $categoria['titulo'];
    $paquetes      = $categoria['paquetes'];

} else {

    $tituloPortada = "Paquetes y Precios";
    $textoPortada  = "Tengo una opción especial para cada ocasión.";
    $tituloLista   = "Mis Paquetes";

    $paquetes = [
        [
            "imagen" => "quinceaños 2.jpg",
            "nombre" => "Sesión Personal",
            "descripcion" => "Una sesión fotográfica diseñada especialmente para ti.",
            "precio" => "Consultar precio"
        ],
        [
            "imagen" => "familiares 0.jpg",
            "nombre" => "Sesión Familiar",
            "descripcion" => "Comparte y conserva los mejores recuerdos familiares.",
            "precio" => "Consultar precio"
        ],
        [
            "imagen" => "matrimonio 2.jpg",
            "nombre" => "Sesión de Pareja",
            "descripcion" => "Capturamos los momentos más especiales de tu historia.",
            "precio" => "Consultar precio"
        ]
    ];
}

include 'includes/header.php';

?>

<section class="portada-interna">

    <h1><?= htmlspecialchars($tituloPortada) ?></h1>

    <p><?= htmlspecialchars($textoPortada) ?></p>

</section>


<section class="contenido-interno">

    <div class="titulo-seccion">

        <span></span>

        <h2><?= htmlspecialchars($tituloLista) ?></h2>

        <span></span>

    </div>


    <div class="tarjetas-servicios">

        <?php foreach ($paquetes as $paquete): ?>

            <article class="tarjeta-servicio">

                <img
                    src="image/<?= rawurlencode($paquete['imagen']) ?>"
                    alt="<?= htmlspecialchars($paquete['nombre']) ?>"
                >

                <div class="tarjeta-contenido">

                    <h3><?= htmlspecialchars($paquete['nombre']) ?></h3>

                    <p><?= htmlspecialchars($paquete['descripcion']) ?></p>

                    <h4 class="precio">
                        <?= htmlspecialchars($paquete['precio']) ?>
                    </h4>

                    <a href="<?= htmlspecialchars($enlaceWhatsApp) ?>"
                       class="boton-principal"
                       target="_blank"
                       rel="noopener">
                        Solicitar información
                    </a>

                </div>

            </article>

        <?php endforeach; ?>

    </div>

</section>


<?php if ($hayCategoria): ?>

<section class="contenido-interno">

    <div class="titulo-seccion">

        <span></span>

        <h2>Fotografías de <?= htmlspecialchars($categoria['titulo']) ?></h2>

        <span></span>

    </div>


    <div class="portfolio-galeria">

        <?php foreach ($categoria['fotos'] as $numero => $foto): ?>

            <div class="portfolio-foto">

                <img
                    src="image/<?= rawurlencode($foto) ?>"
                    alt="<?= htmlspecialchars($categoria['titulo']) ?> - Fotografía <?= $numero + 1 ?>"
                >

            </div>

        <?php endforeach; ?>

    </div>

</section>

<?php endif; ?>


<?php include 'includes/footer.php'; ?>