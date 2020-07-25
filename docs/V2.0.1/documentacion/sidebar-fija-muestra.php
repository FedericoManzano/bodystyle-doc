<?php $titulo = "Sidebar Fija Muestra" ?>
<?php require_once("./componentes/header.php")?>

<div class="sidebarFija">
    <div class="sedebarLogo">
    
            <h2 class="fz-25">Logo</h2>
            <span>Descripción</span>
    </div>
    <a class="titulo" data-target="#lista1">Título<i class="f-derecha"></i><i class="f-abajo" style="display: none;"></i></a>
    <ul class="lista" id="lista1">
        <li><a href="#">Elemento1</a></li>
        <li><a href="#">Elemento2</a></li>
        <li><a href="#">Elemento3</a></li>
        <li><a href="#">Elemento4</a></li>
        <li><a href="#">Elemento5</a></li>
    </ul>
    <a class="titulo" data-target="#lista2">Título2<i class="f-derecha"></i><i class="f-abajo" style="display: none;"></i></a>
    <ul class="lista" id="lista2">
        <li><a href="#">Elemento1</a></li>
        <li><a href="#">Elemento2</a></li>
        <li><a href="#">Elemento3</a></li>
        <li><a href="#">Elemento4</a></li>
        <li><a href="#">Elemento5</a></li>
    </ul>
    <a class="titulo" data-target="#lista3">Título3<i class="f-derecha"></i><i class="f-abajo" style="display: none;"></i></a>
    <ul class="lista" id="lista3">
        <li><a href="#">Elemento1</a></li>
        <li><a href="#">Elemento2</a></li>
        <li><a href="#">Elemento3</a></li>
        <li><a href="#">Elemento4</a></li>
        <li><a href="#">Elemento5</a></li>
    </ul>
                

</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="../js/bodystyle.js"></script>


<script>
    BS.SidebarFijaInit()
</script>