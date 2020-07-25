        
        
        <div class="foo">
            <p>Copyright (c) 2020 BodyStyle</p>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="../js/bodystyle.js"></script>

        <script src=<?php echo "../js/buscar5.js"?>></script>
        <script>
           BS.AutoInit()
            BS.BotonInicioInit()
            BS.ScrollSpyInit({colorBorde: "fd-rojo"})
            new Busqueda().iniciar("#grupo-busqueda", "#lista-busqueda")
            new Busqueda().iniciar("#grupo-busqueda2", "#lista-busqueda2")
            
           // Busqueda.iniciar("#grupo-busqueda")
            //Busqueda.iniciar("#grupo-busqueda2")


            BS.SidebarFijaInit(
                {
                    colorFondo: "fd-gris-n",
                    colorFlechas: "#fff",
                    colorLogo: "c-blanco",
                    colorTitulos: "c-blanco",
                    colorEnlaces: "c-blanco",
                    colorTiempo: 300
                })
        </script>

        <script src=<?php echo '../js/shCore.js'?> type='text/javascript'></script> 
        <script src=<?php echo '../js/shBrushCpp.min.js'?> type='text/javascript'></script>
        <script src=<?php echo '../js/shBrushCSharp.min.js'?> type='text/javascript'></script> 
        <script src=<?php echo '../js/shBrushCss.min.js'?> type='text/javascript'></script> 
        <script src=<?php echo '../js/shBrushXml.min.js'?> type='text/javascript'></script>
        <script src=<?php echo '../js/shBrushJScript.min.js'?> type='text/javascript'></script>
        <script language='javascript'> 
        SyntaxHighlighter.config.bloggerMode = true;
        SyntaxHighlighter.config.clipboardSwf = 'https://alexgorbatchev.com/pub/sh/2.1.364/scripts/clipboard.swf';
        SyntaxHighlighter.all();
        </script>
    </body>
</html>