
class Busqueda {

    iniciar(contexto, lista){
        var seleccionado = 0

        var posicionamiento = (contexto, lista) => {
            var x = $(contexto).offset().left
            var y = $(contexto).offset().top
            $(lista).css("min-width", $(contexto).outerWidth())
            $(lista).css("left", x)
            $(lista).css("top", y + $(contexto).outerHeight() + 5)
            
        }

        var removerTodo = () => {
            $(lista + " ul > li").remove()
            $(lista).hide()
        }

        var aumentar  = (lista) => {
            return seleccionado === $(lista + " ul li").length ? 1 : seleccionado + 1
        }

        var disminuir  = (lista) => {
            return seleccionado === 1 ? $(lista + " ul li").length : seleccionado - 1
        }


        var seleccionarPagina = (contexto, lista) => {

            $(contexto + " input").keyup(function(e){
                
                if(e.which === 40){
                    if($(lista + " ul li").length > 0){
                        seleccionado = aumentar()
                        $(lista + " ul li:nth-child(" + seleccionado + ")").css("background-color", "rgba(0,0,0,0.1)")
                    }
                }else if(e.which === 38){
                    if($(lista +" ul li").length > 0) {
                        seleccionado = disminuir()
                        $(lista +" ul li:nth-child(" + seleccionado + ")").css("background-color", "rgba(0,0,0,0.1)")
                    }
                } 
            })
        }

        var entrar = (contexto, lista) => {
            $(contexto + " input").keyup(function(e){ 
                if(e.which === 13){
                    var ruta = $(lista +" ul li:nth-child(" + seleccionado +") a").attr("href")
                    $(location).attr('href',ruta);
                }
            })
        }

        var buscar = (contexto, lista) => {
            $(contexto + " input").keyup(function(e){
               var texto = $(this).val()
               removerTodo() 
    
              $(".sidebarFija > ul li a").each(function(){
                if(texto !== ""){
                    if($(this).text().toLowerCase().indexOf(texto.toLowerCase())  > -1){
                        var enlace = $("<li><a href='" + $(this).attr("href") + "'></a></li>")
                        $(enlace).children("a").text($(this).text())
                        $(enlace).addClass("e-borde-izq-verde-5")
                        $(lista +" ul").append(enlace)
                        posicionamiento(contexto)
                        $(lista).show()
                    }
                }else
                    removerTodo()  
              })
            })
        }

        var scroll = (contexto, lista) => {
            $(window).scroll(function(){
                posicionamiento(contexto, lista)
            })
    
            $(".sidebarFija").scroll(function(){
                posicionamiento(contexto, lista)
            })
        }
        posicionamiento(contexto, lista)
        removerTodo()
        buscar(contexto, lista)
        seleccionarPagina(contexto, lista)
        entrar(contexto, lista)
        scroll(contexto, lista)
    }
}
