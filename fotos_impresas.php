<?php

$tituloPagina = "Fotos impresas";
$paginaActiva = "impresas";

include 'includes/header.php';

?>

<section class="portada-interna">

    <h1>Fotos impresas</h1>

    <p>Convierte tus recuerdos en momentos para conservar.</p>

</section>


<section class="contenido-interno">

    <div class="titulo-seccion">

        <span></span>

        <h2>Mis Fotos Impresas</h2>

        <span></span>

    </div>


    <div class="tarjetas-servicios">

        <?php

        $fotos = [
            [
                "imagen" => "recuerdos.jpg",
                "titulo" => "Fotografías impresas",
                "descripcion" => "Imprime tus mejores recuerdos con excelente calidad."
            ],
            [
                "imagen" => "tamaño.jpg",
                "titulo" => "Ampliaciones",
                "descripcion" => "Dale mayor tamaño a tus fotografías favoritas."
            ],
            [
                "imagen" => "decora.jpg",
                "titulo" => "Cuadros fotográficos",
                "descripcion" => "Decora tus espacios con tus recuerdos especiales."
            ]
        ];

        foreach ($fotos as $foto):

        ?>

            <article class="tarjeta-servicio">

                <img
                    src="image/<?= rawurlencode($foto['imagen']) ?>"
                    alt="<?= htmlspecialchars($foto['titulo']) ?>"
                >

                <div class="tarjeta-contenido">

                    <h3><?= htmlspecialchars($foto['titulo']) ?></h3>

                    <p><?= htmlspecialchars($foto['descripcion']) ?></p>

                    <a href="<?= htmlspecialchars($enlaceWhatsApp) ?>"
                       class="boton-principal"
                       target="_blank"
                       rel="noopener">
                        Consultar por WhatsApp
                    </a>

                </div>

            </article>

        <?php endforeach; ?>

    </div>

</section>


<?php include 'includes/footer.php'; ?>