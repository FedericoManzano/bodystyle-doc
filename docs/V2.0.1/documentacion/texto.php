<?php $titulo = "Texto" ?>

<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>

<section class="contenido-pagina">
    <?php 
        $titulo = "Texto";
        $descripcion = "";
        require_once("./articuloPrincipal.php");
    ?>
    <article id="grosor" class="article scroll-item">
        <h2>Grosor</h2>
        <p>
            Vamos a ver algunas clases para modificar el grosor del la fuente.
            La propiedad CSS para definir esto sería font-weight.
        </p>

        <div class="ejemplo">
            <p class="f-grosor-1">Esto es un parrafo Grosor (100)</p>
            <p class="f-grosor-6">Esto es un parrafo Grosor (600)</p>
            <p class="f-grosor-8">Esto es un parrafo Grosor (800)</p>
        </div>
        
        <div class="html">
            <pre class="brush:html">
                <p class="f-grosor-1">Esto es un parrafo Grosor (100)</p>
                <p class="f-grosor-6">Esto es un parrafo Grosor (600)</p>
                <p class="f-grosor-8">Esto es un parrafo Grosor (800)</p>
            </pre>
        </div>
        <div class="alerta-op-verde">
            La clase es f-grosor-{grosor} donde grosor es una parámetro de 1 a 9.
        </div>
    </article>

    <article id="tipo" class="article scroll-item">
        <h2>Tipo de letra</h2>
        <p>
            Disponemos de clases para que la letra sea en su totalidad 
            minuscula, mayuscula o  capital. 
        </p>

        <div class="ejemplo">
            <p class="t-min">Esto es un parrafo minuscula</p>
            <p class="t-may">Esto es un parrafo mayuscula</p>
            <p class="t-cap">Esto es un parrafo capital</p>
        </div>
        <div class="html">
            <pre class="brush:html">
                <p class="t-min">Esto es un parrafo minuscula</p>
                <p class="t-may">Esto es un parrafo mayuscula</p>
                <p class="t-cap">Esto es un parrafo capital</p>
            </pre>
        </div>
    </article>
    <article id="tamaño" class="article scroll-item">
        <h2>Tamaño</h2>
        <p>
            Disponemos de clases para el tamaño de la letra. 
            En CSS sería la propiedad font-size.
        </p>

        <div class="ejemplo">
            <p class="fz-15">Esto es un parrafo de 15px</p>
            <p class="fz-20">Esto es un parrafo de 20px</p>
            <p class="fz-30">Esto es un parrafo de 30px</p>
        </div>
        <div class="html">
            <pre class="brush:html">
                <p class="fz-15">Esto es un parrafo de 15px</p>
                <p class="fz-20">Esto es un parrafo de 20px</p>
                <p class="fz-30">Esto es un parrafo de 30px</p>
            </pre>
        </div>
        <p>
            Las clases son <i>.fz-{tam}</i> donde tam va desde 8 a 100 (px).
        </p>
    </article>
    <article id="pantalla" class="article scroll-item">
        <h2>Tamaños de fuente resposive</h2>
        <p>
            En muchas oportunidades queremos que un determinado componente tenga un tamaño de fuente 
            en algunas medidas de pantalla pero en otras este tamaño lo necesitamos diferente. <br> 
            La librería cuenta con las clases <i>.fz-{disp}-{tam}</i>. 
        </p>

        <div class="ejemplo">
            <span class="fz-30 fz-m-20 fz-s-15 fz-xs-10">30px (l) 20px (m) 15px (s) 10px (xs) </span>
        </div>
        <div class="html">
            <pre class="brush:html">
                <span class="fz-30 fz-m-20 fz-s-15 fz-xs-10">30px (l) 20px (m) 15px (s) 10px (xs) </span>
            </pre>
        </div>

        <div class="alerta-op-azul">
            Si achicamos el tamaño de la pantalla el tamaño del texto va a cambiar 
            según las clases que agregamos.
        </div>
    </article>
    <article id="lh" class="article scroll-item">
        <h2>Line height</h2>
        <p>
            Ahora vamos a veer la propiedad Line height de CSS permite establecer el espacio 
            entre lineas del texto.
        </p>

        <div class="ejemplo">
            <p class="lh-15">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi cum aperiam nulla quia minima omnis rerum? Ducimus rerum, cum perspiciatis ratione reiciendis dolore tempora quis consequuntur voluptate quod? Vitae, beatae.</p>
            <div class="divisor"></div>
            <p class="lh-20">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet commodi deleniti, veritatis sit asperiores itaque officiis sunt! Delectus sunt consectetur commodi corrupti tempora eos ipsam cum repellat, aut error excepturi.</p>
            <div class="divisor"></div>
            <p class="lh-30">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet commodi deleniti, veritatis sit asperiores itaque officiis sunt! Delectus sunt consectetur commodi corrupti tempora eos ipsam cum repellat, aut error excepturi.</p>
            <div class="divisor"></div>
            <p class="lh-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet commodi deleniti, veritatis sit asperiores itaque officiis sunt! Delectus sunt consectetur commodi corrupti tempora eos ipsam cum repellat, aut error excepturi.</p>
        </div>
        <div class="html">
            <pre class="brush:html">
                <p class="lh-15">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi cum aperiam nulla quia minima omnis rerum? Ducimus rerum, cum perspiciatis ratione reiciendis dolore tempora quis consequuntur voluptate quod? Vitae, beatae.</p>
                <div class="divisor"></div>
                <p class="lh-20">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet commodi deleniti, veritatis sit asperiores itaque officiis sunt! Delectus sunt consectetur commodi corrupti tempora eos ipsam cum repellat, aut error excepturi.</p>
                <div class="divisor"></div>
                <p class="lh-30">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet commodi deleniti, veritatis sit asperiores itaque officiis sunt! Delectus sunt consectetur commodi corrupti tempora eos ipsam cum repellat, aut error excepturi.</p>
                <div class="divisor"></div>
                <p class="lh-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet commodi deleniti, veritatis sit asperiores itaque officiis sunt! Delectus sunt consectetur commodi corrupti tempora eos ipsam cum repellat, aut error excepturi.</p>
            </pre>
        </div>
        <div class="alerta-op-verde">
            La clase es .lh-{tam} donde tam es el tamaño en pixeles de la separación 
            y va desde 15 a 100.
        </div>
        <h3>Line Height Responsive</h3>
        <p>
            Podemos crear una separación de lineas según el tamaño de dispositivo, con las 
            clases lh-{disp}-{px}
        </p>
        <div class="alerta-op-verde">
            Las medidas son xs s m respectivamente en el caso de (l large) usamos la clase por defecto .lh.
        </div>
        <div class="ejemplo">
            <p class="lh-s-18 lh-m-30 lh-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat corrupti atque porro tempore, id eaque! In, repellat, porro tenetur sunt, eaque labore necessitatibus nam officia consectetur vel a iste nesciunt?</p>
        </div>
        <div class="html">
            <pre class="brush:html">
                <p class="lh-s-18 lh-m-30 lh-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat corrupti atque porro tempore, id eaque! In, repellat, porro tenetur sunt, eaque labore necessitatibus nam officia consectetur vel a iste nesciunt?</p>
            </pre>
        </div>


    </article>
    <article id="ali" class="article scroll-item">
        <h2>Alineación de texto</h2>
        <h3>Texto centrado</h3>
        <div class="ejemplo">
            <p class="a-c">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo ad ea blanditiis sequi, facilis quia, dolores eum quaerat maiores consequuntur, nostrum itaque! Recusandae veritatis enim ut odio perferendis quisquam voluptate?</p>
        </div>
        <div class="html">
            <pre class="brush:html">
            <p class="a-c">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo ad ea blanditiis sequi, facilis quia, dolores eum quaerat maiores consequuntur, nostrum itaque! Recusandae veritatis enim ut odio perferendis quisquam voluptate?</p>
            </pre>
        </div>

        <h3>Texto derecha</h3>
        <div class="ejemplo">
            <p class="a-d">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo ad ea blanditiis sequi, facilis quia, dolores eum quaerat maiores consequuntur, nostrum itaque! Recusandae veritatis enim ut odio perferendis quisquam voluptate?</p>
        </div>
        <div class="html">
            <pre class="brush:html">
            <p class="a-d">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo ad ea blanditiis sequi, facilis quia, dolores eum quaerat maiores consequuntur, nostrum itaque! Recusandae veritatis enim ut odio perferendis quisquam voluptate?</p>
            </pre>
        </div>

        <h3>Texto izquierda</h3>
        <div class="ejemplo">
            <p class="a-i">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo ad ea blanditiis sequi, facilis quia, dolores eum quaerat maiores consequuntur, nostrum itaque! Recusandae veritatis enim ut odio perferendis quisquam voluptate?</p>
        </div>
        <div class="html">
            <pre class="brush:html">
            <p class="a-i">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo ad ea blanditiis sequi, facilis quia, dolores eum quaerat maiores consequuntur, nostrum itaque! Recusandae veritatis enim ut odio perferendis quisquam voluptate?</p>
            </pre>
        </div>

    </article>
</section>



<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#grosor">Grosor</a></li>
        <li><a href="#tipo">Tipo</a></li>
        <li><a href="#tamaño">Tamaño</a></li>
        <li><a href="#pantalla">Responsive</a></li>
        <li><a href="#lh">Line Height</a></li>
        <li><a href="#alineacion">Alineación</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>

<script>
    BS.DesplegarSidebarFija().desplegar("#menuUti")
</script>