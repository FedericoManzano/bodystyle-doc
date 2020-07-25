<?php $titulo="Sass" ?>
<?php require_once("./componentes/header.php")?>
<?php require_once("./componentes/barra.php")?>


<section class="contenido-pagina">
    
    <?php 
        $titulo = "Sass";
        $descripcion = "Si estámos utilizando Sass podemos valernos de algunas funcionalidades 
        que provee la librería para poder trabajar y reutilizar el código generado.";
        require_once("./articuloPrincipal.php");
    ?>
    <article id="superposicion" class="article scroll-item">
        <h2>superposición</h2>
        <p>
            Cuando utilizamos CSS en muchas oportunidades por una cuestión 
            de posicionamiento algunos elementos quedan encima de otros. 
            En estos casos utilizamos la propiedad <i>z-index</i> de CSS 
            para determinar que elemento se va a mostrar cuando hay superposición.
        </p>

        <div class="alerta-op-verde">
            Para esto podemos utilizar una funcion de sass que permite establecer 
            de manera segura las <i>escalas de superposición</i>.
        </div>
        <h3>
            Escalas de Superposición
        </h3>
        <p>
            En el archivo _config.scss de la librería disponemos de una tabla hash con 
            las escalas predefinidas.
        </p>
        <div class="css">
            <pre class="brush:css">
                $superposicion:(
                    ms: 100000, // superposición de los menus superiores
                    ml: 10000,  // superposición de los menus laterales
                    co: 3,      // superposición de los complementos
                    bf: 30000,  // superposición de los complementos
                    dd: 1000000 // superposición de los dropdown
                );
            </pre>
        </div>
        <p>
            A partir de esta información podemos utilizar la función superposición 
            que exige un  valor [ms | ml | co | bf | dd].
        </p>

        <h3>Ejemplo</h3>
        <div class="css">
            <pre class="brush:css">
                .clase {
                    position: absolute;
                    z-index: superposicion(ms)
                }
            </pre>
        </div>
        <p>
            De esta forma estableceremos que elementos queremos por encima de otros 
            a la vista del usuario.
        </p>
    </article>
    <article id="medidas" class="article scroll-item">
        <h2>Medidas</h2>
        <p>
            Si por alguna razón necesitamos obtener el valor de la medida 
            de pantalla de algun tamaño predefiniido podemos utilizar 
            la función dameMedida().
        </p>
        <h3>Ejemplo Medida</h3>
        <div class="css">
            <pre class="brush:css">
                @media (max-width: dameMedida(m)){
                    /* Código css para el mediaquery */
                }
                /*
                    Esto es equivalente a 
                    @media (max-width: 1024px){
                        /* Código css para el mediaquery */
                    }
                 */
            </pre>
        </div>
        <p>
            Los valores de los parámetros son: <i>[ xs | s | m | l ]</i>
        </p>
    </article>
    <article id="miximMedia" class="article scroll-item">
        <h2>Mixim Media</h2>
        <p>
            Disponemos de 2 mixim que permiten generar mediaquerys utilizando min-width y max-width 
            de css.
        </p>

        <div class="css">
            <pre class="brush:css">
                /*
                    agregar-a-medida-maxima(m)
                    Es un mixim que permite realizar un media query recibiendo por parámetro 
                    la clave de la medida utilizada.
                */
                .ocultar-desde-medianos {
                    @include agregar-a-medida-maxima(m){
                        display: none !important;
                    }
                }

                /** Resultado en CSS*/
                @media (max-width: 1024px){
                    .ocultar-desde-medianos {
                        display: none !important;
                    }
                }


                /*
                    agregar-a-medida-minima(m)
                    Es un mixim que permite realizar un media query recibiendo por parámetro 
                    la clave de la medida utilizada.
                */
                .ocultar-solo-grandes {
                    @include agregar-a-medida-minima(m){
                        display: none !important;
                    }
                }

                /** Resultado en CSS*/
                @media (min-width: 1024px){
                    .ocultar-solo-grandes {
                        display: none !important;
                    }
                }

            </pre>
        </div>

    </article>
    <article id="miximPosicionamiento" class="article scroll-item">
        <h2>Mixim Posicionamiento</h2>
        <p>
            En muchas oportunidades necesitamos que una clase 
            tenga las propiedades de flexbox para estos casos 
            podemos utilizar los mixim de posicionamiento de 
            la librería.
        </p>
        <h3>Mixim flex-box</h3>
        <div class="css">
            <pre class="brush:css">
                .clase-ejemplo {
                    @include flex-box-centrado();
                }

                /** Esto es equivalente a  */
                .clase-ejemplo {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                .clase-ejemplo {
                    @include flex-box-centrado-izquierda();
                }

                /** Esto es equivalente a  */
                .clase-ejemplo {
                    display: flex;
                    justify-content: flex-start;
                    align-items: center;
                }


                .clase-ejemplo {
                    @include flex-box-centrado-derecha();
                }

                /** Esto es equivalente a  */
                .clase-ejemplo {
                    display: flex;
                    justify-content: flex-end;
                    align-items: center;
                }


            </pre>
        </div>

        <h3>Mixim absoluto y fixed</h3>
        <div class="css">
            <pre class="brush:css">
                /**Posicionamiento absoluto 
                    Recibe 4 parametros de las medidas respecto al contenedor 
                    relativo que le sigue en la jerarquía. 
                */
                .clase-ejemplo {
                    @include posicionamiento-absoluto($top, $rigth, $botton, $left);
                }

                /**Posicionamiento fixed 
                    Recibe 4 parametros de las medidas respecto al contenedor 
                    relativo que le sigue en la jerarquía. 
                */
                .clase-ejemplo {
                    @include posicionamiento-fixed($top, $rigth, $botton, $left);
                }
            </pre>
        </div>
    </article>
    <article id="miximDimensiones" class="article scroll-item">
        <h2>Mixim Dimensiones</h2>
        <p>
            Este mixim es para establecer el alto y el ancho de un elemento.
        </p>

        <div class="css">
            <pre class="brush:css">
                /** Las medidas pueden ser % px em rem */
                .clase-ejemplo {
                    @include ancho-alto(100%, 500px);
                }
            </pre>
        </div>
    </article>
</section>


<div class="lista-scroll ocultar-desde-medianos">
    <ul>
        <li><a href="#introduccion">Introducción</a></li>
        <li><a href="#superposicion">Superposición</a></li>
        <li><a href="#medidas">Medidas</a></li>
        <li><a href="#miximMedia">Mixim Media</a></li>
        <li><a href="#miximPosicionamiento">Mixim Posicionamiento</a></li>
        <li><a href="#miximDimensiones">Mixim Dimensiones</a></li>
    </ul>
</div>


<?php require_once("./componentes/footer.php")?>


<script>
    BS.DesplegarSidebarFija().desplegar("#menuUti")
</script>