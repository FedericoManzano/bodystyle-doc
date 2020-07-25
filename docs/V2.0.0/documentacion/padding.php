<?php $titulo="Padding"?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>



<section class="contenido-pagina">
    
    <?php 
        $titulo = "Padding";
        $descripcion = "Una de las propiedades mas utilizadas en css para generar 
        un espacio unterno entre los limites del contenedor y su contenido. <br>
        Es una propiedad importante porque a diferencia del margin el padding cambia el 
        tamaño de los elementos tanto su altura como su ancho.";
        require_once("./articuloPrincipal.php");
    ?>

    <article id="clases" class="article scroll-item">
        <h2>Clases</h2>
        <p>
            Como se menciona en la introducción la propiedad padding de css 
            cambia el ancho y el alto de los elementos. Por esta razón y teniendo en cuenta 
            la problemática de los tamaños de pantalla de los diferentes dispositivos es necesarios 
            pasar largos ratos modificando y revaluando los valores del padding para que el contenido 
            de la pagina web esté bien distribuido. 
        </p>

        <div class="alerta-op-verde">
            Para facilitar esta tarea vamos a trabajar con un conjunto de clases que provee la 
            librería.
        </div>

        <h4>Clases para todos los dispositivos</h4>
        <div class="tabla-responsive">
            <table class="tabla-sm">
                <thead>
                    <tr>
                        <td>Clase</td>
                        <td>Parámetro</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>p-{dispositivo}-{tamaño}</td>
                        <td>
                            dispositivo: xs / s / m
                            (Si no se especifica es para todos los dispositivos) <br>
                            tamaño: [0-15] 1 es 0.5em  <br>
                        </td>
                    </tr>
                    <tr>
                        <td>pi-{dispositivo}-{tamaño}</td>
                        <td>
                            dispositivo: xs / s / m
                            (Si no se especifica es para todos los dispositivos) <br>
                            tamaño: [0-15] 1 es 0.5em  <br>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>pd-{dispositivo}-{tamaño}</td>
                        <td>[0-15] 1 es 0.5em</td>
                    </tr>
                    <tr>
                        <td>par-{dispositivo}-{tamaño}</td>
                        <td>
                            dispositivo: xs / s / m
                            (Si no se especifica es para todos los dispositivos) <br>
                            tamaño: [0-15] 1 es 0.5em  <br>
                        </td>
                    </tr>
                    <tr>
                        <td>pab-{dispositivo}-{tamaño}</td>
                        <td>
                            dispositivo: xs / s / m
                            (Si no se especifica es para todos los dispositivos) <br>
                            tamaño: [0-15] 1 es 0.5em  <br>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </article>
    <article id="ejemplos" class="article scroll-item">
        <h2 class="mab-3">Ejemplos</h2>
        
        <div class="ejemplo mar-2">
            <span class="p-3 fd-negro c-blanco">Padding 1.5em a todos lados</span>
        </div>
        <div class="html">
            <pre class="brush:html">
                <span class="p-3">Padding 1.5em a todos lados</span>
            </pre>
        </div>
        <div class="ejemplo">
            <span class="pi-6 fd-negro c-blanco">Padding 3em izquierda</span>
        </div>
        <div class="html">
            <pre class="brush:html">
                <span class="pi-6 fd-negro c-blanco">Padding 3em izquierda</span>
            </pre>
        </div>
        <div class="ejemplo">
            <span class="pd-6" style="background-color: black; color: white">Padding 3em derecha</span>
        </div>
        <div class="html">
            <pre class="brush:html">
                <span class="pd-6">Padding 3em derecha</span>
            </pre>
        </div>
        <div class="ejemplo">
            <span class="par-3 fd-negro c-blanco">Padding 1.5em arriba</span>
        </div>
        <div class="html">
            <pre class="brush:html">
                <span class="par-3">Padding 1.5em arriba</span>
            </pre>
        </div>
        <div class="ejemplo">
            <span class="pab-3 fd-negro c-blanco">Padding 1.5em abajo</span>
        </div>
        <div class="html">
            <pre class="brush:html">
                <span class="pab-3">Padding 1.5em abajo</span>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Ahora que pasaría si en los dispositivos pequeños queremos 
            otro padding. De menor tamaño?
        </div>
    </article>
    <article id="tamaños" class="article scroll-item">
        <h2>Tamaños</h2>
        <p>
            el ejemplo va a ser con un paddin de 3em en todas direcciones pero 
            en dispositivos (S) va a ser de 1em
        </p>
        <div class="ejemplo">
            <span class="p-4 p-s-1 fd-negro c-blanco">Padding 2em (m, l) 0.5em (s)</span>
        </div>
        <div class="html">
            <pre class="brush:html">
                <span class="p-4 p-s-1">Padding 2em (m, l) 0.5em (s)</span>
            </pre>
        </div>
        <div class="alerta-op-verde">
            Ahora bien, el ejemplo anterior puede verse claramente 
            la disminución del tamaño del contenedor.
        </div>
        <div class="ejemplo">
            <span class="p-4 p-m-2 p-s-1 " style="background-color: black; color: white">Padding 2em (l) 1em (m) 0.5em (s)</span>
        </div>
        <div class="html">
            <pre class="brush:html">
                <span class="p-4 p-m-2 p-s-1">Padding 2em (l) 1em (m) 0.5em (s)</span>
            </pre>
        </div>
        <p>
            En el ejemplo que sigue vamos a sacar el paddin de los lados 
            para dispositivos chicos pero no para dispositivos grandes.
        </p>
        <div class="ejemplo">
            <span class="p-4 pi-m-1 pd-m-1 pi-s-0 pd-s-0" style="background-color: black; color: white">Padding 2em (l) 1em (m id) 0.5em (s id)</span>
        </div>
        <div class="html">
            <pre class="brush:html">
                <span class="p-4 pi-m-1 pd-m-1 pi-s-0 pd-s-0">Padding 2em (l) 1em (m) 0.5em (s)</span>
            </pre>
        </div>
        <div class="alerta-op-verde">
            De esta forma podemos realizar mucha combinaciones. Hata encontrar el tamaño 
            buscado y adaptarlo.
        </div>
    </article>
</section>





<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#clases">Clases</a></li>
        <li><a href="#ejemplos">Ejemplos</a></li>
        <li><a href="#tamaños">Tamaños</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuUti")
</script>