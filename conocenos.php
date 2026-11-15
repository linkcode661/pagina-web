
<?php

$tituloPagina = "Conócenos";
$paginaActiva = "conocenos";

include 'includes/header.php';

?>

<section class="portada-interna">

    <h1>Conóceme</h1>

    <p>Detrás de cada fotografía existe una historia.</p>

</section>


<section class="seccion-conocenos">

    <div class="conocenos-imagen">

        <img src="image/fotografo.jpg"
             alt="Nuestro estudio fotográfico">

    </div>

    <div class="conocenos-texto">

        <h2>Pasión por la fotografía</h2>

        <p>
            Soy fotógrafo y me dedico a capturar
            los momentos más especiales de cada persona.

            Me apasiona la fotografía y trabajo para
            ofrecer imágenes llenas de creatividad, emoción
            y calidad
        </p>

        <p>
            Quiero que cada fotografía se convierta
            en un recuerdo inolvidable.
        </p>

        <a href="<?= htmlspecialchars($enlaceWhatsApp) ?>"
           class="boton-principal"
           target="_blank"
           rel="noopener">
            Contáctame por WhatsApp
        </a>

    </div>

</section>


<section class="seccion-contacto" id="contacto">

    <h2>¿Tienes alguna consulta?</h2>

    <p>
        Estoy disponible para ayudarte y brindarte información
        sobre mis servicios fotográficos.
    </p>

    <a href="<?= htmlspecialchars($enlaceWhatsApp) ?>"
       class="boton-principal"
       target="_blank"
       rel="noopener">
        Escríbeme ahora
    </a>

</section>


<?php include 'includes/footer.php'; ?>
