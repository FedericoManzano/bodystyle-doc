

<?php $titulo = "Titulos decorados"?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">

    <?php 
        $titulo = "Decoración de títulos";
        $descripcion = "Elemento muy simple que se utiliza para darle algún estilo a los titulos de 
        la página.";
        require_once("./articuloPrincipal.php");
    ?>
   
    <article id="muestra" class="article scroll-item">
        <h2>Muestra</h2>.
        <div class="ejemplo">
            <h2 class="c-negro dec-rojo t-may">Titulo de ejemplo</h2>
        </div>
        <p>
            Como podemos observar en el ejemplo de añade un elemento en la 
            parte inferior del título y se centra el contenido. También añadí 
            la clase <i>.t-may</i> de los utilitarios para pasar el texto a mayusculas.
            <br>
            La clase utilizada para decorar el título es <i>.dec-rojo</i> en este caso.
        </p>
        <div class="html">
            <pre class="brush:html">
                <h2 class="dec-rojo t-may">Titulo de ejemplo</h2>
            </pre>
        </div>
    </article>
    <article id="colores" class="article scroll-item">
        <h2>Colores</h2>.
        <div class="ejemplo">
            <h3 class="c-negro dec-rojo t-may">Titulo de ejemplo</h3>
            <h3 class="c-negro dec-verde t-may">Titulo de ejemplo</h3>
            <h3 class="c-negro dec-azul t-may">Titulo de ejemplo</h3>
            <h3 class="c-negro dec-negro t-may">Titulo de ejemplo</h3>
            <h3 class="c-negro dec-gris t-may">Titulo de ejemplo</h3>
            <h3 class="c-blanco dec-blanco t-may fd-negro">Titulo de ejemplo</h3>
        </div>
        <div class="html">
            <pre class="brush:html">
                <h3 class="dec-rojo t-may">Titulo de ejemplo</h3>
                <h3 class="dec-verde t-may">Titulo de ejemplo</h3>
                <h3 class="dec-azul t-may">Titulo de ejemplo</h3>
                <h3 class="dec-negro t-may">Titulo de ejemplo</h3>
                <h3 class="dec-gris t-may">Titulo de ejemplo</h3>
                <h3 class="dec-blanco t-may fd-negro">Titulo de ejemplo</h3>
            </pre>
        </div>
    </article>
</section>



<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#muestra">Muestra</a></li>
        <li><a href="#colores">Colores</a></li>
    </ul>
</div>
<?php require_once("./componentes/footer.php")?>


<script>
    BS.DesplegarSidebarFija().desplegar("#menuCSS")
</script>